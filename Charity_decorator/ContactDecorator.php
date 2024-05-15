<?php
require_once 'ContactComponent.php';

class ContactDecorator implements ContactComponent {
    protected $contact;

    public function __construct(ContactComponent $contact) {
        $this->contact = $contact;
    }

    public function process() {
        $this->contact->process();
    }
}

?>