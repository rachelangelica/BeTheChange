@extends('layouts.layout')
<title>History activity</title>
<link rel="stylesheet" href="{{ asset('assets/css/activity.css') }}">

@section('content')
<body>
    <p class="title">Aktivitas Sebelumnya</p>
    <div class="search-filter">
        <div class="search">
            <input type="text" placeholder="Cari aktivitas">
            <button type="submit">Search</button>
        </div>
        <div class="filters">
            <button>Filter</button>
            <button>Urutkan: Aktivitas Terbaru</button>
        </div>
    </div>

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

    <div class="activity-card">
        <img src="activity5.png" alt="Edukasi Lingkungan Sekolah">
        <div class="activity-details">
            <h3>Edukasi Lingkungan Sekolah</h3>
            <p class="date">3 November 2023</p>
            <p class="location">Desa Londor</p>
        </div>
    </div>

    <div class="activity-card">
        <img src="activity6.png" alt="Bantuan Banjir">
        <div class="activity-details">
            <h3>Bantuan Banjir</h3>
            <p class="date">16 Desember 2024</p>
            <p class="location">Kelurahan Bakti</p>
        </div>
    </div>

    <div class="activity-card">
        <img src="activity7.png" alt="Penggalangan Dana Panti Asuhan">
        <div class="activity-details">
            <h3>Penggalangan Dana Panti Asuhan</h3>
            <p class="date">20 November 2024</p>
            <p class="location">Kecamatan Sungai...</p>
        </div>
    </div>

    <div class="activity-card">
        <img src="activity8.png" alt="Kampanye Kesehatan Masyarakat">
        <div class="activity-details">
            <h3>Kampanye Kesehatan Masyarakat</h3>
            <p class="date">1 Desember 2024</p>
            <p class="location">Desa Deas</p>
        </div>
    </div>
</div>
@endsection
