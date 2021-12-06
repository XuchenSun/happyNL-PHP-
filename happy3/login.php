<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: welcome.php");
    exit;
}
 
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = $login_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, username, password FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            
                            // Redirect user to welcome page
                            header("location: welcome.php");
                        } else{
                            // Password is not valid, display a generic error message
                            $login_err = "Invalid username or password.";
                        }
                    }
                } else{
                    // Username doesn't exist, display a generic error message
                    $login_err = "Invalid username or password.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
function nihao(){

    $time=time();
    echo date("m-d",$time);



}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 1em sans-serif;overflow: hidden; }
        #realColor {color:green;}
        canvas {
            display: block;

            top:0;
            left:0;
        }
        .wrapper{ width: 45vw;color:green;height: 70vh;left: 28%;top:7%;text-align:center;position: absolute }
    </style>

</head>
<body>


<canvas id="canvas"></canvas>
<canvas id="canvas2"></canvas>

    <div class="wrapper">

        <p style="color: #2bff4d; font-size: 2em">Login</p>
        <p ><?php nihao(); ?></p>
        <p>Welcome to <a style="color: #2bff4d">37 Gambier Street</a> </p>
        <p id="realColor" style="font-size: 0.8em;">Please fill in your credentials to login.</p>

        <?php 
        if(!empty($login_err)){
            echo '<div class="alert alert-danger">' . $login_err . '</div>';
        }        
        ?>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label style="font-size: 1em;">Username</label>
                <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group">
                <label style="font-size: 1em;">Password</label>
                <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-success" value="Login">
            </div>
            <p style="font-size: 1em;">Don't have an account? <a href="register.php" style="color: #2bff4d;font-size: 1em;"> Sign up now</a>.</p>
        </form>
    </div>


<script>
    var canvas = document.getElementById( 'canvas' ),
        ctx = canvas.getContext( '2d' ),
        canvas2 = document.getElementById( 'canvas2' ),
        ctx2 = canvas2.getContext( '2d' ),
        // full screen dimensions
        cw = window.innerWidth,
        ch = window.innerHeight,
        charArr = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','孙','旭','晨'],
        maxCharCount = 100,
        fallingCharArr = [],
        fontSize = 10,
        maxColums = cw/(fontSize);
    canvas.width = canvas2.width = cw;
    canvas.height = canvas2.height = ch;


    function randomInt( min, max ) {
        return Math.floor(Math.random() * ( max - min ) + min);
    }

    function randomFloat( min, max ) {
        return Math.random() * ( max - min ) + min;
    }

    function Point(x,y)
    {
        this.x = x;
        this.y = y;
    }

    Point.prototype.draw = function(ctx){

        this.value = charArr[randomInt(0,charArr.length-1)].toUpperCase();
        this.speed = randomFloat(1,5);


        ctx2.fillStyle = "rgba(255,255,255,0.8)";
        ctx2.font = fontSize+"px san-serif";
        ctx2.fillText(this.value,this.x,this.y);

        ctx.fillStyle = "#0F0";
        ctx.font = fontSize+"px san-serif";
        ctx.fillText(this.value,this.x,this.y);



        this.y += this.speed;
        if(this.y > ch)
        {
            this.y = randomFloat(-100,0);
            this.speed = randomFloat(2,5);
        }
    }

    for(var i = 0; i < maxColums ; i++) {
        fallingCharArr.push(new Point(i*fontSize,randomFloat(-500,0)));
    }


    var update = function()
    {

        ctx.fillStyle = "rgba(0,0,0,0.05)";
        ctx.fillRect(0,0,cw,ch);

        ctx2.clearRect(0,0,cw,ch);

        var i = fallingCharArr.length;

        while (i--) {
            fallingCharArr[i].draw(ctx);
            var v = fallingCharArr[i];
        }

        requestAnimationFrame(update);
    }

    update();
</script>
</body>
</html>