<?php
/**
 * Project_Name: Data Mapper in PHP
 * package_Name: a-afsharfarnia/data-mapper
 * Created_By: Abbas Afsharfarnia (07/10/2019 10:06)
 * Project_Address: https://github.com/a-afsharfarnia/php-data-mapper
 */

namespace Afsharfarnia\DataMapper\mappers;

/**
 * Interface MapperInterface
 * Description: Interface for Mapper abstract class
 */
interface MapperInterface
{
    /**
     * use this method to map data
     *
     * @param $data
     * @return mixed
     */
    public static function mapData($data);

    /**
     * use this method to unmap data
     *
     * @param $data
     * @return mixed
     */
    public static function unmapData($data);
}