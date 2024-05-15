<?php
require_once 'DatabaseOperation.php';

class InsertDonation implements DatabaseOperation {
    private $amount;

    public function __construct($amount) {
        $this->amount = $amount;
    }

    public function execute($conn) {
        $sql = "INSERT INTO donations (amount) VALUES ('$this->amount')";
        return mysqli_query($conn, $sql);
    }
}

?>