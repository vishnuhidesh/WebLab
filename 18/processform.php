<?php
include 'connect.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";
    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully <br>";
        $selectQuery = "SELECT id, name, email FROM users";
        $result = $conn->query($selectQuery);
        if ($result->num_rows > 0) {
            echo "<table border='1'>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                    </tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row["id"] . "</td>
                        <td>" . $row["name"] . "</td>
                        <td>" . $row["email"] . "</td>
                    </tr>";
            }
            echo "</table>";
        } else {
            echo "No records found";
        }
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
