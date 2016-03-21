<nav id="pager">
  <ul>

    <?php if($post->hasNextVisible()): ?>
      <li id="next-post">
        <a href="<?= $post->nextVisible()->url() ?>">
        <?= $post->nextVisible()->title()->html() ?> <i class="fa fa-arrow-right"></i>
        </a>
      </li>
    <?php endif ?>

    <?php if($post->hasPrevVisible()): ?>
      <li class="previous-post">
        <a href="<?= $post->prevVisible()->url() ?>">
          <i class="fa fa-arrow-left"></i> <?= $post->prevVisible()->title()->html() ?>
        </a>
      </li>
    <?php endif ?>

  </ul>
</nav>
