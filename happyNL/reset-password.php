<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, otherwise redirect to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
 
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$new_password = $confirm_password = "";
$new_password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate new password
    if(empty(trim($_POST["new_password"]))){
        $new_password_err = "Please enter the new password.";     
    } elseif(strlen(trim($_POST["new_password"])) < 6){
        $new_password_err = "Password must have atleast 6 characters.";
    } else{
        $new_password = trim($_POST["new_password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm the password.";
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($new_password_err) && ($new_password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
        
    // Check input errors before updating the database
    if(empty($new_password_err) && empty($confirm_password_err)){
        // Prepare an update statement
        $sql = "UPDATE users SET password = ? WHERE id = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "si", $param_password, $param_id);
            
            // Set parameters
            $param_password = password_hash($new_password, PASSWORD_DEFAULT);
            $param_id = $_SESSION["id"];
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Password updated successfully. Destroy the session, and redirect to login page
                session_destroy();
                header("location: login.php");
                exit();
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
    $t=date("H");
    if($t<="12"){ echo "Good morning, ";}
    if($t<="18"&$t>"12"){echo "Good afternoon, ";}
    if($t>"18"){echo "Good evening, ";}
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Reset Password</title>
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

    <div class="wrapper" >
        <h2 style="color: #2bff4d" >Reset Password</h2>
        <p>Please fill out this form to reset your password.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"> 
            <div class="form-group">
                <label>New Password</label>
                <input type="password" name="new_password" class="form-control <?php echo (!empty($new_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $new_password; ?>">
                <span class="invalid-feedback"><?php echo $new_password_err; ?></span>
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>">
                <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-success" value="Submit">
                <a class="btn btn-secondary ml-2" href="welcome.php">Cancel</a>
            </div>
        </form>
    </div>
<canvas id="canvas">Canvas is not supported in your browser.</canvas>
<canvas id="canvas2">Canvas is not supported in your browser.</canvas>
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