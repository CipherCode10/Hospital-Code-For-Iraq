<!Doctype html>
 <html>
<head>

  <!-- Created by : Ahmed yaseen  ( Cipher_Code ) -->

   <!-- Required meta tags -->

   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <!-- Bootstrap CSS -->

   <link rel="stylesheet" href="static/css/bootstrap.min.css">
   <link rel="stylesheet" href="Basic-Style.css">

   <title>Help-Patients</title>

 </head>

 <body class="Body">

<div class="container H-Con">

  <div class="jumbotron H-back">

    <h3>Childhood Cancer Patients Form : </h3><br>

    <div class="table-responsive">


  <table class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Patient Firstname</th>
        <th>Patient Lastname</th>
        <th>Patient Age</th>
        <th>Address</th>
        <th>Cancer Percentage</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Ali</td>
        <td>Muhammed</td>
        <td>12</td>
        <td>Iraq - Baghdad</td>
        <td style="background-color:#CC0000; color:white;">70%</td>
      </tr>
    </tbody>

    <tbody>
      <tr>
        <td>2</td>
        <td>Nada</td>
        <td>Marwan</td>
        <td>10</td>
        <td>Iraq - Basra</td>
        <td style="background-color:red;color:white;">80%</td>
      </tr>
    </tbody>

    <tbody>
      <tr>
        <td>3</td>
        <td>Paset</td>
        <td>Alaa</td>
        <td>7</td>
        <td>Iraq - Anbar</td>
        <td style="background-color:#DC143C; color:white;">60%</td>
      </tr>
    </tbody>

    <tbody>
      <tr>
        <td>4</td>
        <td>Salem</td>
        <td>Salwan</td>
        <td>10</td>
        <td>Iraq - Mousel</td>
        <td style="background-color:#336600; color:white;">30%</td>
      </tr>
    </tbody>

    <tbody>
      <tr>
        <td>5</td>
        <td>Ismaeel</td>
        <td>Jalal</td>
        <td>14</td>
        <td>Iraq - Babil</td>
        <td style="background-color:#CC0000; color:white;">70%</td>
      </tr>
    </tbody>


  </table>

  </div>

<br><br>


<p style="margin-left:10px; font-size:20px; font-weight:bold;">If You Need to help them please fill your details : </p><br>

<div class="row">

  <div class="col-lg-5 col-md-12">

    <form style="background-color:#9CB3C3; font-size:20px; font-family:'Blue Highway'; padding:10px; border-radius:10px;" action="" method="POST">

      <div class="md-form form-sm">

        <label>First Name: </label>

        <input class="form-control" type="text" name="firssname" required placeholder="First Name">

        <label>Last Name: </label>

        <input class="form-control" type="text" name="Lasstnm" required placeholder="Last Name">

        <label>Email: </label>

        <input class="form-control" type="text" name="Eml" required placeholder="Email">

        <label>Password: </label>

        <input class="form-control" type="password" name="Passdd" required placeholder="Password">

        <br>

        <input class="btn btn-default butocolor" type="submit" name="Signsub" value="Send"> <img style="margin-top:5px;" align="right" src="static/Pic/Help-Ret.svg" width="100" height="25" alt="Return" title="Return" onclick="window.location.assign('Basic-Index.php');">

      </div>

    </form>

  </div>

</div>

  </div>

</div>


<?php

if(isset($_POST["Signsub"]))
{
  $connec = mysqli_connect("localhost" , "root" , "");
  mysqli_select_db($connec , "hospitaldb");
  $qu = "INSERT INTO `helppatients`(`FirsName`, `LasName`, `Emaile`, `Passwd`) VALUES ('$_POST[firssname]' , '$_POST[Lasstnm]' , '$_POST[Eml]' , '$_POST[Passdd]')";
  mysqli_query($connec ,  $qu);
}

?>








   <!-- Optional JavaScript --> <!-- jQuery first, then Popper.js, then Bootstrap JS -->

   <script src="static/js/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

   <script src="static/js/bootstrap.min.js"></script>

 </body>

 </html>
﻿
