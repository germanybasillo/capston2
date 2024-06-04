<?php

namespace App\Http\Controllers\Tenant;
use App\Http\Controllers\Controller;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\Tenant;
class TenantLink extends Controller
{
    public function index(): View
    {
        return view('tenantlink.tenant', [
            'tenants' => Tenant::all()
        ]);
    }

    public function create(): View
    {
        return view('tenantlink.addtenant');
    }

    public function show(string $id): View
    {
        return view('tenantlink.edittenant', [
            'tenant' => Tenant::findOrFail($id)
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'fname' => 'required|string',
            'lname' => 'required|string',
            'mname' => 'required|string',
            'email' => 'required|email|unique:tenants,email',
            'contact' => 'required|string|unique:tenants,contact',
            'address' => 'required|string',
            'gender' => 'required|string',
            'profile' => 'required'
        ], [
            'email.unique' => 'The email has already been taken.',
            'contact.unique' => 'The number has already been taken.'
        ]);
    
        $tenant = new Tenant($request->all());
        $tenant->fname = $request->input('fname'); 
        
        $tenant->save();
        return redirect('/tenants')->with('status', "Tenant Data Has Been inserted");
    }
    
    public function update(Request $request, $id){
        
        $request->validate(
            [
                'fname' => 'required|string',
                'lname' => 'required|string',
                'mname' => 'required|string',
                'email' => 'required|email|unique',
                'contact' => 'required|string',
                'address' => 'required|string',
                'gender' => 'required|string',
            ]
        );
        
        $tenant = Tenant::find($id);
        $tenant->update($request->all());
        return redirect("/tenants")
        ->with('status', 'Tenant '.$request['email'].' was updated successfully.');
    }
    
  public function destroy($id)
  {
    $tenant = Tenant::find($id);
    $tenant->delete();
    return redirect("/tenants")
      ->with('success', 'Tenant '.$id.'info deleted successfully');
  }
  
}
