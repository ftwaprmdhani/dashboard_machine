<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pay;
use App\Models\Courses;

class DashboardController extends Controller
{
    public function index() {
		
		
		$all_data = array();
	
		for($i=1;$i<12;$i++){
			$arr_data1 = array(
				"mesin_line" => "1",
				"mesin_id" => "MS001",
				"mesin_deskripsi" => "IMCK 2-1",
				"mesin_batas_bawah" => 0,
				"mesin_batas_atas" => 10,
				"mesin_value" => 5
			);
			array_push($all_data, $arr_data1);
		}
		$arr_data2 = array(
			"mesin_line" => "1",
			"mesin_id" => "MS002",
			"mesin_deskripsi" => "IMZY 0002",
			"mesin_batas_bawah" => 0,
			"mesin_batas_atas" => 10,
			"mesin_value" => 12
		);
		array_push($all_data, $arr_data2);
		$arr_data2 = array(
			"mesin_line" => "1",
			"mesin_id" => "MS002",
			"mesin_deskripsi" => "IMZY 0002",
			"mesin_batas_bawah" => 0,
			"mesin_batas_atas" => 10,
			"mesin_value" => 8
		);
		array_push($all_data, $arr_data2);
		$arr_data2 = array(
			"mesin_line" => "1",
			"mesin_id" => "MS002",
			"mesin_deskripsi" => "IMZY 0002",
			"mesin_batas_bawah" => 0,
			"mesin_batas_atas" => 10,
			"mesin_value" => 8
		);
		array_push($all_data, $arr_data2);
		$arr_data2 = array(
			"mesin_line" => "1",
			"mesin_id" => "MS002",
			"mesin_deskripsi" => "IMZY 0002",
			"mesin_batas_bawah" => 0,
			"mesin_batas_atas" => 10,
			"mesin_value" => 8
		);
		array_push($all_data, $arr_data2);

		for($i=1;$i<12;$i++){
			$arr_data1 = array(
				"mesin_line" => "2",
				"mesin_id" => "MS001",
				"mesin_deskripsi" => "IMCK 2-1",
				"mesin_batas_bawah" => 0,
				"mesin_batas_atas" => 10,
				"mesin_value" => 5
			);
			array_push($all_data, $arr_data1);
		}
		$arr_data3 = array(
			"mesin_line" => "2",
			"mesin_id" => "MS003",
			"mesin_deskripsi" => "IMZY 0003",
			"mesin_batas_bawah" => 0,
			"mesin_batas_atas" => 10,
			"mesin_value" => 12
		);
		array_push($all_data, $arr_data3);
		$arr_data3 = array(
			"mesin_line" => "2",
			"mesin_id" => "MS003",
			"mesin_deskripsi" => "IMZY 0003",
			"mesin_batas_bawah" => 0,
			"mesin_batas_atas" => 10,
			"mesin_value" => 9
		);
		array_push($all_data, $arr_data3);
		$arr_data3 = array(
			"mesin_line" => "2",
			"mesin_id" => "MS003",
			"mesin_deskripsi" => "IMZY 0003",
			"mesin_batas_bawah" => 0,
			"mesin_batas_atas" => 10,
			"mesin_value" => 9
		);
		array_push($all_data, $arr_data3);
		$arr_data3 = array(
			"mesin_line" => "2",
			"mesin_id" => "MS003",
			"mesin_deskripsi" => "IMZY 0003",
			"mesin_batas_bawah" => 0,
			"mesin_batas_atas" => 10,
			"mesin_value" => 9
		);
		array_push($all_data, $arr_data3);

		for($i=1;$i<12;$i++){
			$arr_data1 = array(
				"mesin_line" => "3",
				"mesin_id" => "MS001",
				"mesin_deskripsi" => "IMCK 2-1",
				"mesin_batas_bawah" => 0,
				"mesin_batas_atas" => 10,
				"mesin_value" => 5
			);
			array_push($all_data, $arr_data1);
		}

		for($i=1;$i<12;$i++){
			$arr_data1 = array(
				"mesin_line" => "4",
				"mesin_id" => "MS001",
				"mesin_deskripsi" => "IMCK 2-1",
				"mesin_batas_bawah" => 0,
				"mesin_batas_atas" => 10,
				"mesin_value" => 5
			);
			array_push($all_data, $arr_data1);
		}

		for($i=1;$i<12;$i++){
			$arr_data1 = array(
				"mesin_line" => "5",
				"mesin_id" => "MS001",
				"mesin_deskripsi" => "IMCK 2-1",
				"mesin_batas_bawah" => 0,
				"mesin_batas_atas" => 10,
				"mesin_value" => 5
			);
			array_push($all_data, $arr_data1);
		}

		for($i=1;$i<12;$i++){
			$arr_data1 = array(
				"mesin_line" => "6",
				"mesin_id" => "MS001",
				"mesin_deskripsi" => "IMCK 2-1",
				"mesin_batas_bawah" => 0,
				"mesin_batas_atas" => 10,
				"mesin_value" => 5
			);
			array_push($all_data, $arr_data1);
		}

		for($i=1;$i<12;$i++){
			$arr_data1 = array(
				"mesin_line" => "7",
				"mesin_id" => "MS001",
				"mesin_deskripsi" => "IMCK 2-1",
				"mesin_batas_bawah" => 0,
				"mesin_batas_atas" => 10,
				"mesin_value" => 5
			);
			array_push($all_data, $arr_data1);
		}

		for($i=1;$i<12;$i++){
			$arr_data1 = array(
				"mesin_line" => "8",
				"mesin_id" => "MS001",
				"mesin_deskripsi" => "IMCK 2-1",
				"mesin_batas_bawah" => 0,
				"mesin_batas_atas" => 10,
				"mesin_value" => 5
			);
			array_push($all_data, $arr_data1);
		}

		for($i=1;$i<12;$i++){
			$arr_data1 = array(
				"mesin_line" => "9",
				"mesin_id" => "MS001",
				"mesin_deskripsi" => "IMCK 2-1",
				"mesin_batas_bawah" => 0,
				"mesin_batas_atas" => 10,
				"mesin_value" => 5
			);
			array_push($all_data, $arr_data1);
		}

		for($i=1;$i<12;$i++){
			$arr_data1 = array(
				"mesin_line" => "10",
				"mesin_id" => "MS001",
				"mesin_deskripsi" => "IMCK 2-1",
				"mesin_batas_bawah" => 0,
				"mesin_batas_atas" => 10,
				"mesin_value" => 5
			);
			array_push($all_data, $arr_data1);
		}
		
		for($i=1;$i<12;$i++){
			$arr_data1 = array(
				"mesin_line" => "11",
				"mesin_id" => "MS001",
				"mesin_deskripsi" => "IMCK 2-1",
				"mesin_batas_bawah" => 0,
				"mesin_batas_atas" => 10,
				"mesin_value" => 5
			);
			array_push($all_data, $arr_data1);
		}

		for($i=1;$i<12;$i++){
			$arr_data1 = array(
				"mesin_line" => "12",
				"mesin_id" => "MS001",
				"mesin_deskripsi" => "IMCK 2-1",
				"mesin_batas_bawah" => 0,
				"mesin_batas_atas" => 10,
				"mesin_value" => 5
			);
			array_push($all_data, $arr_data1);
		}

		for($i=1;$i<12;$i++){
			$arr_data1 = array(
				"mesin_line" => "13",
				"mesin_id" => "MS001",
				"mesin_deskripsi" => "IMCK 2-1",
				"mesin_batas_bawah" => 0,
				"mesin_batas_atas" => 10,
				"mesin_value" => 5
			);
			array_push($all_data, $arr_data1);
		}

		for($i=1;$i<12;$i++){
			$arr_data1 = array(
				"mesin_line" => "14",
				"mesin_id" => "MS001",
				"mesin_deskripsi" => "IMCK 2-1",
				"mesin_batas_bawah" => 0,
				"mesin_batas_atas" => 10,
				"mesin_value" => 5
			);
			array_push($all_data, $arr_data1);
		}

		for($i=1;$i<12;$i++){
			$arr_data1 = array(
				"mesin_line" => "15",
				"mesin_id" => "MS001",
				"mesin_deskripsi" => "IMCK 2-1",
				"mesin_batas_bawah" => 0,
				"mesin_batas_atas" => 10,
				"mesin_value" => 5
			);
			array_push($all_data, $arr_data1);
		}

		for($i=1;$i<12;$i++){
			$arr_data1 = array(
				"mesin_line" => "16",
				"mesin_id" => "MS001",
				"mesin_deskripsi" => "IMCK 2-1",
				"mesin_batas_bawah" => 0,
				"mesin_batas_atas" => 10,
				"mesin_value" => 5
			);
			array_push($all_data, $arr_data1);
		}
				
		$data['my_data'] = "data 1";
		$data['my_data2'] = "data 2";
		$data['all_data'] = $all_data;
		
		$data['height_bg'] = "535px";
		$data['width_bg'] = "1185px";

		$data['width_all_machine'] = "16px";
		$data['height_all_machine'] = "14px";

		$data['top_line1'] = "75px";
		$data['left_line1'] = "314";

		$data['top_line2'] = "124px";
		$data['left_line2'] = "314";
		
		$data['top_line3'] = "170px";
		$data['left_line3'] = "361";

		$data['top_line4'] = "219px";
		$data['left_line4'] = "361";

		$data['top_line5'] = "257px";
		$data['left_line5'] = "361";

		$data['top_line6'] = "306px";
		$data['left_line6'] = "361";

		$data['top_line7'] = "349px";
		$data['left_line7'] = "363";

		$data['top_line8'] = "398px";
		$data['left_line8'] = "363";

		$data['top_line9'] = "444px";
		$data['left_line9'] = "363";

		$data['top_line10'] = "494px";
		$data['left_line10'] = "363";

		$data['top_line11'] = "192px";
		$data['left_line11'] = "673";

		$data['top_line12'] = "242px";
		$data['left_line12'] = "673";

		$data['top_line13'] = "360px";
		$data['left_line13'] = "673";

		$data['top_line14'] = "410px";
		$data['left_line14'] = "674";

		$data['top_line15'] = "466px";
		$data['left_line15'] = "638";

		$data['top_line16'] = "515px";
		$data['left_line16'] = "638";

		return view('dashboard', $data);
	}
}
