#!/usr/local/bin/perl --
## hello.cgi--a toy CGI program

use CGI qw(:standard); ## cgi perl module

var $name = param('name');
var $email = param('email');
print "Content-type: text/html\r\n\r\n";
print <<END;

<?xml version="1.0" encoding="UTF-8" ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>Hello</title>
</head>
<body>
    <h3>Hello $name,</h3>
    <p>The email address you sent is</p>
    <p>$email</p>
</body>
</html>

END
