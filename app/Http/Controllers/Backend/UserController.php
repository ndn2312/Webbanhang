<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function __construct(){
        
    }
    
        public function index(){

            $users = User::paginate(15);
            
            $config= $this ->config();
            $template = 'backend.user.index';
            return view('backend.dashboard.layout', compact(
                'template',
                'config',
                'users',
            ));
        }
    
    private function config(){
        return[
            'js' =>[
                'backend/js/plugins/switchery/switchery.js'
            ],
            'css' =>[
                'backend/css/plugins/switchery/switchery.css'
            ]
        ];
    }
}