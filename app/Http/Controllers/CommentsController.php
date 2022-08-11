<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class CommentsController extends Controller
{
    // Get and show all comments
    public function index(Request $request)
    {
        // Show the view instead of a PDF for debugging
        //dd(Comments::all());
        /*return view('comments.index', [
            
            'data' => [
                'candy' => Comments::where('comments', 'like', '%candy%')
                                    ->orWhere('comments', 'like', '%taffy%')->get(),
                'calls' => Comments::where('comments', 'like', '%call me%')->get(),
                'referral' => Comments::where('comments', 'like', '%referred me%')->get(),
                'signature' => Comments::where('comments', 'like', '%signature%')->get(),
                'other' => Comments::where('comments', 'not like', '%candy%')
                                    ->where('comments', 'not like', '%call me%')
                                    ->where('comments', 'not like', '%referred me%')
                                    ->where('comments', 'not like', '%signature%')
                                    ->where('comments', 'not like', '%taffy%')->get()
            ]
        ]); */

        $pdf = PDF::loadView('comments.index', [
            'data' => [
                'candy' => Comments::where('comments', 'like', '%candy%')
                                    ->orWhere('comments', 'like', '%taffy%')->get(),
                'calls' => Comments::where('comments', 'like', '%call me%')->get(),
                'referral' => Comments::where('comments', 'like', '%referred me%')->get(),
                'signature' => Comments::where('comments', 'like', '%signature%')->get(),
                'other' => Comments::where('comments', 'not like', '%candy%')
                                    ->where('comments', 'not like', '%call me%')
                                    ->where('comments', 'not like', '%referred me%')
                                    ->where('comments', 'not like', '%signature%')
                                    ->where('comments', 'not like', '%taffy%')->get()
            ]
        ]);

        return $pdf->download('comments.pdf');

    }
}
