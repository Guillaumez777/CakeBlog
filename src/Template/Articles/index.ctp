
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?= $title_for_layout; ?></title>
    <?= $this->Html->css('bootstrap'); ?>
    <?= $this->Html->css('base'); ?>
    <?= $this->Html->css('cake'); ?>
    <?= $this->Html->css('style'); ?>
  </head>
  <body>
    <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
          <a class="blog-nav-item active" href="#">Home</a>
          <a class="blog-nav-item" href="#">New features</a>
          <a class="blog-nav-item" href="#">Press</a>
          <a class="blog-nav-item" href="#">New hires</a>
          <a class="blog-nav-item" href="#">About</a>
        </nav>
      </div>
    </div>

    <div class="container">
      <div class="blog-header">
        <h1 class="blog-title">Cake Php blog</h1>
        <p class="lead blog-description">The official blog of Cakephp</p>
      </div>

      <div class="row">
        <div class="col-sm-8 blog-main">
        <div class="case">
          <?php foreach ($articles as $article): ?>

              <p><?= $article->id; ?></p>

              <p class="case2">
                <?= $this->Html->link($article->title, ['action' => 'view', $article->id]); ?>
              </p>

              <p> <?= h($article->body); ?></p>

              <p><?= $article->created->format(DATE_RFC850); ?></p>

              <p class="btn btn-primary">
                <?= $this->Html->link('Modifier', ['action' => 'edit', $article->id]); ?>
              </p>

               
                  <?= $this->Form->postLink(
                'Supprimer',
                ['action' => 'delete', $article->id],
                ['confirm' => 'Etes-vous sûr?'])
                ?>
              
              
          <?php endforeach; ?>
          </div>




        </div><!-- /.blog-main -->

        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
          <div class="sidebar-module sidebar-module-inset case">
            <h4>About</h4>
            <p class="btn btn-primary"><?= $this->Html->link('Ajouter un article', ['action' => 'add']); ?></p>
          </div>
          <div class="sidebar-module">
            <h4>Archives</h4>
            <ol class="list-unstyled">
              <li><a href="#">March 2014</a></li>
              <li><a href="#">February 2014</a></li>
              <li><a href="#">January 2014</a></li>
              <li><a href="#">December 2013</a></li>
              <li><a href="#">November 2013</a></li>
              <li><a href="#">October 2013</a></li>
              <li><a href="#">September 2013</a></li>
              <li><a href="#">August 2013</a></li>
              <li><a href="#">July 2013</a></li>
              <li><a href="#">June 2013</a></li>
              <li><a href="#">May 2013</a></li>
              <li><a href="#">April 2013</a></li>
            </ol>
          </div>
          <div class="sidebar-module">
            <h4>Elsewhere</h4>
            <ol class="list-unstyled">
              <li><a href="#">GitHub</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Facebook</a></li>
            </ol>
          </div>
        </div><!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </div><!-- /.container -->

    <footer class="blog-footer">

        <a href="#">Back to top</a>
      </p>
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <?= $this->Html->script('bootstrap'); ?>
  </body>
</html>
