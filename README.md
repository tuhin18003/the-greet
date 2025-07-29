The Greet
==============================

Greeting based on time and with option to add name at the end of the line.


## Install

Via Composer

``` bash
$ composer require tuhin18003/the-greet
```

## Usage

```
require './vendor/autoload.php';
```

It takes 2 parameters. First one is person name `Jon Doe` and second one is date format `l F j, Y`. Skip the second parameter to un-publish date.

`$Greet->hello('Jon Doe', 'l F j, Y' )`

```
use Tuhin18003\Greet\Greet;

$Greet= new Greet();

echo $Greet->hello('Jon Doe', 'l F j, Y' );

```

## Output

```
Good morning Jon Doe. Today is Tuesday January 3, 2023

```

### Credentials
- *Created by - [M.Tuhin](https://codesolz.net/)*

<a href="https://codesolz.net">
  <img src="https://static.codesolz.net/cs/logo.webp" alt="codesolz.net"/>
</a>

