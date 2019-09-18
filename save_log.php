<?php
class LogEdit{

    public function writeLogs($logInfo){
        $dir = __DIR__."/modules/log/auth.log";

        if (!file_exists($dir)){
            echo "Error: File '/modules/log/auth.log' doen't exist.";
        }
        else{
            $fw = fopen($dir, "a");
            fwrite($fw, "\n".$logInfo);
            fclose($fw);
        }
    }
}