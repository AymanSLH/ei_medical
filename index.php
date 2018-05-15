<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome | Ibn al haytham </title>
    <link href="index.css" rel="stylesheet">
    <link href="index.js" rel="script">
</head>
<body>

<div id="main">
    <div class="container">
        <div  style="margin-top:150px;margin-bottom:30px;text-align:center;">
            <img src="logo.png" style="width: 100px;margin-bottom:15px">
            <h1>Ibn al haytham Medical supplements</h1>
        </div>
        <nav>
            <div class="nav-fostrap">
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="javascript:void(0)">Branches Log in<span class="arrow-down"></span></a>
                        <ul class="dropdown">
                            <li><a href="">Cairo</a></li>
                            <li><a href="./consumer/login.php">Mansoura</a></li>
                        </ul>
                    </li>
                    <li><a href="">Services</a></li>
                    <li><a href="">About Us</a></li>

                    <?php
                        if (isset($_COOKIE['city']))
                            {
                                echo "Hello !";
                                echo "<li><a href=\"form.php\">Search For Supplements !</a></li>" ;
                            }
                    ?>
                </ul>
            </div>
            <div class="nav-bg-fostrap">
                <div class="navbar-fostrap"> <span></span> <span></span> <span></span> </div>
                <a href="" class="title-mobile">Fostrap</a>
            </div>
        </nav>
        <div class='content'>
        </div>
    </div>
</div>

</body>
</html>