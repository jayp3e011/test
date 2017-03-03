#Guide

* sync remote
```
$ git checkout --track origin/brnach_name
$ git fetch (optional)
$ git pull
```

* merge branches
```
(on branch development)$ git merge master
(resolve any merge conflicts if there are any)
$ git checkout master
$ git merge development (there won't be any conflicts now)
```
