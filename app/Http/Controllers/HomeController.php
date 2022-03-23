<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('view');
        // dd($xml);
        // $xml2 = (array) simplexml_load_file($url);

        // $data = [];
        // $data[] = $xml;
        // $data[] = $xml2;
        
        // dd([
        //     'array1'=>$xml,
        //     'array2'=>$xml2,
        //     'merge'=>$data
        // ]);
        // $data = (object) array_merge_recursive((array) $xml, (array) $xml2);
        // $data = (object) array_merge( (array) $xml, (array) $xml2 );
        // $data = array_merge($xml->toArray(), $xml2->toArray());
        // echo var_dump($xml);
        // dd($data);
    }

    public function getDataFromXML(){
        $url = 'http://svc.efaktur.pajak.go.id/validasi/faktur/210141958411000/0082150381300/3031300D0609608648016503040201050004208604520769ECADB7BA1287DCCDE2A74E2DDFB531E900FB617EE590ECB10F0858';
        $xml = (array) simplexml_load_file($url);
        return $xml;
    }
}
