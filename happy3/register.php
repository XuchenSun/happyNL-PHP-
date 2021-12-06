<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["username"]))){
        $username_err = "Username can only contain letters, numbers, and underscores.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = ?";


        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken, please use another username";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Sorry! Something wrong, please try again.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have at least 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Sorry, passwords do not match.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
            
            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: login.php");
            } else{
                echo "Sorry! Something wrong, please try again later.";
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
    <title>Sign Up</title>
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
<canvas id="canvas">Canvas is not supported in your browser.</canvas>
<canvas id="canvas2">Canvas is not supported in your browser.</canvas>
    <div class="wrapper" >
        <h2 style="color: #2bff4d">Sign Up</h2>
        <p ><?php nihao(); ?></p>
        <p>Welcome to <a style="color: #2bff4d">37 Gambier Street</a> </p>

        <p>Please fill this form to create an account.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>">
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $confirm_password; ?>">
                <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-success" value="Submit">
                <input type="reset" class="btn btn-secondary ml-2" value="Reset">
            </div>
            <p>Already have an account? <a href="login.php" style="color: #2bff4d;font-size: large">Login here</a>.</p>
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