<?php
class View {
    public function __construct() {}

    public function render($_name, $data = []) {
        foreach ($data as $key => $value) {
            global $$key;
            $$key = $value;
        }

        $viewFile = "app/views/" . $_name . ".php";

        if (file_exists($viewFile)) {
            require_once $viewFile;
        } else {
            die("Error: View file '$_name.php' not found in app/views/");
        }
    }
}

?>