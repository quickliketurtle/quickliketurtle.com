<!DOCTYPE html>
<html lang="en" full-height>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="stylesheet" href="/css/app.css">
        <link rel="stylesheet" href="/css/tomorrow-night.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body class="is-flex-column-full">
        <nav class="navbar">
          <div class="navbar-brand">
            <a class="navbar-item" href="http://quickliketurtle.com">
              QUICKLIKETURTLE.COM
            </a>
          </div>
          <div class="navbar-menu">
            <div class="navbar-end">
                <a class="navbar-item" href="/">
                    Home
                </a>
                <a class="navbar-item" href="/posts">
                    Blog
                </a>
                <a class="navbar-item" href="/contact">
                    Contact
                </a>
            </div>
          </div>
        </nav>

        <div class="section is-flex-1">
            <div class="container">
                @yield('content')
            </div>
        </div>

        <footer class="footer">
          <div class="container">
            <div class="content has-text-centered has-text-white">
                <p>© 2017 <a href="http://quickliketurtle.com"><strong>Jeff Finley<strong></a></p>
                <p>
                  <a class="icon" href="https://github.com/quickliketurtle">
                    <i class="fa fa-github"></i>
                  </a>
                  <a class="icon" href="https://twitter.com/quickliketurtle">
                    <i class="fa fa-twitter"></i>
                  </a>
                </p>
            </div>
          </div>
        </footer>

        <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
        <script>hljs.initHighlightingOnLoad();</script>
    </body>
</html>
