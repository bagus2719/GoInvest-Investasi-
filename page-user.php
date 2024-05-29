<?php
session_start();
// Periksa apakah pengguna sudah login
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GoInvest | Investasi Online</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
</head>

<body>
    <nav>
        <div class="wrapper">
            <div class="logo">
                <a href="page-user">Go<span>Invest</span></a>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="page-user.php">Home</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropbtn">Produk</a>
                        <div class="dropdown-content">
                            <a href="#" id="buyProduk"> Beli Produk</a>
                            <a href="#">Tentang Produk</a>
                        </div>
                    </li>
                    <li><a href="news.php">Berita</a></li>
                    <li><a href="about.php">Tentang</a></li>
                    <li><a href="logout.php" class="btn-logout">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Popup box Pembelian Produk -->
    <div id="buyProdukPopup" class="popup">
        <div class="popup-content">
            <span class="close" onclick="closePopup()">&times;</span>
            <!-- Formulir untuk pembelian produk -->
            <h2>Form Pembelian Saham</h2>
            <form>
                <input type="text" placeholder="Nama" required />
                <input type="email" placeholder="Email" required />
                <input type="text" placeholder="Nama Assets" required />
                <input type="number" placeholder="Jumlah Saham" required />
                <button type="submit">Beli</button>
                <button type="submit">Jual</button>
            </form>
        </div>
    </div>

    <div class="wrapper">
        <section id="home">
            <img src="assets/image/image-invest-1.png" alt="people" />
            <div class="kolom">
                <p class="deskripsi">Ayo Mulai Investasi Sekarang Juga!</p>
                <h2>Make all you can, save all you can, give all you can</h2>
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nesciunt,
                    nobis.
                </p>
                <p><a href="" class="btn-more">Get Started</a></p>
            </div>
        </section>
        <div class="carousel">
            <div class="slides">
                <img src="assets/image/carousel-1.png" alt="slide image" class="slide" />
                <img src="assets/image/carousel-2.png" alt="slide image" class="slide" />
                <img src="assets/image/carousel-3.png" alt="slide image" class="slide" />
            </div>
            <div class="controls">
                <div class="control prev-slide">&#9668;</div>
                <div class="control next-slide">&#9658;</div>
            </div>
        </div>
        <section class="why_section layout_padding">
            <div class="container">
                <div class="heading_container heading_center">
                    <h2>Why Choose <span>Us</span></h2>
                </div>
                <div class="why_container">
                    <div class="box">
                        <div class="img-box">
                            <img src="assets/image/icon-fitur-1.png" alt="" />
                        </div>
                        <div class="detail-box">
                            <h5>Aman</h5>
                            <p>
                                Incidunt odit rerum tenetur alias architecto asperiores omnis
                                cumque doloribus aperiam numquam! Eligendi corrupti, molestias
                                laborum dolores quod nisi vitae voluptate ipsa? In tempore
                                voluptate ducimus officia id, aspernatur nihil. Tempore
                                laborum nesciunt ut veniam, nemo officia ullam repudiandae
                                repellat veritatis unde reiciendis possimus animi autem natus
                            </p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="img-box">
                            <img src="assets/image/icon-fitur-2.png" alt="" />
                        </div>
                        <div class="detail-box">
                            <h5>Terpercaya</h5>
                            <p>
                                Incidunt odit rerum tenetur alias architecto asperiores omnis
                                cumque doloribus aperiam numquam! Eligendi corrupti, molestias
                                laborum dolores quod nisi vitae voluptate ipsa? In tempore
                                voluptate ducimus officia id, aspernatur nihil. Tempore
                                laborum nesciunt ut veniam, nemo officia ullam repudiandae
                                repellat veritatis unde reiciendis possimus animi autem natus
                            </p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="img-box">
                            <img src="assets/image/icon-fitur-3.png" alt="" />
                        </div>
                        <div class="detail-box">
                            <h5>Cepat & Mudah</h5>
                            <p>
                                Incidunt odit rerum tenetur alias architecto asperiores omnis
                                cumque doloribus aperiam numquam! Eligendi corrupti, molestias
                                laborum dolores quod nisi vitae voluptate ipsa? In tempore
                                voluptate ducimus officia id, aspernatur nihil. Tempore
                                laborum nesciunt ut veniam, nemo officia ullam repudiandae
                                repellat veritatis unde reiciendis possimus animi autem natus
                            </p>
                        </div>
                    </div>
                </div>
                <div class="btn-box">
                    <a href="#"> Read More </a>
                </div>
            </div>
        </section>
        <div id="contact">
            <div class="wrapper">
                <div class="footer">
                    <div class="footer-section">
                        <h3>GoInvest</h3>
                        <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sint,
                            culpa!
                        </p>
                    </div>
                    <div class="footer-section">
                        <h3>Contact</h3>
                        <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sint,
                            culpa!
                        </p>
                    </div>
                    <div class="footer-section">
                        <h3>About</h3>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint,
                            culpa!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="copyright">
        <div class="wrapper">
            &copy; 2023. <b>GoInvest</b> All Rights Reserved.
        </div>
    </div>
    <button class="fas fa-angle-double-up" id="scrollToTopBtn" onclick="scrollToTop()" title="Go to top"></button>
    <script src="js/script.js"></script>
    <script src="js/carousel.js"></script>
</body>

</html>