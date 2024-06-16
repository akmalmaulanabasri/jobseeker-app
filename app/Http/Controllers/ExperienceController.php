<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExperienceController extends Controller
{

    public function createPengalamanKerja()
    {
        return view('auth.profile.pengalaman_kerja.create');
    }

    public function createKetampilan()
    {
        return view('auth.profile.keterampilan.create');
    }

    public function create(Request $request)
    {
        $request->validate([
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'position' => 'required|string',
            'company_name' => 'required|string',
            'description' => 'required|string'
        ]);

        $experience = new Experience();
        $experience->user_id = Auth::id();
        $experience->start_date = $request->start_date;
        $experience->end_date = $request->end_date;
        $experience->position = $request->position;
        $experience->company_name = $request->company_name;
        $experience->description = $request->description;
        $experience->save();

        return redirect()->route('profile');
    }
}
