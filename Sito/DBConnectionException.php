<?php

    class DBConnectionException extends Exception{

        public function __construct(string $msg){
            $this->message = $msg;
        }

    }