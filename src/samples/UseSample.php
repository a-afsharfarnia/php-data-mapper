<?php
/**
 * Project_Name: Data Mapper in PHP
 * package_Name: a-afsharfarnia/data-mapper
 * Created_By: Abbas Afsharfarnia (07/10/2019 10:06)
 * Project_Address: https://github.com/a-afsharfarnia/php-data-mapper
 */

use Afsharfarnia\DataMapper\samples\LanguageMapper;
use Afsharfarnia\DataMapper\samples\TimeMapper;

echo TimeMapper::mapData("1m");
echo "-----------";
echo LanguageMapper::unmapData("German");