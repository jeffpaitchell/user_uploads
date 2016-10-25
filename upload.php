<?php
include_once 'dbconfig.php';
if(isset($_POST['btn-upload']))
{   

	$user_firstname = $_POST['FirstName'];
	$user_lastname = $_POST['LastName'];
	$user_address1 = $_POST['HomeAddress1'];
	$user_address2 = $_POST['HomeAddress2'];
	$user_city = $_POST['HomeCity'];
	$user_state = $_POST['HomeState'];
	$user_zip = $_POST['HomeZip'];
	$user_phone = $_POST['HomePhone'];
	$user_email = $_POST['UserEmail'];
	$user_companyinfo = $_POST['CompanyInfo'];
	$user_companyaddress = $_POST['CompanyAddress'];
	$user_companycity = $_POST['CompanyCity'];
	$user_companystate = $_POST['CompanyState'];
	$user_companyzip = $_POST['CompanyZip'];
	$user_companyphone = $_POST['CompanyPhone']; 
     
	$file = rand(1000,100000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
	$file_size = $_FILES['file']['size'];
	$file_type = $_FILES['file']['type'];
	$folder="uploads/";
	
	// new file size in KB
	$new_size = $file_size/1024;  
	// new file size in KB
	
	// make file name in lower case
	$new_file_name = strtolower($file);
	// make file name in lower case
	
	$final_file=str_replace(' ','-',$new_file_name);
	
	if(move_uploaded_file($file_loc,$folder.$final_file))
	{
		$sql="INSERT INTO users(firstname,lastname, address1, address2, city, state, zip, phone, email, companyinfo, companyaddress, companycity, companystate, companyzip, companyphone, file, type, size) VALUES('$user_firstname', '$user_lastname', '$user_address1', '$user_address2', '$user_city', '$user_state', '$user_zip', '$user_phone', '$user_email', '$user_companyinfo', '$user_companyaddress', '$user_companycity', '$user_companystate', '$user_companyzip', '$user_companyphone' ,'$final_file','$file_type','$new_size')";
		mysqli_query($dbC,$sql);
		?>
		<script>
		alert('successfully uploaded');
        window.location.href='index.php?success';
        </script>
        
		<?php
	}
	else
	{
		?>
		<script>
		alert('error while uploading file');
        window.location.href='index.php?fail';
        </script>
		<?php
	}
}
?>