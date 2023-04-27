<?php

namespace App\Controllers;

class Read extends BaseController
{
    public function index()
    {
        return view('entryform/table.php');
    }
}
