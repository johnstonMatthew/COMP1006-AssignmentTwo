<?php 
    $title = "Attempting Login Page || Assignment 2 PHP";
    $description = "This Page can Processes Login Requests";
    include('includes/navigation/header.php');
    require_once('includes/php/database.php');
    require_once('includes/php/validate.php');

    $validate = new Validate();
    
?>

<main>
    <?php
        if (isset($_POST['signUpSubmit']) ) {
            // Get all User Input From the Sign in Form on the Index Page
            $uname = $_POST['uname'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            // Validation to Ensure all the Data is Acceptable
            $message = $validate->checkEmpty($_POST, array('uname', 'email', 'password' ) );
            //^^^ Check if any of the Variables Captured Above are Empty
            $validEmail = $validate->validEmail($_POST['email']);
            //^^^ Check if the Email Variable Captured Above Contains all of the Correct Components to be a Valid Email (ex: @ Symbol, .com ending, etc)
            $validPass = $validate->validPassword($_POST['password']);
            //^^^ Check if the Password Varaible Captured Above Contains all of the Necessary Requirements Listed on the Index Page (8 or More Characters in Length, at Least 1 Number and Special Symbol)
            
            if ($message != null) {
                echo "<p> $message </p>";
                echo "<a href='javascript:self.history.back();'> Go Back </a>";
            } else if (!$validEmail) {
                echo "<p> Email Field is Invalid </p>";
                echo "<a href='javascript:self.history.back();'> Go Back </a>";
            } else if (!$validPass) {
                echo "<p> Password Field is Invalid </p>";
                echo "<a href='javascript:self.history.back();'> Go Back </a>";
            } else {
                $password = hash('sha512', $password);// Hash the Password
                $result = $connection->prepare("INSERT INTO accounts(uname, email, password) VALUES ('$uname', '$email', '$password')");//Prepare the SQL Query and Sanitize the Data
                $result->execute();// Execute the SQL Query Prepared Above
                echo "<p> Account Registered Added </p>";
                echo "<p> Please Log in to View Accounts </p>";
                $connection = null;// Set the Database Connection to Null, so no SQL Injection can Take Place
            }
        }

        if (isset($_POST['logInSubmit'])) {
            // Get all User Input From the log in Form on the Index Page
            $uname = trim($_POST['logInUname']);
            $password = trim($_POST['logInPass']);

            $password = hash('sha512', $password);// Hash the Password Variable, for Comparison to the Password Stored in the Database

            $sqlSelect = "SELECT accountId, uname FROM accounts WHERE uname = '$uname' AND password = '$password'";
            //^^^ SQL Query That Selects all Rows Where the Entered Username and Password Match a Value in the accounts Table
            $result = $connection->prepare($sqlSelect);// Prepare the SQL Query and Sanitize the Data
            $result->execute();// Execute the SQL Query

            $uniqueUserCount = $result -> rowCount();// Set the Variable uniqueUserCount Variable to the Amount of Rows in the Table Returned in the Execute Statement Above
            //If Amount of Rows Returned Above is 1, Meaning a Unique User was Found, Perform the Code Within
            if ($uniqueUserCount == 1 ) {
                echo "Log in was Successful";
                //Iterate Through the Table Data
                foreach ($result as $key=> $row) {
                    session_start();// Start a Session

                    $_SESSION['accountId'] = $row['accountId'];
                    //^^^ Set the Session Variable accountId Equal to the Value in the accountId Column in the Table Data
                    $_SESSION['uname'] = $row['uname'];
                    //^^^ Set the Session Variable uname Equal to the Value in the uname Column in the Table Data

                    Header('Location: loggedIn.php');// Send the User to the Index Page
                }
            //If the Amount of Rows in the Table Data is Less or More Than 1, Perform Code Within
            } else {
                echo " <p> Log in was Unsuccessful </p>"; 
                echo "<a href='javascript:self.history.back();'> Go Back </a>";
            }
        }
        $connection = null;// Set the Database Connection to Null, so no SQL Injection can Take Place
        ?>
</main>

<?php
    include('includes/navigation/footer.html');
?>