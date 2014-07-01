<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Items - Lost and Found</title>
    <link rel="stylesheet" href="style.css">
    <script src="main.js"></script>
</head>
<body>
    <div class="wrapper">
        <?php include 'templates/header.php';?>

        <div class="main">
            <div class="mainContainer">
                <h1>My Items:</h1>
                <div class="container">
                    <div class="mediaObject2">
                        <div class="object">
                            <img scr="#">
                            <h5>Lorem ipsum dolor</h5>
                        </div>
                    </div>

                    <div class="mediaObject2">
                        <div class="object">
                            <img scr="#">
                            <h5>Lorem ipsum dolor</h5>
                        </div>
                    </div>

                    <div class="mediaObject2">
                        <div class="object">
                            <img scr="#">
                            <h5>Lorem ipsum dolor</h5>
                        </div>
                    </div>

                    <div class="mediaObject2">
                        <div class="object">
                            <img scr="#">
                            <h5>Lorem ipsum dolor</h5>
                        </div>
                    </div>

                    <div class="mediaObject2">
                        <div class="object">
                            <img scr="#">
                            <h5>Lorem ipsum dolor</h5>
                        </div>
                    </div>

                    <div class="mediaObject2">
                        <div class="object">
                            <img scr="#">
                            <h5>Lorem ipsum dolor</h5>
                        </div>
                    </div>

                    <div class="mediaObject2">
                        <div class="object">
                            <img scr="#">
                            <h5>Lorem ipsum dolor</h5>
                        </div>
                    </div>

                    <div class="mediaObject2">
                        <div class="object">
                            <img scr="#">
                            <h5>Lorem ipsum dolor</h5>
                        </div>
                    </div>
                </div>
                <!-- NEW ITEM MODAL -->
                    <div class="modal itemModal">
                        <a class="exitButton" href="#">X</a>
                        <form>
                            <h3>New Item</h3>
                            <fieldset>
                                <label>Picture:</label>
                                <input type="file" name="pic" accept="image/*">
                            </fieldset>
                            <fieldset>
                                <label>Title:</label>
                                <input class="itemTitle" type="text" placeholder="ex: Mother's Ring">
                            </fieldset>
                            <fieldset>
                                <label>Type:</label>
                                <select class="itemType" type="text" placeholder="">
                                    <option></option>
                                    <option value="1">Jewelry</option>
                                    <option value="2">Furniture</option>
                                    <option value="3">Books</option>
                                    <option value="4">Music</option>
                                </select>
                            </fieldset>
                            <fieldset>
                                <label>Description:</label>
                                <textarea class="itemDescription" type="text" placeholder="ex: height, color, texture"></textarea>
                            </fieldset>

                            <div class="message"></div>

                            <div class="buttonContainer">
                                <button class="submitButton" type="submit">Save</button>
                            </div>
                        </form>
                    </div>
                <!-- UPDATE ITEM MODAL -->
                    <div class="modal updateItemModal">
                        <a class="exitButton" href="#">X</a>
                        <form class="reptile-form" action="response.json" method="POST">
                            <h3>Update Item</h3>
                            <fieldset>
                                <label>Picture:</label>
                                <input type="file" name="pic" accept="image/*">
                            </fieldset>
                            <fieldset>
                                <label>Title:</label>
                                <input class="itemTitle" type="text" title="awesome" placeholder="ex: Mother's Ring">
                            </fieldset>
                            <fieldset>
                                <label>Type:</label>
                                <select class="itemType" type="text" placeholder="">
                                    <option></option>
                                    <option value="1">Jewelry</option>
                                    <option value="2">Furniture</option>
                                    <option value="3">Books</option>
                                    <option value="4">Music</option>
                                </select>
                            </fieldset>
                            <fieldset>
                                <label>Description:</label>
                                <textarea class="itemDescription" type="text" placeholder="ex: height, color, texture"></textarea>
                            </fieldset>

                            <div class="message"></div>

                            <div class="buttonContainer">
                                <button class="submitButton" type="submit">Save</button>
                            </div>
                        </form>
                    </div>

                <a href="account.php" class="button">Back to Account</a>
            </div>
        </div>

        <?php include 'templates/footer.php';?>
    </div>
    
</body>
</html>