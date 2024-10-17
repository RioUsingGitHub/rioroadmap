<?php

namespace App\Controllers;

use App\Models\StudyMaterialModel;
use App\Models\CrucialAspectModel;
use App\Models\ChallengeModel;
use App\Models\LearningResourceModel;

class StudyMaterialsController extends BaseController
{
    public function home()
    {
        return view('pages/home'); // Pastikan file view ada di app/Views/pages/home.php
    }

    public function about()
    {
        return view('pages/about'); // Pastikan file view ada di app/Views/pages/about.php
    }

    public function index()
    {
        $studyMaterialModel = new StudyMaterialModel();
        $materials = $studyMaterialModel->findAll();

        return view('study_materials/index', ['materials' => $materials]);
    }

    public function view($id)
    {
        $studyMaterialModel = new StudyMaterialModel();
        $crucialAspectModel = new CrucialAspectModel();
        $challengeModel = new ChallengeModel();
        $learningResourceModel = new LearningResourceModel();

        $material = $studyMaterialModel->find($id);
        $crucialAspects = $crucialAspectModel->where('study_material_id', $id)->findAll();
        $challenges = $challengeModel->where('study_material_id', $id)->findAll();
        $resources = $learningResourceModel->where('study_material_id', $id)->findAll();

        return view('study_materials/view', [
            'material' => $material,
            'crucialAspects' => $crucialAspects,
            'challenges' => $challenges,
            'resources' => $resources
        ]);
    }
}
