<?php 

class ArcWbcManager {

    private $actions;
    private $flters;
    private $shortcodes;

    private static $instance; 

    /**
    * ArcWbcManager Constructor.
    */
    private function __construct(){

    }

    /**
    * Create or return singleton instance of this class.
    */
    public static function get_instance() {
        if ( null == self::$instance ) {
            self::$instance = new self;
        }
        return self::$instance;
    }

    public function add_actions(){

    }

    public function add_filters(){

    }

    public function add_shortcodes(){
        
    }

}