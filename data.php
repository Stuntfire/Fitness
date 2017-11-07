<?php
$_GET['array'] = array();
//    $data = array();

    function AddBodyData($newBodyData)
    {
        array_push($_GET['array'], $newBodyData);
        print_r($_GET['array']);

    }


// hvordan får jeg fat i ovenstående array?

    function display()
    {
        echo 'Bodydata : <br>';
        foreach ($_GET['array'] as $item)
        {
            echo $item->weight;
            echo $item->fedtprocent;
            echo '<br>';
        }
    }

?>

<?php
//$array = array();
//for ($x = 1; $x <= 100000; $x++)
//{
//    $array[] = $x;
//}
//?>
