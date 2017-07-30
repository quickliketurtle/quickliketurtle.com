---
extends: _layouts.post
section: postContent
title: Git Update Fork and Branches
author: Jeff Finley
date: 2017-04-12
---

So I forked and repo on github to address some issues.

I have 3 branches with changes. One branch was merged and the other 2 I've not created PR's for yet.
So I want the changes from the branch that was just merged to be reflected in the other 2 branches. Let's ignore the fact that in this particular case there was no good reason to do this as there was no overlapping code changes.

So the first thing is to get master updated.

```
# Add the remote, call it "upstream":

git remote add upstream https://github.com/whoever/whatever.git

# Fetch all the branches of that remote into remote-tracking branches,
# such as upstream/master:

git fetch upstream

# Make sure that you're on your master branch:

git checkout master

# Rewrite your master branch so that any commits of yours that
# aren't already in upstream/master are replayed on top of that
# other branch:

git rebase upstream/master
```


Now that my master is up to date, I can switch to any branch I want and do the same.

```
git checkout branch

git rebase origin/master
```

Good times.
