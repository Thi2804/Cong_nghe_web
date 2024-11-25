<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Management</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            color: #566787;
            background: #f5f5f5;
            font-family: 'Varela Round', sans-serif;
            font-size: 13px;
        }

        .table-responsive {
            margin: 30px 0;
        }

        .table-wrapper {
            background: #fff;
            padding: 20px 25px;
            border-radius: 3px;
            min-width: 1000px;
            box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
        }

        .table-title {
            padding-bottom: 15px;
            background: #435d7d;
            color: #fff;
            padding: 16px 30px;
            min-width: 100%;
            margin: -20px -25px 10px;
            border-radius: 3px 3px 0 0;
        }

        .table-title h2 {
            margin: 5px 0 0;
            font-size: 24px;
        }

        .table-title .btn-group {
            float: right;
        }

        .table-title .btn {
            color: #fff;
            float: right;
            font-size: 13px;
            border: none;
            min-width: 50px;
            border-radius: 2px;
            outline: none !important;
            margin-left: 10px;
        }

        .table-title .btn i {
            float: left;
            font-size: 21px;
            margin-right: 5px;
        }

        table.table tr th,
        table.table tr td {
            border-color: #e9e9e9;
            padding: 12px 15px;
            vertical-align: middle;
        }

        table.table tr th:first-child {
            width: 60px;
        }

        table.table tr th:last-child {
            width: 100px;
        }

        table.table-striped tbody tr:nth-of-type(odd) {
            background-color: #fcfcfc;
        }

        table.table-striped.table-hover tbody tr:hover {
            background: #f5f5f5;
        }

        table.table td:last-child i {
            opacity: 0.9;
            font-size: 22px;
            margin: 0 5px;
        }

        table.table td a {
            font-weight: bold;
            color: #566787;
            display: inline-block;
            text-decoration: none;
            outline: none !important;
        }

        table.table td a:hover {
            color: #2196F3;
        }

        table.table td a.edit {
            color: #FFC107;
        }

        table.table td a.delete {
            color: #F44336;
        }

        table.table td i {
            font-size: 19px;
        }

        table.table .avatar {
            border-radius: 50%;
            vertical-align: middle;
            margin-right: 10px;
        }

        .pagination {
            float: right;
            margin: 0 0 5px;
        }

        .pagination li a {
            border: none;
            font-size: 13px;
            min-width: 30px;
            min-height: 30px;
            color: #999;
            margin: 0 2px;
            line-height: 30px;
            border-radius: 2px !important;
            text-align: center;
            padding: 0 6px;
        }

        .pagination li a:hover {
            color: #666;
        }

        .pagination li.active a,
        .pagination li.active a.page-link {
            background: #03A9F4;
        }

        .pagination li.active a:hover {
            background: #0397d6;
        }

        .pagination li.disabled i {
            color: #ccc;
        }

        .pagination li i {
            font-size: 16px;
            padding-top: 6px
        }

        .hint-text {
            float: left;
            margin-top: 10px;
            font-size: 13px;
        }

        /* Modal styles */
        .modal .modal-dialog {
            max-width: 400px;
        }

        .modal .modal-header,
        .modal .modal-body,
        .modal .modal-footer {
            padding: 20px 30px;
        }

        .modal .modal-content {
            border-radius: 3px;
            font-size: 14px;
        }

        .modal .modal-footer {
            background: #ecf0f1;
            border-radius: 0 0 3px 3px;
        }

        .modal .modal-title {
            display: inline-block;
        }

        .modal .form-control {
            border-radius: 2px;
            box-shadow: none;
            border-color: #dddddd;
        }

        .modal textarea.form-control {
            resize: vertical;
        }

        .modal .btn {
            border-radius: 2px;
            min-width: 100px;
        }

        .modal form label {
            font-weight: normal;
        }

        .footer {
            background-color: #f8f9fa;
            padding: 20px 0;
        }

        .footer hr {
            border-top: 1px solid #000;
            margin: 0 20px;
        }

        .footer p {
            margin: 10px 0 0;
        }
    </style>
</head>

<body>
<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Employee Management</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#">Trang Chủ <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Trang Ngoài</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Thể Loại
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Thể Loại 1</a>
                    <a class="dropdown-item" href="#">Thể Loại 2</a>
                    <a class="dropdown-item" href="#">Thể Loại 3</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Tác Giả</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Bài Viết</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container mt-4">
    <div class="table-wrapper">
        <div class="table-title">
            <h2>Manage Employees</h2>
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#addEmployeeModal">
                <i class="fas fa-plus"></i> Add Employee
            </button>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-hover" id="employeeTable">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody id="employeeList">
                <!-- Dynamic content will be added here -->
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Add Employee Modal -->
<div class="modal fade" id="addEmployeeModal" tabindex="-1" role="dialog" aria-labelledby="addEmployeeModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addEmployeeModalLabel">Add Employee</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="addEmployeeForm">
                    <div class="form-group">
                        <label for="employeeName">Name</label>
                        <input type="text" class="form-control" id="employeeName" placeholder="Enter Name" required>
                    </div>
                    <div class="form-group">
                        <label for="employeeEmail">Email</label>
                        <input type="email" class="form-control" id="employeeEmail" placeholder="Enter Email" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="saveEmployee">Save</button>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<div class="footer">
    <hr>
    <p>&copy; 2024 Employee Management. All Rights Reserved.</p>
</div>

<!-- JavaScript and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    // Initialize empty employee list
    let employeeData = [];

    // Function to render employee data
    function renderEmployeeList() {
        const employeeList = $("#employeeList");
        employeeList.empty();
        employeeData.forEach((employee, index) => {
            employeeList.append(`
                    <tr>
                        <td>${employee.id}</td>
                        <td>${employee.name}</td>
                        <td>${employee.email}</td>
                        <td>
                            <a href="#" class="edit" data-toggle="tooltip" title="Edit" onclick="editEmployee(${index})"><i class="fas fa-edit"></i></a>
                            <a href="#" class="delete" data-toggle="tooltip" title="Delete" onclick="deleteEmployee(${index})"><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                `);
        });
    }

    // Save new employee
    $("#saveEmployee").click(function () {
        const name = $("#employeeName").val();
        const email = $("#employeeEmail").val();
        const id = employeeData.length + 1;
        employeeData.push({ id, name, email });
        renderEmployeeList();
        $("#addEmployeeModal").modal("hide");
    });

    // Edit employee
    function editEmployee(index) {
        const employee = employeeData[index];
        $("#employeeName").val(employee.name);
        $("#employeeEmail").val(employee.email);
        $("#saveEmployee").off("click").click(function () {
            employeeData[index].name = $("#employeeName").val();
            employeeData[index].email = $("#employeeEmail").val();
            renderEmployeeList();
            $("#addEmployeeModal").modal("hide");
        });
        $("#addEmployeeModal").modal("show");
    }

    // Delete employee
    function deleteEmployee(index) {
        employeeData.splice(index, 1);
        renderEmployeeList();
    }

    // Initialize the page
    $(document).ready(function () {
        renderEmployeeList();
    });
</script>
</body>

</html>
