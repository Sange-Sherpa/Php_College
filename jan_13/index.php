<?php

$connection = mysqli_connnect('localhost', 'root', '', 'students');

if($connection) {
    echo "Database Connected :)";
} else {
    echo "Database not Connected :(";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Php_College </title>
</head>
<body>
    
    <blockquote>
        <h1>This is a form</h1>

        <form action="" method="post">
            <div class="form_group">
                <label for="name">Name: </label><br>
                <input type="text" name="name" id="name" placeholder="Enter Name"> 
            </div>
            <br>
            <div class="form_group">
                <label for="email">Email: </label> <br>
                <input type="text" name="email" id="email" placeholder="Enter email"> 
            </div>
            <br>
            <div class="form_group">
                <label for="phone">Phone: </label> <br>
                <input type="text" name="phone" id="phone" placeholder="Enter Phone"> 
            </div>
            <br>
            <div class="form_group">
                <label for="address">Address: </label> <br>
                <input type="text" name="address" id="address" placeholder="Enter Address"> 
            </div>
            <br>
            <button type="submit"> Submit </button>
        </form>
    </blockquote>

</body>
</html>