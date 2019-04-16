#!/usr/local/bin/perl
## hello.cgi--a toy CGI program

use CGI qw(:standard); ## cgi perl module

var $name = param('name');
var $email = param('email');
print "Content-type: text/html\r\n\r\n";
print <<END;

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">  
    <title>Hello</title>
</head>

<body>
    <h3>Hello $name,</h3>
    <p>The email address you sent is</p>
    <p>$email</p>
</body>

</html>

END
