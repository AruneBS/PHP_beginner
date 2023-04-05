<?php

echo '<pre>';
// Tėvinė klasė
class PirmojiKlase{

    public $pasisveikinimas = 'Sveiki, šiandien pirmadienis';
    public $veiksmas = 'Reikia krautis daiktus';

    function __construct($pasisveikinimas, $veiksmas)
    {
      $this->pasisveikinimas = $pasisveikinimas;
      $this-> veiksmas   = $veiksmas;
    }

    public function setPasisveikinimas($data){
        $this-> pasisveikinimas = $data;
        }
}

$pirmoji = new PirmojiKlase('Labas', 'Adomai');
var_dump($pirmoji);


class AntrojiKlase extends PirmojiKlase{
    public $siandien = 'Adomas namie';

public function __construct($data, $pasisveikinimas, $veiksmas)
{
    parent::__construct($data, $pasisveikinimas, $veiksmas);
    $this-> siandien = $data;
}
}

$antroji = new AntrojiKlase('Adomas namie', 'Adomas', 'serga');
var_dump($antroji);

?>
