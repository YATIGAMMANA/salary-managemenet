<?php
   session_start();
   if(isset ($_SESSION['id']) && isset ($_SESSION['user_name'])){
    ?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="login.css">
</head>

<body class="body" >
    
    <nav class="nav-layout">
        <div class="logo">
            <h1 style="font-family:Arial, Helvetica, sans-serif">Salary Management System</p></h1>
        </div>
        <div>


            <ul>
                <li> <a href="./home.php">Home</a></li>
                <li><a href="./attendence.php">Attendance</a></li>
                <li><a href="./salary.php">Salary</a></li>
            
            </ul>
        </div>


    </nav>

    <div class="content-items"></div>

    <div>
        <h2 class="heading-2" style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;text-align: center;" >Welcome to the Salary Management System!</h2>
        <Pre>

        </Pre>
        <p class="description"  style="font-family:Arial, Helvetica, sans-serif;"> Our platform is designed to streamline the <br>
            process of managing employee salaries efficiently and securely. <br>
            The home page provides an overview of essential information and quick <br> 
            access to key features for HR managers and administrators. </b>
       </p>
    </div>

    

    
    

</body>

</html>
<?php
}
else{
    header("Location:index.php");
    exit();
}
?>