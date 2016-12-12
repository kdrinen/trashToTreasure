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



<!-- add in the subtext custom field -->
<?php echo $page->subtext()->kirbytext() ?>

<div class="container">
<!--  first grandChild image-->
          <?php foreach($page->children() as $child): ?>
            <div class="content">
                      <?php $firstpg = $child->children()->first()?>
                      <?php if ($firstpg): ?>
                        <?php echo $firstpg->image() ?>
                      <?php endif; ?>
                      
                  </div>

  <div class="captions">
        <h4>    <a href="<?php echo $child->url() ?>"> <?php echo $child->title() ?> </a></h4>
          <h5>  <?php echo $child->text() ?>  </h5>
  </div>

          <?php  endforeach ?>
  </div>
    </div>

  <?php snippet('footer') ?>
