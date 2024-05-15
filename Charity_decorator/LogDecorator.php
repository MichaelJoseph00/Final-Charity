<?php
require_once 'ContactDecorator.php';

class LogDecorator extends ContactDecorator {
    public function process() {
        parent::process();
        $this->logContact();
    }

    private function logContact() {
        echo "Logging contact form submission.
";
    }
}

?>