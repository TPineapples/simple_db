<!DOCTYPE html>
<html>
<head>
    <title>Simple DB</title>
</head>
<body>

<h1>Simple DB connection</h1>

<?php

echo "Hello World!<br/>";

//Check if pgsql extension is loaded (see README)
echo extension_loaded('pgsql') ? 'PHP extension "pgsql" is loaded':'PHP extension "pgsql" is <b>NOT</b> loaded';
echo "<br/>";

// Connection parameters (left blank, fill in with your own parameters)
$host = "";     // hostname or server address
$port = "5432"; // port (default is 5432)
$dbname = "";   // database name
$user = "";     // Username for the account being used in PostgreSQL
$pass = "";     // Password for the account being used in PostgreSQL
$connection_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$pass}";

// Create connection, if fail kill app
$conn = pg_connect($connection_string) or die("Connection failed");

$psql_query = "SELECT * FROM Actor limit 100";

//Execute query and save under $result
$result = pg_query($conn, $psql_query);
if(!$result) {
    echo '<script type="text/javascript">alert("Unable to execute \$psql_query")</script>';
}

//Prepare HTML table
echo "<table border=1>";
echo "<tr><th>Actor ID</th><th>First Name</th><th>Last Name</th><th>Last Updated</th></tr>";

while($row = pg_fetch_row($result)) {
    echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td></tr>\n";
}

echo "</table>";

// Close connection
pg_close($conn);
?>

</body>
</html> 