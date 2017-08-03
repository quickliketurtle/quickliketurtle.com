---
extends: _layouts.post
section: postContent
title: How to use Tinker outside Laravel
author: Jeff Finley
date: 2017-08-02
---

Today I found myself wanting to quickly create an md5 hash of my email to use with gravatar. I've done this before using an interactive php shell, but that usually take a try or two for reasons that are entirely my fault.

```php
 >php
 md5('a');
```

Oh right just running php doesn't open the interactive shell.

```php
>php -i
phpinfo()
PHP Version => 7.1.2
```

Oh right, `php -i` doesn't open the interactive shell either.

```php
> php -a
```

Great, now were talking.

```php
php > md5('a')
// Nothing, maybe I need a semicolon
md5('a');
// PHP Parse error... Oh it remembered the first command also, I'll try again.
php > md5('a');
// Nothing. Oh, i guess i need to use echo.
php > echo md5('a');
0cc175b9c0f1b6a831c399e269772661
// Great that worked.
```

Well that wasn't fun. So the next time i went to do this I thought I'll just google 'php repl' and see what I get.

The first result was repl.it/languages/php. Enter some code on the left and it shows console output on the right. I still got an error when leaving off the semicolon but the command worked without `echo`. I guess it assumed i'd want to see the result of a command. Good assumption.

This is a good option, and can be used without installing anything.

From using Laravel, I'm used to using Tinker as a relp so I thought maybe I'll see if I can use Tinker outside of Laravel. A quick google didn't really return anything useful.  Then I took a quick look at https://github.com/mattstauffer/Torch and didn't see it there. For those who don't know Torch has example of using Illuminate components outside Laravel.

Lets give this a go. I set up a new project and pulled in Tinker.

```php
> take tinker
> composer require laravel/tinker
```

Next, as tinker is a Symphony console command I created a new file to create the app and include the tinker command.

```php
#!/usr/bin/env php
<?php

use Laravel\Tinker\Console\TinkerCommand;

require __DIR__.'/vendor/autoload.php';

$tinkerCommand = new TinkerCommand();

$app = new Symfony\Component\Console\Application('Tinker');

$app->add($tinkerCommand);

$app->run();
```

Ok, we expect something to break but lets run it and see what happens.

```php
> ./tinker tinker
```

Call to member function call() on null.
Let's see what the command is doing...

```php
/**
 * Execute the console command.
 *
 * @return void
 */
public function handle()
{
    $this->getApplication()->setCatchExceptions(false);

    $config = new Configuration([
        'updateCheck' => 'never'
    ]);

    $config->getPresenter()->addCasters(
        $this->getCasters()
    );

    $shell = new Shell($config);
    $shell->addCommands($this->getCommands());
    $shell->setIncludes($this->argument('include'));

    $path = $this->getLaravel()->basePath('vendor/composer/autoload_classmap.php');

    $loader = ClassAliasAutoloader::register($shell, $path);

    try {
        $shell->run();
    } finally {
        $loader->unregister();
    }
}
```

So were Setting some options, config etc.. Then we create a new Shell, a path from the laravel app... And this is where I thought, If all this is doing is creating a new Psy/Shell and configuring some stuff to work with Laravel, why don't I just use Psy/Shell.

A quick look at psysh.org and I can install Psy/Shell with composer

```php
> composer g require psy/psysh:@stable
```

Now anywhere I can run `> psysh` and I have a php repl.  Now compairing to the experience above.

```php
psysh
>>> md5('a')
=> "0cc175b9c0f1b6a831c399e269772661"
// That just worked
```

So psysh assumed I wanted to see the output, and it even assumed I wanted to execute the code I wrote. Both of which were true.

All of that song and dance to figure out that since I've installed psysh now all I have to do is type `> psysh` in my terminal and I'm good to so.
