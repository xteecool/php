<!--building a database wrapper-->
<?php
    class DB{
        private static $_instance=null;
        private $_pdo,
        $_query,
        $_error=false,
        $_results,
        $_count=0;
     private function _construct(){
         try{
             $this->pdo=new PDO('mysql:host='Config::get('mysql/username');dbname='Config::get('mysql/username')''',Config::get('mysql/username'),Config::get('mysql/password'));
            }
         catch(PDOException $e)
         {
             die($e->getMessage());
         }
     }
    }

?>
