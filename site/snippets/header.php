<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>
    <meta name="description" content="<?= $site->description()->html() ?>">
    <meta name="keywords" content="<?= $site->keywords()->html() ?>">
    <?php echo css('assets/css/bootstrap.min.css') ?>
    <?php echo css('assets/css/main.css') ?>
    <?php echo css('assets/css/font-awesome/css/font-awesome.min.css')?>
    <?php echo css('assets/css/jquery.bxslider.css')?>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:700,400' rel='stylesheet' type='text/css'>

  </head>
  
  <body>
  <?php snippet('nav-main') ?>



