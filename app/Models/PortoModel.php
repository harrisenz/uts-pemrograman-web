<?php

namespace App\Models;

use CodeIgniter\Model;

class PortoModel extends Model
{
    // protected $table = 'tb_edu';

    public function getEdu()
    {
        return $this->db->table('tb_edu')
            ->orderBy('edu_id', 'DESC')
            ->get()->getResultArray();
    }

    public function getExp()
    {
        return $this->db->table('tb_exp')
            ->orderBy('exp_id', 'ASC')
            ->get()->getResultArray();
    }

    public function getSkill()
    {
        return $this->db->table('tb_skill')
            ->orderBy(
                'skill_id',
            )
            ->get()->getResultArray();
    }

    public function getAm()
    {
        return $this->db->table('tb_am')
            ->orderBy(
                'am_id',
            )
            ->get()->getResultArray();
    }
}
