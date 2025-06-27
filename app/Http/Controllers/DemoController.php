<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Demo\Ajax\App\Test as AppTest;
use Demo\Ajax\App\Buttons as AppButtons;
use Demo\Ajax\Ext\Test as ExtTest;
use Demo\Ajax\Ext\Buttons as ExtButtons;
use Jaxon\Demo\Calc\Package as CalcPackage;

use function jaxon;
use function rq;
use function view;

class DemoController extends Controller
{
    public function index()
    {
        return view('demo/index', [
            'pageTitle' => "Laravel Framework",
            'rqAppTest' => rq(AppTest::class),
            'rqAppButtons' => rq(AppButtons::class),
            'rqExtTest' => rq(ExtTest::class),
            'rqExtButtons' => rq(ExtButtons::class),
            'calcPackage' => jaxon()->package(CalcPackage::class),
        ]);
    }
}
