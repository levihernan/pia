<nav class="navbar navbar-custom navbar-transparent navbar-fixed-top one-page" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#custom-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="navbar-brand mini_logo">PIA</a>
    </div>
    <div class="collapse navbar-collapse" id="custom-collapse">
      <ul class="nav navbar-nav navbar-right">
        <li><a class="section-scroll" href="#home">Home</a></li>
        <li><a class="section-scroll" href="#about">Sobre nosotros</a></li>
        <li><a class="section-scroll" href="#works">Servicios</a></li>
        <?php if($site->find('projects')->hasChildren()): ?>
          <li><a class="section-scroll" href="#projects">Inversiones</a></li>
        <?php endif ?>
        <li><a class="section-scroll" href="#contact">Contacto</a></li>
      </ul>
    </div>
  </div>
</nav>
