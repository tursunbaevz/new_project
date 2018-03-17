<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Landings;

class LandingsController extends Controller
{

public function main()

	{
		return view('landing.main');
	}


}

