<?php

class UserController extends BaseController {

    public function login() {
        $this->view("users/login");
    }

    public function list() {
        $this->view("users/list");
    }

    public function register() {
        $this->view("users/register");
    }

    


}