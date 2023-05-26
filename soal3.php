<?php
    $letters = array("m", "a", "u", "l", "a", "n", "a");
    $cities = array("Lampung", "Riau", "Jambi", "Bengkulu", 
    "Makassar", "Kendari", "Gorontalo", "Samarinda", "Papua", "Nusa Tenggara Barat");

    for($y = 0; $y < sizeof($cities); $y++)
    {   
        $done = FALSE;
        for($x = 0; $x < sizeof($letters); $x++)
        {
            if(strtolower($cities[$y][0]) == $letters[$x])
            {
                echo $cities[$y];
                $done = TRUE;
                break;
            }
        }

        if($done)
        {
            break;
        }

        if($y == sizeof($cities) -1 )
        {
            echo "Jawa Timur";
        }
    }
?>