<?php

class RedbeanExtension extends Sumish\Library {
    public function init() {
        $this->load(__DIR__ . '/rb.php');
        return true;
    }
}