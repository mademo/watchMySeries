<?php

require_once "";

$serie = new Serie();
$serie ->setNameSerie($argv[1]);
$serie->setEpisodes($argv[2]);
$serie->setDateProduction($argv[3]);
$serie->setOrigine($argv[4]);
$serie->setActeur($argv[5]);

$entityManager->persist($serie);
$entityManager->flush();

echo "Serie".$serie->getId()."created\n";