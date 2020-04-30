<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloWorldController extends Controller
{
    public function staticIndex()
    {
        return view('StaticDynamicWebsite/staticHelloWorld');
    }

    public function dynamicIndex()
    {
        /* old way 
        $data['nameone'] = 'Hello world my name is SAHIL.';
        $data['nametwo'] = 'Hello world my name is ROCK.';
        return view('StaticDynamicWebsite/dynamicHelloWorld', $data);
        */

        /* new approcach
        $data['nameone'] = 'Hello world my name is SAHIL.';
        $data['nametwo'] = 'Hello world my name is ROCK.';
        //using with method
        return view('StaticDynamicWebsite/dynamicHelloWorld')->with($data);
        */


        /* Another approcach using with method
        $nameOne = 'SAHIL.';
        $nameTwo = 'ROCK.';
        return view('StaticDynamicWebsite/dynamicHelloWorld')->with(['nameone' => 'Hello world my name is '.$nameOne, 'nametwo' => 'Hello world my name is '.$nameTwo]);
        */

    }
}



