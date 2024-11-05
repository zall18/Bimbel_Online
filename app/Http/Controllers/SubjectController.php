<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function materi(Request $request)
    {
        $data['subject'] = Subject::where('id', $request->id)->first();
        return view("materi", $data);
    }
}
