<?php

    $str = "maulana";
    $strLength = strlen($str);
    if ($strLength == date('d') - 2)
    {
        echo "berhasil";
    } else if ($strLength < date('d') - 2)
    {
        echo "sedikit lagi";
    } else
    {
        echo "coba lagi";
    }

?>