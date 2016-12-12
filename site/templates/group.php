<?php snippet('header') ?>

<div class="title">
<h1><?php echo $page->title()->html() ?></h1>

<p>
  <!-- add in the default text field -->
  <?php echo $page->text()->kirbytext() ?>
</p>
<!-- <div class="homebutton">
<a href="/home"> <-- Home
  <!-- <img src="home.png" alt="not supported"> -->
</a>
</div> 
<div class="homebutton">
<?php $parents = $page->parents();
foreach($parents as $parent): ?>
<a href="<?php echo $parent->url() ?>"> <?php echo $parent->title() ?> </a>
<?php endforeach ?>
</div>
</div>
<!-- date custom field -->
<div class="date">
  <p>Last Object was Added:</p>
<?php echo $page->date('m/d/Y')?>
</div>

<div class="container">
<ul class='mainMenu'>
          <?php foreach($page->children() as $child): ?>
            <a href="<?php echo $child->url() ?>"> <?php echo $child->image() ?> </a>
            <?php $firstpg = $child->children()->first()?>
            <?php if ($firstpg): ?>
              <?php echo $firstpg->image() ?>
            <?php endif; ?>
          <?php  endforeach ?>


        </ul>
      </div>

</div>


<?php snippet('footer') ?>
