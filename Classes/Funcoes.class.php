<?php

class  Funcoes{
    public function tratamentCharacter($value,$type)
    {
        switch($type){
            case 1: $rest = utf8_decode($value);break;
            case 2:$rest = utf8_encode($value);break;
        }
        return $rest;
    }

     public function dateCurrent($type)
    {
        switch($type){
            case 1 : $rest =  date("Y-m-d");break;
            case 2 :$rest =  date("Y-m-d H:m:s");break;
            case 3 :$rest =  date("d-m-y");break;
            
        }
        return $rest;
    }

    public function base64($value,$type)
    {
        switch($type){
            case 1: $rest =  base64_encode($value);break;
            case 2: $rest =  base64_decode($value);break;
        }
        return $rest;
    }
    public function transformDate($date,$type){
        switch($type){
           case 'br': $newdate = date("d-m-Y",strtotime($date));break;
            case 'default':$newdate = date("Y-m-d", strtotime($date));break;
        }
        return $newdate;
    }
}