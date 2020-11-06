<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>

    <style>
        @import url('https://fonts.googleapis.com/css?family=Overpass:100,200,300,400&display=swap');

        body {
            color: white;
            background-color: black;
            text-align: center;
        }
        .header {
            font-size: 50px;
            margin-top: 350px;
            font-family: 'Overpass';
            font-weight: 100;
        }
        .logo {
            width: 10%;
            height: 10%;
            margin-top: 225px;
        }
    </style>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>openshift</title>
</head>

<body>
    <div class="header">
<?php
<?php
echo "<h1>Openshift Workshop v2.0</h1> ";
echo $_SERVER['SERVER_ADDR'];
echo "<br><hr>";
echo "<h2>Cidades cadastradas no Banco de Dados:</h2>";
$conn = new mysqli("mysql", "redhat", "redhat@123", "workshop");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$result = $conn->query("SELECT nome FROM cidade");
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<h3>" . $row["nome"] . "</h3>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
?>
    </div>
</body>

</html>
