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
 * Class TimeMapper
 * Description: a sample of a mapper class
 */
class TimeMapper extends Mapper
{
    /** @var array $mapper */
    public static $mapper = [
        "1m" => "1minute",
        "3m" => "3minutes",
        "5m" => "5minutes",
        "15m" => "15minutes",
        "30m" => "30minutes",
        "1h" => "1hour",
        "2h" => "2hours",
        "4h" => "4hours",
        "6h" => "6hours",
        "8h" => "8hours",
        "12h" => "12hours",
        "1d" => "1day",
        "3d" => "3days",
        "1w" => "1week",
        "1M" => "1month"
    ];
}