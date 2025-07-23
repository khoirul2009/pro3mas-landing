<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComproController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function node()
    {
        return view('pages.node');
    }

    public function vacancy()
    {
        return view('pages.vacancy');
    }

    public function piMall()
    {
        return view('pages.marketplace');
    }

    public function investor()
    {
        return view('pages.investor');
    }
    public function branchoffice()
    {
        $branchOffices = \App\Models\BranchOffice::query()
            ->paginate();

        return view('pages.branchoffice', [
            'offices' => $branchOffices,
        ]);
    }
    public function career()
    {
        $jobVacancies = \App\Models\JobVacancy::query()
            ->paginate();

        return view('pages.careers', [
            'vacancies' => $jobVacancies,
        ]);
    }
    public function help()
    {
        return view('pages.help');
    }
    public function trust()
    {
        return view('pages.trust');
    }
}
