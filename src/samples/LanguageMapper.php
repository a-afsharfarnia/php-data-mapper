<?php
/**
 * Project_Name: Data Mapper in PHP
 * package_Name: a-afsharfarnia/data-mapper
 * Created_By: Abbas Afsharfarnia (07/10/2019 10:06)
 * Project_Address: https://github.com/a-afsharfarnia/php-data-mapper
 */

namespace Afsharfarnia\DataMapper\samples;

use Afsharfarnia\DataMapper\mappers\Mapper;

/**
 * Class LanguageMapper
 * Description: a sample of a mapper class
 */
class LanguageMapper extends Mapper
{
    /** @var array $mapper */
    public static $mapper = [
        "en" => "English",
        "de" => "German",
        "fr" => "French",
        "ar" => "Arabic",
    ];
}