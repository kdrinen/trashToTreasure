<?php snippet('header') ?>

<h1><?php echo $page->title()->html() ?></h1>

<p>
  <!-- add in the default text field -->
  <?php echo $page->text()->kirbytext() ?>
</p>
<!-- add in the subtext custom field -->
<?php echo $page->subtext()->kirbytext() ?>

<!-- date custom field -->
<?php echo $page->date('m/d/Y')?>

<div class="images">
  <?php echo $page->images() ?>
</div>
<!-- get a specific image from the page based on the selected featureImage filename -->
<?php echo $page->image( $page->featureImage() ) ?>

<!-- lets do the same as above, but with a more HTML-EY approach -->

<img src="<?php echo $page->image( $page->featureImage() )->url() ?>" alt="a feature image" />


<h3>Sizing Images, 200x200, bad quality</h3>
<?php foreach($page->images () as $editableImage): ?>

<?php echo $editableImage->resize(200, 200, 10) ?>

<?php endforeach ?>

<h4>Load images from child Pages</h4>
<?php foreach($page->children() as $childpage ): ?>

  <?php echo $childpage->image() ?>

<?php endforeach ?>

<h3>Children of this page tagged 'dates'</h3>
<!-- https://getkirby.com/docs/cookbook/tags -->
<ul class="tagMenu">
<?php foreach( $php->children()->filterBy('tags', 'child', ',') as $childPage ): ?>
  <li>
    <a href="<?php echo $childPage->url() ?>"> <?php echo $childPage->title() ?></a>
  </li>
<?php endforeach ?>
</ul>

<?php snippet('footer') ?>
