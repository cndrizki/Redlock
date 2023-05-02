<?php
$servername = "db"; $username = "root";
$password = "server"; $dbname = "Redlock";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection Error: " . $conn->connect_error);
}

$sql = "SELECT COUNT(*) as total FROM users";
$result = $conn->query($sql);
$total_users = $result->fetch_assoc()['total'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data</title>
    <style>
        /* Body style */
        body {
            font-family: 'Calibri';
            background-color: #F9F9F9;
        }
        
        /* Table style */
        table {
            border-collapse: collapse;
            width: 95%;
            margin: 30px auto;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
            background-color: #FFF;
        }
        
        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        
        th {
            background-color: #0077B6;
            color: #FFF;
        }
        
        tr:hover {
            background-color: #f5f5f5;
        }
        
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        
        /* Header style */
        h1 {
            text-align: center;
            color: #0077B6;
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <h1>Database User</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>NAMA</th>
                <th>ALAMAT</th>
                <th>JABATAN</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM users";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                        <td>" . $row["ID"]. "</td>
                        <td>" . $row["Nama"]. "</td>
                        <td>" . $row["Alamat"]. "</td>
                        <td>" . $row["Jabatan"]. "</td>
                    </tr>";
                }
            } else {
                echo "<tr><td colspan='4'>Tidak ada data!</td></tr>";
            }
            $conn->close();
            ?>
        </tbody>
        <tfoot>
            <tr>
                <th colspan="4">Total User: <?php echo $total_users; ?></th>
            </tr>
        </tfoot>
    </table>
</body>
</html>