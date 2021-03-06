<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - M A I M T</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/1422ef591f.js" crossorigin="anonymous"></script>
    <style>
        body,
        html {
            height: 100%;
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        .hero-image {
            background-image: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url("./img/about-bg.jpg");
            background-color: black;
            height: 300px;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
            object-fit: cover;
        }

        .hero-text {
            text-align: center;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
        }

        @media only screen and (max-width:576px) {
            .hero-text {
                max-width: 80%;
            }
        }

        .hero-text button {
            border: none;
            outline: 0;
            display: inline-block;
            padding: 10px 25px;
            color: black;
            background-color: #ddd;
            text-align: center;
            cursor: pointer;
        }

        .hero-text button:hover {
            background-color: #555;
            color: white;
        }

        @media only screen and (max-width:500px) {
            .hero-image {
                height: 500px;
            }

        }

        .nav-item a:hover {
            color: #dc3545 !important;
        }

        .active {
            color: #dc3545 !important;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm p-1 mb-3 rounded">
        <div class="container-fluid">
            <a class="navbar-brand px-4" href="./index.php"><img src="./img/logo.png" alt="MAIMT" width="50px"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 w-100 d-flex justify-content-evenly">
                    <li class="nav-item px-3 py-2">
                        <a class="nav-link fw-bold" aria-current="page" href="./index.php">Home</a>
                    </li>
                    <li class="nav-item px-3 py-2">
                        <a class="nav-link fw-bold active" href="about.php">About Us</a>
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

    <div class="container-fluid">
        <section>
            <div class="row my-4">
                <div class="col-sm-12 col-md-5 mx-auto">
                    <h2 class="h1 text-center py-2">About <span style="letter-spacing: 2px;">MAIMT</span></h2>
                    <p class="text-muted text-start">MAIMT was founded in 1997, the golden jubilee year of Indian independence, as a result of vision of Maharaja Agrasen Sabha. MAIMT is affiliated to Kurukshetra University and approved by AICTE. 21st century is an era of Professional Education. It is a route to enlightenment and a tool for improvement. One of the early proponents of a formal degree in the region, MAIMT over the years, has produced many successful business leaden, great thinkers and wealth creators. Activities are organized throughout the year in an effort towards preparing the prospective students for the campus selection programme. The institute has provided complete infrastructure for effective functioning of the Industry Interaction Cell. The year long activities of cell include talks by industry experts, industrial visits, seminars & conferences on various topics in technology and management.</p>
                </div>
                <div class="mx-auto col-sm-12 col-md-5 d-flex justify-content-center align-items-cente">
                    <img src="./img/maimt.jpg" class="card-img-top" alt="Maimt Image">
                </div>
            </div>
        </section>
        <section class="my-4">
            <div class="hero-image">
                <div class="hero-text">
                    <h1 style="font-size:50px; letter-spacing:8px;">VISION</h1>
                    <p class="mx-auto">We aspire to serve the changing mind set of young leaders to sparkle their innovation in corporate hence to be global leaders.</p>
                </div>
            </div>
        </section>
    </div>
    <?php include_once "./footer.php"; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>

</html>