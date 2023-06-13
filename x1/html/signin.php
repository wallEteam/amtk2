<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/signin.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>sign in</title>
</head>
<body>
    <div class="container">
        <?php 
        if(isset($_POST["submit"])){
            $fullname=$_POST["fullname"];
            $email=$_POST["email"];
            $password=$_POST["password"];
            $passwordRepeat=$_POST["repeat_password"];
            $errors=array();
            $passwordHash=password_hash($password, PASSWORD_DEFAULT); 
            if(empty($fullname) OR empty($email) OR empty($password) OR empty($passwordRepeat))
            {
                array_push($errors,"All fields are required");
            }
            if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                array_push($errors, "Email is not valid");
            }
            if($password!==$passwordRepeat){
                array_push($errors,"password does not match");
            }
            require_once "database.php";
            $sql="SELECT *FROM users WHERE email='$email'";
            $result=mysqli_query($conn, $sql);
            $rowCount= mysqli_num_rows($result);
            if($rowCount>0)
            {
                array_push($errors,"Email already exists!");
            }
            if(count($errors)>0){
                foreach($errors as $errors){
                    echo "<div class='alert alert-danger'>$errors<div/>";
                }
            }else{  
                $sql=" INSERT INTO users (fullname, email, password) VALUES(?,?,?)";
                $stmt = mysqli_stmt_init($conn);
                $preparestmt=mysqli_stmt_prepare($stmt,$sql);
                if($preparestmt){
                    mysqli_stmt_bind_param($stmt,"sss",$fullname,$email,$passwordHash);
                    mysqli_stmt_execute($stmt);
                    echo "<div class' alert alert-success'>you are registered successfully.<div/>";
                }else{
                    die("something went wrong");
                }
            }
        }
        ?>
        <form action="signin.php" method="POST">
            <div class="form-group">
                <input type="text" name="fullname" class="form-control" placeholder="Full name">
            </div>
            <div class="form-group">
                <input type="text" name="email" class="form-control" placeholder="email">
            </div>
            <div class="form-group">
                <input type="text" name="password" class="form-control" placeholder="password">
            </div>
            <div class="form-group">
                <input type="text" name="repeat_password" class="form-control" placeholder="repeat password">
            </div>
            <div class="form-group">
                <input type="submit" value="signin" class="btn btn-primary" name="submit">
            </div>
            <div><p>already signing in<a href="loginform.php">Log in!</a></p></div>
        </form>
    </div>
</body>
</html>