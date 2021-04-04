<?php

namespace App\Http\Controllers\Service;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserService
{
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function index()
    {
        return $this->user::all();
    }

    public function store(array $attribute)
    {
        $this->user::create($attribute);
    }

    public function show($id)
    {
        return $this->user::find($id);
    }

    public function update(array $attribute, $id)
    {
        $register = $this->user::find($id);
        $register->update($attribute);
    }

    public function destroy($id)
    {
        $this->user::find($id)->delete();
    }

}
