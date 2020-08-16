<?php
namespace App\myCustomLibraries;

use Illuminate\Support\Facades\Facade;

class userFacade extends Facade{
    protected static function getFacadeAccessor(){
        return new User();
    }
}