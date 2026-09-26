<php
$content = file_get_contents("https://raw.githubusercontent.com/hailey-boutin/DIG540/refs/heads/main/02/vocabulary.json") ;
$content = json_decode ($content);

echo "<table>";
foreach ($content as $row) {
    echo "<tr>";
    echo "<td>";
    echo $row->name;
    echo "</td>";
    echo "<tb>";
    echo $row->definition;
    echo "</td>";
    echo "</tr>";
}
echo "</table>";
?>