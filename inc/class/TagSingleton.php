<?php

namespace Simple;

require_once get_template_directory() . '/inc/class/Tag.php';

class TagSingleton extends Tag{

    private static $instance = null;
    
    // ====================== CREATING SINGLETON CLASS =========================
    public static function instance(){
        if( self::isInstantianted() ){
            return self::$instance;
        }
        self::initialize();
        return self::$instance;
    }
    private static function initialize(){
        self::$instance = new TagSingleton();
    }
    private static function isInstantianted(){
        if( ! empty( self::$instance ) && ( self::$instance instanceof Tag ) ) { return true; };
        return false;
    }
    
    // ====================== MAIN METHOD CLASS =========================
    public function __construct(){
    }
    public function __invoke($element){
        $this->reset();
        $this->element = $element;
        return $this;
    }
    public function reset(){
        $this->element = '';
        $this->attributes = Array();
    }

}