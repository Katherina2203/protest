<?php
class DB
{
    public function connect(){
         $connect = mysqli_connect('localhost', 'root', '');
        if(!$connect){
                die("Database connection failed!". mysqli_error($connect));
        }
        $select_db = mysqli_select_db($connect, 'test2');
        if(!$select_db){
                die("Database selection failed!". mysqli_error($connection));
        }
    }
   
}


/*class DB
{
	protected $hostname = "localhost";
        protected $user = "root";
	protected $password = "";
        protected $dbname = "protest";

    public function connect() { 
        try {
            $db = new PDO('mysql:host='.$this->hostname.'; dbname='.$this->dbname, $this->user, $this->password); 
            $db->query('SET NAMES utf8');
            return true;
        }
        catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
	
	public function select($table, $where){ // Получаем данные из БД
        $sth = $db>prepare('SELECT * FROM :table WHERE :where');    
        $sth->bindParam(':table', $table);
        $sth->bindParam(':where', $where);
        $sth->execute();

        return '=P';  
    }
}
 * 
 */