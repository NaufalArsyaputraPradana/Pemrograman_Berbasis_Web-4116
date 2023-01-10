<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>BISA FURNITURE</title>
  <!--- icon Shorcut --->
  <link rel="shortcut icon" href="gambar/Logo.png" type="image/x-icon" />
  <!--- box icon --->
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
  <!--- CSS Header--->
  <link rel="stylesheet" href="style.css" />
  <!-- CSS Section -->
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    div {
      border-radius: 5px;
      padding: 20px;
    }

    .verifikasi {
      padding-top: 50px;
      width: 100%;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .btn {
      padding: 15px;
      background: #53ce4c;
      border: 0;
      outline: none;
      cursor: pointer;
      font-size: 25px;
      font-weight: 500;
      border-radius: 15px;
      font-family: "Trebuchet MS", "Lucida Sans Unicode", "Lucida Grande",
        "Lucida Sans", Arial, sans-serif;

    }

    #ver {
      font-family: "Trebuchet MS", "Lucida Sans Unicode", "Lucida Grande",
        "Lucida Sans", Arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    #ver td,
    #ver th {
      border: 1px solid #ddd;
      padding: 8px;
    }

    #ver td,
    tr:hover {
      background-color: #53ce4c;
    }

    #ver tr {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: solid white;
      color: black;
    }

    .popup {
      width: 400px;
      background: #fff;
      border-radius: 6px;
      position: absolute;
      top: 0;
      left: 50%;
      transform: translate(-50%, -50%) scale(0.1);
      text-align: center;
      padding: 0 30px 30px;
      color: #333;
      visibility: hidden;
      transition: transform 0.4s, top 0.4s;
    }

    .open-popup {
      visibility: visible;
      top: 50%;
      transform: translate(-50%, -50%) scale(1);
    }

    .popup img {
      width: 50%;
      margin-top: -70px;
      border-radius: 50%;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    }

    .popup h2 {
      font-size: 38px;
      font-weight: 500;
      margin: 30px 0 10px;
    }

    .popup button {
      width: 100%;
      margin-top: 50px;
      padding: 10px 0;
      background: #6fd649;
      color: #fff;
      border: 0;
      outline: none;
      font-size: 18px;
      border-radius: 4px;
      cursor: pointer;
      box-shadow: 0 5px 5px rgba(0, 0, 0, 0.2);
    }
  </style>
</head>

<body>
  <!--- header --->
  <header>
    <!--- navigasi --->
    <nav class="container">
      <a href="shop.html" class="logo">BISA FURNITURE</a>
      <!--- icon keranjang --->
      <a href="mailto:111202214606@mhs.dinus.ac.id"><i class='bx bxs-envelope' id="cart-icon"></i></a>
    </nav>
  </header>
  <!--- section --->
  <section>
    <!--- verifikasi --->
    <div class="verifikasi">
      <button type="submit" class="btn" onclick="openPopup()">Verifikasi</button>
      <!--- PopUp Verifikasi --->
      <div class="popup" id="popup">
        <img src="gambar/404-tick.png">
        <h2>Terima Kasih</h2>
        <p>Data Telah <strong>Sukses Terverifikasi</strong>, Silahkan Order Lagi</p>
        <a href="shop.html"><button type="button" onclick="closePopup()">Sip</button></a>
      </div>
    </div>
    <!--- Post Form HTML --->
    <div>
      <?php
      if (isset($_POST['fnama'])) {
        $nama = $_POST['fnama'];
        $email = $_POST['femail'];
        $number = $_POST['fnum'];
        $alamat = $_POST['falamat'];

        echo "<table id='ver'>";
        echo "<tr><th>Nama</th><th>$nama</th></tr>";
        echo "<tr><th>Email</th><th>$email</th></tr>";
        echo "<tr><th>No. Telp</th><th>$number</th></tr>";
        echo "<tr><th>Alamat</th><th>$alamat</th></tr>";
      }
      ?>
    </div>
  </section>

  <!--- Script PopUp Verifikasi --->
  <script>
    let popup = document.getElementById("popup");

    function openPopup() {
      popup.classList.add("open-popup");
    }
    function closePopup() {
      popup.classList.remove("open-popup");
    }
  </script>
</body>

</html>