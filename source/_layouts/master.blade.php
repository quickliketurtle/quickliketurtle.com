<!DOCTYPE html>
<html lang="en" full-height>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="stylesheet" href="/css/app.css">
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/styles/default.min.css">
    </head>
    <body>
        <nav class="navbar">
          <div class="navbar-brand">
            <a class="navbar-item" href="http://bulma.io">
              <img src="http://bulma.io/images/bulma-logo.png" alt="Bulma: a modern CSS framework based on Flexbox" width="112" height="28">
            </a>
          </div>
        </nav>

        <div class="section">
            <div class="container">
                @yield('content')
            </div>
        </div>

        <footer class="footer">
          <div class="container">
            <div class="content has-text-centered">
                <p>© 2017 <a href="http://quickliketurtle.com">Jeff Finley</a></p>
            </div>
          </div>
        </footer>

        <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
        <script>hljs.initHighlightingOnLoad();</script>
    </body>
</html>
