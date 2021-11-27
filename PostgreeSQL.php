<?php

    class PostgreSQL{
        
        private static $pg_sql;
        public static function connect(){
            if(self::$pg_sql == null){
                try{
                    self::$pg_sql = new PDO('pgsql:host=localhost;dbname=Wallet','postgres','gaivabeach');
                    self::$pg_sql->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                }catch(Exception $e){
                    echo 'Erro';
                }
            }
            return self::$pg_sql;
        }
    }

?>