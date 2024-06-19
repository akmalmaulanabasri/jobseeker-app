<?php

namespace App\Http\Controllers;

use App\Models\Lamaran;
use App\Models\Posting;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{

    public function index($id)
    {
        $lamaran = Lamaran::find($id);
        return view('review.view', compact('lamaran'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'lamaran_id' => 'required',
            'rating' => 'required',
            'comment' => 'required|string|max:255',
        ]);

        $review = new Review();
        $review->lamaran_id = $request->lamaran_id;
        $review->rating = $request->rating;
        $review->comment = $request->comment;
        $review->save();

        return redirect('dashboard')->with('success', 'Review has been added successfully');
    }
}
