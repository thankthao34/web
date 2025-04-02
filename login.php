<?php
    include 'components/connection.php';
    session_start();

    if (isset($_SESSION['user_id'])) {
        $user_id = $_SESSION['user_id'];
    } else {
        $user_id = '';
    }

    //register user
    if (isset($_POST['submit'])) {
        $id = unique_id();
        $email = htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');
        $pass = htmlspecialchars($_POST['pass'], ENT_QUOTES, 'UTF-8');

        $select_user = $conn->prepare("SELECT * FROM `users` WHERE email = ? AND password =?");
        $select_user->execute([$email,$pass]);
        $row = $select_user->fetch(PDO::FETCH_ASSOC);

        if ($select_user->rowCount() > 0) {
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['user_name'] = $row['name'];
            $_SESSION['user_email'] = $row['email'];
            header("Location: home.php");
            exit();
        }else{
            $message[]="incorrect username or password";
        }
    }
?>
<style type ="text/css">
    <?php include 'style.css'; ?>
</style>
<!DOCTYPE html>
<html lang ="en">
    <head>
        <meta charset="UTF-8">
        <meta name ="viewport" content="width=device-width, initial-scale=1.0">
        <title>retro shop- Login now</title>
    </head>
    <body>
        <div class="main-container">
            <section class="form-container">
                <div class="title">
                    <img src="image/download.png">
                    <h1>Login now</h1>
                    <p>Retro Shop mang đến không gian hoài cổ đầy cảm hứng cho những
                    ai yêu thích 
                    đồ cổ.
                    </p>
                </div>
                <form action="" method="post">
                    <div class="input-field">
                        <p>your email <sup>*</sup></p>
                        <input type="email" name="email" required placeholder="enter your email" maxlength="50"
                        oninput="this.value = this.value.replace(/\s/g, '')">
                    </div>
                    <div class="input-field">
                        <p>your password <sup>*</sup></p>
                        <input type="password" name="pass" required placeholder="enter your password" maxlength="50"
                        oninput="this.value = this.value.replace(/\s/g, '')">
                    </div>
                    <input type="submit" name ="submit" value="Login now" class="btn">
                    <p>do not have an account? <a href="register.php">register now</a></p>
                </form>
            </section>
    </div>
    </body>
</html>