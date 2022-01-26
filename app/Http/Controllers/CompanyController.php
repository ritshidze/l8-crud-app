<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCompanyRequest;
use Illuminate\Http\Request;
use App\Models\Company;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;


class CompanyController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Company::where('deleted', 0)->paginate(10);
        $card = "List Companies";
        $count = 1;
        $crumb = "List companies";
        return view("admin.company.index", [
            'companies' => $companies, 
            'count' => $count, 
            'crumb' => $crumb, 
            'card' => $card
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $card = "Create Company";
        $crumb = "Create Company";

        return view("admin.company.create", [
            'crumb' => $crumb, 
            'card' => $card,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateCompanyRequest $request)
    {
        $input = $request->all();

        $company = new Company();
        $company->name = $input['name'];
        $company->email = $input['email'];
        $company->website = $input['website'];
        //$company->logo = $input['logo'];
        $company->save();

        //do file upload if file isset.
        if (isset($input['logo']))
        {
            $logoName = time() . '.' . request()->logo->getClientOriginalExtension();
            $logoPath = request()->logo->getPathName();
            Storage::putFileAs('public/company/logo', new File($logoPath), $logoName);

            $companyLogo = Company::find($company->id);
            $companyLogo->logo = 'company/logo/' . $logoName;
            $companyLogo->save();
        }

        return redirect()->route('create-company')->with('message', 'Company created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $company = Company::where('deleted', 0)->where('id', $id)->first();
        $crumb = 'View company';
        $card = 'View Company';

        return view('admin.company.show', [
            'company' => $company, 
            'crumb' => $crumb, 
            'card' => $card
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $company = Company::where('deleted', 0)->where('id', $id)->first();
        $crumb = 'Edit company';
        $card = 'Edit Company';

        return view('admin.company.edit', [
            'company' => $company, 
            'crumb' => $crumb, 
            'card' => $card
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $input = $request->all();

        $company = Company::find($input['id']);
        $company->name = $input['name'];
        $company->email = $input['email'];
        $company->website = $input['website'];
        //$company->logo = $input['logo'];
        $company->save();

        //do file upload if file isset.
        if (isset($input['logo']))
        {

            //Remove old file if profile has a logo already.

            if ($company->logo <> "")
            {
                unlink(storage_path('app/public/' . $company->logo));
            }

            $logoName = time() . '.' . request()->logo->getClientOriginalExtension();
            $logoPath = request()->logo->getPathName();
            Storage::putFileAs('public/company/logo', new File($logoPath), $logoName);

            $companyLogo = Company::find($company->id);
            $companyLogo->logo = 'company/logo/' . $logoName;
            $companyLogo->save();
        }

        return redirect('company/edit' . $company->id)->with('message', 'Company updated successfully!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //soft delete
        $company = Company::find($id);
        $company->deleted = 1;
        $company->save();
        //unlink(storage_path('app/public/' . $company->logo));

        return redirect()->route('company')->with('message', 'Company deleted successfully!');

    }
}
