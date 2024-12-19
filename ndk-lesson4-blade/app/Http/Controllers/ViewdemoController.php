<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class ViewdemoController extends Controller
{
    /**
     * Action view4 - Truyền dữ liệu vào View4
     */
    public function view4()
    {
        $name = 'Chung Trịnh';
        $company = 'Devmaster Academy';

        return view('view4', compact('name', 'company'));
    }
}
