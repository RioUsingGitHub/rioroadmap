<?php

namespace App\Models;

use CodeIgniter\Model;

class CrucialAspectModel extends Model
{
    protected $table = 'crucial_aspects';
    protected $primaryKey = 'id';
    protected $allowedFields = ['study_material_id', 'aspect_point'];
}
