<?php
include_once '../../settings.php';

class Connettore
{
    protected $host;
    protected $nome;
    protected $username;
    protected $password;

    public function __construct()
    {
        $this->host = SETTINGS_DBHOST;
        $this->nome = SETTINGS_DATABASE;
        $this->username = SETTINGS_USERNAME;
        $this->password = SETTINGS_PASSWORD;
    }

    public function connect()
    {
        mysql_connect($this->host, $this->username, $this->password);
        mysql_select_db($this->nome) or die('Cannot connect to database.');
    }

    public function disconnect()
    {
        mysql_close();
    }


    public function execQuery($query)
    { //Va usata x Select
        $this->connect();
        $returnArray = array();
        $result = mysql_query($query);
        while ($row = mysql_fetch_assoc($result)) {
            array_push($returnArray, $row);
        }
        $this->disconnect();
        return $returnArray;
    }


    function execAction($query)
    { // Va usata per update/insert/delete !!!!!!!!!!!!!!!!!!
        $this->connect();
        if (!mysql_query($query)) {
            echo "$query<hr>";
            echo mysql_error();
            $this->disconnect();
            return false;
        } else {
            $this->disconnect();
            return true;
        }
    }
}

?>
