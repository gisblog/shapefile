
<?php
/**
 * This file has been generated by phpmyadmin/scripts:/develdocs/build.sh
 * @see https://github.com/phpmyadmin/scripts/blob/master/develdocs/sami.php
 * @see https://github.com/phpmyadmin/scripts/blob/master/develdocs/build.sh
 */
use Sami\Sami;
use Symfony\Component\Finder\Finder;

$iterator = Finder::create()
    ->files()
    ->name("*.php")
    ->in("./src")
;

return new Sami($iterator, array(
    "title"                => "ESRI ShapeFile library for PHP",
    "build_dir"            => "./doc/",
    "cache_dir"            => "./tmp"
));

