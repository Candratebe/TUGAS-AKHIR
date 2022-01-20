<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="99Store bukutamu">
    <meta name="author" content="Inovatik">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
	<meta property="og:site_name" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta property="og:type" content="article" />

    <!-- Website Title -->
    <title>99store. Website Jual Beli Voucher Game</title>
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
	<link href="css/magnific-popup.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
	
	<!-- Favicon  -->
    <link rel="icon" href="images/favicon99.ico">
</head>
<body data-spy="scroll" data-target=".fixed-top">
    
    <!-- Preloader -->
	<div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->
    

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <div class="container">

           <!-- Teks Logo -->
           <a class="navbar-brand logo-text page-scroll" href="index.html">99Store</a>

            <!-- Mobile Menu Toggle Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-awesome fas fa-bars"></span>
                <span class="navbar-toggler-awesome fas fa-times"></span>
            </button>
            <!-- end of mobile menu toggle button -->

            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="index.html#header">HOME <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="index.html#features">FEATURES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="index.html#details">DETAILS</a>
                    </li>

                    <!-- Dropdown Menu -->          
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle page-scroll" href="index.html#video" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">SUPPORT</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#"><span class="item-text">BUKU TAMU</span></a>
                            <div class="dropdown-items-divide-hr"></div>
                            <a class="dropdown-item" href="terms-conditions.html"><span class="item-text">TERMS CONDITIONS</span></a>
                            <div class="dropdown-items-divide-hr"></div>
                            <a class="dropdown-item" href="privacy-policy.html"><span class="item-text">PRIVACY POLICY</span></a>
                        </div>
                    </li>
                    <!-- end of dropdown menu -->

                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="index.html#pricing">NEWS & PROMOTIONS</a>
                    </li>
                </ul>
                <span class="nav-item">
                    <a class="btn-outline-sm" href="log-in.html">LOG IN</a>
                </span>
            </div>
        </div> <!-- end of container -->
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->


    <!-- Header -->
    <header id="header" class="ex-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>SELAMAT DATANG, SELAMAT BERBELANJA!</h1>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->

        

    <!-- Breadcrumbs -->
    <div class="ex-basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumbs">
                        <a href="index.html">Home</a><i class="fa fa-angle-double-right"></i><span>Buku Tamu</span>
                        <br>
                        <script type="text/javascript">
                            var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
                            var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];
                            var date = new Date();
                            var day = date.getDate();
                            var month = date.getMonth();
                            var thisDay = date.getDay(),
                                thisDay = myDays[thisDay];
                            var yy = date.getYear();
                            var year = (yy < 1000) ? yy + 1900 : yy;
                            document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);
                         </script>
                    </div> <!-- end of breadcrumbs -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-1 -->
    <!-- end of breadcrumbs -->


    <br><br>
    <div class="form">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-container">
                         <h1>Buku Tamu</h1>
                         <p>Terima Kasih sudah datang, Silahkan isi buku tamu dan tinggalkan pesan/saran Anda!</p>
    
                        <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
                            <div class="nama">
                             <label>Nama</label>
                             <input type="text" name="fnama">
                            </div>
                            <div class="nomerhp">
                                <label>No Hp</label>
                                <input type="number" name="fnomer">
                            </div>
                            <div class="email">
                                 <label>Email</label>
                                <input type="email" name="femail">
                             </div>
                            <div class="alamat">
                                <label>Alamat</label>
                                <input type="text" name="falamat">
                            </div>
                            <div class="pesan">
                                <label>Pesan</label>
                                <input type="text" name="fpesan">
                            </div>
                            <div>
                                <input type="submit" value="Kirim">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="php">
        <?php
        if(isset($_POST['fnama'])){
            $nama = $_POST['fnama'];
            $nomer = $_POST['fnomer'];
            $email = $_POST['femail'];
            $alamat = $_POST['falamat'];
            $pesan = $_POST['fpesan'];
            echo "Nama: $nama | No.Hp: $nomer | Email: $email | Alamat: $alamat | Pesan: $pesan |";
        }
        ?>
    </div>
      <br><br><br>
                
    <!-- Breadcrumbs -->
    <div class="ex-basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumbs">
                        <a href="index.html">Home</a><i class="fa fa-angle-double-right"></i><span>Buku Tamu</span>
                    </div> <!-- end of breadcrumbs -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-1 -->
    <!-- end of breadcrumbs -->

    
     <!-- Footer -->
     <svg class="footer-frame" data-name="Layer 2" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" viewBox="0 0 1920 79"><defs><style>.cls-2{fill:#5f4def;}</style></defs><title>footer-frame</title><path class="cls-2" d="M0,72.427C143,12.138,255.5,4.577,328.644,7.943c147.721,6.8,183.881,60.242,320.83,53.737,143-6.793,167.826-68.128,293-60.9,109.095,6.3,115.68,54.364,225.251,57.319,113.58,3.064,138.8-47.711,251.189-41.8,104.012,5.474,109.713,50.4,197.369,46.572,89.549-3.91,124.375-52.563,227.622-50.155A338.646,338.646,0,0,1,1920,23.467V79.75H0V72.427Z" transform="translate(0 -0.188)"/></svg>
     <div class="footer">
         <div class="container">
             <div class="row">
                 <div class="col-md-4">
                     <div class="footer-col first">
                         <h4>About 99Store</h4>
                         <p class="p-small">Kami bersemangat untuk menjadi  salah satu toko website top up terbaik di pasar</p>
                     </div>
                 </div> <!-- end of col -->
                 <div class="col-md-4">
                     <div class="footer-col middle">
                         <h4>Important Links</h4>
                         <ul class="list-unstyled li-space-lg p-small">
                             <li class="media">
                                 <i class="fas fa-square"></i>
                                 <div class="media-body"><a class="white" href="privacy-policy.html">Privacy Policy</a></div>
                             </li>
                             <li class="media">
                                 <i class="fas fa-square"></i>
                                 <div class="media-body"><a class="white" href="terms-conditions.html">Terms & Conditions</a>
                             </li>
                         </ul>
                     </div>
                 </div> <!-- end of col -->
                 <div class="col-md-4">
                     <div class="footer-col last">
                         <h4>Contact</h4>
                         <ul class="list-unstyled li-space-lg p-small">
                             <li class="media">
                                 <i class="fas fa-map-marker-alt"></i>
                                 <div class="media-body">Indonesia</div>
                             </li>
                             <li class="media">
                                 <i class="fas fa-globe"></i>
                                 <div class="media-body"><a class="white"href="#your-link">www.99store.com</a></div>
                             </li>
                         </ul>
                     </div> 
                 </div> <!-- end of col -->
             </div> <!-- end of row -->
         </div> <!-- end of container -->
     </div> <!-- end of footer -->  
     <!-- end of footer -->
 
 
     <!-- Copyright -->
     <div class="copyright">
         <div class="container">
             <div class="row">
                 <div class="col-lg-12">
                     <p class="p-small">Copyright ©2022 99store
                 </div> <!-- end of col -->
             </div> <!-- enf of row -->
         </div> <!-- end of container -->
     </div> <!-- end of copyright --> 
     <!-- end of copyright -->
     
         
     <!-- Scripts -->
     <script src="js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
     <script src="js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
     <script src="js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
     <script src="js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
     <script src="js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
     <script src="js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
     <script src="js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
     <script src="js/scripts.js"></script> <!-- Custom scripts -->
</body>
</html>