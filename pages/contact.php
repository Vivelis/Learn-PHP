<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=$, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/Learn-PHP/style/contact.css">
    <title>Document</title>
</head>
<body>
    <div>
    <h1>Get in touch</h1>
    <p>Please fill in the fields</p>
    <form action="/Learn-PHP/php_elements/sendMessage.php" method="post">
        <input type="text" name="name" placeholder="Full name"><br>
        <input type="text" name="email" placeholder="Email"><br>
        <input type="text" name="subject" placeholder="Subject"><br>
        <textarea name="message" placeholder="Enter message"></textarea><br>
        <button type="submit" name="submit">Send message</button><br>
    </form>
    </div>
</body>
</html>