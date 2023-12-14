<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Investor;


class InvestorController extends Controller
{
    public function create(request $request){
        $data=$request->validate([
            'investor_name'=>'required',
            'contact_number'=>'required',
            'email_address'=>'required',
            'invest_amount'=>'required',
            'rate'=>'required'
           
        ]);
        $newinvestor= Investor::create($data);
        return redirect('addinvestor');

    }

    public function view(){
        return view('setup.createinvestor');
    }
    public function investinfo(){
        $investor = Investor::all();
        
        return view('setup.investorquery')->with('investor',$investor);  
       
    } 
}
