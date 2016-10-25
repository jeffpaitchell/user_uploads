<?php
include_once 'dbconfig.php';

session_start(); //Start the session
define(ADMIN,$_SESSION['name']); //Get the user name from the previously registered super global variable
if(!$_SESSION['admin']){ //If session not registered
header("location:login.php"); // Redirect to login.php page
}

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>User Data</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>

<div id="body">
	<table width="80%" border="1">
    <tr>
    <th colspan="4">New Users...<label><a href="index.php">Create a new user here...</a></label></th>
    <th colspan="4"><label><a href="logout.php">Logout</a></label></th>
    </tr>
    <tr>
    <td>First Name</td>
    <td>Last Name</td>
    <td>Address 1</td>
    <td>Address 2</td>
    <td>City</td>
    <td>State</td>

    <td>Zip</td>
    <td>Phone</td>
    <td>Email</td>

    <td>Company Info</td>
    <td>Company Address</td>
    <td>Company City</td>

    <td>Company State</td>
    <td>Company Zip</td>
    <td>Company Phone</td>

    <td>File Name</td>
    <td>File Type</td>
    <td>File Size(KB)</td>
    <td>View</td>
    </tr>
    <?php
    $sql="SELECT * FROM users";
    $result_set=mysqli_query($dbC, $sql);
    while($row=mysqli_fetch_array($result_set, MYSQLI_ASSOC))
    {
        ?>
        <tr>
        <td><?php echo $row['firstname'] ?></td>
        <td><?php echo $row['lastname'] ?></td>
        <td><?php echo $row['address1'] ?></td>
        <td><?php echo $row['address2'] ?></td>
        <td><?php echo $row['city'] ?></td>
        <td><?php echo $row['state'] ?></td>
        <td><?php echo $row['zip'] ?></td>
        <td><?php echo $row['phone'] ?></td>
        <td><?php echo $row['email'] ?></td>
        <td><?php echo $row['companyinfo'] ?></td>
        <td><?php echo $row['companyaddress'] ?></td>
        <td><?php echo $row['companycity'] ?></td>
        <td><?php echo $row['companystate'] ?></td>
        <td><?php echo $row['companyzip'] ?></td>
        <td><?php echo $row['companyphone'] ?></td>
        <td><?php echo $row['file'] ?></td>
        <td><?php echo $row['type'] ?></td>
        <td><?php echo $row['size'] ?></td>
        <td><a href="uploads/<?php echo $row['file'] ?>" target="_blank">view file</a></td>
        </tr>
        <?php
    }
    ?>
    </table>
    
</div>
</body>
</html>