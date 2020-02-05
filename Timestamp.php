<?php

class timestamp {

    /**
     * returns a timestamp with custom epoch, to get shorter unique timestamp
     */

    protected $timestamp;

    public function __construct()
    {
        $customStartEpoch = strtotime('2020-01-01 00:00:00'); // custom epoch
        $now = strtotime(date('Y-m-d H:i:s'));
        $this->timestamp = $now - $customStartEpoch;
    }

    public function __invoke() : int {return (int) $this->timestamp;}
    public function __toString(){return (string) ($this->timestamp);}

  
}
