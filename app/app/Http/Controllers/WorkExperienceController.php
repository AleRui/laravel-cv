<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\WorkExperience;

class WorkExperienceController extends Controller
{
    protected $workExperience;

    public function __construct(WorkExperience $workExperience)
    {
        $this->workExperience = $workExperience;
    }

    public function show(int $id = null)
    {
        //TODO validate id
        if (!empty($id)) {
            return response($this->workExperience->all(), 200);
        }
    }
}
