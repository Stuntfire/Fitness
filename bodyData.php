<?php
/**
 * Created by PhpStorm.
 * User: Søren Roed Schack
 * Date: 06-Nov-17
 * Time: 13:29
 */


class bodyData
{

    public $weight;
    public $fedtprocent;

    function __construct($weight, $fedtprocent)
    {
        $this->weight = $weight;
        $this->fedtprocent = $fedtprocent;
    }

    public function toString()
    {
        return $this->weight . " " . $this->fedtprocent;
    }
}


?>