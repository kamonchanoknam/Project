<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Temple;
use DB;

class SuggestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mapstemple = Temple::all();
        $xml_url = route('suggest_xml');
        return view('suggest',['tempmaps'=>$mapstemple, 'xml_url' => $xml_url]);
    }

    public function xml_response() {
        $mapstemple = Temple::all();
        // dd($mapstemple);
        $doc = new \DOMDocument("1.0"); 
        $node = $doc->createElement("temple");
        $parnode = $doc->appendChild($node);

        // Iterate through the rows, adding XML nodes for each
        foreach ($mapstemple as $temple) {
          // Add to XML document node
          $node = $doc->createElement("marker");
          $newnode = $parnode->appendChild($node);
          $newnode->setAttribute("name", $temple->Temp_name);
          $newnode->setAttribute("address", $temple->Temp_address);
          $newnode->setAttribute("lat", $temple->Temp_latitude);
          $newnode->setAttribute("lng", $temple->Temp_longitude); 
        }

        $content = $doc->saveXML();

        return response($content, '200')->header('Content-Type', 'text/xml');
    }

}
