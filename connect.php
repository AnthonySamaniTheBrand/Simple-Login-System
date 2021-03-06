<?php
//change below as needed
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'users';

//create a connection 
$conn = new mysqli($servername, $username, $password, $dbname);

//check connection 
if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}
echo "Connected Successfully!";


//get the post records from html
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$psw = $_POST['psw'];

//database insert SQL code
$sql = "INSERT INTO login (id, fullname, email, psw) VALUES (NULL, '$_POST[fullname]', '$_POST[email]', '$_POST[psw]')";


//test if form not working
//$sql ="INSERT INTO login (fullname, email, psw) VALUES ('hardTestName', 'hardTestEmail', 'hardTestPsw')";


//check record was created
if ($conn->query($sql) === TRUE) {
    echo "record created successfully";
}
else {
    echo "Error :" . $sql . "<br>" . $conn->error;
}

//close connection
$conn->close();

?>