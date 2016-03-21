<ul class="bxslider">
      <?php foreach($page->images()->sortBy('sort', 'asc') as $image): ?>
      <li>
        <figure>
          <img src="<?php echo $image->url() ?>" alt="<?php echo $page->title()->html() ?>">
        </figure>
      </li>
      <?php endforeach ?>
</ul>

