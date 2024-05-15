<?php
require_once 'ContactComponent.php';

class ConcreteContact implements ContactComponent {
    private $name;
    private $email;
    private $message;

    public function __construct($name, $email, $message) {
        $this->name = $name;
        $this->email = $email;
        $this->message = $message;
    }

    public function process() {
        echo "Processing contact form submission: Name: $this->name, Email: $this->email, Message: $this->message
";
    }
}

?>