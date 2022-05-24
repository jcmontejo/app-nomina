<?php

namespace App\Http\Controllers\Security\Catalogs;

use App\Http\Controllers\Controller;
use App\Models\Security\Catalogs\CatBranch;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    public function index(Request $request)
    {
        $page_title = 'Centros de Trabajo';
        $message = $request->session()->get('message');
        $objs = CatBranch::all();

        $params = [
            'page_title',
            'message',
            'objs',
            'request',
        ];
        return view('Security.Catalogs.catBranchCons', compact($params));
    }

    public function create(Request $request)
    {
        $page_title = 'Create User Type';
        $message = $request->session()->get('message');
        $obj = new CatBranch();
        return view('Security.Catalogs.catBranch', compact('page_title', 'obj'));
    }

    public function store(Request $request)
    {
        request()->validate([
            'strBranch' => 'min:3|required',
        ]);
        $obj = new CatBranch();
        $obj->strBranch = $request->input("strBranch");
        $obj->strAddress = $request->input("strAddress");
        $obj->intPhoneNumber = $request->input("intPhoneNumber");
        $obj->save();

        $request->session()->flash('message', 'The record has been saved!');

        return redirect()->route('branch.index');
    }

    public function edit(Request $request, $dblCatBranch)
    {
        $page_title = 'Editar Centro de Trabajo';
        $method = $request->method();
        $obj = CatBranch::findOrFail($dblCatBranch);
        return view('Security.Catalogs.CatBranch', compact('page_title', 'obj'));
    }

    public function update(Request $request)
    {
        request()->validate([
            'strBranch' => 'min:3|required'
        ]);
        $intUserType = $request->input("dblCatBranch");
        $obj = CatBranch::findOrFail($intUserType);
        $obj->strBranch = $request->input("strBranch");
        $obj->strAddress = $request->input("strAddress");
        $obj->intPhoneNumber = $request->input("intPhoneNumber");
        $obj->save();
        $request->session()->flash('message', 'The record has been updated!');
        return redirect()->route('branch.index');
    }

    public function destroy($dblCatBranch)
    {
        $obj = CatBranch::findOrFail($dblCatBranch)->delete();
        return response()->json('success');
    }
}
