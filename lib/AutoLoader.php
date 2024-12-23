<?php
spl_autoload_register('Autoloader::autoloadTrait');
spl_autoload_register('Autoloader::autoloadDto');
spl_autoload_register('Autoloader::autoloadDao');
spl_autoload_register('Autoloader::autoloadLib');


class Autoloader{
     
    private string $file;
    
    static function autoloadTrait($class): void
    {
        $file = 'modele/traits/' . $class . '.php';
        if(is_file($file)&& is_readable($file)){
            require $file;
        }
        
    }
    
    
    static function autoloadDto($class): void{
        $file = 'modele/dto/' . $class . '.php';
        if(is_file($file)&& is_readable($file)){
            require $file;
        }
      
    }
    
    static function autoloadLib($class): void{
        $file = 'lib/' . $class . '.php';
        if(is_file($file)&& is_readable($file)){
            require $file;
        }
        
    }
    
    static function autoloadDao($class): void{
        $file = 'modele/dao/' . $class . '.php';
        if(is_file($file)&& is_readable($file)){
            require $file;
        }
        
    }
    
    
}


