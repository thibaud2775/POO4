<?php
// appel des fichiers
require_once 'Personne.php';

$me = new Personne();

$me->setNom('thibaud');

print $me->getNom();