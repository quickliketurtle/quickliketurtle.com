---
extends: _layouts.post
section: postContent
title: Creating a Global .gitignore
author: Jeff Finley
date: 2017-04-12
---

I primarilly used Sublime Text as my editor of choice, but when I hack on a open source project that I am not familiar with, I reach for PHPStorm so I can more easily explore and jump around the code base. Since this has been pretty infrequent, I've been caught with the .idea directory in a commit/pr a few times.

I could just not commit it of course. Or I could add it to the projects .gitignore file, but then I have to commit that change and as it is unrealted to the current work I'd create a new commit/pr for just that change, then wait for the maintainer to merge it then update from the upstream/master, etc... No Fun! I though there must be a better way, so i googled it and what do you know, there is.

Enter the global .gitignore.

My search lead me right to the github help page that describes making a global .gitignore file.
https://help.github.com/articles/ignoring-files/#create-a-global-gitignore

There are 2 simple steps:

1. Create a file. I went with the recommendation of ~/.gitignore_global
2. Run command ```git config --global core.excludesfile ~/.gitignore_global```

That's it.

As for what to put in the file github has a repo with all sorts of good options. Rather than looking at the example linked in the help page: https://gist.github.com/octocat/9257657, I suggest looking at the repo they have with all sorts of templates: https://github.com/github/gitignore.

I started right with ```.idea/``` and then added the items from the macOS.gitignore template.

While this solves my specific use case, I'd still recommend adding all items to the projects .gitignore that are appropriate for your project/team.
