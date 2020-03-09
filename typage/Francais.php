<?php
require_once 'Langue.php';

class Francais extends Langue
{
    public $francais;
    public $birthday;
   
    public function getFrancais()
    {
        return $this->francais;
    }
    public function setFrancais($langue)
    {
        return $this->francais = $langue;
    }
    public function setBirthday(Datetime $date){
        $this->birthday = $date;
    }
}
$langue = new Langue();
$vernon_test = new Francais();
$vernon_test->setFrancais('anglais');
$langue->getTypeObject($vernon_test);
print_r($langue->getLangue());

echo "<br>";
echo "<br>";

$ma_date = new Datetime('2020-03-09');
$vernon_test->setBirthday($ma_date);
var_dump($vernon_test);


