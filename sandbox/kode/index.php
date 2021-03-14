<?php

require_once("./character.php");
require_once("./vendor/autoload.php");

use Symfony\Component\Yaml\Yaml;

$yaml = Yaml::parse("foo: bar");
echo(var_dump($yaml)."<br />");

$what = "world";
echo("Hello ".$what);

$arr = [1,2,3];

echo("<br />");

echo(__DIR__."<br />");
echo (__FILE__."<br />");


echo(var_dump($arr));
echo("<pre>===========REQ==============</pre>");
echo(var_dump($_REQUEST));
echo("<pre>=========================</pre>");
echo("<br />");

echo("<pre>===========SER============</pre>");
echo(var_dump($_SERVER));
echo("<pre>=========================</pre>");
echo("<br />");

echo("<pre>===========ENV===========</pre>");
echo(var_dump($_ENV));
echo("<pre>=========================</pre>");
echo("<br />");

echo("<pre>===========GET===========</pre>");
echo(var_dump($_GET));
echo("<pre>=========================</pre>");
echo("<br />");

echo("<pre>===========POST===========</pre>");
echo(var_dump($_POST));
echo("<pre>=========================</pre>");
echo("<br />");

if($_SERVER["REQUEST_METHOD"] == "POST") {
    echo ("I got you fam");
}

$c = new Character("Thanos", "Infinity Gauntlet", true);

$output = new CharacterHTMLOutput($c);

echo($output->ToHtml());

?>