<?php
use Illuminate\Support\Facades\View;

/**
 * Created by PhpStorm.
 * User: ahtem
 * Date: 12/26/14
 * Time: 11:46 AM
 */

class PageController extends BaseController{

    public function getDashboard(){
        return View::make( 'CMS/dashboard' );
    }

}