<!DOCTYPE html>
<html>
<head>
  <title>Navbar dengan Logo</title>
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
</head>
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

<form method="POST">
    @csrf
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form method="POST">
                @csrf

                <div class="form-group">
                    <label for="table_number">Table Number</label>
                    <input type="text" name="table_number" id="table_number" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="capacity">Capacity</label>
                    <input type="number" name="capacity" id="capacity" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="status">Status</label>
                    <select name="status" id="status" class="form-control" required>
                        <option value="available">Available</option>
                        <option value="occupied">Occupied</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

</form>
</body>
</html>