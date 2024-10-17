<?php

namespace App\Models;

use CodeIgniter\Model;

class StudyMaterialModel extends Model
{
    protected $table = 'study_materials';
    protected $primaryKey = 'id';
    protected $allowedFields = ['title', 'description'];
}
