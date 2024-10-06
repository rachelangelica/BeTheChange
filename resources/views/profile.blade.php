<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profile {{$nama}}</title>
    <link rel="stylesheet" href="/resources/css/profile-style.css" />
  </head>
  <body>
    <!-- NAVBAR -->
    <div class="navbar"></div>

    <!-- BODY -->
    <div class="container">
      <div class="user-container">
        <img src="./img/profile-picture.png">
        <div class="user-info">
            <h3>{{$nama}}</h3>
            <p>{{$alamat}}</p>
            <p>{{$umur}}</p>
            <p>{{$tipeakun}}</p>
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
