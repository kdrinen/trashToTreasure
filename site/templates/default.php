<?php snippet('header') ?>


<h1><?php echo $page->title()->html() ?></h1>

<p>
  <!-- add in the default text field -->
  <?php echo $page->text()->kirbytext() ?>
</p>
<!-- add in the subtext custom field -->
<?php echo $page->subtext()->kirbytext() ?>

<div class="container">
<?php echo $page->image( $page->featureImage() ) ?>

<!-- lets do the same as above, but with a more HTML-EY approach -->

<?php echo $page->image($page->featureImage() ) ?>



<?php foreach($page->images () as $editableImage): ?>

<?php echo $editableImage->resize(300, 450, 72) ?>

<?php endforeach ?>
<!-- <div class="crossfade">

<div class="crossfade1"></div>
<div class="crossfade2"></div>
<div class="crossfade 3"></div>
<div class="crossfade 4"></div>
<div class="crossfade 5"></div>
<div class="crossfade 6"></div>
<div class="crossfade 7"></div>
<div class="crossfade 8"></div>

</div> -->

</div>

<?php snippet('footer') ?>
