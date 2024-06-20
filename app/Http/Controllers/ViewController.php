<?php

namespace App\Http\Controllers;

use App\Models\Lamaran;
use App\Models\Posting;
use App\Models\Simpan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ViewController extends Controller
{
    public function landingPostinga()
    {
        $postings = Posting::where('is_paid', true)->where('is_active', true)->get();
        if (Auth::check()) {
            $simpan = Simpan::where('user_id', auth()->user()->id)->get();
        } else {
            $simpan = [];
        }
        return view('landing.postingan_landing', compact('postings', 'simpan'));
    }

    public function detailPostinga($id)
    {
        $posting = Posting::find($id);


        if (!$posting) {
            abort(404, 'Posting not found');
        }

        return view('landing.detail_landing_posting', compact('posting'));
    }

    public function createLamaran($id)
    {
        $posting = Posting::find($id);
        return view('landing.form_lamaran', compact('posting'));
    }

    public function listLamaranLanding()
    {
        $listLamarans = Lamaran::all();
        return view('landing.list_lamaran', compact('listLamarans'));
    }
}
