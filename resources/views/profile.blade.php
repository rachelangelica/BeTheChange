@extends('layouts.layout')
<title>Profile</title>
<link href="{{ asset('assets/css/profile-style.css') }}" rel="stylesheet">

@section('content')
    <!-- BODY -->
    <div class="container">
      <div class="user-container">
        <img src="{{ asset('assets/images/profile-picture.png') }}" class="image">
        <div class="user-info">
            <h3>Nama</h3>
            <p>Alamat</p>
            <p>Umur</p>
            <p>TipeAkun</p>
        </div>
      </div>
      <form action="#">
        <label for="nama">Nama</label>
        <input
          type="text"
          name="nama"
          id="nama"
          placeholder="Masukan nama anda"
        />
        <label for="umur">Umur</label>
        <input
          type="number"
          name="umur"
          id="umur"
          placeholder="Masukan umur anda"
        />
        <label for="email">Email</label>
        <input
          type="email"
          name="email"
          id="email"
          placeholder="Masukan email anda"
        />
        <label for="domisili">Domisili</label>
        <input
          type="text"
          name="domisili"
          id="domisili"
          placeholder="Masukan domisili anda"
        />
        <label for="phone">No. Telp:</label>
        <input
          type="number"
          name="phone"
          id="phone"
          placeholder="Masukan no telp anda"
        />
        <input type="submit" value="Update" />
    </div>

    <!-- FOOTER -->
    <div class="footer"></div>
  </body>
</html>
