<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function show(int $id = null)
    {
        //TODO validate id
        if (!empty($id)) {

            $usercv = $this->user::find($id);
            $usercv->workExperiences;
            $usercv->studies;
            $usercv->presentationLetters;

            return response($usercv, 200);
        }
    }
}
