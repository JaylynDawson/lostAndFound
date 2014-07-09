
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lost and Found</title>
    <link rel="stylesheet" href="style.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="main.js"></script>
</head>
<body>
    <div class="wrapper">
        <header>
            <a class="logo" href="index.php"></a>
            <div class="logInButtons">
                <a href="#" class="button logInButton">Log In</a>
                <a href="#" class="button registerButton">Register</a>
            </div>
            <div class="logOutButton" hidden>
                <a href="account.php" class="button">Account</a>
                <a href="index.php" class="button">Log out</a>
            </div>
        </header>

        <!-- LOG IN MODAL -->
            <div class="modal logInModal">
                <a class="exitButton" href="#">X</a>
                <form>
                    <h3>Log In</h3>
                    <fieldset>
                        <label>Email:</label>
                        <input class="email" type="email" placeholder="email@email.com">
                    </fieldset>
                    <fieldset>
                        <label>Password:</label>
                        <input class="password" type="password" placeholder="***">
                        <a class="forgotPassword" href="#">Forgot Password?</a>
                    </fieldset>
                    
                    <div class="message"></div>

                    <div class="buttonContainer">
                        <button class="submitButton logInSubmitButton" type="submit">Log In</button>
                    </div>
                </form>
            </div>

        <!-- REGISTRATION MODAL -->
            <div class="modal registerModal">
                <a class="exitButton" href="#">X</a>
                <form>
                    <h3>Register</h3>
                    <fieldset>
                        <label>First Name:</label>
                        <input class="firstName" type="text" placeholder="Pat">
                    </fieldset>
                    <fieldset>
                        <label>Last Name:</label>
                        <input class="lastName" type="text" placeholder="Smith">
                    </fieldset>
                    <fieldset>
                        <label>Email:</label>
                        <input class="email" type="email" placeholder="email@email.com">
                    </fieldset>
                    <fieldset>
                        <label>Password:</label>
                        <input class="password" type="password" placeholder="***">
                    </fieldset>
                    <fieldset>
                        <label>Phone:</label>
                        <input class="phone" type="text" placeholder="000-000-0000">
                    </fieldset>
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
                        <button class="submitButton registerSubmitButton" type="submit">Register</button>
                    </div>
                </form>
            </div>

        <!-- FORGOT PASSWORD MODAL -->
            <div class="modal forgotPasswordModal">
                <a class="exitButton" href="#">X</a>
                <form>
                    <h3>Forgot Password?</h3>
                    <fieldset>
                        <label>Email:</label>
                        <input class="email" type="email" placeholder="email@email.com">
                    </fieldset>
                    
                    <div class="message"></div>

                    <div class="buttonContainer">
                        <button class="submitButton " type="submit">Send Email</button>
                    </div>
                </form>
            </div>

        <div class="main">
            <div class="mainContainer">
                <h1>I've:</h1>
                <a href="#" class="button indexLostButton">Lost Something</a>
                <a href="#" class="button indexFoundButton">Found Something</a>
            </div>
        </div>

        <!-- NEW ITEM MODAL -->
            <div class="modal indexItemModal">
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

        <!-- FOUND ITEM MODAL -->
            <div class="modal indexFoundItemModal">
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

        <!-- DECISION MODAL -->
            <div class="modal decisionModal">
                <a class="exitButton" href="#">X</a>
                <form>
                    <h3>Would you like to Log In or Register?</h3>

                    <div class="decisionButtons">
                        <a href="#" class="button logInButton">Log In</a>
                        <a href="#" class="button registerButton">Register</a>
                    </div>
                </form>
            </div>

        <?php include 'templates/footer.php';?>
    </div>
    
</body>
</html>
