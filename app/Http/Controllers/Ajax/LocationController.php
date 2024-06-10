<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Interfaces\DistrictRepositoryInterface as DistrictRepository;
use App\Repositories\Interfaces\ProvinceRepositoryInterface as ProvinceRepository;


class LocationController extends Controller
{
    protected $districtRepository;
    protected $provinceRepository;


    public function __construct(
        DistrictRepository $districtRepository,
        ProvinceRepository $provinceRepository

    )
    {
        $this -> districtRepository = $districtRepository;
        $this -> provinceRepository = $provinceRepository;

    }
    public function getLocation(Request $request){
        $province_id = $request->input('province_id');

        $province= $this->provinceRepository->findById($province_id,['code','name'],['districts']);
        // $districts = $province->districts->toArray();
        // dd($districts);
        $response = [
            'html' => $this->renderHtml($province->districts)
        ];
        return response() -> json($response);
    } 
        
    public function renderHtml($districts){
        $html ='<option value="0">[Chọn Quận/Huyện]</option>';
        foreach($districts as $district){
            $html .= '<option value ="'.$district->code.'">'.$district->name.'</option>';   
        }
        return $html;
}
}