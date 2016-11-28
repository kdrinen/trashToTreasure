<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
<?= css('@auto')?>
</head>
<body>

  <?php

// main menu items
$items = $pages->visible();

// only show the menu if items are available
if($items->count()):

?>
<nav>
  <ul>
    <?php foreach($items as $item): ?>
    <li><a<?php e($item->isOpen(), ' class="active"') ?> href="<?php echo $item->url() ?>"><?php echo $item->title()->html() ?></a></li>
    <?php endforeach ?>
  </ul>
</nav>
<?php endif ?>
