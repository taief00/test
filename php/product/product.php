<?php

	class produits
	{
		private $servername = "localhost";
		private $username   = "root";
		private $password   = "";
		private $database   = "miniprojet";
		public  $con;


		// Database Connection 
		public function __construct()
		{
		    $this->con = new mysqli($this->servername, $this->username,$this->password,$this->database);
		    if(mysqli_connect_error()) {
			 trigger_error("Failed to connect to MySQL: " . mysqli_connect_error());
		    }else{
			return $this->con;
		    }
		}

		// Insert customer data into customer table
		public function insertData($post)
		{
			$name = $this->con->real_escape_string($_POST['name']);
			$price = $this->con->real_escape_string($_POST['price']);
			$category = $this->con->real_escape_string($_POST['category']);

			 $target_dir = "../php/product/img_dir/";
        // Get file path
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        // Get file extension
        $imageExt = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        // Allowed file types
        $allowd_file_ext = array("jpg", "jpeg", "png");
        

        if (!file_exists($_FILES["image"]["tmp_name"])) {
           $resMessage = array(
               "status" => "alert-danger",
               "message" => "Select image to upload."
           );
        } else if (!in_array($imageExt, $allowd_file_ext)) {
            $resMessage = array(
                "status" => "alert-danger",
                "message" => "Allowed file formats .jpg, .jpeg and .png."
            );            
        } else if ($_FILES["image"]["size"] > 2097152) {
            $resMessage = array(
                "status" => "alert-danger",
                "message" => "File is too large. File size should be less than 2 megabytes."
            );
        } else if (file_exists($target_file)) {
            $resMessage = array(
                "status" => "alert-danger",
                "message" => "File already exists."
            );
        } else {
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
				//$sql = "INSERT INTO user (file_path) VALUES ('$target_file')";
				
				//$image = $this->con->real_escape_string($_POST['image']);
			$query="INSERT INTO produits(name,price,category,image) VALUES('$name','$price','$category','$target_file')";
			$sql = $this->con->query($query);
			if ($sql==true) {
			    header("Location:../admin/products.php?msg1=insert");
			}else{
                echo($query);
			    echo "Registration failed try again!";
			}
            
		}}
	}

		// Fetch customer records for show listing
		public function displayData()
		{
		    $query = "SELECT * FROM produits";
		    $result = $this->con->query($query);
		if ($result->num_rows > 0) {
		    $data = array();
		    while ($row = $result->fetch_assoc()) {
		           $data[] = $row;
		    }
			 return $data;
		    }else{
			 echo "No found records";
		    }
		}

		// Fetch single data for edit from customer table
		public function displyaRecordById($id)
		{
		    $query = "SELECT * FROM produits WHERE id = '$id'";
		    $result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			return $row;
		    }else{
			echo "Record not found";
		    }
		}

		// Update customer data into customer table
		public function updateRecord($postData)
		{
		    $name = $this->con->real_escape_string($_POST['uname']);
		    $price = $this->con->real_escape_string($_POST['uprice']);
		    $category = $this->con->real_escape_string($_POST['ucategory']);
		    $id = $this->con->real_escape_string($_POST['id']);
		if (!empty($id) && !empty($postData)) {
			$query = "UPDATE produits SET name = '$name', price = '$price', category = '$category' WHERE id = '$id'";
			$sql = $this->con->query($query);
			if ($sql==true) {
			    header("Location:../admin/products.php?msg2=update");
			}else{
			    echo "Registration updated failed try again!";
			}
		    }
			
		}


		// Delete customer data from customer table
		public function deleteRecord($id)
		{
		    $query = "DELETE FROM produits WHERE id = '$id'";
		    $sql = $this->con->query($query);
		if ($sql==true) {
			header("Location:../admin/products.php?msg3=delete");
		}else{
			echo "Record does not delete try again";
		    }
		}

	}
?>