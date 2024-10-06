<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Masuk</title>
    <link rel="stylesheet" href="{{ URL::asset('css/masuk-style.css') }}" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
  </head>
  <body>
    <!-- NAVBAR -->
    <div class="navbar"></div>

    <!-- BODY -->
    <div class="container">
      <h1>Masuk</h1>
      <form action="#">
        <label for="email">Email:</label>
        <input
          type="email"
          name="email"
          id="email"
          placeholder="Masukan email anda"
        />
        <label for="password">Password:</label>
        <input
          type="password"
          name="password"
          id="password"
          placeholder="Masukan password anda"
        />
        <input type="submit" value="Login" />
      </form>
    </div>
    <div class="to-register">
      <p>Belum memiliki akun? <a>Daftar disini</a></p>
    </div>
    <div class="masuk-google">
      <i class="fab fa-google fa-2x"></i>
      Masuk dengan Google
    </div>

    <!-- FOOTER -->
    <div class="footer"></div>
  </body>
</html>
