<?php

namespace App\Http\Controllers;

use App\Models\Posting;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function welcome()
    {
        $postings = Posting::where('is_paid', true)->where('is_active', true)->get();
        return view('welcome', compact('postings'));
    }
}
