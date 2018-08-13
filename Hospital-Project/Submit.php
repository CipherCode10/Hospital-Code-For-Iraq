<?php

session_start();

?>


<!Doctype html>
 <html>
<head>

   <!-- Created by : Ahmed yaseen  ( Cipher_Code )   -->

   <!-- Required meta tags -->

   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <!-- Bootstrap CSS -->

   <link rel="stylesheet" href="static/css/bootstrap.min.css">
   <link rel="stylesheet" href="Basic-Style.css">

   <title>Admin Page</title>

 </head>

  <body class="S-Body">
    <br>

      <img class="Retico" src="static/Pic/Return.png" width="100" height="50" alt="Return" title="Return" onclick="window.location.assign('Basic-Index.php');">
    <br>

    <form action="" method="post">


    <div class="container">

    <div class="container-fluid">

      <div class="row">

        <div class="col-md-4 col-sm-4 col-xs-12"></div>

          <div class="col-md-4 col-sm-4 col-xs-12">

            <center>
              <img class="Logo1" src="static/Pic/BLogo.png" width="100" height="100" alt="Logo-Hospital" title="Logo">
            </center> <br>

            <div class="form-group">

              <label for="">First Name : </label>
              <input type="text" name="fname" required class="form-control" id="exampleInputEmail1" placeholder="Patient FirstName" pattern="^[A-Za-z]+">

            </div>

            <div class="form-group">

              <label for="">Last Name : </label>
              <input type="text" name="lname" required  class="form-control" id="exampleInputEmail1" placeholder="Patient Last Name" pattern="^[A-Za-z]+">

            </div>

            <div class="form-group">

              <label for="">UserName : </label>
              <input type="text" name="usern" required class="form-control" id="exampleInputEmail1" placeholder="UserName" pattern="^[A-Za-z0-9]+">

            </div>

            <div class="form-group">

              <label for="">Email : </label>
              <input type="text" name="emil" required class="form-control" id="exampleInputEmail1" placeholder="example@gmail.com">

            </div>

            <div class="form-group">

              <label for="">Password : </label>
              <input type="password" name="pwd" maxlength="10" required class="form-control" id="exampleInputEmail1" placeholder="Password" pattern="^[A-Za-z0-9]+">

            </div>

            <div class="form-group">

              <label for="">Confirm Password : </label>
              <input type="password" name="cpwd" maxlength="10" required class="form-control" id="exampleInputEmail1" placeholder="Confirm Password" pattern="^[A-Za-z0-9]+">

            </div>

            <div class="form-group">

              <label for="">Phone No. : </label>
              <input type="text" name="phon" maxlength="11" required class="form-control" id="exampleInputEmail1" placeholder="07801234567">

            </div>

            <div class="form-group">
              <label for="">Gender: </label><br>
              <input type="radio" name="Gend" checked value="Male"> Male <br>
              <input type="radio" name="Gend" checked value="Female"> Female <br>

            </div>

            <div class="form-group">

              <label for="">Birthday: </label>
              <input type="date" name="Bdat" required class="form-control" id="exampleInputEmail1">

            </div>

            <div class="form-group">

              <label for="">Patient Status : </label><br>

                <input type="radio" name="statu" checked value="Very Good"> Very Good <br>
                <input type="radio" name="statu" checked value="Good"> Good <br>
                <input type="radio" name="statu" checked value="Average"> Average <br>
                <input type="radio" name="statu" checked value="Weak"> Weak <br>

            </div>

            <div class="form-group">

              <label for="">Date of Cancer Start in him/her : </label>
              <input type="date" name="Cstart" required class="form-control" id="exampleInputEmail1" placeholder="Patient Status">

            </div>

            <div class="form-group">

              <label for="">Dr. checked Cancer / FirstName : </label>
              <input type="text" name="drchs" required value="" class="form-control" id="exampleInputEmail1" placeholder="Dr. First Name" pattern="^[A-Za-z]+">

            </div>

            <div class="form-group">

              <label for="">Dr. checked Cancer / LastName : </label>
              <input type="text" name="drlast" required class="form-control" id="exampleInputEmail1" placeholder="Dr. Last Name" pattern="^[A-Za-z]+">

            </div>

            <div class="form-group">

              <label for="">Treatment Percentage : </label>
              <input type="text" name="Treat" required class="form-control" id="exampleInputEmail1" placeholder="Treatment Percentage / e.g. 50" pattern="^[0-9]+" maxlength="2">

            </div>

            <div class="form-group">
              <label>Types of Analyzes : </label><br>
                <input type="radio" name="Analz" checked value="CBC"> CBC <br>
                <input type="radio" name="Analz" checked  value="AFP"> AFP <br>
                <input type="radio" name="Analz" checked  value="Ultrasonography"> Ultrasonography <br>
                <input type="radio" name="Analz" checked  value="CT Scan"> CT Scan <br>
                <input type="radio" name="Analz" checked  value="Scan Bone"> Scan Bone <br>
                <input type="radio" name="Analz" checked  value="PET"> PET <br>
            </div>

            <div class="checkbox">

              <label>
                <input type="checkbox" name="chebox" checked> Remember me
              </label>

            </div>

            <input class="btn btn-default butocolor" type="submit" name="Sign" value="SignUp">

          </div>

      </div>

    </div>

</div>

    </form>

    <br><br>

    <?php

    if(isset($_POST["Sign"]))
    {
      $con = mysqli_connect("localhost" , "Hospital" , "123456");
      mysqli_select_db($con , "hospitaldb");
      $quey = "INSERT INTO `signuptb`( `firstname`, `lastname`, `username`, `email`, `password`, `confirmpassword`, `phonenumber`, `Gender`, `Birthday`, `Patientstatus`, `Cancerstart`, `doctoname` , `doclastnam`,  `treatment`, `Analyzes`) VALUES ('$_POST[fname]' , '$_POST[lname]' , '$_POST[usern]' , '$_POST[emil]' , '$_POST[pwd]' , '$_POST[cpwd]' , '$_POST[phon]' , '$_POST[Gend]' , '$_POST[Bdat]' , '$_POST[statu]' , '$_POST[Cstart]' , '$_POST[drchs]' , '$_POST[drlast]' , '$_POST[Treat]' , '$_POST[Analz]')";
      mysqli_query($con ,  $quey);
    }

    ?>


   <!-- jQuery first, then Popper.js, then Bootstrap JS -->

   <script src="static/js/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

   <script src="static/js/bootstrap.min.js"></script>

 </body>

 </html>


 <?php

 session_unset();
 session_destroy();

 ?>
