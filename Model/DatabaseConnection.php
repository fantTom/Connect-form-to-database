<?php

class DatabaseConnection
{
    /**
     * @param string $servername
     * @param string $dbname
     * @param string $charset
     * @param string $username
     * @param string $password
     * @return PDO
     */
    public static function connect(
        $servername = "localhost",
        $dbname = "agency_db",
        $username = "root",
        $password = ""
    ) {
        $dsn = "mysql:host=$servername;dbname=$dbname;charset=utf8";
        $opt = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];
        return new PDO($dsn, $username, $password, $opt);
    }
}