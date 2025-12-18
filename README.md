# PHP Text Validator Lib

> Original Repos:   
> - PHP Text Validator Lib: https://github.com/a19836/phptextvalidatorlib/   
> - Bloxtor: https://github.com/a19836/bloxtor/

## Overview

**PHP Text Validator Lib** is a PHP library designed to validate input values in a consistent and reliable way.  
It allows you to verify whether a given string represents a valid email address, phone number, domain, IP address, numeric value, decimal number, binary content, date, or datetime...

In addition to format validation, the library supports **value and length constraints**, enabling checks for minimum and maximum values, string length, number of words, and numeric ranges.  
It also provides **date and datetime comparisons**, allowing validation of earlier or later dates, as well as date intervals.

This library is ideal for input validation, form processing, API request validation, and enforcing data integrity across PHP applications.

To see a working example, open [index.php](index.php) on your server.

---

## Usage

```php
include_once __DIR__ . "/lib/TextValidator.php";

$status = TextValidator::isBinary($input); //check if input is a binary
$status = TextValidator::isEmail($input); //check if input is an email
$status = TextValidator::isDomain($input); //check if input is a domain
$status = TextValidator::isPhone($input); //check if input is a phone number
$status = TextValidator::isNumber($input); //check if input is a number
$status = TextValidator::isDecimal($input); //check if input is a decimal
$status = TextValidator::isSmallInt($input); //check if input is a small int
$status = TextValidator::isDate($input); //check if input is a date
$status = TextValidator::isDateTime($input); //check if input is a date time
$status = TextValidator::isTime($input); //check if input is a time
$status = TextValidator::isIPAddress($input); //check if input is an IP address
$status = TextValidator::isFileName($input); //check if input is a file name
$status = TextValidator::checkMinLength($input, $length); //check if input has a minimum size
$status = TextValidator::checkMaxLength($input, $length); //check if input has a maximum size 
$status = TextValidator::checkMinValue($input, $min); //check if input has a minimum value 
$status = TextValidator::checkMaxValue($input, $max); //check if input has a maximum value 
$status = TextValidator::checkMinWords($input, $min); //check if input has a minimum words 
$status = TextValidator::checkMaxWords($input, $max); //check if input has a maximum words 
$status = TextValidator::checkMinDate($input, $min); //check if a date is later than the $min date
$status = TextValidator::checkMaxDate($input, $max); //check if a date is earlier than the $min date
```

