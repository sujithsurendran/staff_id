<?php



// variables ---
$email = $password = "";
$arr_alert=array("");
$err_email = $err_password = "";
// -----


if($_SERVER['REQUEST_METHOD'] == "POST") {
	if(validate_fields()) {
		if($_SESSION['id'] = write_data()){
			array_push($arr_alert, "Welcome on board.");
			header('Location:' . SITE_URL . '/staff_details.php');			
		}else {

			header('Location:' . SITE_URL . '/idcard.php');			
		}
	}
}


function write_data(){

global $conn, $arr_alert;
global $email, $password, $name;

		$sql = "INSERT INTO users (emailid, password)
		VALUES ('". $email. "', '". md5($password) . "')";

		try {

			$conn->exec($sql);
			$id = $conn->lastInsertId();

		}catch(PDOException $e){
			
			if($e->getCode() == 23000 ){
			// employee record already available

				// chek password
				$sql = "SELECT id FROM users WHERE password=? AND email=?";
				$qry = $conn->query(array($password, $email));
				if($qry->rowCount() == 1){
					$user = $qry->fetch(PDO::fetch_assoc);
					$id = $user['id'];
					
				}else{
					// Invalid user
					$id = false;
				}
		
				

			}else {
			// error unable to insert
				
				array_push($arr_alert, $sql . "<br>" . $e->getMessage()) ;
				$id =  false;
			}
		}
	return $id;
}



function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}



function validate_fields() {


global $err_email, $err_password, $arr_alert;
global $email, $password, $valid_data;
$valid_data=true;

	//  email
 	if (empty($_POST['email'])){
 		$err_email = "Please enter email";
 		$valid_data=false;
 	} else {
 		$email = test_input($_POST['email']);
 		if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
 			$err_email = "EmailID is invalid";
 			$valid_data=false;
 		}
 	}

	//   password
  	if(empty($_POST['password'])) {
  		$err_password = "Please enter PF Number";
  		$valid_data=false;
  	} else {
		$password = test_input($_POST["password"]);
	}


	//   ------------- Validation of fields -END-
	if(!$valid_data){
		//$alert_string="Sorry, unable to register, Invalid data!";
		array_push($arr_alert, "Sorry, unable to register, Invalid data!");
		//$there_are_alerts=true;
	}

	return $valid_data;

}?>
