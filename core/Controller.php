<?php
class Controller {
    protected function render($view, $data = []) {
        extract($data);
        require_once "views/{$view}.php";
    }
}
