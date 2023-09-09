/**
 * 
 * This file contains the configuration settings for connecting to a SQL Server database using PHP Data Objects (PDO) and SQL Server Extension.
 * 
 * The $conn variable is used to establish a connection to the database using PDO and set the error mode to exception.
 * 
 * The $connectionInfo and $serverName variables are used to establish a connection to the database using SQL Server Extension.
 * 
 * The $site_info array contains information about the website, including the name and description.
 */
<?php
// SQL Server Extension Sample Code:
$conn -> pg_connect("host=mikkorautavirta.postgres.database.azure.com port=5432 dbname= user=mikko password={your_password}");
echo $conn;
?>
