<?php 

$mb_string = "こんにちは";
var_dump(mb_strlen($mb_string)); //mb_ stands for multibyte

$url = "https://example.com/path?key=value&special=@#$%";
// to be able to pass strings that contains special characters in a URL, you need to encode them.
var_dump(urlencode($url));
var_dump(urldecode(urlencode($url)));

$html= '<p>This is "quoted" text & a <a href="#">link</a>.</p>';

var_dump(htmlentities($html)); 
// this is what can be then safely stored and displayed and won't be interpreted as HTML 

$encoded = base64_encode("Hello World!");
// useful if you'd like to include some data in your URL parameters. data can be anything, image even.
// encoding is also used for email attachments.

var_dump($encoded, base64_decode($encoded));
