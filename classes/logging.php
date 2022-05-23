<?php

class Logger {
    private $logPath : string;
    private $dbLogName : string;

    public function __construct(
        string $pathToLogFile, 
        bool $shouldBeLoggedInDB, 
        string $logTableName
    ) {
        $this->$logPath = $pathtoLogFile;
        $this->$dbLogName = $shouldBeLoggedInDB ? $logTabelName : null;
    }

    public function catchError(string $testedFile){
        try{
            require_once $testedFile;
        }catch(PDOException $e){

        }catch(BadFunctionCallException $e){
            
        }
    }

    private function logIntoFile($exception){

    }

    private function logIntoDB($exception, $dbConnectionObject){
        if(!$this->$dbLogName){
            return 0;
        }

        $sql = "INSERT INTO ? VALUES(?, ? , ?)"
    }
}