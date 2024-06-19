<?php

namespace App\Http\Controllers;

use App\Models\Lamaran;
use App\Models\Posting;
use App\Models\Simpan;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function landingPostinga()
    {
        $postings = Posting::where('is_paid', true)->where('is_active', true)->get();
        $simpan = Simpan::all();
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
