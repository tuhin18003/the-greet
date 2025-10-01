# The Greet

Greeting helper based on **time of the day** with the option to include the person’s name and formatted date.

## Install

Via Composer

```bash
$ composer require tuhin18003/the-greet
```

## Usage

Load via Composer autoload:

```php
require './vendor/autoload.php';
```

It takes up to **2 parameters**:  
1. **Name** *(string)* – The person’s name (optional, can be skipped).  
2. **Date format** *(string)* – PHP date format (optional). Skip this parameter to hide today’s date.  

---

### Example 1: With name and date
```php
use Tuhin18003\Greet\Greet;

$Greet = new Greet();

echo $Greet->hello('Jon Doe', 'l F j, Y');
```

**Output:**
```
Good morning Jon Doe. Rise and shine! A new day brings new opportunities. Today is Tuesday January 3, 2023.
```

---

### Example 2: With name only
```php
echo $Greet->hello('Alice');
```

**Output:**
```
Good afternoon Alice. Keep going — the best is yet to come!
```

---

### Example 3: Without name or date
```php
echo $Greet->hello();
```

**Output:**
```
Good evening. Take a moment to reflect and breathe. You’ve done great.
```

---

## Features

- ⏰ **Smart time-based greetings** – Messages adapt based on the current hour (00–23).  
- 👤 **Personalized greetings** – Optionally add a person’s name.  
- 📅 **Custom date output** – Choose your own date format (using [PHP date formats](https://www.php.net/manual/en/function.date.php)).  
- 💡 **Inspirational quotes** – Each greeting comes with a motivational line.  
- 🔄 **Consistent return** – Use as a string or structured array depending on your needs.  

---

## Advanced Usage

If you need a structured array instead of plain text, pass `$return_arr = true`.

```php
$response = $Greet->hello('Jon Doe', 'l F j, Y', true);

print_r($response);
```

**Output:**
```php
Array
(
    [msg] => Good night
    [name] => Jon Doe
    [quote] => Rest well — tomorrow holds endless possibilities.
    [today] => Today is Tuesday January 3, 2023
)
```

---

## Output Samples

- `Good morning Jon Doe. Rise and shine! A new day brings new opportunities. Today is Monday July 1, 2024.`  
- `Good evening Alice. Take a moment to reflect and breathe. You’ve done great.`  
- `Good night. Sleep well — endless possibilities await you.`  

---

### Credentials
- *Created by - [M. Tuhin](https://codesolz.net/)*

<a href="https://codesolz.net">
  <img src="https://static.codesolz.net/cs/logo.webp" alt="codesolz.net"/>
</a>
