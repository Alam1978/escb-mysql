<?php
$i = 1;
while($i<5)
{
    for($j=1; $j<=$i; $j++)
    {
        if ($j != 1 && $j != $i)
        {
            echo $i . "/" . $j . "=" . $i%$j . "<br />";
            if ($i%$j != 0)
            {
                echo $i . "<br />";
            }
        }
    }
    echo "<br />";
    $i += 1;
}
?>