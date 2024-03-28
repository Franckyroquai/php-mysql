<?php

try {
    $connexion = new PDO("mysql:host=localhost; dbname=world", "root", "");
    echo "Connexion réussie !<br><br>";
} catch (PDOException $e) {
    echo "Error : ".$e->getMessage();
}


//$result = $connexion->query("SELECT * FROM house");


// $all_data=[];
// while ($data = $result->fetch(PDO::FETCH_BOTH)) {
    //     $all_data[] = $data;
    // }

//$all_data = $result->fetchAll(PDO::FETCH_OBJ);
    
//var_dump($all_data);


    // $sql = "INSERT INTO house (adress, owner) VALUES ('56 rue du travail bien fait',4)";
    // $sql_modif = "UPDATE persons  SET name='Jean DUPONT' WHERE id=1";
    // $sql_delete = "DELETE FROM persons WHERE id=5";

    // $result = $connexion->exec($sql_delete);

    // var_dump($result);


// $sql = "INSERT INTO persons (name,date_birth) VALUES (:name,:date_birth)";
// $result = $connexion->prepare($sql);

// $name = "Tony";
// $date_birth = "1989-03-12 14:09:56";

// $result->execute(array(
//     ':name' => $name,
//     ':date_birth' => $date_birth 
// ));

// $name = "Nicolas DUPONT";
// $date_birth = "2009-03-12 14:09:56";

// $result->execute(array(
//     ':name' => $name,
//     ':date_birth' => $date_birth 
// ));


$sql = "INSERT INTO persons (name,date_birth) VALUES (?,?)";
$result = $connexion->prepare($sql);

$name = "Luffy";
$date_birth = "1988-03-12 14:09:56";

$result->execute(array(
    $name,
    $date_birth 
));

$name = "Zorro";
$date_birth = "2012-03-12 14:09:56";

$result->execute(array(
    $name,
    $date_birth 
));

var_dump($result);


?>