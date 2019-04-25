<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>CSE102 Email Confirmation</title>
</head>

<body style="background-color: white">
    <?php 
        $email = $_POST['email']; 
        $msg = $_POST['message'];   

        //  Subject of email
        $subject = "CSE102 Email";
        $myEmail = "fdai@ic.sunysb.edu";
        // Header for email. Will appear before your message
        $headers = "Hello! Someone has sent you a message from www.ic.sunysb.edu/Stu/fdai/HW4/hw4.html\n\n";
        // Message you send
        $message = "$msg";

        if(mail($email,$subject,$message,$headers))  { 
            print "<p>I have emailed your message to <code>$email</code>.</p>";
            print "<p>Your message:\t$message</p>";
            print "<a href=\"http://www.ic.sunysb.edu/Stu/fdai/HW4/hw4.html\">Click me to go back!</a>";
        } else {
            print "Doh! Your mail could not be sent.";
        }
    ?>
</body>
</html>
