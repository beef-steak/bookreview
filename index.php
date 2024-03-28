<?php
session_start();
$count = 0;
// connecto database

$title = 'Home';
require_once './template/header.php';
require_once './functions/database_functions.php';
$conn = db_connect();
$row = select4LatestBook($conn);
?>
<header>
    <div id="carouselBasicExample" class="carousel slide carousel-fade" data-mdb-ride="carousel">

        <div class="carousel-inner">

            <div class="carousel-item active">
                <img height="840px" width="100%" src="./assets/image/Book.jpg" />
            </div>
        </div>

    </div>


</header>
<!-- Example row of columns -->
<div class="container">
    <div class="row">

    </div>
</div>

<!-- ======= Services Section ======= -->

<div class="container">
    <div class="row">
        <section id="services" class="services section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Latest books</h2>
                </div>

                <div class="row">

                    <div class="row">
                        <?php foreach($row as $book) { ?>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 py-2 mb-2">
                            <a href="" class="card rounded-0 shadow book-item text-reset text-decoration-none">
                                <div class="img-holder overflow-hidden">
                                    <img class="img-top" src="./bootstrap/img/<?php echo $book['book_image']; ?>">
                                </div>
                                <div class="card-body">
                                    <div class="card-title fw-bolder h5 text-center"><?= $book['book_title'] ?></div>
                                </div>
                                <div class="card-body">
                                    <input type="text" placeholder="Review">
                                    <Button class="btn btn-info" style="margin-top: 10px;">Submit</Button>
                                </div>
                            </a>
                        </div>

                        <?php } ?>
                    </div>
                </div>
            </div>
    </div>

</div>
</section><!-- End Services Section -->

</div>
</div>
<section class="contact">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Contact</h2>
        </div>

        <div class="row">

            <div class="col-lg-5 d-flex align-items-stretch">
                <div class="info">
                    <div class="address">
                        <i class="bi bi-geo-alt"></i>
                        <h4>Location:</h4>
                        <p>A108 Adam Street, Dhaka, NY 535022</p>
                    </div>

                    <div class="email">
                        <i class="bi bi-envelope"></i>
                        <h4>Email:</h4>
                        <p>Ebook@example.com</p>
                    </div>

                    <div class="phone">
                        <i class="bi bi-phone"></i>
                        <h4>Call:</h4>
                        <p>+1 5589 55488 55s</p>
                    </div>

                </div>

            </div>

            <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                <form class="php-email-form">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="name">Your Name</label>
                            <input type="text" name="name" class="form-control" id="name" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Your Email</label>
                            <input type="email" class="form-control" name="email" id="email" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name">Subject</label>
                        <input type="text" class="form-control" name="subject" id="subject" required>
                    </div>
                    <div class="form-group">
                        <label for="name">Message</label>
                        <textarea class="form-control" name="message" rows="10" required></textarea>
                    </div>
                    <div class="text-center"><button type="submit">Send Message</button></div>
                </form>
            </div>

        </div>

    </div>
</section>

<footer id="footer">

<div class="footer-newsletter">

<div class="footer-top">
  <div class="container">
    <div class="row">

      <div class="col-lg-3 col-md-6 footer-contact">
        <h3>Ebook</h3>
        <p>
          Tikatuli Adam Street <br>
          Dhaka, dc 535022<br>
          Bangladesh <br><br>
          <strong>Phone:</strong> +8801955904596<br>
          <strong>Email:</strong> ebook@example.com<br>
        </p>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        <h4>Useful Links</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="index.php">Home</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="books.php">Books</a></li>
        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        <h4>All Books</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="">Horror Books</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="">Programming Books</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="">Poems Books</a></li>

        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        <h4>Our Social Networks</h4>
        <div class="social-links mt-3">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>

    </div>
  </div>
</div>


</footer><!-- End Footer -->



<?php
if (isset($conn)) {
    mysqli_close($conn);
}
require_once './template/footer.php';
?>
