<?php



namespace Las_Vegas;

class hotel
{

    private string $name;
    private string $info;

    public function getName(): string {
        return $this->name;
    }

    public function getInfo(): string {
        return $this->info;
    }

    public function __construct(string $name, string $info){
        $this->name = $name;
        $this->info = $info;
    }

}