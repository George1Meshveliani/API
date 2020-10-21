<html>

<head>
    <meta charset="UTF-8">
    <title>Add Record Form</title>
</head>
<body>
<form action="users.php" method="post">
    <p>
        <label for="name">name:</label>
        <input type="text" name="name" id="name">
    </p>
    <p>
        <label for="emailAddress">email:</label>
        <input type="text" name="email" id="emailAddress">
    </p>
    <p>
        <label for="phone">phone:</label>
        <input type="text" name="phone" id="phone">
    </p>
    <input type="submit" value="Submit">
</form>
</body>
</html>
<?php
require_once 'config.php';
?>

<a href = 'users.php'> Visit Users API </a>;
</html>



