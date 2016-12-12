<?php snippet('header') ?>


<div class="title">
<h1><?php echo $page->title()->html() ?></h1>

<h3>
  <!-- add in the default text field -->
  <?php echo $page->subtext()->kirbytext() ?>
</h3>
<div class="backbutton">
<?php $parents = $page->parents();
foreach($parents as $parent): ?>
<a href="<?php echo $parent->url() ?>"> <?php echo $parent->title() ?> </a>
<?php endforeach ?>
</div>

</div>
</div>


<div class="container">
<div class="text">
  <!-- date custom field -->
  <div class="date">
  <p>Uploaded on:</p>
  <?php echo $page->date('m/d/Y')?>
  </div>
  <div class="descrip">
<p>
  <!-- add in the default text field -->
  <?php echo $page->text()->kirbytext() ?>
</p>
  </div>
</div>

<?php foreach($page->images () as $editableImage): ?>

<?php echo $editableImage->resize(300, 450, 72) ?>

<?php endforeach ?>
</div>

<?php snippet('footer') ?>
