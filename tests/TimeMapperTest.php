<?php
/**
 * Project_Name: Data Mapper in PHP
 * package_Name: a-afsharfarnia/data-mapper
 * Created_By: Abbas Afsharfarnia (07/10/2019 10:06)
 * Project_Address: https://github.com/a-afsharfarnia/php-data-mapper
 */

namespace Afsharfarnia\DataMapper\tests;

use PHPUnit\Framework\TestCase;
use Afsharfarnia\DataMapper\samples\LanguageMapper;
use Afsharfarnia\DataMapper\samples\TimeMapper;

/**
 * Class TimeMapperTest
 * Description: a test class for testing the whole package
 */
class TimeMapperTest extends TestCase
{
    /**
     * @dataProvider timeMapperDataProvider
     * @param $data
     * @param $expectResult
     */
    public function testTimeMapper($data, $expectResult) {
        $time = TimeMapper::mapData($data);
        $this->assertEquals($expectResult, $time);
    }

    /**
     * @dataProvider languageMapperDataProvider
     * @param $data
     * @param $expectResult
     */
    public function testLanguageMapper($data, $expectResult) {
        $time = LanguageMapper::unmapData($data);
        $this->assertEquals($expectResult, $time);
    }

    /**
     * @return array
     */
    public function timeMapperDataProvider()
    {
        return array(
            array('1m', '1minute'),
            array('30m', '30minutes'),
            array('12h', '12hours')
        );
    }

    /**
     * @return array
     */
    public function languageMapperDataProvider()
    {
        return array(
            array('German', 'de'),
            array('French', 'fr'),
            array('English', 'en')
        );
    }
}