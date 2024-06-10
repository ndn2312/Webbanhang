<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Interfaces\UserServiceInterface as UserService;
use App\Repositories\Interfaces\ProvinceRepositoryInterface as ProvinceService;


class UserController extends Controller
{

    protected $userService;
    protected $provinceRepository;
    
    public function __construct(
        UserService $userService,
        ProvinceService  $provinceRepository,
    ){
        $this->userService = $userService;
        $this->provinceRepository = $provinceRepository;

    }
    
        public function index(){

            $users = $this->userService->paginate();

            $config = [
                'js' =>[
                    'backend/js/plugins/switchery/switchery.js'
                ],
                'css' =>[
                    'backend/css/plugins/switchery/switchery.css'
                ]
            ];
            $config['seo'] = config('apps.user');
            // $config= $this ->config();
            // $config['seo'] = config('apps.user');
            $template = 'backend.user.index';
            return view('backend.dashboard.layout', compact(
                'template',
                'config',
                'users',
            ));
        }

        public function create(){


          
                $provinces =  $this->provinceRepository->all();
            $config =[
                'css' =>[
                    'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css'

                ],
                'js' =>[
                    'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js',
                    'backend/Library/location.js'

                ]
            ];
            $template = 'backend.user.create';
            $config['seo'] = config('apps.user');

            return view('backend.dashboard.layout', compact(
                'template',
                'config',
                'provinces',
            ));
        }
    
   
}