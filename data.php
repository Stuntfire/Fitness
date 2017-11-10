<?php

//$_POST['array'] = array();



    function AddBodyData($newBodyData)
    {
        $_SESSION = array();

        array_push($_SESSION, $newBodyData);


//        echo "print_r result: <br>";
//        print_r($_GET['array']);
//
//        echo '<p>';
//
//        echo "var_dump result: <br>";
//        var_dump($_GET['array']);
//
//        $size = count($_GET['array']);
//        echo "<h3>Resultatet af count:  {$size} </h3>";

        // saving out.txt
        $file = '/out.txt';
        file_put_contents($file, serialize($_SESSION)); // $_GET['array'] could be a response from a remote API.


    }

    //retreiving saved out.txt
    function display()
    {
        $file = '/out.txt';
        $var = unserialize(file_get_contents($file));

        echo "<pre>", print_r($var), "</pre>";

    }

?>