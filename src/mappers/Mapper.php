<?php
/**
 * Project_Name: Data Mapper in PHP
 * package_Name: a-afsharfarnia/data-mapper
 * Created_By: Abbas Afsharfarnia (07/10/2019 10:06)
 * Project_Address: https://github.com/a-afsharfarnia/php-data-mapper
 */

namespace Afsharfarnia\DataMapper\mappers;

/**
 * Abstract Class Mapper
 * Description: Define mapData and unmapData methods
 */
abstract class Mapper implements MapperInterface
{
    /**
     * use this method to map data
     *
     * @param $data
     * @return mixed
     */
    public static function mapData($data) {
        $mapper = get_called_class()::$mapper;

        if(array_key_exists($data, $mapper)) {
            $mapData = $mapper[$data];
            return $mapData;
        }

        return "Data not found in mapping list";
    }

    /**
     * use this method to unmap data
     *
     * @param $data
     * @return mixed
     */
    public static function unmapData($data) {
        $mapper = get_called_class()::$mapper;

        $unmapData = array_search ($data, $mapper);

        if(!empty($unmapData)) {
            return $unmapData;
        }

        return "Data not found in mapping list";
    }
}