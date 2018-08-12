<?php

 /*    Created by : Ahmed yaseen  ( Cipher_Code )    */

include("connectdb.php");

$Adm = array("MuhammedEssaDev" , "CipherCode" , "IssaSoffer");

$Pwds = array("654456" , "098890" , "123321");

if($_SERVER['REQUEST_METHOD'] == 'POST')
{

$user = $_POST['AdminID'];
$PWD = $_POST['passwo'];

if(in_array($user , $Adm) && in_array($PWD , $Pwds))
{
header('Location:Submit.php');
}

else
{
echo "You Are Not Admin";
header('REFRESH:1;URL=Basic-Index.php');
}

}
else
{
  echo "This Page Only For Admins";
}

?>
