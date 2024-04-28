<?php

namespace Juzaweb\Example\Http\Controllers;

use Juzaweb\CMS\Http\Controllers\FrontendController;

class ExampleController extends FrontendController
{
    public function index()
    {
        return view('exam::index');
    }
}
