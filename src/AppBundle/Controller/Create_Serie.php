<?php 

require_once "bootstrap.php";

$bug = new Bug();
$bug -> setDescription($argv[1]);
$bug -> setStatus("open");
//$date = new DateTime("now");
//$bug -> setCreated($date);


$product = $entityManager-> getRepository("Product")-> findOneByName($argv[2]);
$bug -> assignToProduct($product);

$reporter = $entityManager-> getRepository("User")-> findOneByName($argv[3]);
$bug -> assignReporter($reporter);

$engineer = $entityManager-> getRepository("User")-> findOneByName($argv[4]);
$bug -> assignEngineer($engineer);

$entityManager -> persist($bug);
$entityManager -> flush();

echo "bug " .$bug-> getDescription() ." created\n";
