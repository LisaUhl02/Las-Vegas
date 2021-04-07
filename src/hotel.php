<?php



namespace Las_Vegas;

class hotel
{

    private $name;
    private $info;

    public function getName() {
        return $this->name;
    }

    public function getInfo() {
        return $this->info;
    }

    public function __construct($name, $info){
        $this->name = $name;
        $this->info = $info;
    }

}