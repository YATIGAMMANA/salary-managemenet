<?php

require 'dbcon.php';

if(isset($_POST['save_employee']))
{    
    $employee_id = mysqli_real_escape_string($con, $_POST['employee_id']);
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $position = mysqli_real_escape_string($con, $_POST['position']);
    $basic = mysqli_real_escape_string($con, $_POST['basic']);
    $dow = mysqli_real_escape_string($con, $_POST['dow']);

    if($employee_id == NULL ||$name == NULL || $email == NULL || $phone == NULL || $position == NULL || $basic == NULL || $dow == NULL)
    {
        $res = [
            'status' => 422,
            'message' => 'All fields are mandatory'
        ];
        echo json_encode($res);
        return;
    }

    $query = "INSERT INTO employees (employee_id,name,email,phone,position,basic,dow) VALUES ('$employee_id','$name','$email','$phone','$position','$basic','$dow')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $res = [
            'status' => 200,
            'message' => 'Employee Created Successfully'
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 500,
            'message' => 'Employee Not Created'
        ];
        echo json_encode($res);
        return;
    }
}


if(isset($_POST['update_employee']))
{
    $employee_id = mysqli_real_escape_string($con, $_POST['employee_id']);

    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $position = mysqli_real_escape_string($con, $_POST['position']);
    $basic= mysqli_real_escape_string($con, $_POST['basic']);
    $dow = mysqli_real_escape_string($con, $_POST['dow']);

    if($employee_id == NULL ||$name == NULL || $email == NULL || $phone == NULL || $position == NULL || $basic == NULL || $dow == NULL)
    {
        $res = [
            'status' => 422,
            'message' => 'All fields are required'
        ];
        echo json_encode($res);
        return;
    }

    $query = "UPDATE employees SET name='$name', email='$email', phone='$phone', position='$position', basic='$basic',dow='$dow' 
                WHERE employee_id='$employee_id'";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $res = [
            'status' => 200,
            'message' => 'Employee Updated Successfully'
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 500,
            'message' => 'Employee Not Updated'
        ];
        echo json_encode($res);
        return;
    }
}


if(isset($_GET['employee_id']))
{
    $employee_id = mysqli_real_escape_string($con, $_GET['employee_id']);

    $query = "SELECT * FROM employees WHERE employee_id='$employee_id'";
    $query_run = mysqli_query($con, $query);

    if(mysqli_num_rows($query_run) == 1)
    {
        $employee = mysqli_fetch_array($query_run);

        $res = [
            'status' => 200,
            'message' => 'Employee Fetch Successfully by id',
            'data' => $employee
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 404,
            'message' => 'Employee Id Not Found'
        ];
        echo json_encode($res);
        return;
    }
}

if(isset($_POST['delete_employee']))
{
    $employee_id = mysqli_real_escape_string($con, $_POST['employee_id']);

    $query = "DELETE FROM employees WHERE employee_id='$employee_id'";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $res = [
            'status' => 200,
            'message' => 'Employee Deleted Successfully'
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 500,
            'message' => 'Employee Not Deleted'
        ];
        echo json_encode($res);
        return;
    }
}

?>