<?php
// appel des fichiers
require_once 'classes/Animal.php';
require_once 'classes/Chien.php';
require_once 'classes/Chat.php';

$chat = new Chat();
echo '<br>';
echo $chat->type();
echo '<br> Mon cri :';
echo $chat->crier();

$chien = new Chien();
echo '<br>';
echo $chien->type();
echo '<br> Mon cri :';
echo $chien->crier();