<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Service\UserService;
use App\Http\Controllers\Validade\ValidateUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    private $validateUser;
    private $userService;
    public function __construct(UserService $userService, ValidateUser $validateUser)
    {
        $this->validateUser = $validateUser;
        $this->userService = $userService;
    }

    public function index()
    {
        $register = $this->userService->index();
        return view('user.index', compact('register'));
    }

    public function create()
    {
        return view('user.form');
    }

    public function store(Request $request)
    {
        $v = $this->validateUser->validar($request);
        if($v->fails()){
            Session::flash('mensagem',['msg'=>$v->errors(),'class'=>'alert alert-info']);
            return redirect()->route('user.create');
        }
        $this->userService->store($request->all());
        Session::flash('mensagem',['msg'=>'Registrado com sucesso!','class'=>'alert alert-info']);
        return redirect()->route('user');
    }

    public function edit($id)
    {
        $register = $this->userService->show($id);
        return view('user.form', compact('register'));
    }

    public function update(Request $request, $id)
    {
        $v = $this->validateUser->validar($request, $id);
        if($v->fails()){
            Session::flash('mensagem',['msg'=>$v->errors(),'class'=>'alert alert-info']);
            return redirect()->route('user.edit', $id);
        }

        $this->userService->update($request->all(), $id);

        Session::flash('mensagem',['msg'=>'Alterado com sucesso!','class'=>'alert alert-info']);
        return redirect()->route('user');
    }

    public function destroy($id)
    {
        $this->userService->destroy($id);
        Session::flash('mensagem',['msg'=>'Deletado com sucesso!','class'=>'alert alert-info']);
        return redirect()->route('user');
    }
}
