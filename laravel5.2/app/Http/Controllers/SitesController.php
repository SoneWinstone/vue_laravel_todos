<?php
/**
 * Created by PhpStorm.
 * User: winstone
 * Date: 17-5-20
 * Time: 上午10:30
 */

namespace App\Http\Controllers;

class SitesController extends Controller
{
    public function index() {
        return view('welcome');
    }

    public function about() {
        $name = 'SoneWinstone';
        $test = '<span style="color:red;">SoneWinstone</span>';
        $data['first'] = 'Sone';
        $data['last'] = 'Winstone';
        return view('sites.about', $data)->with('name', $name)->with('test', $test);
//        return view('sites.about', compact('first','last'));
//        return view('sites.about')->with(['first'=>'Sone', 'last'=>'Winstone']);
//        return view('sites.about')->with('name', $name)->with('test', $test);
    }
}