<?php

namespace App\Http\Controllers\Security\Catalogs;

use App\Http\Controllers\Controller;
use App\Models\Security\Catalogs\CatBranch;
use App\Models\Security\Catalogs\CatTypeUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $page_title = 'Centros de Trabajo';
        $message = $request->session()->get('message');
        $objs = User::all();

        $params = [
            'page_title',
            'message',
            'objs',
            'request',
        ];
        return view('Security.Catalogs.catUserCons', compact($params));
    }

    public function create(Request $request)
    {
        $page_title = 'Create User';
        $message = $request->session()->get('message');
        $obj = new User();
        $branchs = CatBranch::all();
        $type_users = CatTypeUser::all();
        return view('Security.Catalogs.catUser', compact('page_title', 'obj', 'branchs', 'type_users'));
    }

    public function store(Request $request)
    {
        request()->validate([
            'name' => 'min:3|required',
            'email' => 'required|email',
        ]);
        $psd = password_generator();
        $obj = new User();
        $obj->name = $request->input("name");
        $obj->strLastName = $request->input("strLastName");
        $obj->strAddres = $request->input("strAddres");
        $obj->intPhoneNumber = $request->input("intPhoneNumber");
        $obj->email = $request->input("email");
        $obj->dblCatTypeUser = $request->dblCatTypeUser;
        $obj->dblCatBranch = $request->dblCatBranch;
        $obj->password = Hash::make($psd);
        $obj->strPasswordText = $psd;
        $obj->save();

        $request->session()->flash('message', 'The record has been saved!');

        return redirect()->route('user.index');
    }

    public function edit(Request $request, $id)
    {
        $page_title = 'Editar Centro de Trabajo';
        $method = $request->method();
        $obj = User::findOrFail($id);
        $branchs = CatBranch::all();
        $type_users = CatTypeUser::all();
        return view('Security.Catalogs.catUser', compact('page_title', 'obj', 'branchs', 'type_users'));
    }

    public function update(Request $request)
    {
        request()->validate([
            'name' => 'min:3|required',
            'email' => 'required|email',
        ]);
        $intUserType = $request->input("id");
        $obj = User::findOrFail($intUserType);
        $obj->name = $request->input("name");
        $obj->strLastName = $request->input("strLastName");
        $obj->strAddres = $request->input("strAddres");
        $obj->intPhoneNumber = $request->input("intPhoneNumber");
        $obj->email = $request->input("email");
        $obj->dblCatTypeUser = $request->dblCatTypeUser;
        $obj->dblCatBranch = $request->dblCatBranch;
        $obj->save();
        $request->session()->flash('message', 'The record has been updated!');
        return redirect()->route('user.index');
    }

    public function destroy($id)
    {
        $obj = User::findOrFail($id)->delete();
        return response()->json('success');
    }
}
