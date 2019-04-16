<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>Thanks for Joining</title>
</head>

<body style="background-color: white">
    <?php 
        $email = $_POST['email'];   
        $name = $_POST['name']; 

        $club="ic.sunysb.edu";
        $subject = "New Member club.com";
        $myEmail = "fdai@ic.sunysb.edu";
        $message = "Name: $name\n Email: $email\n to join $club *****\n\n "; 
        $headers = "From: Fanng Dai";

        if(mail($email,$subject,$message,$headers))  { 
            print "<h3>Thank you $name. </h3>";
            print "<p>Welcome to club.com.  Your membership will be processed shortly. </p>";
            print "<p>We will email you at <code>$email</code> about your new membership at $club. </p>";
        } else {
            print "Doh! Your mail could not be sent.";
        }
    ?>
</body>
</html>
