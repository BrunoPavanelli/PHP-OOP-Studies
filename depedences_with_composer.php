<?php

// Get dependences: Packagist, GitHub

/*
 https://packagist.org/ -> site that group php libs and frameworks
*/

// dev Context in composer.json file

/*
 require-dev: dev Context -> development dependences are installed and listed here
*/

// Install dependences: composer requiser and composer install

/*
 composer require to install new dependences
 composer install to install all listed dependences
*/

// Dependences versioning with composer.lock file and commands composer update/remove

/*
 composer.lock -> store dependences versions useds in projects preventing the composer install to install newer version for the depedencs, asserting that when a thrid part person uses 
 the project, when install depedences, the compatibility of versions is on date with the code
 composer update -> update all dependences to the latest version, and update composer.lock
 composer remove -> to remove an dependence in both composer.json and composer.lock
*/