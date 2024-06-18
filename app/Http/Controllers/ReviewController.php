<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'posting_id' => 'required',
            'rating' => 'required',
            'comment' => 'required|string|max:255',
        ]);

        $review = new Review();
        $review->user_id = auth()->id();
        $review->posting_id = $request->posting_id;
        $review->rating = $request->rating;
        $review->comment = $request->comment;
        $review->save();

        return response()->json($review, 201);
    }
}
