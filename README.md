lenil.tech is an Symfony 5 Application
========================
Lenil.tech is the platform for African freelancers.

Requirements
------------

  * PHP 7.2.5 or higher;
  * PDO-Mysql PHP extension enabled;
  * and the [usual Symfony application requirements][2].

Installation
------------

[Download Symfony][4] to install the `symfony` binary on your computer and run
this command:

to get project
```bash
$ git clone git@github.com:waarbi/lenil.git
```

And install dependancies:

```bash
cd lenil/
$ composer install
```
Config
-----

Config database and run fixtures:

```bash
$ php bin/console doctrine:database:create
$ php bin/console doctrine:schema:update --force
$ php bin/console doctrine:fixtures:load
```

Usage
-----

Yet there's no need to configure anything to run the application. If you have
[installed Symfony][4], run this command and access the application in your
browser at the given URL (<https://localhost:8000> by default):

```bash
$ cd leni/
$ symfony server:start
```

If you don't have the Symfony binary installed, run `php -S localhost:8000 -t public/`
to use the built-in PHP web server or [configure a web server][3] like Nginx or
Apache to run the application.

[1]: https://symfony.com/doc/current/best_practices.html
[2]: https://symfony.com/doc/current/reference/requirements.html
[3]: https://symfony.com/doc/current/cookbook/configuration/web_server_configuration.html
[4]: https://symfony.com/download
