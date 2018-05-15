<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mansoura NHS | Auth portal</title>

    <link href="login.css" rel="stylesheet">
</head>
<?php
if (isset($_GET['golog']))
{
    $data_base = new SQLite3('adaptive') ;
    $raw_result = $data_base->query("Select email , password, id  , name from student") ;

    while ($row = $raw_result->fetchArray())
    {
        if ($row['email'] ==  $_GET['email']  && $row['password'] == $_GET['password'])
        {
            $the_id = $row['id'] ;
            $the_name = $row['name'] ;
            setcookie('logincookie' , $the_id, time() + 3000 , '/')  ;
            setcookie('loginname'   , $the_name, time() + 3000 , '/')  ;
            header('Location: index.php');


        }

        else
        {
            echo "<div class='alert' style='padding: 20px;background-color: #f44336;color: white;'>
  <span class='closebtn' &times;</span> 
  Error ! Invalid Data</div>" ;
        }

    }
}
?>
<body>
<div class="login">
    <div class="login-triangle"></div>

    <h2 class="login-header">Log in</h2>

    <form class="login-container">
        <p><input type="email" placeholder="Email"></p>
        <p><input type="password" placeholder="Password"></p>
        <p><input type="submit" value="Log in"></p>
    </form>
</div>
</body>
</html>