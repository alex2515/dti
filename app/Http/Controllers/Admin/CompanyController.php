<?php

namespace App\Http\Controllers\Admin;

use App\Company;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\CompanyUpdateRequest;

class CompanyController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        $company = Company::findOrFail($company->id);
        //dd($company);
        return view('admin.companies.edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(CompanyUpdateRequest $request, Company $company)
    {
        $company = Company::findOrFail($company->id);
        $company->fill($request->all())->save();

        //IMAGEN
        if ($request->file('file')) {
            $path = Storage::disk('public')->put('image', $request->file('file'));
            $company->fill(['file' => asset($path)])->save();
        }

        return redirect()->route('companies/1/edit', $company->id)
        ->with('info', 'Congfiguración general, actualizado con éxito');
    }

}
