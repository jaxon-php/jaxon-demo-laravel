<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Jaxon\Demo\Ajax\App\Test as AppTest;
use Jaxon\Demo\Ajax\App\Buttons as AppButtons;
use Jaxon\Demo\Ajax\Ext\Test as ExtTest;
use Jaxon\Demo\Ajax\Ext\Buttons as ExtButtons;
use Jaxon\Laravel\Jaxon;

use function view;
use function Jaxon\rq;

class DemoController extends Controller
{
    public function index(Jaxon $jaxon)
    {
        // Print the page
        return view('demo/index', [
            'jaxonCss' => $jaxon->css(),
            'jaxonJs' => $jaxon->js(),
            'jaxonScript' => $jaxon->script(),
            'pageTitle' => "Laravel Framework",
            'appTest' => rq(AppTest::class),
            'rqAppButtons' => rq(AppButtons::class),
            'extTest' => rq(ExtTest::class),
            'rqExtButtons' => rq(ExtButtons::class),
        ]);
    }

    public function jaxon(Jaxon $jaxon)
    {
        if($jaxon->canProcessRequest())
        {
            // Todo: return an error message
        }
        // Process the Jaxon request
        $jaxon->processRequest();
        return $jaxon->httpResponse();
    }
}
