<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Restaurant Reservation</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <style>
        /* Reset CSS */
        * {
          margin: 0;
          padding: 0;
          box-sizing: border-box;
        }
        
        /* Styling Navbar */
        .navbar {
          background-color: #FC6A73;
          color: #fff;
          display: flex;
          justify-content: space-between;
          align-items: center; /* Mengatur vertikal align */
          padding: 10px;
        }
        
        .navbar img.logo {
          height: 130px; /* Ubah ukuran sesuai kebutuhan */
          margin-right: 30px; /* Jarak antara logo dan teks */
        }
        
        .navbar ul {
          list-style: none;
          display: flex;
        }
        
        .navbar li {
          margin-right: 10px;
        }
        
        .navbar li a {
          text-decoration: none;
          color: #fff;
          font-size: 20px;
          padding: 5px 30px;
          border-radius: 5px;
        }
        
        .navbar li a:hover {
          background-color: #fff;
          color: #333;
        }
      </style>
<body>
    <div class="navbar">
        <img src="img/logo.jpg" alt="Logo" class="logo">
        <ul>
          <li><a href="data-reservasi">Reservation Data</a></li>
          <li><a href="reservasi">Reservation</a></li>
          <li><a href="info">Info</a></li>
          <li><a href="#">Status</a></li>
        </ul>
      </div>
   
</body>

<div class="col-12 mt-4 rounded" >
    <div class="card" style="border-color: #FC6A73">
        <div class="card-header" style="background-color:#FC6A73;">
            <font size="5" style="padding-left: 50px;">
                Name</font>
            <font size="5" style="padding-left: 180px;">
                Email</font>
            <font size="5" style="padding-left: 180px;">
                Date</font>
            <font size="5" style="padding-left: 180px;">
                Table</font>
            <font size="5" style="padding-left: 180px;">
                Guest</font>
            <font size="5" style="padding-left: 180px;">
                Action</font>
        </div>
        <div class="card-body">
            <a href="#" class="btn btn-danger me-1" data-bs-toggle="modal" data-bs-target="#ModalDelete"
                style="float: right;">Delete</a>
            <a href="#" class="btn btn-warning me-1" data-bs-toggle="modal" data-bs-target="#ModalEdit"
                style="float: right;">Edit</a>
        </div>
        <div class="card-body">
            <a href="#" class="btn btn-danger me-1" data-bs-toggle="modal" data-bs-target="#ModalDelete"
                style="float: right;">Delete</a>
            <a href="#" class="btn btn-warning me-1" data-bs-toggle="modal" data-bs-target="#ModalEdit"
                style="float: right;">Edit</a>
        </div>
        <div class="card-body">
            <a href="#" class="btn btn-danger me-1" data-bs-toggle="modal" data-bs-target="#ModalDelete"
                style="float: right;">Delete</a>
            <a href="#" class="btn btn-warning me-1" data-bs-toggle="modal" data-bs-target="#ModalEdit"
                style="float: right;">Edit</a>
        </div>
    </div>
</div>
</head>

</html>
