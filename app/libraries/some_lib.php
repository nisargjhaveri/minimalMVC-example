<?php
class some_lib extends Library {

    private $data = "Super Secret";

    public function get_hint() {
        return substr($this->data, 0, 1);
    }

}
