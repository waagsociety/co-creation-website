
<ul class="bxslider">
  <?php foreach(page('projects')->children()->visible() as $project): ?>
  <li>
    <?php if($image = $project->images()->sortBy('sort', 'asc')->first()): ?>
    <a href="<?php echo $project->url() ?>">
      <img class="bx-image" src="<?php echo $image->url() ?>" alt="<?php echo $project->title()->html() ?>" title="<?php echo $project->title()->html() ?>" >
    </a>
    <?php endif ?>
    <h3><a href="<?php echo $project->url() ?>"><?php echo $project->title()->html() ?></a></h3>
    <p><?php echo $project->text()->excerpt(300) ?> <a href="<?php echo $project->url() ?>"> Keep reading... </a></p>
  </li>
  <?php endforeach ?>
</ul>

