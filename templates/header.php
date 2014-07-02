<header>
    <a class="logo" href="index.php">Logo</a>
    <div class="logInButtons">
        <a href="#" class="button logInButton">Log In</a>
        <a href="#" class="button registerButton">Register</a>
    </div>
    <div class="logOutButton">
        <a href="#" class="button">Log out</a>
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
                <button class="submitButton " type="submit">Log In</button>
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
                <button class="submitButton " type="submit">Register</button>
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