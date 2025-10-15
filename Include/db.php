<?php
$localhost = 'localhost';
$username = 'root';
$password = '';
$dbname   = 'win';
try {
$conn = mysqli_connect($localhost,
                        $username,
                        $password,
                        $dbname);
}
catch(mysqli_sql_exception){
    echo "ERORR";
}

?>