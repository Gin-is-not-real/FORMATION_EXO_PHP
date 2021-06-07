<?php
$servername = "localhost";
$basename = "exercices_sql";
$tablename = "users";
$username = "admin";
$password = "admin";

try {
    $connect = new PDO("mysql:host=$servername;dbname=$basename;charset=utf8", $username, $password);
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    die('Erreur: ' . $e->getMessage() . '</br>');
}

function searchLastName($str, $connect) {
    echo 'Last name "' . $str . '": </br>';
    $request = "SELECT first_name, last_name FROM users WHERE last_name = '{$str}'"; 
    $result = $connect->query($request);
    while($data = $result->fetch()){
        echo "- " . $data['first_name'] . " " . $data['last_name'] . '</br>';
    }
}
// // searchLastName('Palmer', $connect);

function searchGender($str, $connect) {
    echo '</br>';
    echo 'Gender  "' . $str . '": </br>';
    $request = "SELECT first_name, last_name FROM users WHERE gender = '{$str}'"; 
    $result = $connect->query($request);
    while($data = $result->fetch()){
        echo "- " . $data['first_name'] . " " . $data['last_name'] . ', ' . 'female</br>';
    }
}
// searchGender('Female', $connect);

function searchCountryStartBy($char, $connect) {
    echo '</br>';
    echo 'Country start by "' . $char . '": </br>';
    $request = "SELECT country_code FROM users WHERE country_code LIKE '{$char}%'" ; 

    $result = $connect->query($request);
    while($data = $result->fetch()){
        echo "- " . $data['country_code'] . '</br>';
    }
}
// searchCountryStartBy("N", $connect);

function searchEmailsThatContains($str, $connect) {
    echo '</br>';
    echo 'Emails that contains "' . $str . '": </br>';
    $request = "SELECT email FROM users WHERE email LIKE '%{$str}%'" ; 

    $result = $connect->query($request);
    while($data = $result->fetch()){
        echo "- " . $data['email'] . '</br>';
    }
}
// searchEmailsThatContains("google", $connect);

function insertUser($fname, $lname, $email, $connect) {
    echo '</br>';
    echo 'Insert ' . $fname . ' ' . $lname . '</br>';
    $exeText = "INSERT INTO users (first_name, last_name, email, gender, ip_address, birth_date, zip_code, avatar_url, state_code, country_code) VALUES ('{$fname}', '{$lname}', '{$email}', 'Female', '000.0.0.0', '00/10/1900', 'blabla', 'http://fake.fr', 'F', 'FR')";
    $connect->exec($exeText); 
}
// insertUser('Gin', 'Notreal', 'gin@fake.com', $connect);

////////////////////////////////////////////////////////
//CHANGE FIELD
function changeField($field, $value, $newValue, $connect) {
    echo '</br>';
    echo "UPDATE users SET " . $field . ' = ' . $newValue . '</br>';

    $req = "UPDATE users SET $field = '$newValue' WHERE $field = '$value' ";
    $connect->exec($req); 
}
// changeField('email', 'new@fake.com', 'gin@%', $connect);
// searchByLike('email', '%fake%', $connect);
// deleteUserBy('email', '%fake%', $connect); 
// searchByLike('email', '%fake%', $connect);

////////////////////////////////////////////////////////
//DELETE
function deleteUserBy($field, $value, $connect) {
    echo '</br>';
    echo "DELETE FROM users WHERE " . $field . ' = ' . $value . '</br>';

    $req = "DELETE FROM users WHERE $field LIKE '$value'";
    $connect->exec($req); 
}
// deleteUserBy('first_name', 'Gin', $connect); 

////////////////////////////////////////////////////////
//SEARCH BY FIELD = VALUE
function searchBy($field, $value, $connect) {
    echo 'search by "' . $field . ' = ' . $value . '": </br>';
    $req = "SELECT first_name, last_name, $field FROM users WHERE $field = '$value'"; 
    $result = $connect->query($req);
    while($data = $result->fetch()){
        echo "- " . $data['first_name'] . " " . $data['last_name'] . ": " . $field . " = " . $data[$field] . '</br>';
    }
}
// searchBy('last_name', 'Notreal', $connect);
// searchBy('Gender', 'Female', $connect);

////////////////////////////////////////////////////////
//SEARCH BY FIELD LIKE VALUE
function searchByLike($field, $value, $connect) {
    echo 'search by "' . $field . ' = ' . $value . '": </br>';
    $req = "SELECT first_name, last_name, $field FROM users WHERE $field LIKE '{$value}'"; 
    $result = $connect->query($req);
    $arrayResult = [];
    while($data = $result->fetch()){
        echo "- " . $data['first_name'] . " " . $data['last_name'] . ": " . $field . " = " . $data[$field] . '</br>';

        array_push($arrayResult, [$data['first_name'], $data['last_name'], $data[$field]]);
    }
    return $arrayResult;
}
// searchByLike('Gender', '%Fem%', $connect);
// searchByLike('Email', '%goog%', $connect);
// searchByLike('Country_code', 'N%', $connect);

///////////////////////////////////////////////////////////////
//SORT BY COUNTRY
function sortByCountry($connect) {
    echo 'sort by country: </br>';
    $req = "SELECT country_code, first_name, last_name  FROM users ORDER BY country_code ASC"; 
    $result = $connect->query($req);
    $last = "";
    $actual = "";
    $count = 0;
    while($data = $result->fetch()){
        $actual = $data['country_code'];
        if($last == "") {
            $last = $actual;
        }
        if($last == $actual) {
            $count ++;
        }
        else {
            echo "Occurence of " . $last . ": " . $count . '</br></br>';
            $count = 1;
        }
        $last = $actual;
        echo "- " . $data['country_code'] . " " . $data['first_name'] . " " . $data['last_name'] . '</br>';
    }
}
// sortByCountry($connect);

///////////////////////////////////////////////////////////////
//SEARCH AND COUNT
function searchAndCount($field, $value, $connect, $echo) {
    if($echo != false) {
        $echo = true;
    }
    
    echo 'search and count "' . $field . ' = ' . $value . '": </br>';
    $req = "SELECT first_name, last_name, $field FROM users WHERE $field LIKE '{$value}'"; 
    // $req = "SELECT first_name, last_name, $field, count(first_name) as cnt FROM users WHERE $field LIKE '{$value}'"; 
    $result = $connect->query($req);
    $counter = 0;
    while($data = $result->fetch()){
        $counter ++;
        if($echo == true) {
            echo "- " . $data['first_name'] . " " . $data['last_name'] . ": " . $field . " = " . $data[$field] . '</br>';
            // echo "- " . $data['first_name'] . " " . $data['last_name'] . ": " . $field . " = " . $data[$field] . ", count " . $data['cnt'] . '</br>';
        }
    }
    return $counter;
}
// $nbrFemales = searchAndCount('Gender', 'Fem%', $connect, false);
// echo 'nombre de femmes: ' . $nbrFemales . '</br>';
// $nbrMales = searchAndCount('Gender', 'Mal%', $connect, false);
// echo 'nombre d\'hommes: ' . $nbrMales . '</br>';

function searchAndCount2($field, $connect) {
    echo 'search and count: </br>';
    $req = "SELECT $field, count($field) AS cnt FROM users GROUP BY $field ORDER BY cnt ASC"; 
    $result = $connect->query($req);

    while($data = $result->fetch()){
        echo $data['cnt'];
            echo "- " . $data[$field]  . '</br>';
    }
}
searchAndCount2('gender', $connect);

function searchBirthDates($field, $value, $connect) {
    echo 'search birth date by "' . $field . ' = ' . $value . '": </br>';
    $req = "SELECT birth_date, STR_TO_DATE(birth_date, '%d/%m/%Y') AS b_date, first_name, last_name, $field FROM users WHERE $field LIKE '{$value}' ORDER BY '{$value}'"; 

    $result = $connect->query($req);

    while($data = $result->fetch()){
        echo "- " . $data['birth_date'] . " " . $data['first_name'] . ": " . $field . " = " . $data[$field] . ", " . $data['b_date'] . '</br>';
    }
}

$femalesBirth = searchBirthDates('Gender', 'Fem%', $connect);
// // print_r($arr);
$MalesBirth = searchBirthDates('Gender', 'Mal%', $connect);
// $date = "31/12/1973";

/*
//req -> ROUND(DATEDIFF(NOW(), STR_TO_DATE-birth_date, '%d/%m/%Y')) /365.25) AS 'age' FROM users
    //DATEDIFF compare 2 date

//moyenne d'age général :
$t = $conn->query("SELECT last_name, first_name, gender,
round(AVG(ROUND(DATEDIFF(NOW(), STR_TO_DATE(birth_date, '%d/%m/%Y')) /365.25))) AS ord FROM users ORDER BY ord ASC");

//age par genre
$t = $conn->query("SELECT last_name, first_name, gender,
round(AVG(ROUND(DATEDIFF(NOW(), STR_TO_DATE(birth_date, '%d/%m/%Y')) /365.25))) AS ord FROM users GROUP BY gender ORDER BY ord ASC");
echo "";
*/