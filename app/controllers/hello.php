<?php

class hello extends Controller {

    function index() {

        $this->load_model("hello_model", "hello_model");

        $name = $this->hello_model->whoami();

        $this->load_library('some_lib');
        load_helper("dummy");

        echo example_helper_function();

        $this->load_view("hello", [
            "from" => $name,
            "hint" => $this->some_lib->get_hint()
        ]);
    }

}
