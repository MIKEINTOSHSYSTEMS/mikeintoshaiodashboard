Clean Code
==========

We have added some development tools for you to contribute to the library with clean code: 

- **PHP mess detector**: Takes a given PHP source code base and look for several potential problems within that source.
- **PHP code sniffer**: Tokenizes PHP, Javascript and CSS files and detectes violations of a defined set of coding 
    standards.
- **PHP code fixer**: Analyzes some PHP source code and tries to fix coding standards issues. 
- **Tests**: Well, everybody knows why tests exists. 

Using PHP mess detector
-----------------------

PHP mess detector takes a given PHP source code base and look for several potential problems within that source. The 
following is a sample usage with all options available: 

```bash
./vendor/bin/phpmd ./src text codesize,unusedcode,naming,design,controversial,cleancode
```

For further information, please visit [PHP mess detector documentation](https://phpmd.org/)

Using PHP code sniffer 
----------------------

Global settings file: `phpcs.xml.dist` (added into Git)  
Local settings file (you can add it locally): `phpcs.xml` (ignored by Git)

- Run checking by `PHP_CodeSniffer`: `./vendor/bin/phpcs`  
- Show check report in patch form: `./vendor/bin/phpcs --report=diff`  
- Automatically fix all fixable issues: `./vendor/bin/phpcbf`

For further information, please visit [squizlabs/PHP_CodeSniffer](https://github.com/squizlabs/PHP_CodeSniffer)

Using PHP code fixer 
--------------------

Global settings file: `.php_cs.dist` (added into Git)  
Local settings file (you can add it locally): `.php_cs` (ignored by Git)

- Run checking by `PHP-CS-Fixer`: `./vendor/bin/php-cs-fixer --config=.php_cs.dist fix ./src  --dry-run`  
- Automatically fix all fixable issues: ` ./vendor/bin/php-cs-fixer --config=.php_cs.dist fix ./src`

For further information, please visit [FriendsOfPHP/PHP-CS-Fixer](https://github.com/FriendsOfPHP/PHP-CS-Fixer)

Running Tests
-------------

We are using `Codeception` for testing the module. To run tests do the following: 

- Create a `yii2-usuario-test` database. 
- Add database access configuration in `tests/_app/config/db.php` (or create `db.local.php` in the same directory) and `codeception.dist.yml`.
- Run `./vendor/bin/codecept build`
- Run `./vendor/bin/codecept run`

We still need to add `unit` tests to the module. Feel free to add your tests to it as long as it makes use of 
`Codeception`. 

© [2amigos](http://www.2amigos.us/) 2013-2019
