<?php
  $host = "localhost"; //địa chỉ mysql server sẽ kết nối đến
  $dbname="laptrinhphp"; //tên database sẽ kết nối đến
  $username = "root"; //username để kết nối đến database 
  $password = ""; // mật khẩu để kết nối đến database
  $conn = new PDO("mysql:host=$host; dbname=$dbname; charset=utf8", $username, $password);

if(isset($_POST['signin'])){
  
}


?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Checkout example · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/checkout/">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      .sign-in{
        margin: auto;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="assets/form-validation.css" rel="stylesheet">
  </head>
  <body class="bg-light">
    
<div class="container">
  <main>
    <div class="py-5 text-center">
      <!-- <img class="d-block mx-auto mb-4" src=".https://e7.pngegg.com/pngimages/518/320/png-clipart-computer-icons-mobile-app-development-android-my-account-icon-blue-text.png" alt="" width="72" height="57"> -->
      <img class="d-block mx-auto mb-4" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ-RikAGZSDlrt1bE7NDPcJAc48g7BZ8Rzt7Q&usqp=CAU" width="72" height="57" alt="">
      <h2>Sign-in</h2>
      <p class="lead">Nhanh chóng và dễ dàng.</p>
    </div>

    <div class="row g-5 ">
      <div class="col-md-7 col-lg-8 sign-in">
        <!-- <h4 class="mb-3">Billing address</h4> -->
        <form class="needs-validation" action="" method="POST" novalidate>
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">First name</label>
              <input type="text" name="firstname" class="form-control" id="firstName" placeholder="First name" value="" required>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Last name</label>
              <input type="text" class="form-control" name="lastname" id="lastName" placeholder="Last name" value="" required>
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>

            <div class="col-12">
              <label for="username" class="form-label">Username</label>
              <div class="input-group has-validation">
                
                <input type="text" class="form-control" name="username" id="username" placeholder="Username" required>
              <div class="invalid-feedback">
                  Your username is required.
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="email" class="form-label">Email <span class="text-muted">(Optional)</span></label>
              <input type="email" class="form-control" name="email" id="email" placeholder="you@example.com">
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>

            <div class="col-12">
              <label for="address" class="form-label">Password</label>
              <input type="password" class="form-control" name="password" id="address" placeholder="Password" required>
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>

            

            <div class="col-md-4">
              <label for="state" class="form-label">Ngày</label>
              <select name="day" class="form-select" id="state" required>
                <option value="">1</option>
                <option value="">2</option>
                <option value="">3</option>
                <option value="">4</option>
                <option value="">5</option>
                <option value="">6</option>
                <!-- <option>California</option> -->
              </select>
              <div class="invalid-feedback">
                Please provide a valid state.
              </div>
            </div>

            <div class="col-md-3">
              <label for="zip" class="form-label">Tháng</label>
              <!-- <input type="text" class="form-control" id="zip" placeholder="" required> -->
              <select name="month" class="form-select" id="state" required>
                <option value="">1</option>
                <option value="">2</option>
                <option value="">3</option>
                <option value="">4</option>
                <option value="">5</option>
                <option value="">6</option>
                <!-- <option>California</option> -->
              </select>
              <div class="invalid-feedback">
                Zip code required.
              </div>
            </div>
            <div class="col-md-5">
              <label for="country" class="form-label">Năm</label>
              <select name="year" class="form-select" id="country" required>
                <option value="">2000</option>
                <option value="">2001</option>
                <option value="">3</option>
                <option value="">4</option>
                <option value="">5</option>
                <option value="">6</option>
                <!-- <option>California</option> -->
              </select>
              <div class="invalid-feedback">
                Please select a valid country.
              </div>
            </div>
            <div >
              <label for="zip" class="form-label">Giới Tính</label> <br>
              <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="sex" id="inlineRadio1" value="option1">
              <label class="form-check-label" for="inlineRadio1">Nam</label>
            </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="sex" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2">Nữ</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="sex" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2">Khác</label>
              </div>
              
            </div>
            
          </div>

          <hr class="my-4">
          
          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="same-address">
            <label class="form-check-label" for="same-address">Shipping address is the same as my billing address</label>
          </div>

          <hr class="my-4">

          <button class="w-100 btn btn-primary btn-lg" name="signin" type="submit">Sign-in</button>
        </form>
      </div>
    </div>
  </main>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2017–2021 Company Name</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
  </footer>
</div>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="assets/form-validation.js"></script>
  </body>
</html>
