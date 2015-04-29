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
          <li><a href="/" class="selected">Home</a></li>
          <li><a href="/resume">Resume</a></li>
          <li><a href="/portfolio">Portfolio</a></li>
          <li><a href="/contact">Contact</a></li>
        </ul>
      </nav>
    </header>
    <div id="wrapper">
      <section>
        @yield('content')
      </section>
      <footer>
        <a href="http://twitter.com/murribu"><img src="img/twitter-wrap.png" alt="Twitter Logo" class="social-icon"></a>
        <p>&copy; 2015 Cory Martin.</p>
      </footer>
    </div>
  </body>
</html>
