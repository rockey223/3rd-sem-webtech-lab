<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    if(isset($_COOKIE['email'])){

        echo "".$_COOKIE['email'];
    }

    ?>
        <h1>you are logged in</h1>



</body>
</html>