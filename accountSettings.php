<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Account Settings - Lost and Found</title>
    <link rel="stylesheet" href="style.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="main.js"></script>
</head>
<body>
    <div class="wrapper">
        <?php include 'templates/header2.php';?>

        <div class="main">
            <div class="mainContainer">
                <h1>Account Settings:</h1>

                <div class="userInfo">
                    <p>First</p>
                    <p>Last</p>
                    <p>email@email.com</p>
                    <p>000-000-0000</p>
                    <p>123 E Main</p>
                    <p>Apt #1</p>
                    <p>Mesa</p>
                    <p>AZ</p>
                    <p>00000</p>
                </div>
                
                <a href="#" class="button updateAccountButton">Update Account</a>
                <!-- UPDATE ACCOUNT MODAL -->
                    <div class="modal updateAccountModal">
                        <a class="exitButton" href="#">X</a>
                        <form>
                            <h3>Update Account</h3>
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
                                <button class="submitButton " type="submit">Update</button>
                            </div>
                        </form>
                    </div>
                <a href="#" class="button deleteAccountButton">Delete Account</a>

                <!-- DELETE ACCOUNT MODAL -->
                    <div class="modal deleteAccountModal">
                        <a class="exitButton" href="#">X</a>
                        <form>
                            <h3>We're sad to see you go, but will gladly delete your account after confirming your password.</h3>
                            <fieldset>
                                <label>Password:</label>
                                <input class="password" type="password" placeholder="***">
                                <a href="#">Forgot Password?</a>
                            </fieldset>
                            
                            <div class="message"></div>

                            <div class="buttonContainer">
                                <button class="submitButton " type="submit">Delete Account</button>
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