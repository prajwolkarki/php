<?php
class abc{
    private static function hello(){
        echo "hello nepal";
    }
    public static function __callStatic($met,$arg){

        // echo "This is private method :$met Can't access this variable";
        if(method_exists(__CLASS__,$met)){
            call_user_func_array([__CLASS__,$met],$arg);
        }else{
            echo "Invalid method to access $met";
        }
    }
}
abc::hello();

?>