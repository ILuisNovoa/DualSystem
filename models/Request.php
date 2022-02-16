<?php

/**
 * modelo del juegos
 */
class Request
{
    private $id;
    private $name;
    private $status_id;
    private $pdo;

    public function __construct()
    {
        try {
            $this->pdo = new Database;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    public function getAll()
    {
        try {
            $strSql = 'SELECT a.*, b.name as name_type, c.name as name_status FROM requests a
             INNER JOIN type_request b ON a.id_type_request = b.id
             INNER JOIN statuses c ON c.id = a.id_status
             WHERE 1';
            $query = $this->pdo->select($strSql);
            return $query;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    public function consultRequest()
    {
        try {
            $strSql='SELECT * from Requests';
            $query = $this->pdo->select($strSql);
            return $query;
            
        } catch (PDOException $e) {
            die($e->getMessage());
            
        }

    }
    public function newRequest($data)
    {
        try {
            $data['id_status'] = 1;
            $this->pdo->insert('requests', $data);
            return true;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
    public function editRequest($data)
    {
        try {
            $strWhere = 'id=' . $data['id'];
            $this->pdo->update('Requests', $data, $strWhere);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    public function editStatus($data)
    {
        try{
            $strWhere='id='.$data['id'];
            $this->pdo->update('Requests',$data,$strWhere);
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }
    public function getById($id)
    {
        try {
            $strSql = "SELECT * FROM Requests WHERE id=:id";
            $array = ['id' => $id];
            $query = $this->pdo->select($strSql, $array);
            return $query;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function validateRequest($data)
    {
        try {
            $strSql = "SELECT g.* FROM Requests g WHERE g.name = '{$data['name']}'";
            
            
    
            $query = $this->pdo->select($strSql);

            if(isset($query[0]->id)) {
                $_SESSION['Requests'] = $query[0];
                return 'El juego ya existe';
            } else
                return true;
                
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
     

}
