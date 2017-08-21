<?php
   if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size = $_FILES['image']['size'];
      $file_tmp = $_FILES['image']['tmp_name'];
      $file_type = $_FILES['image']['type'];
	  if(isset($_POST['upload'])){
		$selected_val = $_POST['file']; 
		$selected_val1 = $_POST['folder'];  
	  } 
      if(empty($errors)==true) {
         move_uploaded_file($file_tmp,"uploads/".$selected_val."/".$selected_val1."/".$file_name);
        }
   }
   header('Location: index.html');
?>