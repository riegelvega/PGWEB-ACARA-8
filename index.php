<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "pgweb_acara7";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM acara7";
    $result = $conn->query($sql);

    echo "<a href='input/index.html'>Input</a>";
    if ($result->num_rows > 0) {
        echo "<table border='1px'><tr>
            <th>Kecamatan</th>
            <th>Longitude</th>
            <th>Lattitude</th>
            <th>Luas</th>
            <th>Jumlah Penduduk</th>";

        while($row = $result->fetch_assoc()) {
            echo "<tr><td align='center'>".
                $row["kecamatan"]."</td><td>".
                $row["longitude"]."</td><td>".
                $row["latitude"]."</td><td>".
                $row["luas"]."</td><td align='center'>".
                $row["jumlah_penduduk"]."</td></tr>";
        }
        echo "</table>";
    } else {
    echo "0 results";
    }

    $conn->close();
?>