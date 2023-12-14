<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;

class CompanySetup extends Controller
{
    public function save(Request $request){
        $data=$request->validate([
            'company_name'=>'required',
            'contact_number'=>'required',
            'email_address'=>'required',
            'company_address'=>'required',
            'account_details'=>'required',
            'trn_no'=>'required',
            'logo'=>'required',
        ]);
        $newCompany= Company::create($data);
        return redirect('companyregister');
        

    }
    public function register(){
        $company = Company::OrderBy('id','desc')->first();
        
        return view('setup.register',['company'=>$company]);
       
       
    }
}
