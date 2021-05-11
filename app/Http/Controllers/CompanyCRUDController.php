<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyCRUDController extends Controller
{
    //
    public function index() {
        //$data['companies'] = Company::orderBy('id', 'desc')->paginate(10);
        //$data['companies'] = Company::orderBy('id', 'asc')->get();
        //return view('companies/index', $data);
        
        $companies = Company::orderBy('id', 'desc')->paginate(10);
        return view('companies/index', ['companies' => $companies]);
    }
    
    public function create() {
        return view('companies/create');
    }
    
    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'address' => 'required'
        ]);
        $company = new Company;
        $company->name = $request->name;
        $company->email = $request->email;
        $company->address = $request->address;
        $company->save();
        return redirect()->route('index')
                         ->with('success', 'Company has been created successfully.');
    }
    
//     public function edit(Company $company) {
//         //return view('companies/edit',['company' => $company]);
//         //return view('companies/edit')->with('company', $company);
//         return view('companies/edit', compact('company'));
//     }

    public function edit($id) {
        $company = Company::findOrFail($id);
        //return view('companies/edit')->with('company', $company);
        return view('companies/edit', compact('company'));
    }
    
    public function update(Request $request, $id) {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'address' => 'required'
        ]);
        $company = Company::find($id);
        $company->name = $request->name;
        $company->email = $request->email;
        $company->address = $request->address;
        $company->save();
        return redirect(route('index'))->with('success', 'Company has been updated successfully');
    }
    
    public function destroy($id) {
        Company::destroy($id);
        return redirect(route('index'))->with('success', 'Company has been deleted successfully');
    }
    
    public function show($id) {
        $company = Company::find($id)->first();
        return view('companies.show', compact('company'));
    }
}

