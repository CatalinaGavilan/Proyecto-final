
<?php

header('Content-Type: application/json');

$pdo = new PDO('mysql:host=127.0.0.1;dbname=formulario', 'root', '');
$data = array();

$sentenciaSQL = "SELECT * FROM calendario ORDER BY id";
$statement = $pdo->prepare($sentenciaSQL);
$statement->execute();
$result = $statement->fetchAll();
foreach($result as $row)
{
 $data[] = array(
  'id'   => $row["id"],
  'id_name' => $row ["id_name"],
  'title'   => $row["title"],
  'descripcion'=> $row["descripcion"],
  'color' => $row["color"],
  'textColor'=>$row["textColor"],
  'start'   => $row["start_event"],
  'end'   => $row["end_event"]
 );
}

echo json_encode($data);
?> 