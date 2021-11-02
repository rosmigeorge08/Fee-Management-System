<?php 
session_start(); 
include "connection.php";
if (isset($_POST['username']) && isset($_POST['password'])) {
    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }
    $uname = validate($_POST['username']);
    $pass = validate($_POST['password']);

    $sql = "SELECT * FROM login WHERE username='$uname' AND password='$pass'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        if ($row['username'] === $uname && $row['password'] === $pass) {
            echo "Logged in!";
            $_SESSION['username'] = $row['username'];
            header("Location: home.html");
            exit();
        }else{
            header("Location: index.php?error=Incorect User name or password");
            exit();
        }
    }else{
        header("Location: index.php?error=Incorect User name or password");
        exit();
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Fee Management System</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/44acdbf731.js" crossorigin="anonymous"></script>
        <link href="styles.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    </head>

    <body>
        <div class="bg_img">
            <br><br>
            <h1 class="display-5 lh-1 mb-3 fw-bold" style="text-align: center; color: #FFF;">FEE MANAGEMENT SYSTEM</h1>
            <br>
            <div class="container">
                <form action="#" method="post">
                    <?php if (isset($_GET['error'])) { ?>
                        <p class="error"><?php echo $_GET['error']; ?></p>
                    <?php } ?>
                    <div class="row"> 
                        <div class="column">
                            <label for="username"><h5><i class="fas fa-user" style="color: #1A759F;"></i> Username:</h5></label>
                            <br>
                            <input type="text" class="login" id="username" name="username" required>
                            <br>
                            <label for="password" style="margin-top: 30px;"><h5><i class="fas fa-unlock-alt" style="color: #1A759F;"></i> Password:</h5></label>
                            <br>
                            <input type="password" class="login" id="password" name="password" required>
                            <br>
                            <button class="btn btn4" name="submit" type="submit">Login</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>