<!DOCTYPE html>
<html lang="en">
<head>
    <title>Search Supplements : </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="form.css">
</head>
<body>

<div class="container">
    <h2>Search for Products </h2>
    <form class="form-inline" action="" method="POST">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control"  placeholder="Enter Product Name" required/>
        </div>
        <button type="submit" name="submit" class="btn btn-default">Submit</button>
    </form>
    <p>&nbsp;</p>
    <h3>
        <?php
        if(isset($_POST['submit']))
        {
            $name = $_POST['name'];

            $url = "http://localhost/ExaplSer/api.php"."?name=".$name;

            $client = curl_init($url);
            curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
            $response = curl_exec($client);

            $result = json_decode($response);

            echo $result->data;
        }
        ?>
    </h3>
</div>
</body>
</html>