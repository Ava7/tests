<?php
require_once __DIR__ . '/../src/Autoloader.php';

class Test extends PHPUnit_Framework_TestCase
{
    public function testDatabaseConnection()
    {
        $this->assertInstanceOf('Database', Database::getInstance());
    }
}
