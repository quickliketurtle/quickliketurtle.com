---
extends: _layouts.post
section: postContent
title: Change From Static Files To Jigsaw
author: Jeff Finley
date: 2017-12-16
---

I created a simple one page site with just three files, index.html, app.css, app.js. That was all I needed. I was using bulma from a cdn and had custom css in app.css. Then I decided to switch over to tailwindcss to give it a go. To do this just created I had to create a tailwind.js file and a main.css file. I use the build in converter so no need to get into gulp or webpack. But I do now have files that I do not want to push to production.

So I thought I'll create a source directory and put my index.html, main.css and app.js in there, then write a script that runs the tailwindcss converter and puts the files I want to deploy in a build folder. Well that sounds familiar... So I'll just use Jigsaw and be done with the build part of it.

Here is how I went about that.

1. Install Jigsaw (Take a look [here](http://jigsaw.tighten.co/docs/installation/) for installation options)
    ```bash
    composer require tightenco/jigsaw
    ```

2. Initialize Jigsaw
    ```bash
    ./vendor/bin/jigsaw init
    ```
    Since we will be compiling assets, we need to run ```npm install``` as well.

3. Move our files into the _source_ folder
    - With Jigsaw we get a _source/_layouts/master.blade.php_ file and a _source/index.blade.php_ file. Since this is a single file site we could just replace index.blade.php and not extend the master layout, but It's better to split it up into the template and the content.

    - The next thing to do is move our css into _source/_assets/css/app.css_. Then we need to tell gulp to process this file for us. We can still use the tailwindcss converter to do this for us. We just need to add the following to our gulpfile.js file.
    ```js
    mix.exec('./node_modules/.bin/tailwind build ./source/_assets/css/app.css -c ./tailwind.js -o ./source/css/app.css');
    ```
    This says run the tailwind build our file into ./source/css/app.css. That way when jigsaw build is ran it will include the processed css file.

    - Last we need to move our app.js file. We can put this in ./source/_assets/js/app.js. Then we can tell gulp to process this file as well. I didn't need to do this in my case, but you do get some features for free.
    ```js
    mix.webpack(
        './source/_assets/js/app.js',
        './source/js/'
    );
    ```
    Here we are processing ./source/_assets/js/app.js and outputting ./source/js/app.js again so jigsaw build will process it.

4. Build our site
    Now we can build our site and check the output to see if all is as expected.
    But first we need to install our dependencies, and also install elixers webpack support
    ```bash
    npm install

    npm install laravel-elixir-webpack-official --save-dev

    gulp
    ```

    Once we are happy with the result we can add the `--production` flag to build the folder we will deploy.
    ```bash
    gulp --production
    ```

5. Deploy
    Follow whatever deployment stratigy you use for your static sites.  Your site will be in a folder called `build_production`.
