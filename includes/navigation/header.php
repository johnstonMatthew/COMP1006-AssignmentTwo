<!DOCTYPE html>

<html lang="en">
    <head >
        <!-- Meta Data -->
        <meta charset="utf-8" >
        <meta name="viewport" content="width=device-width, initial-scale=1.0" >
        <meta name="robots" content="noindex, nofollow">
        <title> <?php echo $title; ?> || Matthew Johnston </title>
        <meta name="description" content="<?php echo $description; ?>">
        <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">

        <!-- CSS -->
        <link href="css/reset.css" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Akaya+Kanadaka&family=Sour+Gummy:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    </head>
    <!-- Page Body -->
    <body>
        <!-- Page Header -->
        <header>
            <div id="headerInfoContainer">
                <img src="images/logo.png" alt="Company Logo">
                <!-- Navigation -->
                <nav>
                    <menu> 
                        <li><a href="index.php">Home</a></li>
                        <li> <a href="loggedIn.php"> View Accounts </a> </li>
                    </menu>
                </nav>
                <!-- Log out Button -->
                <form method="POST" action="logout.php" id="logOutForm">
                    <?php 
                        session_start();
                        //If the Session Variable uname is not Null Output the Session Variable in a p tag
                        if (isset($_SESSION['uname'])) {
                            $username = $_SESSION['uname']; 
                            echo "<p> $username </p>"; 
                        }
                    ?> 
                    <button type="submit" name="logOutSubmit" > Log Out </button>
                </form>
            </div>
        </header>
    