<?php 
namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class Authors_Controller extends Controller {
	
    public $restful=true;
	public function get_index(){
          return View::make('authors.index');
	}
}