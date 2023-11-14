<?php

namespace App\Http\Controllers;

use App\Http\Requests\company\StoreCompanyRequest;
use App\Http\Requests\company\UpdateCompanyRequest;
use App\Jobs\CompanyJobSend;
use App\Models\Company;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $companies = Company::paginate(10);
        return view("pages.company.index",compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("pages.company.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCompanyRequest $request)
    {
        Log::debug($request);
        $data = $request->validated(); // Get validated input data
        if($request['logo']){
            //image upload to public folder
            $image['name'] = $request->file('logo')->store('logo', 'public');
            //image path save in image table
            //$new_logo = Image::create($image);
            $data ['logo'] = $image['name'];
        }


        try {
            $company = Company::create($data );
            if($company->email){
                CompanyJobSend::dispatch ($company->id);
            }
            return back()->with('success','You have successfully added company.');


        } catch (\Throwable $th) {
            return back()->with('fail','You have successfully added company.');
        }

        //return back()->with('success','You have successfully added company.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $company = Company::findOrFail($id);
        return view("pages.company.edit",compact('company'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCompanyRequest $request, string $id)
    {
        $data = $request->validated();// Get validated input data
        $company = Company::findOrFail($id);
        if($request['logo']){
            //image upload to public folder
            $image['name'] = $request->file('logo')->store('logo', 'public');
            //image path save in image table
            //$new_logo = Image::create($image);
            $data ['logo'] = $image['name'];
        }
        $company->update($data);
        return back()->with('success','You have successfully updated company.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Company::destroy($id);
        return back();
    }
}
