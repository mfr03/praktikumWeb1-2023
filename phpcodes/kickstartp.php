<?php 
    $alignParagraph = mysqli_query($conn, "select * from page2strings where what_part_of_page = 'kickstart'");
    foreach($alignParagraph as $value)
    {
        echo "<p>".$value['the_actual_string']."</p>";
    }
?>