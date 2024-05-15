<?php
require_once 'DatabaseOperation.php';

class DatabaseContext {
    private $strategy;

    public function setStrategy(DatabaseOperation $strategy) {
        $this->strategy = $strategy;
    }

    public function executeStrategy($conn) {
        return $this->strategy->execute($conn);
    }
}

?>