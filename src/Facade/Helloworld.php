<?php
namespace Dungnv\Helloworld\Facade;
 
use Illuminate\Support\Facades\Facade;
 
class Helloworld extends Facade {
 
    protected static function getFacadeAccessor()
    {
      return 'dungnv';
    }
}
