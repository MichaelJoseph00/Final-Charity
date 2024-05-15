<?php
require_once 'ContactDecorator.php';

class EmailDecorator extends ContactDecorator {
    public function process() {
        parent::process();
        $this->sendEmail();
    }

    private function sendEmail() {
        echo "Sending email notification for contact form submission.
";
    }
}

?>