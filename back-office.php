<?php
include './dbh.php';

$sql = "SELECT * from users"; // Inserting data into the database
$result = $db->query($sql);
$message = $result->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Ornina Review</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #ea7373;
            margin: 50px;
        }

        h1 {
            text-align: center;
            font-size: 50px;
            font-family: 'Roboto', sans-serif;

        }
    </style>
</head>

<body>
    <!-- <img src="./assets/img/ornina.png" alt=""> -->
    <a href="index.php" class="logo me-auto me-lg-0"><img src="../assets/img/ornina.png" alt="logo"></a>
    <h1>Ornina Clients Review</h1>
    <table class="table">
        <thead>
            <tr>

                <th>Name</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Image</th>
                <th>Message</th>
            </tr>
        </thead>

        <tbody>
            <?php
            foreach ($message as $row) {
                echo "<tr>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['subject'] . "</td>";
                echo "<td>" . $row['image'] . "</td>";
                echo "<td>" . $row['message'] . "</td>";
                echo "<td><a class='btn btn-danger btn-sm" . $row['id'] . "'>Delete</a></td>";
                echo "<td><a class='btn btn-primary btn-sm" . $row['id'] . "'>Edit</a></td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>

</html>