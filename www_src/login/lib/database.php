<?php

class Database
{

    // Parametri connessione database
    private $host = "localhost";
    private $username = "";
    private $pass = "";
    private $dbname = "";

    private $dbconn = null;

    // funzione per la connessione al databse
    public function connect()
    {
        if (empty($this->dbconn)) {
            try {
                $this->dbconn = new PDO('mysql:host=localhost;dbname=my_databasename', $username, $pass);

                $this->dbconn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die('Connessione al database non riuscita: ' . $e->getMessage());
            }
        } else {
            return true;
        }
    }

    // funzione per la disconnesione dal database
    public function disconnect()
    {
        if (isset($this->dbconn)) {
            $this->dbconn = null;
            return true;
        } else {
            return false;
        }
    }

    // Funzione che esegue una query
    public function Query($query)
    {
        if (isset($this->dbconn)) {
            $statement = $this->dbconn->prepare($query);
            $statement->execute();
        }
    }

    // Funzione che esegue una query e ritorna il numero di risultati
    public function QueryCountResults($query)
    {
        if (isset($this->dbconn)) {
            $statement = $this->dbconn->prepare($query);
            $statement->execute();
            return $statement->rowCount();
        }
    }

    // Funzione che seleziona e ritorna un risultato di una query
    public function QuerySingleResults($query)
    {
        if (isset($this->dbconn)) {
            $statement = $this->dbconn->prepare($query);
            $statement->execute();
            return $statement->fetchColumn();
        }
    }

    // Funzione che seleziona e ritorna tutti i risultati di una query
    public function QueryMultiResults($query)
    {
        if (isset($this->dbconn)) {
            $statement = $this->dbconn->prepare($query);
            $statement->execute();
            return $statement->fetchAll(PDO::FETCH_ASSOC);
        }
    }

}

?>
