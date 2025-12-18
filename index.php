<?php
/*
 * Copyright (c) 2025 Bloxtor (http://bloxtor.com) and Joao Pinto (http://jplpinto.com)
 * 
 * Multi-licensed: BSD 3-Clause | Apache 2.0 | GNU LGPL v3 | HLNC License (http://bloxtor.com/LICENSE_HLNC.md)
 * Choose one license that best fits your needs.
 *
 * Original PHP Text Validator Lib Repo: https://github.com/a19836/php-text-validator-lib/
 * Original Bloxtor Repo: https://github.com/a19836/bloxtor
 *
 * YOU ARE NOT AUTHORIZED TO MODIFY OR REMOVE ANY PART OF THIS NOTICE!
 */
?>
<style>
h1 {margin-bottom:0; text-align:center;}
h5 {font-size:1em; margin:40px 0 10px; font-weight:bold;}
p {margin:0 0 20px; text-align:center;}

.note {text-align:center;}
.note span {text-align:center; margin:0 20px 20px; padding:10px; color:#aaa; border:1px solid #ccc; background:#eee; display:inline-block; border-radius:3px;}
.note li {margin-bottom:5px;}

.code {display:block; margin:10px 0; padding:0; background:#eee; border:1px solid #ccc; border-radius:3px; position:relative;}
.code:before {content:"php"; position:absolute; top:5px; left:5px; display:block; font-size:80%; opacity:.5;}
.code textarea {width:100%; height:300px; padding:30px 10px 10px; display:inline-block; background:transparent; border:0; resize:vertical; font-family:monospace;}
</style>
<h1>PHP Text Validator Lib</h1>
<p>Validate input values</p>
<div class="note">
		<span>
		This library validates input values in a consistent and reliable way.<br/>
		It allows you to verify whether a given string represents a valid email address, phone number, domain, IP address, numeric value, decimal number, binary content, date, or datetime...<br/>
		<br/>
		In addition to format validation, the library supports <b>value and length constraints</b>, enabling checks for minimum and maximum values, string length, number of words, and numeric ranges.<br/>
		It also provides <b>date and datetime comparisons</b>, allowing validation of earlier or later dates, as well as date intervals.<br/>
		<br/>
		This library is ideal for input validation, form processing, API request validation, and enforcing data integrity across PHP applications.
		</span>
</div>

<div>
	<h5>Usage</h5>
	<div class="code">
		<textarea readonly>
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
		</textarea>
	</div>
</div>

