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
        return view('comments.index', [
            'data' => [
                'candy' => Comments::where('comments', 'like', '%candy%')
                                    ->orWhere('comments', 'like', '%taffy%')
                                    ->orWhere('comments', 'like', '%tootsie%')
                                    ->orWhere('comments', 'like', '%smarties%')->get(),
                'calls' => Comments::where('comments', 'like', '%call%')->get(),
                'referral' => Comments::where('comments', 'like', '%refer%')->get(),
                'signature' => Comments::where('comments', 'like', '%signature%')->get(),
                'other' => Comments::where('comments', 'not like', '%candy%')
                                    ->where('comments', 'not like', '%tootsie%')
                                    ->where('comments', 'not like', '%smarties%')
                                    ->where('comments', 'not like', '%call%')
                                    ->where('comments', 'not like', '%refer%')
                                    ->where('comments', 'not like', '%signature%')
                                    ->get()
            ]
        ]);

        /*$pdf = PDF::loadView('comments.index', [
            'data' => [
                'candy' => Comments::where('comments', 'like', '%candy%')
                                    ->orWhere('comments', 'like', '%taffy%')
                                    ->orWhere('comments', 'like', '%tootsie%')
                                    ->orWhere('comments', 'like', '%smarties%')->get(),
                'calls' => Comments::where('comments', 'like', '%call%')->get(),
                'referral' => Comments::where('comments', 'like', '%refer%')->get(),
                'signature' => Comments::where('comments', 'like', '%signature%')->get(),
                'other' => Comments::where('comments', 'not like', '%candy%')
                                    ->where('comments', 'not like', '%tootsie%')
                                    ->where('comments', 'not like', '%smarties%')
                                    ->where('comments', 'not like', '%call%')
                                    ->where('comments', 'not like', '%refer%')
                                    ->where('comments', 'not like', '%signature%')
                                    ->get()
            ]
        ]);

        return $pdf->download('comments.pdf');*/

    }
}
