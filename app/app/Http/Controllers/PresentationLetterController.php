<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PresentationLetter;

class PresentationLetterController extends Controller
{
    protected $presentationLetters;

    public function __construct(PresentationLetter $presentationLetters)
    {
        $this->presentationLetters = $presentationLetters;
    }

    public function show(int $id = null)
    {
        //TODO validate id
        if (!empty($id)) {
            return response($this->presentationLetters->all(), 200);
        }
    }
}
