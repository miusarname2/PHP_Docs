<?php 
namespace Apps;

trait system{
    public function __get($name){
        return $this->{$name};
}
}