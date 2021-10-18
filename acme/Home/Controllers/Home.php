<?php

namespace Acme\Home\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('Acme\Home\Views\welcome_message');
    }
}
