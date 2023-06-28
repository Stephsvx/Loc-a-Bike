<?php
class locationvelo {
    public $DB;
    public function __construct($DBLOCAPRIX) {  
        if(!isset($_SESSION)){
            session_start();
        }
        if(!isset($_SESSION['locationvelo'])){
            $_SESSION['locationvelo'] = array();
        }
}
}
?>