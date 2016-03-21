<nav id="main" class="navbar navbar-riches navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="row">
      <div class="navbar-header col-md-6">

<?php if($site->displayheader() == '1'): ?>

     <a class="navbar-brand-image" href="<?php echo $site->url() ?>"><img id="logo" src="<?php echo getHeaderImageSRC($site); ?>" /></a>

      <?php else:?>
       
       <a class="navbar-brand" href="<?php echo $site->url() ?>"><?php echo $site->headertext(); ?></a> 
       
        <?php endif ?>

          <button id="nav-toggle" type="button" class="navbar-toggle collapsed col-md-6" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
      </div>

      <div id="navbar" class="menu-hidden navbar-collapse collapse">

        <ul id="main-nav" class="menu nav nav-pills col-md-6" role="menu" aria-labelledby="dLabel">
              <?php foreach($pages->visible()->not('home') as $p): ?>

              <?php if($p->hasVisibleChildren() && $p->subpagesmenu() == '1'): ?>
              <li role="presentation" class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?> <span class="caret"></span></a>
              <?php else: ?>

              <li>
                <a <?php e($p->isOpen(), 'class="active"') ?> href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>
               
              <?php endif ?>  

              <?php if($p->subpagesmenu() == '1'): ?>
              <ul class="menu submenu dropdown-menu">
                <?php foreach($p->children()->visible() as $p): ?>
                <li>
                  <a href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>
                </li>
                <?php endforeach ?>
              </ul>
              <?php endif ?>

            </li>

        <?php endforeach ?>

        </ul>

      </div><!--/.navbar-collapse -->
    </div>
  </div><!--/.container-->
</nav>

