<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterTemplateController extends Controller
{
    public function index()
    {
        $data['header'] = 'header content';
        
        $data['name'] = 'My name is Sahil.';
        $data['age'] = 'My age is 24 years.';
        
        $data['footer'] = 'footer content';
 
        return view('MasterTemplate/slave')->with($data);

        /*** 
         * From controller we will call slave.blade.php view which will load common pages that are included in master.blade.php
         * master.blade.php file will have all the views which will be common for all pages.
         * To include views in master we will use @include('folderName/viewName') so we included header and footer which will be common for all pages.
         * To use content of master.blade.php in other views we will extend to it.
         * That is in our case slave.blade.php will extend master.blade.php.
         * In master file we have to use @yield('anyNameThatWeWillUseWriteIN@sectionOfSlaveView')
         * In slave we have to use @extends('folderName/viewName') and our content will go between @section('anyNameThatWeWillWriteIn@yieldOFMasterView') and @endsection
         * Note we can also pass the data to views which are not directly linked to slave.blade.php. 
         * In this case we passed data from controller which uses slave view but header and footer view gets access to the variables send to slave view all though they are linked in master view.
         * so any data passed to that master view are also available to sub views of that view. 
         */
    }
}
