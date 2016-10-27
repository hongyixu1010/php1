<?php
    $servername = getenv('IP');
    $username = getenv('C9_USER');
    $password = "";
    //$username = "admin";
    //$password = "Welcome1";
    $database = "c9";
    $dbport = 3306;

    // Create connection
    $db = new mysqli($servername, $username, $password, $database, $dbport);
    
    $name2=$_POST['name1']; // Fetching Values from URL
    $email2=$_POST['email1'];
    $contact2=$_POST['contact1'];
    $gender2=$_POST['gender1'];
    $msg2=$_POST['msg1'];
    $query = mysql_query("insert into form_element(name, email, contact, gender, message) values 
    ('$name2','$email2','$contact2','$gender2','$msg2')"); //Insert query
    if($query){
        echo "Data Submitted succesfully";
    }
    mysql_close($db); // Connection Closed.
?>