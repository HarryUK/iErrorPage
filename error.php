<!---

    iErrorPage
    Made by HarryUK
    https://github.com/harryuk/

    Download it here:
    https://github.com/harryuk/ierrorpage/


-->
<?php include 'error-list.php'?>
<!DOCTYPE html>
<html>
<head>
    <title>iErrorPage</title>
    <meta name="viewport" content="width=device-width">
    <style>
    body {
        margin: 10px 0;
        font-family: sans-serif;
    }
    .object {
        margin-top: 10%;
        text-align: center;
    }
    </style>
</head>
<body>
    <div class="object">
        <div class="error">
            <h1><?php echo $title ?></h1>
        </div>
        <img src="https://cappuccino.ml/sadmac.png" width="90px">
        <div class="desc">
            <h2>The Error Description:</h2>
            <p><?php echo $description ?>
        </div>
    </div>
</body>
</html>
