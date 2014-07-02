<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Account - Lost and Found</title>
    <link rel="stylesheet" href="style.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="main.js"></script>
</head>
<body>
    <div class="wrapper">
        <?php include 'templates/header.php';?>

        <div class="main">
            <div class="mainContainer">
                <h1>Go to:</h1>
                <a href="myItems.php" class="button">My Items</a>
                <a href="foundItems.php" class="button">Found Items</a>
                <a href="accountSettings.php" class="button">Account Settings</a>
            </div>
        </div>

        <?php include 'templates/footer.php';?>
    </div>
    
</body>
</html>