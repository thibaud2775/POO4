<?php
// appel des fichiers
require_once 'Animal.php';
require_once 'Chien.php';
require_once 'Chat.php';

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