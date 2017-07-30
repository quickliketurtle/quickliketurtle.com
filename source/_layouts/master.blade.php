<!DOCTYPE html>
<html lang="en" full-height>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="stylesheet" href="/css/app.css">
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/styles/default.min.css">
    </head>
    <body class="border-t border-primary flex-col full-height">
        <nav class="navbar flex-none">
            <div class="container">
                <div class="navbar-content text-dark-muted p-sx-x-4">
                    <div>
                        quickliketurtle.com
                    </div>
                </div>
            </div>
        </nav>

        <div class="flex-fit">
            <div class="container">
                @yield('content')
            </div>
        </div>

        <footer class="bg-primary text-center p-xs-y-6 p-xs-x-4 text-light-muted text-sm flex-none">
            <p>© 2017 <a href="http://quickliketurtle.com" class="link-light-muted">quickliketurtle</a></p>
        </footer>
        </div>

        <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
        <script>hljs.initHighlightingOnLoad();</script>
    </body>
</html>
