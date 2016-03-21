<?php snippet('header') ?>
  <main class="page practices-background main" role="main">
    <section id="hero" class="featured-image" >
        <?php 
          $image = getCoverImageSRC($page);

        ?>

    <style type="text/css">

          .featured-image{
            background-image: url(<?php echo $image ?>);
          }
          
    </style>
          <header class="post-header">
            <h1 class="post-title">
              <a href="#">
                <?php echo $page->title()->html() ?>
              </a>
            </h1>
          </header>
    </section>
<section class="blank-page">
    <div class="text">
    <div class="post-divider"></div>
    
    <div class="readability">
      <h1><?php echo $page->title()->html() ?></h1>
      <?php echo $page->text()->kirbytext() ?>
    </div>

    </div>

    <hr>

    <?php snippet('projects-slide') ?>
</section>

  </main>

<?php snippet('footer') ?>