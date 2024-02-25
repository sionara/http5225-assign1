<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 1</title>
</head>
<body>
    
    <h1> Employees and Sales </h1>
    <?php
        include("includes/database.php");
        $query = "SELECT * FROM
        employees";

        $result = mysqli_query($connect, $query);

        // checks connection with database and returns number of results found
        if (!$result)
        {
            echo 'Error Message: ' . mysqli_error($connect) . '<br>';
            exit;
        }

        echo '<p>The query found ' . mysqli_num_rows($result) . ' rows:</p>';

        // loops thru results and saves each row in record. 
        /// loop stops when there are no more rows of results
        while ($record = mysqli_fetch_assoc( $result )) {

            // echo "<pre>";
            // print_r( $record );
            // echo "</pre>";

            echo '<h2>' .$record["first_name"]. " " .$record["last_name"]. '</h2>';
            echo
            "<div>
                <div><strong>Sin Number</strong>: " .$record['sin']. "</div>
                <div><strong>Phone Number</strong>: " .$record['phone']. "</div>
                <div><strong>Department</strong>: " .$record['role']. "</div>
            </div>";
        }
    ?>

    <a href="sales.php">Click here to see the sales made this week.</a>
</body>
</html>