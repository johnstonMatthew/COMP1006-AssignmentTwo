<?php 
    $title = "Logged In Page || Assignment 2 PHP";
    $description = "This Page can Only be Viewed When Logged in";
    include('includes/navigation/header.php');
    include_once('includes/php/database.php');
    include_once('includes/php/validate.php');

    $accountTable = $connection->prepare("SELECT * FROM accounts");
    $accountTable->execute();
    $accountData = $accountTable->fetchAll();
?>
<!-- Page Main -->
<main id="accountViewerMain">
    <!-- Table to Display Account Info -->
    <?php 
        if (!isset($_SESSION['accountId']) ) {
            Header('Location:index.php');
            exit();
        } else {
            echo " <h1> Thank you for Joining us!! </h1>
            <h3> Here are all of the Wonderful People who Have Joined us!! </h3>
            <table>
                <thead>
                    <tr> 
                        <th> Account Name </th>
                        <th> Email </th>
                    </tr>
                </thead>

                <tbody>";
                // Iterate Through the Table Data Returned, and Print out Each Column
                foreach ($accountData as $key=> $row ) {
                    echo "<tr>";
                    echo "<td>" . $row['uname'] . "</td>";   
                    echo "<td>" . $row['email'] . "</td>";   
                    echo "</tr>";
                }
                $connection = null;

                echo "
                </tbody>
            </table>"; 
        }
    ?>
</main>

<?php 
    include('includes/navigation/footer.html');
?>