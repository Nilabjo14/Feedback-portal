<?php
session_start();
if(isset($_SESSION["id"])){
    //echo $_SESSION["id"];
}
$id=$_SESSION["id"];
$server='Localhost:3306';
$user='root';
$password='';
$database='SFdb';
$conc=new mysqli($server,$user,$password,$database);
$display=mysqli_query($conc,"SELECT * FROM user_log WHERE Email_id='$id'");
while($db_row=mysqli_fetch_array($display)){
    


?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>Sign-up Feedback Form</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    

    

<link href="/docs/5.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.2/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.2/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.2/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#712cf9">

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

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
<main class="form-signin w-100 m-auto">
  <form action="info1.php" method="post">
    <img class="mb-4" src="css/img/img1.png" alt="" width="82" height="67">
    <div class="form-floating">
      <input type="text" name="fname" class="form-control Top" id="floatingInput" value="<?php echo $db_row["Name"];?>">
      <label for="floatingInput">Name</label>
    </div>
    <div class="form-floating">
        <input type="text" name="cn" class="form-control Middle" id="myInput" value="<?php echo $db_row["Contact_No"];?>">
        <label for="floatingPassword">Conatct Number</label>
      </div>
    </div>
    <div class="form-floating">
        <input type="email" name="em" class="form-control Bottom" id="floatingInput" value="<?php echo $db_row["Email_id"];?>">
        <label for="floatingInput">Email id</label>
      </div>
      <?php } ?>



    <h1 class="h3 mb-3 fw-normal">Complete this in information</h1>

    <div class="form-floating">
      <input type="text" name="bname" class="form-control Top" id="floatingInput" placeholder="Branch">
      <label for="floatingInput">Branch</label>
    </div>
    <div class="form-floating">
      <input type="text" name="cname" class="form-control Middle" id="floatingPassword" placeholder="Course">
      <label for="floatingPassword">Course</label>
    </div>
    <div class="form-floating">
        <input type="text" name="dn" class="form-control Middle" id="myInput" placeholder="Department">
        <label for="floatingPassword">Department</label>
      </div>
    </div>
    <div class="form-floating">
        <input type="text" name="gn" class="form-control Bottom" id="floatingInput" placeholder="Guide Name">
        <label for="floatingInput">Guide Name</label>
      </div>
      
    <button class="w-100 btn btn-lg btn-primary" type="submit">submit!</button>
    <p class="mt-5 mb-3 text-muted">&copy; Nilabjo</p>
  </form>
 </main>
  </body>
</html>