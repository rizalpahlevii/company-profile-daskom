<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Profile</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <nav>
            <div class="container">
                <h1 class="judul">
                    <base href="">
                    CompanyProfile
                    </base>
                </h1>
                <ul class="navigasi">
                    <li><a href="index.php?p=home">Home</a></li>
                    <li><a href="index.php?p=about">About</a></li>
                    <li><a href="index.php?p=our-team">Our Team</a></li>
                    <li><a href="index.php?p=contact">Contact</a></li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </nav>
    </header>

    <main>
        <?php
        if (isset($_GET['p'])) {
            $page = $_GET['p'];
            include "contents/$page.php";
        } else {
            include "contents/home.php";
        }
        ?>
    </main>
    <footer>
        <div class="container">
            <small>Copyright &copy; 2020 - Kelompok 4110 Build With <span style="font-size: 14px;color: #A20021;"><i class="fas fa-heart"></i></span></small>
        </div>
    </footer>
    <script src="assets/js/script.js"></script>
</body>

</html>