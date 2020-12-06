<?php

	class Customers
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
			$email = $this->con->real_escape_string($_POST['email']);
			$username = $this->con->real_escape_string($_POST['username']);
			$password = $this->con->real_escape_string(md5($_POST['password']));
			$query="INSERT INTO customers(name,email,username,password) VALUES('$name','$email','$username','$password')";
			$sql = $this->con->query($query);
			if ($sql==true) {
			    header("Location:login.php?signup=success");
			}else{
                echo($query);
			    echo "Registration failed try again!";
			}
		}

		// Fetch customer records for show listing
		public function displayData()
		{
		    $query = "SELECT * FROM customers";
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
		    $query = "SELECT * FROM customers WHERE id = '$id'";
		    $result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			return $row;
		    }else{
			echo "Record not found";
		    }
		}


		public function userauth($post){

			  if(isset($_POST["submit"])) {
				  
				$password = $this->con->real_escape_string(md5($_POST['password']));
				$username = $this->con->real_escape_string($_POST['username']);
				$query = "SELECT * FROM customers WHERE username = '$username' && password ='$password' ";
				$sql = $this->con->query($query);
				$rowCount = mysqli_num_rows($sql);
				 echo ($rowCount);
				if ($rowCount > 0) {
				
				 while($row = mysqli_fetch_array($sql)) {
                    $id            = $row['id'];
					$username     = $row['username'];
					$role     = $row['role'];

					 $_SESSION['id'] = $id;
					   $_SESSION['username'] = $username;
					   
                   
				}
				
					if ($role!="admin"){
						header("Location:index.php?login=true");
					} 
					else {
						header("Location:../admin/products.php?login=true");
					}
				                

			}else{
              
			    echo "login failed try again!";
			}


			  }




		}

		// Update customer data into customer table
		public function updateRecord($postData)
		{
		    $name = $this->con->real_escape_string($_POST['uname']);
		    $email = $this->con->real_escape_string($_POST['uemail']);
		    $username = $this->con->real_escape_string($_POST['upname']);
		    $id = $this->con->real_escape_string($_POST['id']);
		if (!empty($id) && !empty($postData)) {
			$query = "UPDATE customers SET name = '$name', email = '$email', username = '$username' WHERE id = '$id'";
			$sql = $this->con->query($query);
			if ($sql==true) {
			    header("Location:../admin/users.php?msg2=update");
			}else{
			    echo "Registration updated failed try again!";
			}
		    }
			
		}


		// Delete customer data from customer table
		public function deleteRecord($id)
		{
		    $query = "DELETE FROM customers WHERE id = '$id'";
		    $sql = $this->con->query($query);
		if ($sql==true) {
			header("Location:../admin/users.php?msg3=delete");
		}else{
			echo "Record does not delete try again";
		    }
		}

	}
?>