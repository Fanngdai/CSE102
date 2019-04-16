<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>Hello</title>
</head>

<body>
    <?php
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];

        print "<h3>Hello $name,</h3>";
        print "<p>The email address you sent is</p>";
        print "<p style='color: red'>We will call you sometime ;) $phone<p>";
        print "<p>$email</p>";
    ?>
</body>
</html>
