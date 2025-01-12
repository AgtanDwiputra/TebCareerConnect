<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with Steller landing page.">
    <meta name="author" content="Devcrud">
    <title>Masuk | TEB Career Connect</title>
    <link rel="icon" type="image/png" href="assets/images/TEB.png">
    <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">
	<link rel="stylesheet" href="assets/css/regis.css?v=<?php echo time();?>">
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

    <!-- Page navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" data-spy="affix" data-offset-top="0">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="assets/images/logo-unpad.png" alt="" class="unpad">
                <img src="assets/images/logo.png" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Karir</a>
                    </li>                   
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Program Studi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Bootcamp</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Kontak</a>
                    </li>
                    <li class="nav-item">
                        <a class="- btn btn-primary rounded ml-4" href="login.php">Masuk</a>
                    </li>
                </ul>
            </div>
        </div>          
    </nav>

    <!-- Contact Section -->
    <section id="contact" class="position-relative section">
        <div class="container text-center">
            <div class="contact text-center">
                <div class="form">

                    <h6 class="section-title mb-4">Daftar Akun</h6>

                    <form action="models/registrasi.php" method="post"  name="form1" onsubmit="return validasi()">
                        <div class="form-group">
                            <p>Username</p>
                            <input type="text" class="form-control" id="username" aria-describedby="emailHelp" placeholder="Username" required name="username">
                        </div>
                        <div class="form-group">
                            <p>Password</p>
                            <input type="password" class="form-control" id="password" placeholder="Password" required name="password">
                        </div>
                        <div class="form-group">
                            <p>Nama Lengkap</p>
                            <input type="text" class="form-control" id="nama" placeholder="Nama Lengkap" required name="nama">
                        </div>
                        <div class="form-group">
                            <p>NPM</p>
                            <input type="text" class="form-control" id="npm" placeholder="NPM" required name="npm">
                        </div>
                        <div class="form-group">
                            <p>Email Unpad</p>
                            <input type="text" class="form-control" id="email" placeholder="Email Unpad" required name="email">
                        </div>

                        <div class="form-submit">
                            <input type="submit" name="daftar" value="Daftar">
                        </div>
                    </form>

                </div>            
            </div>
        </div>  
    </section>

    <!-- Page Footer -->
    <footer class="page-footer">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <p>Copyright <script>document.write(new Date().getFullYear())</script> &copy; <a href="https://www.instagram.com/agtddf_/" target="_blank">Agtan Dwi Putra Permadi (TAN EDUCATION BUSINESS)</a></p>
                </div>
            </div>
        </div>
    </footer> 
 
    <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>
	<script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>
    <script src="assets/js/steller.js"></script>

</body>

<script type="text/javascript">
    function validasi(){
        var username = document.getElementById("username").value;
        var password = document.getElementById("password").value;
        if(username!=""&&password!=""){
            return true;
        }else{
            alert('Semua Field Harus Di isi');
            return false;
        }
    }
</script>
</html>
