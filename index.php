<?php
$servername="localhost";
$username="root";
$password="";
$dbname = "zadacha2_php";

try{
	$conn = new PDO ("mysql:host=$servername;dbname=$dbname", $username, $password);

	$sql= "CREATE TABLE `tablica` (
  		`id` INT(11) NOT NULL,
  		`date` timestamp NOT NULL,
  		`text` text,
  		PRIMARY KEY (`id`)
		);";

	$conn->exec($sql);
    echo "Таблица создана ";
    $sql= "INSERT INTO `tablica` (`id`, `date`, `text`) VALUES ('1', '2020-05-04', 'Хорошая погода')";
    $conn->exec($sql);
    echo " Запись 1 добавлена";

    $sql= "INSERT INTO `tablica` (`id`, `date`, `text`) VALUES ('2', '2000-04-14', 'создал табличку')";
    $conn->exec($sql);
    echo " Запись 2 добавлена";

    $sql= "INSERT INTO `tablica` (`id`, `date`, `text`) VALUES ('3', '1999-12-31', 'и заполнил')";
    $conn->exec($sql);
    echo " Запись 3 добавлена";
	
}
catch(PDOException $e){
	echo $sql . $e->getMessage();
}
$conn= null;

?>