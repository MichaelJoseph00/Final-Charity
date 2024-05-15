<?php
require_once 'Observer.php';

class LogObserver implements Observer {
    public function update($product_name, $quality, $quantity) {
        $logMessage = "New donation item added: $product_name, Quality: $quality, Quantity: $quantity
";
        file_put_contents('log.txt', $logMessage, FILE_APPEND);
    }
}

?>