<?php
  // session_start();
  // require_once'../db.php';
  // if($_SERVER['REQUEST_METHOD']=='POST'){
  //   $title      =$_POST['title'];
  //   $description=$_POST['description'];
  //   $category   =$_POST['category'];
  //   $image      =$_FILES['image'];

  //   $file=$image['tmp_name'];
  //   $des=$image['name'];
  //   if (move_uploaded_file($file, '../assets/portfolio/image/'. $des)) {
  //       $insert="INSERT INTO portfolios(title, description, category, image) VALUES ('$title', '$description', '$category', '$des')";
  //       mysqli_query($db, $insert);
  //       echo'OK';
  //   }else{
  //   	echo'error';
  //   }
  // }  
  //   $explode    =explode(',', $image['name']);
  //   $end        =end($explode);
  //   $allow      =array('jpg', 'jpeg', 'JPG', 'JPEG', 'PNG', 'png');
  //   if (in_array($end, $allow)) {
  //     if ($image['size']<=10000) {
  //         $insert="INSERT INTO portfolios(title, description, category) VALUES ('$title', '$description', '$category')";
  //         $quiry=mysqli_query($db, $insert);
  //         $last =mysql_insert_id($db).'.'.$end ;
  //         $location='../assets/portfolio/image/'.$last;
  //         move_uploaded_file($image['tmp_name'], $location);
  //         echo'Ok';
  //     }else{
  //       echo(error);
  //     }
  //   }else{
  //   	echo'Not Allow';
  //   }
  // }
?>