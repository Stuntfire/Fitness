<?php
/**
 * Created by PhpStorm.
 * User: Søren Roed Schack
 * Date: 06-Nov-17
 * Time: 13:50
 */



//    $data = array($_POST["weight"] , $_POST["fedtprocent"]);
    $data = array();

    function AddBodyData($nyData){
        array_push($data, $nyData);
    }

    function display($list)
    {
        echo 'Bodydata : <br>';
        foreach ($list as $item){
            echo $item->weight;
            echo $item->fedtprocent;
            echo '<br>';
        }
    }

?>