<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="./index.css">
  <title>log in sing up || invontory</title>
</head>
<body>
  <section class="log_in_section">
    <div class="row">
      <div class="col bg-white rounded p-3 h-75 align-items-center mt-lg-5">
        <h2 class="welcome fw-bold fs-2 mb-4 text-capitalize">welcome to your invontry</h2>
        <form action="" method="post" >
          <div class="form-floating mb-3">
            <input type="text" class="form-control" name="name" id="name_admin" placeholder="Name">
            <label for="name_admin">name</label>
          </div>
          <div class="form-floating mb-3">
            <input type="password" class="form-control" name="password" id="password_admin" placeholder="Password">
            <label for="password_admin">Password</label>
          </div>
          <div class="row mb-3">
            <div class="col">
              <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                <label class="form-check-label" for="flexSwitchCheckChecked">Remember me</label>
              </div>
            </div>
            <div class="col">
              <a href="./forgotPassword.php">Forgot your password?</a>
            </div>
          </div>
          <div class="d-grid">
            <button type="submit" class="btn btn-primary fs-3 fw-bold">log in</button>
          </div>
        </form>
      </div>
      <div class="col">
        <img class="" src="https://www.enerpize.com/wp-content/uploads/2019/01/inventory-hero.svg"/>
      </div>
    </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>

<?php

  require "./database/connection.php";
  $sql = "SELECT * FROM admin";
  $result = $conn->query($sql);
  $data = $result->fetch_assoc();

  if ($_POST["name"] == $data['nom_admin'] && $_POST["password"] == $data['password']) {
    header("Location: ./home.html");
    exit;
  }

?>