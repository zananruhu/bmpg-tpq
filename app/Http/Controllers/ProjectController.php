<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Models\project;

use App\Http\Controllers\Controller;
use App\Models\Tpq;

class ProjectController extends Controller
{

    public function index()
    {
        return view('projects', [
            "title" => "Halaman Kegiatan",
            "active" => 'kegiatan',
            "projects" =>  project::latest()->filter(request(['search']))->paginate(12)->withQueryString()
        ]);
    }

    public function show(project $project)
    {
        return view('project', [
            "active" => 'kegiatan',
            "project" => $project
        ]);
    }

    public function home()
    {
        return view('home', [
            "title" => "Halaman Kegiatan",
            "active" => 'kegiatan',
            "projects" =>  project::latest()->filter(request(['search']))->paginate(12)->withQueryString(),
            "tpq" => Tpq::all()
        ]);
    }
}
