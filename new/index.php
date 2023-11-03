<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Login Form</title>
    <link rel="stylesheet" href="login.css">
   
   
</head>
<body class="loginpg">


    <div >

        <form class="form" action="login.php"  method="post">

        
            <img src="logo.png" alt="" width="100px" style="padding-top: 20px;">
            
            <h1 class="heading1">LOGIN</h1>
            <?php if (isset($_GET['error'])) {?>
            
            
                <p class = "error"> <?php echo $_GET['error'];?></p>
                <?php } ?>
            
            <div class="form-group">
         
                <input type="text" name="uname" class="box" placeholder="Enter Username">
                <input type="password" name="password" class="box" placeholder="Enter password">
                
                <input type="submit" class="submit" id="submit">
                
            </div>
    
        </form>
    </div>
</body>
</html>