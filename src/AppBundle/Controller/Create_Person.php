<?php 

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

require_once "Person.php";

$person = new Person();
$bug -> setName($argv[1]);
$bug -> setLastname($argv[2]);

$entityManager -> persist($Person);
$entityManager -> flush();

echo "bug " .$bug-> getDescription() ." created\n";
