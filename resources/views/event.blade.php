@extends('layouts.layout')
<title>Detail Event</title>
<link href="{{ asset('assets/css/event-style.css') }}" rel="stylesheet">
   
@section('content')
        <!-- BODY -->
        <div class="container">
            <div class="row-1">
                <img src="Picture1.png" alt="Poster" id="poster">
                <div class="text-content">
                    <h1>Kegiatan Bakti Sosial</h1>
                    <p><i class="fa-regular fa-calendar-days"></i> 23 Oktober 2024</p>
                    <p><i class="fa-solid fa-location-dot"></i> Desa Kebon Jeruk</p>
                    <a href="#" class="button1">Jadi Relawan</a>
                    <a href="#" class="button2">Kontak</a>
                </div>
            </div>

            <div class="row-2">
                <div class="profile">
                    <img src="Picture1.png" alt="Foto Profile" id="profile">       
                    <h2>GreenEarth</h2>
                </div>
                <p>Kegiatan akan berfokus pada pemberian layanan kesehatan bagi masyarakat yang kurang mampu atau tinggal di daerah terpencil. Layanan yang diberikan berupa pemeriksaan kesehatan umum, penyuluhan mengenai pola hidup sehat, pemberian obat-obatan gratis, hingga layanan khusus seperti pemeriksaan mata atau gigi.</p>
            </div>
            
            <div class="row-3">
              <h2>Relawan (4 orang)</h2>
              <div class="volunteer-container">
                <div class="volunteer">
                  <img src="Picture1.png" alt="Christine">
                  <p>Christine</p>
                </div>
                <div class="volunteer">
                  <img src="Picture1.png" alt="dea">
                  <p>Dea</p>
                </div>
                <div class="volunteer">
                  <img src="Picture1.png" alt="gina">
                  <p>Ghina</p>
                </div>
                <div class="volunteer">
                  <img src="Picture1.png" alt="angel">
                  <p>Angel</p>
                </div>
              </div>
            </div>
        </div>
@endsection