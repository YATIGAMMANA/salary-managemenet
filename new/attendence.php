<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="login.css">

 <!--  Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Attendance</title>
    

    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>

</head>
<body>

   <nav class="nav-layout"></nav>
   

<!-- Add Employee -->
<div class="modal fade" id="employeeAddModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
           <div class="modal-header">
             <h5 class="modal-title" id="exampleModalLabel">Add Employee</h5>
             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
        <form id="saveEmployee">
            <div class="modal-body">
           
                <div class="mb-3">
                    <label for="employee_id">EmpID</label>
                    <input type="text" name="employee_id" id="employee_id" class="form-control" />
                </div>

                <div class="mb-3">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control" />
                </div>
                <div class="mb-3">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" class="form-control" />
                </div>
                <div class="mb-3">
                    <label for="phone">Phone</label>
                    <input type="text" name="phone" id="phone" class="form-control" />
                </div>
                <div class="mb-3">
                    <label for="position">Position</label>
                    <select name="position" id="position" class="form-control">
                        <option value="Software Enginner">Software Enginner</option>
                        <option value="QA Engineer">QA Enginner</option>
                        <option value="Netwark Engineer">Netwark Enginner</option>
                        <option value="Priject Manager">Project Manager</option>
                        <option value="Developer">Developer</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="basic">Basic</label>
                    <input type="text" name="basic" id="basic" class="form-control" />
                </div>
                <div class="mb-3">
                    <label for="dow">Dow</label>
                    <input type="text" name="dow" id="dow" class="form-control" />
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save Employee</button>
            </div>
        </form>
        </div>
    </div>
</div>

<!-- Edit Employee Modal -->
<div class="modal fade" id="employeeEditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Employee</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form id="updateEmployee">
            <div class="modal-body">

                <div id="errorMessageUpdate" class="alert alert-warning d-none"></div>

                <input type="hidden" name="employee_id" id="employee_id" >
                

               <div class="mb-3">
                    <label for="">EmpID</label>
                    <input type="text" name="employee_id" id="employee_id_edit" class="form-control"/>
                </div>
                <div class="mb-3">
                    <label for="">Name</label>
                    <input type="text" name="name" id="name_edit" class="form-control" />
                </div>
                <div class="mb-3">
                    <label for="">Email</label>
                    <input type="text" name="email" id="email_edit" class="form-control" />
                </div>
                <div class="mb-3">
                    <label for="">Phone</label>
                    <input type="text" name="phone" id="phone_edit" class="form-control" />
                </div>
                <div class="mb-3">
                    <label for="">Position</label>
                    <input type="text" name="position" id="position_edit" class="form-control" />
                </div>
                <div class="mb-3">
                    <label for="">Basic</label>
                    <input type="text" name="basic" id="basic_edit" class="form-control" />
                </div>
                <div class="mb-3">
                    <label for="">Dow</label>
                    <input type="text" name="dow" id="dow_edit" class="form-control" />
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Update Employee</button>
            </div>
        </form>
        </div>
    </div>
</div>

<!-- View Employee Modal -->
<div class="modal fade" id="employeeViewModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">View Employee</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
            <div class="modal-body">
                
                 
            <div class="mb-3">
                    <label for="">EmpID</label>
                    <p id="view_id" class="form-control"></p>
                </div>

                <div class="mb-3">
                    <label for="">Name</label>
                    <p id="view_name" class="form-control"></p>
                </div>
                <div class="mb-3">
                    <label for="">Email</label>
                    <p id="view_email" class="form-control"></p>
                </div>
                <div class="mb-3">
                    <label for="">Phone</label>
                    <p id="view_phone" class="form-control"></p>
                </div>
                <div class="mb-3">
                    <label for="">Position</label>
                    <p id="view_position" class="form-control"></p>
                </div>
                <div class="mb-3">
                    <label for="">Basic</label>
                    <p id="view_basic" class="form-control"></p>
                </div>
                <div class="mb-3">
                    <label for="">Dow</label>
                    <p id="view_dow" class="form-control"></p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="container mt-4">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Attendance
                        
                        <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#studentAddModal">
                            <a href="salary.php">SALARY</a>
                        </button><br><br><br>

                        <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#employeeAddModal">
                            Add Employee
                        </button>
                    </h4>
                </div>
                <div class="card-body">

                    <table id="myTable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Position</th>
                                <th>Basic</th>
                                <th>Dow</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            require 'dbcon.php';

                            $query = "SELECT * FROM employees";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                foreach($query_run as $employee)
                                {
                                    ?>
                                    <tr>
                                        <td><?= $employee['employee_id'] ?></td>
                                        <td><?= $employee['name'] ?></td>
                                        <td><?= $employee['email'] ?></td>
                                        <td><?= $employee['phone'] ?></td>
                                        <td><?= $employee['position'] ?></td>
                                        <td><?= $employee['basic'] ?></td>
                                        <td><?= $employee['dow'] ?></td>
                                        <td>
                                            <button type="button" value="<?=$employee['employee_id'];?>" class="viewEmployeeBtn btn btn-info btn-sm">View</button>
                                            <button type="button" value="<?=$employee['employee_id'];?>" class="editEmployeeBtn btn btn-success btn-sm">Edit</button>
                                            <button type="button" value="<?=$employee['employee_id'];?>" class="deleteEmployeeBtn btn btn-danger btn-sm">Delete</button>
                                        </td>
                                    </tr>
                                    <?php
                                }
                            }
                            ?>
                            
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

    <script>
        $(document).on('submit', '#saveEmployee', function (e) {
            e.preventDefault();

            var formData = new FormData(this);
            formData.append("save_employee", true);

            $.ajax({
                type: "POST",
                url: "code.php",
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
                    
                    var res = jQuery.parseJSON(response);
                    if(res.status == 422) {
                        $('#errorMessage').removeClass('d-none');
                        $('#errorMessage').text(res.message);

                    }else if(res.status == 200){

                        $('#errorMessage').addClass('d-none');
                        $('#employeeAddModal').modal('hide');
                        $('#saveEmployee')[0].reset();

                        alertify.set('notifier','position', 'top-right');
                        alertify.success(res.message);

                        $('#myTable').load(location.href + " #myTable");

                    }else if(res.status == 500) {
                        alert(res.message);
                    }
                }
            });

        });


        $(document).on('click', '.editEmployeeBtn', function () {

            var employee_id = $(this).val();
            $.ajax({
                type: "GET",
                url: "code.php?employee_id=" + employee_id,
                success: function (response) {

                    var res = jQuery.parseJSON(response);                    
                    if(res.status == 404) {
                        alert(res.message);
                    }else if(res.status == 200){

                        $('#employee_id_edit').val(res.data.employee_id);
                        $('#name_edit').val(res.data.name);
                        $('#email_edit').val(res.data.email);
                        $('#phone_edit').val(res.data.phone);
                        $('#position_edit').val(res.data.position);
                        $('#basic_edit').val(res.data.basic);
                        $('#dow_edit').val(res.data.dow); 

                        $('#employeeEditModal').modal('show');
                    }

                }
            });

        });

        $(document).on('submit', '#updateEmployee', function (e) {
            e.preventDefault();

            var formData = new FormData(this);
            formData.append("update_employee", true);

            $.ajax({
                type: "POST",
                url: "code.php",
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
                    
                    var res = jQuery.parseJSON(response);
                    if(res.status == 422) {
                        $('#errorMessageUpdate').removeClass('d-none');
                        $('#errorMessageUpdate').text(res.message);

                    }else if(res.status == 200){

                        $('#errorMessageUpdate').addClass('d-none');

                        alertify.set('notifier','position', 'top-right');
                        alertify.success(res.message);
                        
                        $('#employeeEditModal').modal('hide');
                        $('#updateEmployee')[0].reset();

                        $('#myTable').load(location.href + " #myTable");

                    }else if(res.status == 500) {
                        alert(res.message);
                    }
                }
            });

        });

        $(document).on('click', '.viewEmployeeBtn', function () {

            var employee_id = $(this).val();
            $.ajax({
                type: "GET",
                url: "code.php?employee_id=" + employee_id,
                success: function (response) {

                    var res = jQuery.parseJSON(response);
                    
                    if(res.status == 404) {
                        alert(res.message);
                    }else if(res.status == 200){
                        
                        $('#view_id').text(res.data.employee_id);
                        $('#view_name').text(res.data.name);
                        $('#view_email').text(res.data.email);
                        $('#view_phone').text(res.data.phone);
                        $('#view_position').text(res.data.position);
                        $('#view_basic').text(res.data.basic);
                        $('#view_dow').text(res.data.dow);
                        $('#view_employee').text(res.data.employee);

                        $('#employeeViewModal').modal('show');
                    }
                }
            });
        });

        $(document).on('click', '.deleteEmployeeBtn', function (e) {
            e.preventDefault();

            if(confirm('Are you sure you want to delete this data?'))
            {
                var employee_id = $(this).val();
                $.ajax({
                    type: "POST",
                    url: "code.php",
                    data: {
                        'delete_employee': true,
                        'employee_id': employee_id
                    },
                    success: function (response) {

                        var res = jQuery.parseJSON(response);
                        if(res.status == 500) {

                            alert(res.message);
                        }else{
                            alertify.set('notifier','position', 'top-right');
                            alertify.success(res.message);

                            $('#myTable').load(location.href + " #myTable");
                        }
                    }
                });
            }
        });

    </script>

</body>
</html>