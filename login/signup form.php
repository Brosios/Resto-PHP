<?php
// Include config file
require_once('./config.php');



// Processing form data when form is submitted
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>User Registration</title>
</head>

<body>
    <div>
        <?php
        if (isset($_POST['create'])) {
            $firstname                = $_POST['firstName'];
            $lastname                 = $_POST['lastName'];
            $username                = $_POST['userName'];
            $email                       = $_POST['email'];
            $password                = $_POST['password'];
            $confirmpassword    = $_POST['confirmPass'];

            $sql = 'INSERT INTO users2 (firstname, lastname, username, email, password, confirmpassword) VALUES (:first, :last, :user, :email, :pwd, :pwd2)';
            $stmtinsert = $db->prepare($sql);
            $result = $stmtinsert->execute([
                ':first' => $firstname,
                ':last' => $lastname,
                ':user' => $username,
                ':email' => $email,
                ':pwd' => $password,
                ':pwd2' => $confirmpassword
            ]);
            if ($result) {
                echo "User created successfully.";
            } else {
                echo "Error creating user.";
            }
        }
        ?>
    </div>
    <div>
        <form action="./signup form.php" method="POST">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <h1>Registration</h1>
                        <p>Please fill in this form to create an account.</p>
                        <hr class="mb-3">
                        <label for="firstName"><b>First Name</b></label>
                        <input class="form-control" type="text" name="firstName" required>

                        <label for="lastName"><b>Last Name</b></label>
                        <input class="form-control" type="text" name="lastName" required>

                        <label for="userName"><b>User Name</b></label>
                        <input class="form-control" type="text" name="userName" required>

                        <label for="email"><b>Email</b></label>
                        <input class="form-control" type="email" name="email" required>

                        <label for="password"><b>password</b></label>
                        <input class="form-control" type="password" name="password" required>

                        <label for="confirmPass"><b>confirm Password</b></label>
                        <input class="form-control" type="password" name="confirmPass" required>

                        <hr class="mb-3">
                        <input class="btn btn-primary" type="submit" name="create" value="Sign Up">
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>