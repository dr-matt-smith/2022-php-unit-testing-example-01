# 2022-php-unit-testing-example-01


## About

Example of tests specifying a simple class with
- private properties
- public accessor methods

## Setup

populate /vendor by running 'composer update'

Also, create a `src` folder to contain the class you will write

## The unit tests

This project uses the PHPUNit testing library to test the code written.

Run all tests methods by typing at the command line one of these 2 commands:

- `composer unit`

    - this uses a shortcut defined in the `composer.json` file

- `php ./vendor/bin/phpunit`

## Details of failed tests

You'll see a report of passed/failed tests in the terminal when the tests are executed.

Also there is are plain text and HTML summary reports created in the `build` directory.

You can further configure the testing system by changing opions in PHPUnit configuration file `phpunit.xml`