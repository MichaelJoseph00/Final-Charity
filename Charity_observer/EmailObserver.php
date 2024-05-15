<?php
require_once 'Observer.php';

class EmailObserver implements Observer {
    public function update($product_name, $quality, $quantity) {
        $to = "admin@example.com";
        $subject = "New Donation Item Added";
        $message = "Product Name: $product_name
Quality: $quality
Quantity: $quantity";
        mail($to, $subject, $message);
    }
}

?>