<?php
include 'include/session.php';
// $_SESSION['error'] = '';
if(isset($_POST["import"]))
{
 if($_FILES["database"]["name"] != '')
 {
  $array = explode(".", $_FILES["database"]["name"]);
  $extension = end($array);
  if($extension == 'sql')
  {
   $connect = mysqli_connect("localhost", "root", "", "email_sending");
   $output = '';
   $count = 0;
   $file_data = file($_FILES["database"]["tmp_name"]);
   foreach($file_data as $row)
   {
    $start_character = substr(trim($row), 0, 2);
    if($start_character != '--' || $start_character != '/*' || $start_character != '//' || $row != '')
    {
     $output = $output . $row;
     $end_character = substr(trim($row), -1, 1);
     if($end_character == ';')
     {
      if(!mysqli_query($connect, $output))
      {
       $count++;
      }
      $output = '';
     }
    }
   }
   if($count > 0)
   {
    $_SESSION['error'] = 'There is an error in Database Import';
   }
   else
   {
    $_SESSION['success'] = 'Database Successfully Imported';
   }
  }
  else
  {
   $_SESSION['error'] = 'Invalid File';
  }
 }
 else
 {
  $_SESSION['error'] = 'Please Select SQL File';
 }
}

header('location: import');

?>