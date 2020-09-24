<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Study;

class StudyController extends Controller
{
    protected $studies;

    public function __construct(Study $studies)
    {
        $this->studies = $studies;
    }

    public function show(int $id = null)
    {
        //TODO validate id
        if (!empty($id)) {
            return response($this->studies->all(), 200);
        }
    }
}
