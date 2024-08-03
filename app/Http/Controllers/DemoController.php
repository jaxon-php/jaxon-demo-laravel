<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Jaxon\Demo\Ajax\App\Test as AppTest;
use Jaxon\Demo\Ajax\App\Buttons as AppButtons;
use Jaxon\Demo\Ajax\Ext\Test as ExtTest;
use Jaxon\Demo\Ajax\Ext\Buttons as ExtButtons;

use function view;
use function Jaxon\rq;

class DemoController extends Controller
{
    public function index()
    {
        // Print the page
        return view('demo/index', [
            'pageTitle' => "Laravel Framework",
            'appTest' => rq(AppTest::class),
            'rqAppButtons' => rq(AppButtons::class),
            'extTest' => rq(ExtTest::class),
            'rqExtButtons' => rq(ExtButtons::class),
        ]);
    }
}
