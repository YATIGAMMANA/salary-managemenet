<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salary</title>
    <link rel="stylesheet" href="login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body class="salary" >
    
  
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
    <script>
        function netsal() {
            var dp,netsl, ta, da, hra, pf, net,dow,basic;
            dp = parseFloat(document.getElementById("s").value);

            <?php 
                                    $con = mysqli_connect("localhost","root","","salary");

                                    if(isset($_GET['employee_id']))
                                    {
                                        $employee_id = $_GET['employee_id'];

                                        $query = "SELECT * FROM employees WHERE employee_id='$employee_id' ";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $row)
                                            {
                                                ?>


            dow = "<?= $row['dow']; ?>";
            <?php
                                            }
                                        }
                                        else
                                        {
                                            echo "No Record Found";
                                        }
                                    }
                                   
                                ?>

<?php 
                                    $con = mysqli_connect("localhost","root","","salary");

                                    if(isset($_GET['employee_id']))
                                    {
                                        $employee_id = $_GET['employee_id'];

                                        $query = "SELECT * FROM employees WHERE employee_id='$employee_id' ";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $row)
                                            {
                                                ?>


            basic = <?= $row['basic']; ?>;
            <?php
                                            }
                                        }
                                        else
                                        {
                                            echo "No Record Found";
                                        }
                                    }
                                   
                                ?>

            netsl = dp * dow;
            ta = dp * 15 / 100;
            da = dp * 12 / 100;
            hra = dp * 15 / 100;
            pf = dp * 18 / 100;
            net =  basic+(netsl + ta + da + hra - pf);
            net = Math.round(net*100)/100;
            document.getElementById("ta").value = ta;
            document.getElementById("da").value = da;
            document.getElementById("hra").value = hra;
            document.getElementById("pf").value = pf;
            document.getElementById("net").value = net;
            document.getElementById("netsl").value = netsl;

        }
    
        function prt() {
            window.print();
        }
    </script>
     <div class="center-content">
        <table>
        <form action="" method="GET">
            <tr>
            <td>
                   <label for="n">Enter ID</label>
                </td>
                <td>
                    <input type="text" name="employee_id" value="<?php if(isset($_GET['employee_id'])){echo $_GET['employee_id'];} ?>" class="form-control">
                </td>
            </tr>


                   
                <tr>
                   <td colspan="2">
                      <button type="submit" class="btn btn-primary">Enter</button>
                   </td>
                </tr>
       </form>
                                <?php 
                                    $con = mysqli_connect("localhost","root","","salary");

                                    if(isset($_GET['employee_id']))
                                    {
                                        $employee_id = $_GET['employee_id'];

                                        $query = "SELECT * FROM employees WHERE employee_id='$employee_id' ";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $row)
                                            {
                                                ?>
                                            <tr>
                                                
                                                <div class="form-group mb-3">
                                                <td>
                                                    <label for="">Name</label>
                                                </td>
                                                <td>
                                                    <input type="text" value="<?= $row['name']; ?>" class="form-control">
                                                </td>
                                                </div>
                                            </tr>
                                            <tr>
                                                <div class="form-group mb-3">
                                                <td>
                                                    <label for="">Dow</label>
                                                </td>
                                                <td>
                                                    <input type="text" value="<?= $row['dow']; ?>" class="form-control">
                                                </td>
                                                </div>
                                            </tr>

                                            <tr>
                                                <div class="form-group mb-3">
                                                <td>
                                                    <label for="">Basic salary</label>
                                                </td>
                                                <td>
                                                    <input type="text" value="<?= $row['basic']; ?>" class="form-control">
                                                </td>
                                                </div>
                                            </tr>
                                            
                                                
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            echo "No Record Found";
                                        }
                                    }
                                   
                                ?>
                            

            <tr>
                <td>
                    <label for="s">Enter Day Payment</label>
                </td>
                <td>
                    <input type="text" id="s" name="Enter Day Payment">
                </td>
            </tr>
            <tr>
                <td>Net Salary:</td>
                <td>
                    <input type="text" id="netsl" readonly>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <button onclick="netsal()" class= "btn btn-primary">Calculate Salary</button>
                </td>
            </tr>
            <tr>
                <td>Travelling Allowance:</td>
                <td>
                    <input type="text" id="ta" readonly>
                </td>
            </tr>
            <tr>
                <td>Dearness Allowance:</td>
                <td>
                    <input type="text" id="da" readonly>
                </td>
            </tr>
            <tr>
                <td>House Rent Allowance:</td>
                <td>
                    <input type="text" id="hra" readonly>
                </td>
            </tr>
            <tr>
                <td>Provident Fund:</td>
                <td>
                    <input type="text" id="pf" readonly>
                </td>
            </tr>
            <tr>
                <td>Net Salary:</td>
                <td>
                    <input type="text" id="net" readonly>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <button onclick="prt()" class="btn btn-primary">Print</button>
                </td>
            </tr>
       
    </div>                    
                             

    

    
</table>
    
    

</body>

</html>