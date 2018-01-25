<?php

class About {

    protected $autore;

    public function __construct($autore) {
        $this->autore=$autore;
    }
    function sviluppo(){
        echo "Sviluppo software a cura di ".$this->autore;
    }
    static function linguaggio(){
        echo 'Realizzato in PHP';
    }
}

class AboutTime extends About {

    function sviluppo(){
        echo (new DateTime())->format('d-m-Y H:i:s').": "."Sviluppo software a cura di ".$this->autore;
    }
}

AboutTime::linguaggio();
echo " ..::.. ";
$me = new AboutTime('Massimo Esposito');
$me->sviluppo();

