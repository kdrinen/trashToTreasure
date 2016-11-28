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
<h3>Featured Image</h3>
<?php echo $page->image( $page->featureImage() ) ?>

<!-- lets do the same as above, but with a more HTML-EY approach -->

<?php echo $page->image($page->featureImage() ) ?>


<h3>Sizing Images, 200x200, bad quality</h3>
<?php foreach($page->images () as $editableImage): ?>

<?php echo $editableImage->resize(200, 200, 10) ?>

<?php endforeach ?>

<h4>Load images from child Pages</h4>
<?php foreach($page->children() as $childpage ): ?>

  <?php echo $childpage->image() ?>

<?php endforeach ?>


<?php snippet('footer') ?>
