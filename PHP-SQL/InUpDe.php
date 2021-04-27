<?php 
    include_once "./db.conn..php";

    $stmt = "INSERT INTO users (first_name, last_name,email, gender, ip_address,birth_date,zip_code,zip_code,avatar_url,state_code,country_code) VALUES 
        (1001 , 'Arsim', 'Sejdiu', 'arsim@google.com', 'Male', '28.7.29.243', '23/04/2002', 'http://upenn.edu/metus/vitae/ipsum/aliquam.jsp' , '' , 'KS')
    ";
$conn->exec($stmt);
echo "<script>console.log('Record Created');</script>";
