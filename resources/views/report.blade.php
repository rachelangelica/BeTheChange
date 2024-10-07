<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Kegiatan</title>
    <link rel="stylesheet" href="../css/report-style.css">
</head>
<body>
    <!-- NAVBAR -->
    <div class="navbar">
        <img class="logo" src="img/logo2.png" alt="logo">
    </div>

=======
@extends('layouts.layout')
<title>Create Report</title>
<link href="{{ asset('assets/css/report-style.css') }}" rel="stylesheet">
   
@section('content')
>>>>>>> dfc94370674613d1b10f3929e194620529f59452
    <!-- BODY -->
    <div class="container">
        <h1>Laporan Kegiatan</h1>
        <form action="#">
            <label for="laporan">Isi Laporan:</label>
            <textarea name="laporan" id="laporan" placeholder="Tuliskan proses dan hasil dari kegiatan..."></textarea>
            <label for="file">Upload file/foto pendukung:</label>
            <input type="file" id="file" name="file" accept=".jpg, .jpeg, .png, .pdf" class="choose-file-btn">
            <input type="submit" value="Submit">
        </form>
    </div>
<<<<<<< HEAD

    <!-- FOOTER -->
    <div class="footer">
        <script src="https://kit.fontawesome.com/7617b7392d.js" crossorigin="anonymous"></script>
        <div class="col-1">
            <br>
            <img class="footerlogo" src="img/logo-text.png">
        </div>
        <div class="col-2">
            <br><br>
            <h3>Get In Touch With Us</h3>
            <div class="social-icons">
                <i class="fab fa-instagram"></i>
                <i class="fab fa-tiktok"></i>
                <i class="fab fa-x-twitter"></i>
                <br><br><br>
                <p>Copyright ©2024 BeTheChange, All Rights Reserved</p>
            </div>
        </div>
        <div class="col-3">
            <br><br><br>
            <a href="#">About Us</a>
        </div>
    </div>
</body>
</html>
=======
@endsection
>>>>>>> dfc94370674613d1b10f3929e194620529f59452
