<?php
interface Logger {
    public function log($message);
}
class FileLogger implements Logger {
    public function log($message) {
        echo "Log :  $message";
    }
}