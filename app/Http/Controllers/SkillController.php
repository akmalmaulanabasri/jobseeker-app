<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SkillController extends Controller
{

    public function create(Request $request)
    {
        $request->validate([
            'title' => 'required',
        ]);

        $skill = new Skill();
        $skill->user_id = Auth::id();
        $skill->title = $request->title;
        $skill->save();

        return redirect()->route('profile');
    }
}
