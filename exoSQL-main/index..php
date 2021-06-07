<?php
$servername = "localhost";
$basename = "exercices_sql";
$tablename = "users";
$username = "admin";
$password = "admin";

try {
    $bdd = new PDO("mysql:host=$servername;dbname=$basename;charset=utf8", $username, $password);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    die('Erreur: ' . $e->getMessage());
}

function insertUser($fname, $lname, $bdd) {
    echo '</br>';
    echo 'Insert ' . $fname . ' ' . $lname . '</br>';
    $exeText = "INSERT INTO users (first_name, last_name, email, gender, ip_address, birth_date, zip_code, avatar_url, state_code, country_code) VALUES ('{$fname}', '{$lname}', 'gin@gin.fr', 'Female', '000.0.0.0', '00/10/1900', 'blabla', 'http://fake.fr', 'F', 'FR')";
    $bdd->exec($exeText); 
}
// insertUser('Gin', 'Notreal', $bdd);

function deleteUserBy($field, $value, $bdd) {
    echo '</br>';
    echo "DELETE FROM users WHERE " . $field . ' = ' . $value . '</br>';

    $req = "DELETE FROM users WHERE $field = '$value'";
    $bdd->exec($req); 
}
// deleteUserBy('first_name', 'Gin', $bdd); 

function searchBy($field, $value, $bdd) {
    echo 'search by "' . $field . ' = ' . $value . '": </br>';
    $req = "SELECT first_name, last_name, $field FROM users WHERE $field = '$value'"; 
    $result = $bdd->query($req);
    while($data = $result->fetch()){
        echo "- " . $data['first_name'] . " " . $data['last_name'] . ": " . $field . " = " . $data[$field] . '</br>';
    }
    $result->closeCursor();
}
// searchBy('last_name', 'Notreal', $bdd);
// searchBy('Gender', 'Female', $bdd);


function searchByLike($field, $value, $bdd) {
    echo 'search by "' . $field . ' = ' . $value . '": </br>';
    $req = "SELECT first_name, last_name, $field FROM users WHERE $field LIKE '$value'"; 
    $result = $bdd->query($req);
    while($data = $result->fetch()){
        echo "- " . $data['first_name'] . " " . $data['last_name'] . ": " . $field . " = " . $data[$field] . '</br>';
    }
    $result->closeCursor();
    return $req;
}
// searchByLike('Gender', 'Fem%', $bdd);
// searchByLike('Email', '%goog%', $bdd);
// searchByLike('Country_code', 'N%', $bdd);

function returnOnly($searchFields, $req, $bdd) {
    $searched = explode(", ", $searchFields);
    print_r($searched);
    
    foreach($searched as $val) {
        echo $val . '</br>';
    }
    echo $req;


}
returnOnly('country_code', searchByLike('email', 'gin%', $bdd), $bdd);