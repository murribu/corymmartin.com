<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Cory Martin | Devloper</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/responsive.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <header>
      <a href="/" id="logo">
        <h1>Cory Martin</h1>
        <h2>Web Developer</h2>
      </a>
      <nav>
        <ul>
          <li><a href="/" <?php if (isset($page) && $page == 'index') {?>class="selected"<?php }?>>Home</a></li>
          <li><a href="https://www.linkedin.com/pub/cory-martin/2/b93/55b" target="_new">LinkedIn</a></li>
          <li><a href="/portfolio" <?php if (isset($page) && $page == 'portfolio') {?>class="selected"<?php }?>>Portfolio</a></li>
          <li><a href="/contact" <?php if (isset($page) && $page == 'contact') {?>class="selected"<?php }?>>Contact</a></li>
        </ul>
      </nav>
    </header>
    <div id="wrapper">
      @yield('content')
      <footer>
        <a href="http://twitter.com/murribu" target="_new"><img src="img/twitter-wrap.png" alt="Twitter Logo" class="social-icon"></a>
        <a href="http://github.com/murribu" target="_new"><img src="img/GitHub-Mark-64px.png" alt="Twitter Logo" class="social-icon"></a>
        <p>&copy; 2015 Cory Martin.</p>
      </footer>
    </div>
  </body>
</html>
