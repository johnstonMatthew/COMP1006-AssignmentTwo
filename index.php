<?php 
    $title = "Homepage || Assignment 2 Website";
    $description = "This is the Homepage for my Assignment Two";
    include('includes/navigation/header.php');
    include_once('includes/php/database.php');
    include_once('includes/php/validate.php');

    $validate = new Validate();
?>

<!-- Page Main -->
<main>
    <section id="formContainer">
        <!-- Register Account Form -->
        <form method="POST" action="processRequest.php" id="signUpForm">
            <fieldset>
                <h3> Sign Up </h3>
                <div>
                    <label for="uname"> Username </label>
                    <input type="text" name="uname" id="uname" required>
                </div>

                <div>
                    <label for="email"> Email </label>
                    <input type="email" name="email" id="email" required>
                </div>

                <div>
                    <label for="password"> Password </label>
                    <input type="password" name="password" id="password">
                    <p> <span class="smallText"> *Your Password Must Contain a Special Character, a Number and be at Least 8 Characters in Length </span> <p>
                </div>

                <div class="buttonContainer">
                    <input type="submit" name="signUpSubmit">
                    <input type="reset">
                </div>
            </fieldset>
        </form>
        <!-- Log In Form -->
        <form method="POST" action="processRequest.php" id="logInForm">
            <fieldset>
                <h3> Log In </h3>
                <div>
                    <label for="logInUname"> Username </label>
                    <input type="text" name="logInUname" id="logInUname" required>
                </div>

                <div>
                    <label for="logInPass"> Password </label>
                    <input type="password" name="logInPass" id="logInPass" required>
                </div>

                <div class="buttonContainer">
                    <input type="submit" name="logInSubmit">
                    <input type="reset">
                </div>
            </fieldset>
        </form>
    </section>
</main>

<?php 
    include('includes/navigation/footer.html');
?>
