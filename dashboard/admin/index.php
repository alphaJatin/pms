<?php
session_start();
if ($_SESSION['logIn'] === true && $_SESSION['type'] === 'admin') {
    require_once '../../config/db_con.php';
    $id = $_SESSION['id'];
    $name = $_SESSION['name'];
    $query = "SELECT s.name sname, s.department, s.12th, s.graduation, s.email, c.name cname FROM student s JOIN applied a ON s.id = a.student_id JOIN company c ON a.company_id = c.id;";
    $result = $con->query($query);
    $con->close();
} else exit(header("Location: ../login.php")) ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - SB Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    <style>
        th,td {
            text-align: center !important;
        }
    </style>
</head>

<body class="sb-nav-fixed">

    <!-- ----------------------------- Admin-Panel ----------------------------- -->

    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark d-flex justify-content-between px-4">
        <a class="navbar-brand ps-3" href="../../index.php">M A I M T</a>
        <div class="w-100 text-end">
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0 " id="sidebarToggle" href="#!">
                <i class="fas fa-bars"></i>
            </button>
            <a class="text-decoration-none text-light" href="../../logout.php">Logout</a>
        </div>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">MENU</div>
                        <a class="nav-link bg-light text-dark" href="index.html">
                            <div class="sb-nav-link-icon text-dark"><i class="fas fa-check"></i>
                            </div>
                            Applied Students
                        </a>
<<<<<<< HEAD
                        <a class="nav-link" href="./view.php">
=======
                        <a class="nav-link" href="../../view.php">
>>>>>>> 8845741268e4cd646638e670777fb768b6516281
                            <div class="sb-nav-link-icon"><i class="fas fa-user-graduate"></i>
                            </div>
                            View Students
                        </a>



                        <a class="nav-link" href="./addCompany.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-building"></i>
                            </div>
                            Add Company
                        </a>
                        
                    </div>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="my-4">Applied Students</h1>
                    <div class="card mb-4">
                        <!-- <div class="card-header"> <i class="fas fa-table me-1"></i> Students </div> -->
                        <div class="card-body">
                            <table id="datatablesSimple">
                                < <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Department</th>
                                <th>Mobile Number</th>
                                <th>12th</th>
                                <th>Graduation</th>
                                <th colspan="2" class="text-center">Action</th>
                            </tr>
                        </thead>

                        <?php if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) { ?>
                                <tr>
                                    <td><?php echo $i++; ?></td>
                                    <td><?php echo $row['name']; ?></td>
                                    <td><?php echo $row['email']; ?></td>
                                    <td><?php echo $row['department']; ?></td>
                                    <td><?php echo $row['phoneNumber']; ?></td>
                                    <td><?php echo $row['12th']; ?></td>
                                    <td><?php echo $row['graduation']; ?></td>
                                    <td><a href="update.php?id=<?php echo  $row['id']; ?>" class="view" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a></td>
                                    <td><button><a href="./delete.php?id=<?php echo $row['id']; ?>" class="delete" data-toggle="tootip"><i class="material-icons">&#xE872;</i></a></button></td>
                                </tr>
                            <?php }
                        } else { ?>
                        <tr>
                            <td class="text-center" colspan="8">No Data to Show.</td>
                        </tr>
                        <?php } ?>
                    </table>
         
                            
                        </div>
                    </div>
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2021</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>

</html>