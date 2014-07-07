<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Found Items - Lost and Found</title>
    <link rel="stylesheet" href="style.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="main.js"></script>
</head>
<body>
    <div class="wrapper">
        <?php include 'templates/header2.php';?>

        <div class="main">
            <div class="mainContainer">
                <h1>Found Items:</h1>
                <div class="container">
                    <a href="" class="mediaObject2">
                        <div class="object">
                            <img scr="#">
                            <h5>Lorem ipsum dolor</h5>
                        </div>
                    </a>

                    <a href="" class="mediaObject2">
                        <div class="object">
                            <img scr="#">
                            <h5>Lorem ipsum dolor</h5>
                        </div>
                    </a>

                    <a href="" class="mediaObject2">
                        <div class="object">
                            <img scr="#">
                            <h5>Lorem ipsum dolor</h5>
                        </div>
                    </a>

                    <a href="" class="mediaObject2">
                        <div class="object">
                            <img scr="#">
                            <h5>Lorem ipsum dolor</h5>
                        </div>
                    </a>

                    <a href="" class="mediaObject2">
                        <div class="addNewFoundItem">
                            <img scr="#">
                        </div>
                    </a>
                </div>
                <!-- FOUND ITEM MODAL -->
                    <div class="modal foundItemModal">
                        <a class="exitButton" href="#">X</a>
                        <form>
                            <h3>Found Item</h3>
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

                            <br>
                            
                            <h3>Drop-off Location</h3>
                            <fieldset>
                                <label>Address:</label>
                                <input class="address" type="text" placeholder="123 E. Main St.">
                            </fieldset>
                            <fieldset>
                                <label>Address 2:</label>
                                <input class="address2" type="text" placeholder="Suite #2">
                            </fieldset>
                            <fieldset>
                                <label>Zipcode:</label>
                                <input class="zipcode" type="text" placeholder="00000">
                            </fieldset>

                            <div class="message"></div>

                            <div class="buttonContainer">
                                <button class="submitButton" type="submit">Submit</button>
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