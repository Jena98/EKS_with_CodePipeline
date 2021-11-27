<?php
        $host = '';
        $user = '';
        $pw = '';
        $dbName = '';
        $conn = new mysqli($host,$user,$pw,$dbName);
        mysqli_set_charset($conn, "utf8");

        $query = 'select * from item';
        $result = mysqli_query($conn,$query);
?>

<!DOCTYPE html>
  <html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>HA Computers</title>

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="bootstrap/css/index.css" rel="stylesheet">


  </head>
  <body>

    <div class="container">

      <div class="masthead">

        <h3 class="text-muted">HA Team</h3>
<?php
        $host = '';
        $user = '';
        $pw = '';
        $dbName = '';
        $conn = new mysqli($host,$user,$pw,$dbName);
        mysqli_set_charset($conn, "utf8");

        $query = 'select * from item';
        $result = mysqli_query($conn,$query);
?>

<!DOCTYPE html>
  <html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>HA Computers</title>

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="bootstrap/css/index.css" rel="stylesheet">


  </head>
  <body>

    <div class="container">

      <div class="masthead">

        <h3 class="text-muted">HA Team</h3>
        <nav>
          <ul class="nav nav-justified">
            <li><a href="#">Home</a></li>
            <li><a href="#">Menu</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </nav>
      </div>

      <!-- Jumbotron -->
      <div class="jumbotron">
        <h1> HA Computers _v2</h1>
        <p class="lead"> IT기기 판매전문 쇼핑몰 </p>
        <p><a class="btn btn-lg btn-success" href="#" role="button">로그인</a></p>
      </div>

        <div class="row">
       <?php
        while($row = mysqli_fetch_array($result)){ ?>

        <div class="col-lg-4">
          <img src="<?=$row["image"]?>" width="300" height="200">
          <h2><?=$row["name"]?></h2>
          <p><?=$row["description"]?></p>
          <p><?=$row["cost"]?></p>
          <p><a class="btn btn-primary" href="#" role="button">아이템 보기 &raquo;</a></p>
        </div>
       <?php } ?>
      </div>

        <!-- Site footer -->
      <footer class="footer">
        <p>&copy; HA Computers 2021</p>
      </footer>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
