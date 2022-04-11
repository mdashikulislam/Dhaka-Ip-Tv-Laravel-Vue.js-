<?php

namespace App\Http\Controllers;

use Goutte\Client;

class ScrappingController extends Controller
{
    public function index()
    {
        $url = 'https://www.bioscopelive.com/en/channel/colors-asia';
        $client = new Client();
        $page = $client->request('GET',$url);
        //$targetUrl = $page->filterXPath('//script[contains(.,"player.src({")]')->text();
        //echo $page->html();
        // die();
            //$targetUrl = $this->getLinks($targetUrl);
//        if (!empty($targetUrl)){
//            $targetUrl = rtrim($targetUrl,",");
//            $targetUrl = rtrim($targetUrl,"'");
//        }
//
//        die();
        return view('src')
            ->with([
                'page'=>$page
            ]);
    }

    private function getLinks($str = '')
    {
        $pattern = '~[a-z]+://\S+~';
        if ($num_found = preg_match_all($pattern, $str, $out)) {
            return $out[0];
        }else{
            return false;
        }
    }
}
