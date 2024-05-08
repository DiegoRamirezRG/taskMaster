<?php

date_default_timezone_set('America/Mexico_City');
include 'connection/database.connection.php';

class m_model extends databaseConnection {
    public $link;
    public $countRow;
    public $error;

    public function __construct(){
        $this->link = databaseConnection::__construct();
    }

    public function _query($query){
        try {
            $this->link->begin_transaction();
            $result = $this->link->query($query);
            $this->countRow = $this->link->affected_rows;

            if (!$result) {
                throw new Exception('La consulta SQL ha fallado');
            }

            $this->link->commit();
        } catch (\Throwable $th) {
            $this->link->rollback();
            $this->error = $th->getMessage();
        } finally {
            $this->link->close();
        }

        return $this->error;
    }
}

?>