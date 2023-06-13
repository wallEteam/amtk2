<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/signin.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>login form</title>
</head>
<body>
    <div class="container">
        <?php 
        if(isset($_POST["login"])){
            $email=$_POST["email"];
            $password=$_POST["password"];
            require_once "database.php";
            $sql="SELECT * FROM users WHERE email= '$email'";
            $result=mysqli_query($conn, $sql);
            $user=mysqli_fetch_array($result, MYSQLI_ASSOC);
            if($user){
                if(password_verify($password, $user["password"])){
                    session_start();
                    $_SESSION["user"]="yes";
                    header("Location:mainpage.php");
                    die();
                }else{
                    echo "<div class='alert alert-danger'> password dose not match<div/>";
                }
            }else{
                echo "<div class='alert alert-danger'> Email dose not match<div/>";
            }
        }

        ?>
        <form method="post" action="loginform.php">
            <div class="form-group">
                <input type="email" placeholder="enter email" name="email" class="form-control">
            </div>
            <div class="form-group">
                <input type="password" placeholder="enter password" name="password" class="form-control">
            </div>
            <div class="form-btn">
                <input type="submit" value="login" name="login" class="btn btn-primary">
            </div>
            <div><p>are you have any account?<a href="signin.php">sign in!</a></p></div>
        </form>
    </div>
</body>
</html>