<?php
    /* $hotels = [
        '###Hotel1###' => <<<HOTEL1
                           <h1>Caesars Palace</h1>
                           Dieses berühmte Casino-Hotel befindet sich in einem weitläufigen Gebäudekomplex im römischen Stil am lebhaften Las Vegas Strip. Es ist 1 Meile (1,6 km) von der Interstate 15 und 14 Meilen (22,5 km) vom Rio Secco Golf Club entfernt.
                           HOTEL1,

        '###Hotel2###' => <<<HOTEL2
                           <h1>Luxor</h1>
                           Dieses farbenfrohe Casino-Resort im ägyptischen Stil liegt am südlichen Ende des Las Vegas Strip in einer 30-stöckigen Pyramide, auf deren Spitze sich ein 315.000-Watt-Scheinwerfer befindet. Zum Flughafen McCarran International sind es 2 Meilen (3,2 km).
                           HOTEL2,

        '###Hotel3###' => <<<HOTEL3
                           <h1>The Mirage</h1>
                           Dieses legendäre Casino-Hotel mit Blick auf den berühmten "ausbrechenden Vulkan" befindet sich am Las Vegas Strip neben dem Hotel Caesars Palace und gegenüber von Madame Tussauds Las Vegas.
                           HOTEL3
    ];

    $html = readTemplateFile('./templates/index.html');

    foreach($hotels as $key => $val) {
        $html = str_replace($key, $val, $html);
    }

    echo $html;


    function readTemplateFile(string $path) : string {
        $handle = fopen($path, 'r');
        $content = fread($handle, filesize($path));
        fclose($handle);
        return $content;
    }*/

namespace Las_Vegas;

require_once './vendor/autoload.php';


$loader = new \Twig\Loader\FilesystemLoader('./templates');
$twig = new \Twig\Environment($loader);

$hotels = array(
    new hotel("Caesars Palace", "Dieses berühmte Casino-Hotel befindet sich in einem weitläufigen Gebäudekomplex im römischen Stil am lebhaften Las Vegas Strip. Es ist 1 Meile (1,6 km) von der Interstate 15 und 14 Meilen (22,5 km) vom Rio Secco Golf Club entfernt."),
    new hotel("Luxor", "Dieses farbenfrohe Casino-Resort im ägyptischen Stil liegt am südlichen Ende des Las Vegas Strip in einer 30-stöckigen Pyramide, auf deren Spitze sich ein 315.000-Watt-Scheinwerfer befindet. Zum Flughafen McCarran International sind es 2 Meilen (3,2 km)."),
    new hotel("The Mirage", "Dieses legendäre Casino-Hotel mit Blick auf den berühmten \"ausbrechenden Vulkan\" befindet sich am Las Vegas Strip neben dem Hotel Caesars Palace und gegenüber von Madame Tussauds Las Vegas."),
);

echo $twig->render(
    'index.html',
    ['hotels' => $hotels]
);
?>
