@extends('layouts.layout')
<title>Homepage</title>
<link href="{{ asset('assets/css/homepage.css') }}" rel="stylesheet">
   
@section('content')
   <!-- BODY -->
    <div class="tagline">
        <div class="box">
            <img src="{{ asset('assets/images/tagline-pic.png') }}" class="image">
            <div class="tagline-text">
                <p class=tagline-text1>Ambil Peran Jadi Relawan</p>
                <p class=tagline-text2>Jadilah Bagian dari Perubahan Nyata dengan BeTheChange.</p>
            </div>
            <a href="#"><div class="tagline-button-box">Cari Aktivitas</div></a>
        </div>
    </div>

    <div class="homepage-body">
        <div class="currently-activities">
            <p class="text1">Mari Beraksi!</p>
            <a href="#"><div class="see-more1">Lihat Semua</div></a>
            <div class="activities">
                <div class="activity-card">
                    <img src="activity1.png" alt="Kegiatan Bakti Sosial">
                    <div class="activity-details">
                        <h3>Kegiatan Bakti Sosial</h3>
                        <p img src="tanggal.png" alt="Kegiatan Bakti Sosial"></p>
                        <p class="date">23 Oktober 2024</p>
                        <p class="location">Desa Kebon Jeruk</p>
                    </div>
                </div>

                <div class="activity-card">
                    <img src="activity2.png" alt="Gotong Royong Pembersihan">
                    <div class="activity-details">
                        <h3>Gotong Royong Pembersihan</h3>
                        <p class="date">29 Desember 2024</p>
                        <p class="location">Desa Bayam</p>
                    </div>
                </div>

                <div class="activity-card">
                    <img src="activity3.png" alt="Reboisasi Peduli Lingkungan">
                    <div class="activity-details">
                        <h3>Reboisasi Peduli Lingkungan</h3>
                        <p class="date">5 Januari 2025</p>
                        <p class="location">Tanjung Priok</p>
                    </div>
                </div>

                <div class="activity-card">
                    <img src="activity4.png" alt="Donor Darah Bersama">
                    <div class="activity-details">
                        <h3>Donor Darah Bersama</h3>
                        <p class="date">30 Oktober 2022</p>
                        <p class="location">Kecamatan Kebon Jeruk</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="prev-activities">
            <p class="text1">Lihat Kegiatan Kami Sebelumnya</p>
            <a href="#"><div class="see-more2">Lihat Semua</div></a>
            <div class="activities">
                <div class="activity-card">
                    <img src="activity1.png" alt="Kegiatan Bakti Sosial">
                    <div class="activity-details">
                        <h3>Kegiatan Bakti Sosial</h3>
                        <p img src="tanggal.png" alt="Kegiatan Bakti Sosial"></p>
                        <p class="date">23 Oktober 2024</p>
                        <p class="location">Desa Kebon Jeruk</p>
                    </div>
                </div>

                <div class="activity-card">
                    <img src="activity2.png" alt="Gotong Royong Pembersihan">
                    <div class="activity-details">
                        <h3>Gotong Royong Pembersihan</h3>
                        <p class="date">29 Desember 2024</p>
                        <p class="location">Desa Bayam</p>
                    </div>
                </div>

                <div class="activity-card">
                    <img src="activity3.png" alt="Reboisasi Peduli Lingkungan">
                    <div class="activity-details">
                        <h3>Reboisasi Peduli Lingkungan</h3>
                        <p class="date">5 Januari 2025</p>
                        <p class="location">Tanjung Priok</p>
                    </div>
                </div>

                <div class="activity-card">
                    <img src="activity4.png" alt="Donor Darah Bersama">
                    <div class="activity-details">
                        <h3>Donor Darah Bersama</h3>
                        <p class="date">30 Oktober 2022</p>
                        <p class="location">Kecamatan Kebon Jeruk</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection