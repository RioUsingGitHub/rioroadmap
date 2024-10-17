<?php

namespace App\Models;

use CodeIgniter\Model;
    
class LearningResourceModel extends Model
{
    protected $table = 'learning_resources';
    protected $primaryKey = 'id';
    protected $allowedFields = ['study_material_id', 'resource_point'];
}
