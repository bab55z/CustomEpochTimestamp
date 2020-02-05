<?php

class BaseTest extends TestCase
{
   /**
     * Test.
     *
     * @return void
     */
    public function testCustomTimestamp()
    {
        $this->assertIsInt((new Timestamp)());
    }

    public function testCustomTimestampString()
    {
        var_dump((new Timestamp)());
        $this->assertIsInt((new Timestamp)());
        $timestampString = '' . new Timestamp;
        $this->assertIsString($timestampString);
    }
}
