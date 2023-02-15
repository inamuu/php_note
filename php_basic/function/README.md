```sh
$ docker build -t phptest .
```

```sh
$ docker run phptest php -v
PHP 8.2.3 (cli) (built: Feb 14 2023 20:48:17) (NTS)
Copyright (c) The PHP Group
Zend Engine v4.2.3, Copyright (c) Zend Technologies
```

```sh
$ docker run phptest pwd;ls
/usr/local/src/app
Dockerfile  main.php  README.md
```

```sh
$ docker run phptest php ./main.php
start: run php test function
info: please set argument
```

```sh
$ docker run phptest php ./main.php example_1
start: run php test function
result: exmaple 1
```

```sh
$ docker run phptest php ./main.php example_2
start: run php test function
result: exmaple 2
```