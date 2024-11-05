<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Models\Subject;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PackageController extends Controller
{
    public function index(){
        $data['packages'] = Package::withCount('subjects')->get();
        return view('home', $data);
    }

    public function buy_package(Request $request){
        $data['package_detail'] = Package::where('id', $request->id)->withCount('subjects')->first();
        return view('buy_package', $data);
    }

    public function buy_package_item(Request $request){
        $validate = $request->validate([
            'proof_of_payment' => ['required','image'],
        ]);

        if ($validate) {
            $file_name = $request->file('proof_of_payment')->getClientOriginalName();
            $user = Auth::user();
            // $file_extension = $request->file('proof_of_payment')->getClientOriginalExtension();
            // $file_path = $file_name.$file_extension;
            Transaction::create([
                'price' => $request->price,
                'paid' => $request->paid,
                'proof_of_payment' => $file_name,
                'users_id' => $user->id,
                'packages_id'=> $request->packages_id,
            ]);
            return redirect('/my_package');
        }else{
            return back();
        }
    }

    public function my_package()
    {
        $user = Auth::user();
        $data['transactions'] = Transaction::where('users_id', $user->id)->get();
        return view('my_package', $data);
    }

}
