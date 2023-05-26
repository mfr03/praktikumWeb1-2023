<?php

    $people = array("maulana" => "493827", "fikrie" => "493824","rizaldi" => "492841", "maulini" => "392841","maulidi" => "203947");
    
    foreach
    ($people as $person => $nim)
    {
        if($nim % 2 == 0 )
        {
            echo $person." adalah back-end developer"."<br>";
        }
        else
        {
            echo $person." adalah front-end developer"."<br>";
        }
    }

 ?>