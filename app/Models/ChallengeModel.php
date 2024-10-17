<?php

namespace App\Models;

use CodeIgniter\Model;

class ChallengeModel extends Model
{
    protected $table = 'challenges';
    protected $primaryKey = 'id';
    protected $allowedFields = ['study_material_id', 'challenge_point'];
}
