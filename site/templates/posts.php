<?php snippet( 'header') ?>
<main class="page post-background">
  <section id="posts" class="center blank-page">
     <h1><?php echo $page->title()->html() ?></h1>

    <?php foreach($posts as $post): ?>

      <article class="cf">
        <?php 
              $image = getCoverImageSRC($post);

                    ?>

        <a href="<?= getPostUrl($post) ?>">
        <figure class="post-thumbnail pull-left" style="background-image: url(<?php echo $image ?>);"></figure>
        </a>
        <section class="post-excerpt pull-right">
          <header>
          <h1>
            <a href="<?= getPostUrl($post) ?>">
              <?= $post->title()->html() ?>
            </a>
          </h1>
        </header>
        <div class="text">
          <?= excerpt($post->text(), 500)?>
        </div>
        <a href="<?= getPostUrl($post) ?>">Read more...</a>
        </section>
      </article>

  <?php endforeach ?>

  <?php snippet('nav-pagination') ?>

  </section>

</main>

<?php snippet( 'footer') ?>
