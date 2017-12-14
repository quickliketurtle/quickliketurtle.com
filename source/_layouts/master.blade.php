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
                    Blog
                </a>
                <a class="navbar-item" href="/about">
                    About
                </a>
            </div>
          </div>
        </nav>

        <header class="has-text-centered">
            <img class="image is-centered is-rounded is-128x128" src="https://www.gravatar.com/avatar/82be8137d900e064157a862bdba0fb97?s=200" alt="">
            <h1 class="title">Jeff Finley</h1>
            <p class="m-b-0">
              <a class="icon" href="https://github.com/quickliketurtle">
                <i class="fa fa-github"></i>
              </a>
              <a class="icon" href="https://twitter.com/quickliketurtle">
                <i class="fa fa-twitter"></i>
              </a>
            </p>
        </header>

        <div class="section is-flex-1">
            <div class="container">
                @yield('content')
            </div>
        </div>

        <footer class="footer">
          <div class="container">
            <div class="content has-text-centered has-text-white">
                <p>© 2017 <a href="http://quickliketurtle.com"><strong>Jeff Finley<strong></a></p>
            </div>
          </div>
        </footer>

        <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
        <script>hljs.initHighlightingOnLoad();</script>

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-111249375-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-111249375-1');
        </script>
    </body>
</html>
