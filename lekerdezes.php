<?php

$sql = "SELECT orszag, fovaros, foldr_hely FROM orszagok ORDER BY orszag ASC";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // lekerdezes kimenete

    while($row = $result->fetch_assoc()) {
      //echo "<br> Name: ". $row["nick"]. " - holtcim: ". $row["holtcim"]. "<br>";
      echo "<tr>
              <td>".$row["orszag"]."</td>
              <td>".$row["fovaros"]."</td>
              <td>".$row["foldr_hely"]."</td>
            </tr>";
    }

} else {
    echo "0 results";
}

?>
