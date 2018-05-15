<?php
if (isset($_GET['golog']))
{
    $city  = "" ;
    $data_base = new SQLite3('docts') ;
    $raw_result = $data_base->query("Select id , email , password , city from doctors") ;
    while ($row = $raw_result->fetchArray())
    {
        if ($row['email'] ==  $_GET['email']  && $row['password'] == $_GET['password'])
        {
            $city =  $row['city'] ;
            setcookie('city'   , $city, time() + 3000 , '/')  ;
            header('Location: http://localhost/ei_medical/');

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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mansoura NHS | Auth portal</title>
    <link href="login.css" rel="stylesheet">
</head>

<body>
<div class="login">
    <div class="login-triangle"></div>
    <h2 class="login-header">Log in</h2>
    <form class="login-container">
        <p><input type="email" placeholder="Email" name="email"></p>
        <p><input type="password" placeholder="Password" name="password"></p>
        <p><input type="submit" value="Log in" name="golog"></p>
    </form>
</div>
</body>
</html>