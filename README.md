
[![Build Status](https://travis-ci.org/aligurbuz/resta.svg?branch=master)](https://travis-ci.org/aligurbuz/resta)

# resta
php restfull api
resta php api restfull framework

# Introduction

Developing an api with php has never been so enjoyable.. We are claiming.You will so love this structure.
Slogan; If the machine can make itself the code that you write, do not write it.

Developments are still in progress. The documentation section of the code will be available in beta soon.
https://github.com/restapix/resta

# Quick Start

### Installation : 

- Via Composer :

```sh
$ git clone https://github.com/aligurbuz/resta.git companyName
$ cd companyName
$ composer install
$ composer dump-autoload -o
```

- Via Docker

```sh
$ git clone https://github.com/aligurbuz/resta-dockerized
$ cd resta-dockerized
$ mkdir code
```

> Then,run the following commands

```sh
$ sudo docker build -t php:fpm .
$ sudo docker-compose up -d
```

 > Docker machine ready.
 Now you can see running container list by running the following command.
 
 ```sh
 $ sudo docker ps
 ```
 
 > Then,run the following commands
 
  ```sh
  $ sudo docker exec -it php:fpm /bin/bash
  ```