<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Home</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="./bootstrap/css/styles.css" rel="stylesheet">

    <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js"
        integrity="sha512-6PM0qYu5KExuNcKt5bURAoT6KCThUmHRewN3zUFNaoI6Di7XJPTMoT6K0nsagZKk2OB4L7E3q1uQKHNHd4stIQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <script type="text/javascript" src="./bootstrap/js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="./bootstrap/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="conteiner-fluid">
        <div class="row">
            <div class="clear-fix py-2"></div>
            <nav class="navbar navbar-expand-lg  navbar-expand-md navbar-light  bg-gradient fixed-top  bg-info">
                <div class="container">
                    <div class="navbar-header">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#topNav"
                            aria-controls="topNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="col-md-12">
                            <nav class="navbar navbar-expand-lg navbar-light">
                                <div class="container">
                                    <a class="navbar-brand" style="margin-right: 300px;" href="index.php">ₑbₒₒₖ</a>
                                    <ul class="navbar-nav mx-auto mb-3 mb-lg-0">

                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>

                    <!--/.navbar-collapse -->

                    <div class="collapse navbar-collapse" id="topNav">
                        <ul class="nav navbar-nav">
                            <?php if(isset($_SESSION['admin']) && $_SESSION['admin'] == true): ?>
                            <li class="nav-item"><a class="nav-link" href="admin_book.php"><span
                                        class="fa fa-th-list"></span>
                                    Book List</a></li>
                            <li class="nav-item"><a class="nav-link" href="admin_add.php"><span
                                        class="far fa-plus-square"></span> Add New Book</a></li>
                            <li class="nav-item"><a class="nav-link" href="admin_signout.php"><span
                                        class="fa fa-sign-out-alt"></span> Logout</a></li>
                            <?php else: ?>
                            <!-- link to books.php -->
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active " style="margin-right: 410px;" aria-current="page"
                                    href="books.php">Books</a>
                            </li>
                            <form class="d-flex me-1">
                                <input class="form-control me-1" type="search" placeholder="Search"
                                    aria-label="Search">
                                <button class="btn btn-outline-info bg-light" type="submit">Search</button>
                            </form>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </nav>
            <?php
      if(isset($title) && $title == "Home") {
    ?>

            <?php } ?>

            <div class="container" id="main">

