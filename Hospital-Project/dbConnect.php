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

   <title>Only-Admins</title>

 </head>

 <body class="Body">

   <form action="Check.php" method="post">

   <div class="container form-con">

   <div class="container-fluid">

     <div class="row">

       <div class="col-md-4 col-sm-4 col-xs-12"></div>

         <div class="col-md-4 col-sm-4 col-xs-12">

           <center>
             <img class="Logo1" src="static/Pic/BLogo.png" width="100" height="100" alt="Logo-Hospital" title="Logo">
           </center> <br>

           <div class="form-group">

             <label for="">Admin ID : </label>
             <input type="text" name="AdminID" required class="form-control" id="exampleInputEmail1" placeholder="ID" pattern="^[A-Za-z0-9]+">

           </div>

           <div class="form-group">

             <label for="">Password : </label>
             <input type="password" name="passwo" required value="" class="form-control" id="exampleInputEmail1" placeholder="Password">

           </div>

           <div class="checkbox">

             <label>
               <input type="checkbox" name="chebox" checked> Remember me
             </label>

           </div>

           <input class="btn btn-default butocolor" type="submit" name="" value="Login">

         </div>

     </div>

   </div>

 </div>

   </form>



   <!-- Optional JavaScript --> <!-- jQuery first, then Popper.js, then Bootstrap JS -->

   <script src="static/js/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

   <script src="static/js/bootstrap.min.js"></script>

 </body>

 </html>
