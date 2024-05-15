<?php
require_once 'Subject.php';

class Donation implements Subject {
    private $observers = [];
    private $product_name;
    private $quality;
    private $quantity;

    public function attach(Observer $observer) {
        $this->observers[] = $observer;
    }

    public function detach(Observer $observer) {
        $key = array_search($observer, $this->observers);
        if ($key !== false) {
            unset($this->observers[$key]);
        }
    }

    public function notify() {
        foreach ($this->observers as $observer) {
            $observer->update($this->product_name, $this->quality, $this->quantity);
        }
    }

    public function setDonationItem($product_name, $quality, $quantity) {
        $this->product_name = $product_name;
        $this->quality = $quality;
        $this->quantity = $quantity;
        $this->notify();
    }
}

?>