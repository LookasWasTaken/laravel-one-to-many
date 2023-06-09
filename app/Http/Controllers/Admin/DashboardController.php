<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class DashboardController extends Controller
{
    public function index()
    {
        $project = Project::orderByDesc('id')->get();
        return view('admin.dashboard', compact('project'));
    }
}
