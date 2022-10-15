<?php

namespace Simple;

class Tag{

    private $element    = '';
    public $attributes = Array();
    public $temporary_attributes = Array();
    
    // ====================== MAIN METHOD CLASS =========================
    public function __construct($element){
        return $this->setElement($element);
    }
    public function setElement($element){
        $this->element = $element;
        return $this;
    }

    // ====================== ATTRIBUTES METHOD CLASS =========================
    public function addTemporaryAttribute(String $head, String $content){
        if( empty( $this->temporary_attributes[$head] ) ) $this->temporary_attributes[$head] = Array();
        $this->temporary_attributes[$head][] = $content;
        return $this;
    }
    public function addTemporaryAttributes(String $head, Array $attributes){
        foreach($attributes as $attribute) $this->addTemporaryAttribute($head, $attribute);
        return $this;
    }
    public function addTemporaryAttributesArray(Array $attributes){
        foreach($attributes as $head => $attribute) {
            if( is_array($attribute) ) $this->addTemporaryAttributes($head, $attribute);
            else                       $this->addTemporaryAttribute($head, $attribute);
        }
        return $this;
    }

    // ====================== ATTRIBUTES METHOD CLASS =========================
    // For now the arguments attribute value should be a string
    public function addAttribute(String $head, String $content){
        if( empty( $this->attributes[$head] ) ) $this->attributes[$head] = Array();
        $this->attributes[$head][] = $content;
        return $this;
    }
    public function addAttributes(String $head, Array $attributes){
        foreach($attributes as $attribute) $this->addAttribute($head, $attribute);
        return $this;
    }
    public function addAttributesArray(Array $attributes){
        foreach($attributes as $head => $attribute) {
            if( is_array($attribute) ) $this->addAttributes($head, $attribute);
            else                       $this->addAttribute($head, $attribute);
        }
        return $this;
    }
    // For now the arguments attribute value should be a string
    public function setAttribute(String $head, $content){
        if(  is_string($content) ) {
            $this->attributes[$head] = Array();
            $this->addAttribute($head, $content);
            return $this;
        } 
        
        if( is_array($content) ) {
            $this->attributes[$head] = $content;
            return $this;
        } 

        throw new Exception('Must be an array or string');
    }
    // For now the arguments attribute value should be a string
    public function changeAttribute(String $head, Array $new, Bool $error = false){
        $target_array = $this->attributes[$head];

        if( $error && !isset($target_array) ) throw new Exception('The values not found');
        if( !$error && !isset($target_array) ) throw new Exception('The values not found');

        $this->attributes[$head] = $new;
        return $this;
    }
    public function changeAttributeValue(String $head, String $old, String $new, Bool $error = false){
        $old_key = array_search( $old, $this->attributes[$head], true); 

        if( $error && !isset($old_key) ) throw new Exception('The values not found');
        if( !$error && !isset($old_key) ) return $this->addAttribute($head, $new);

        $this->attributes[$head][$old_key] = $new;
        return $this;
    }
    public function removeAttribute(String $head, Bool $error = false){
        $tmp = Array();
        
        foreach($this->attributes as $key=>$attribute)
            if($key !== $head) $tmp[$key] = $attribute;

        $this->attributes = $tmp;
        return $this;
    }
    public function removeAttributeValue(String $head, String $removed, Bool $error = false){
        $tmp = Array();

        foreach($this->attributes[$head] as $attribute) 
            if($attribute !== $removed) $tmp[] = $attribute;

        $this->attributes[$head] = $tmp;

        if( count($this->attributes[$head]) == 0 ) 
            $this->removeAttribute($head);

        return $this;
    }

    public function formatAttributes(){
        $merge_attribute_array = array_merge_recursive($this->attributes, $this->temporary_attributes);

        $tmp = '';

        foreach($merge_attribute_array as $head => $key){

            $tmp .= $head . '=' . "'";

            foreach($key as $value){
                $tmp .= $value . ' ';
            }

            $tmp = trim($tmp);
            $tmp .= "'" . ' ';
        }

        return $tmp;
    }

    // ====================== PRINT METHOD CLASS =========================
    public function open(){
        return '<' . $this->element . ' ' . $this->formatAttributes() . '>';
    }
    public function close(Bool $remove_temporary_attributes = false){
        if($remove_temporary_attributes) $this->temporary_attributes = Array();
        return '</' . $this->element . '>';
    }
    public function resetTemporary(){
        $this->temporary_attributes = Array();
        return $this;
    }

}