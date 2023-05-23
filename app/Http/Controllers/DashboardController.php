<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pay;
use App\Models\Courses;

class DashboardController extends Controller
{
    public function index() {
		
		
		$all_data = array();
	
		$arr_data1 = array(
			"mesin_id" => "MS001",
			"mesin_deskripsi" => "IMCK 2-1",
			"mesin_batas_bawah" => 0,
			"mesin_batas_atas" => 10,
			"mesin_value" => 5
		);
		array_push($all_data, $arr_data1);
				
		$data['my_data'] = "data 1";
		$data['my_data2'] = "data 2";
		$data['all_data'] = $all_data;
		
		$data['padding_machine1'] = "20px";
		return view('dashboard', $data);
	}
}
