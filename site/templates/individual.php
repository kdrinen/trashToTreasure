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

<?php snippet('footer') ?>
