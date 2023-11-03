<?php

namespace App\Http\Controllers\Access;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Application;
use Illuminate\Contracts\Foundation\Application as ConstApplication;

class RegisterController extends Controller
{
    public function index(): View|Application|Factory|ConstApplication
    {
        $props['title'] = 'Sign Up';
        $props['degrees'] = collect([
            ['value' => 'msc', 'text' => 'MSc'],
            ['value' => 'phd', 'text' => 'PhD'],
            ['value' => 'ms', 'text' => 'MS'],
            ['value' => 'md', 'text' => 'MD'],
        ])->sortBy('value');
        $props['designations'] = collect([
            ['value' => 'lecturer', 'text' => 'Lecturer'],
            ['value' => 'professor', 'text' => 'Professor'],
            ['value' => 'associate_professor', 'text' => 'Associate Professor'],
            ['value' => 'assistant_professor', 'text' => 'Assistant Professor'],
        ])->sortBy('value');
        $props['departments'] = collect([
            [
                'value' => 'botany_department',
                'text' => 'Department of Botany'
            ],
            [
                'value' => 'zoology_department',
                'text' => 'Department of Zoology'
            ],
            [
                'value' => "fisheries_department",
                "text" => "Department of Fisheries"
            ],
            [
                'value' => "psychology_department",
                "text" => "Department of Psychology"
            ],
            [
                'value' => "microbiology_department",
                "text" => "Department of Microbiology"
            ],
            [
                'value' => "clinical_psychology_department",
                "text" => "Department of Clinical Psychology"
            ],
            [
                'value' => 'soil_water_environment_department',
                'text' => 'Department of Soil, Water & Environment'
            ],
            [
                'value' => 'biochemistry_molecular_biology_department',
                'text' => 'Department of Biochemistry & Molecular Biology'
            ],
            [
                'value' => "genetic_engineering_biotechnology_department",
                "text" => "Department of Genetic Engineering & Biotechnology"
            ],
        ])->sortBy('value');
        return view('access.register', $props);
    }

    public function store(Request $request)
    {

    }
}
