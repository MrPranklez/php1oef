
<?php
$student =	array(
    "voornaam" =>  "Jan",
    "naam" =>  "Janssens",
    "straat" =>  "Oude baan",
    "huisnr" =>  "22",
    "postcode" =>  2800,
    "gemeente" =>  "Mechelen",
    "geboortedatum" =>  "14/05/1991",
    "telefoon" =>  "015 24 24 26",
    "e-mail" =>  "jan.janssens@gmail.com"
);

StudentToTable($student);

function StudentToTable($student) {
    echo "<h1>Student</h1><table>";
    foreach($student as $key => $data) {
        echo "<tr><td>".ucfirst($key)."</td><td>$data</td></tr>";
    }
    echo "</table>";
}