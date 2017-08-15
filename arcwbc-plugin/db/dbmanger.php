<?php

class DbManager {

    private static $instance;

    private function DbManager(){
        //Load DB Setup here
    }

    public static function getInstance() {
         if ( null == self::$instance ) {
            self::$instance = new self;
        }
        return self::$instance;
    }

    public function saveOrUpdateRecord($id, $table, $data){

    }

    public function deleteRecord($id,$table){

    }

    public function runQuery($query, $parameters){
        
    }

}
