# Fabrinotech Hello

A simple, lightweight PHP Composer package that generates customizable greetings.

## Requirements

* PHP 8.1 or higher
* Composer

## Installation

You can install the package via Composer. Run the following command in your terminal:

```bash
composer require fabrinotech/hello
```

## Usage

Once installed, ensure you have required the Composer autoloader in your project. You can then import the `Hello` class and use it to generate greetings.

### Basic Example

```php
<?php

require 'vendor/autoload.php';

use Fabrinotech\Hello\Hello;

$greeter = new Hello();

// Use the default greeting
echo $greeter->sayHello(); 
// Outputs: Hello, World from Fabrinotech!

// Pass a custom name
echo $greeter->sayHello('Developer'); 
// Outputs: Hello, Developer from Fabrinotech!
```

### Usage in Laravel (or other frameworks)

If you are using a modern framework like Laravel, you do not need to manually require the `vendor/autoload.php` file. Simply import the namespace in your controller or route:

```php
<?php

namespace App\Http\Controllers;

use Fabrinotech\Hello\Hello;

class GreetingController extends Controller
{
    public function index()
    {
        $greeter = new Hello();
        return $greeter->sayHello('Laravel User');
    }
}
```

## Testing

This package uses PHPUnit for testing. To run the test suite, execute the following command:

```bash
./vendor/bin/phpunit tests
```

## Authors

* **Fabrino Mhengilolo** - [fabrinotech@gmail.com](mailto:fabrinotech@gmail.com)

## License

The MIT License (MIT). Please see the License File for more information.
