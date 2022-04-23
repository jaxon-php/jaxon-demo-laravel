<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Jaxon\Demo\Ajax\Bts;
use Jaxon\Demo\Ajax\Pgw;
use Jaxon\Laravel\Jaxon;

use function view;

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
            // Jaxon request to the Bts Jaxon class
            'bts' => $jaxon->request(Bts::class),
            // Jaxon request to the Pgw Jaxon class
            'pgw' => $jaxon->request(Pgw::class),
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
