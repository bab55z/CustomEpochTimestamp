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
        //var_dump((new Timestamp)());
        $this->assertIsInt((new Timestamp)());
    }
}
