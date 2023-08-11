<?php

namespace Http\Controllers;

class Home {

    public function index() {
        
        $template = 'home';
        require 'Views/layout.phtml';
    }

    
}