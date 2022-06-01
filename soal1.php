<?php

$total = 0;
$jml = $_GET['jml'];

echo "<table border=1>\n";
for ($a = $jml; $a > 0; $a--)
{
    
    for ($b = $a; $b > 0; $b--)
    {
        $total += $b;
    }

    echo "<tr><td colspan='$a'>Total : $total </td></tr>";
    echo "<tr>\n";

    $total = 0;

    for ($b = $a; $b > 0; $b--)
    {
        echo "<td>$b</td>";
    }
    echo "</tr>\n";
}
echo "</table>";

?>