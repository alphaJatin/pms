<?php
session_start();
require_once "./config/db_con.php";
$query = "SELECT id, name from company";
$result = $con->query($query);
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/index.css">
    <script src="https://kit.fontawesome.com/1422ef591f.js" crossorigin="anonymous"></script>
    <title>Placement Managment System</title>
    <style>
        @media only screen and (max-width:576px) {
            .hero-text {
                min-width: 85%;
            }
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm p-1 rounded">
        <div class="container-fluid">
            <a class="navbar-brand px-4" href="./index.php"><img src="./img/logo.png" alt="MAIMT" width="50px"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 w-100 d-flex justify-content-evenly">
                    <li class="nav-item px-3 py-2">
                        <a class="nav-link fw-bold active" aria-current="page" href="./index.php">Home</a>
                    </li>
                    <li class="nav-item px-3 py-2">
                        <a class="nav-link fw-bold" href="about.php">About Us</a>
                    </li>
                    <li class="nav-item px-3 py-2">
                        <a class="nav-link fw-bold" href="Contact.php">Contact Us</a>
                    </li>
                    <?php if (isset($_SESSION['login']) && $_SESSION['login'] === true) { ?>
                        <li class="nav-item px-3 py-2">
                            <a class="nav-link fw-bold" href="./dashboard/<?php echo ($_SESSION['type'] === "admin") ? "admin/" : "student/"; ?>">Dashboard</a>
                        </li>
                        <li class="nav-item px-3 py-2">
                            <a class="nav-link fw-bold" href="./logout.php">Logout</a>
                        </li>
                    <?php } else {  ?>
                        <li class="nav-item px-3 py-2">
                            <a class="nav-link fw-bold" href="./login.php">Login</a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </nav>

    <div class="hero-image">
        <div class="hero-text">
            <h1>M A I M T</h1>
            <p style="letter-spacing: 1px;">MAHARAJA AGRASEN
                INSTITUTE OF MANAGEMENT & TECHNOLOGY</p>
            <a class="btn btn-danger button" href="#goto"><span>Explore</span></a>
        </div>
    </div>

    <div class="container-fluid py-3" id="goto">
        <h1 class="my-4 text-danger text-style">Latest Recruitments</h1>
        <ul class="list-group mx-3 mb-4" id="listGroup">
            <?php if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) { ?>
                    <li class="list-group-item">
                        <span><?php echo $row['name'] ?> <span class="fw-bold text-danger">is hiring !!</span></span>
                        <a href="./intermediate.php?cid=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm">Apply Now</a>
                    </li>
                <?php }
            } else { ?>
                <li class="list-group-item">
                    <span>No Data to show.</span>
                </li>
            <?php } ?>
        </ul>

        <div id="exampleSlider" class="m-3">
            <div class="h1 text-center py-3 text-danger">Our Partners</div>
            <div class="MS-content">
                <div class="item">
                    <img src="./img/slider/tcs.png" alt="Tcs" height="200px"> 
                </div>
                <div class="item">
                    <img src="./img/slider/catalyst.png" alt="Catalyst" height="200px">
                </div>
                <div class="item">
                    <img src="./img/slider/debut_infotech.png" alt="Debut Infotech" height="200px">
                </div>
                <div class="item">
                    <img src="./img/slider/deloitte.png" alt="Deloitte" height="200px">
                </div>
                <div class="item">
                    <img src="./img/slider/genpact.png" alt="Genpact" height="200px">
                </div>
                <div class="item">
                    <img src="./img/slider/infosys.png" alt="Infosys" height="200px">
                </div>
                <div class="item">
                    <img src="./img/slider/toxsl.png" alt="Toxsl" height="200px">
                </div>
            </div>
            <div class="MS-controls">
                <button class="MS-left"><i class="fa fa-chevron-left" aria-hidden="true"></i></button>
                <button class="MS-right"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>
            </div>
        </div>
    </div>
    </div>

    <?php include_once 'footer.php' ?>

    <script src="./js/jquery-2.2.4.min.js"></script>

    <script src="./js/multislider.min.js"></script>

    <script>
        $('#exampleSlider').multislider({
            interval: 4000,
            slideAll: true,
            duration: 1500
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

</body>

</html>