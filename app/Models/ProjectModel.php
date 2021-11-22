<?php

namespace App\Models;

use CodeIgniter\Model;

class ProjectModel extends Model
{
    protected $DBGroup              = 'default';
    protected $table                = 'project';
    protected $primaryKey           = 'id_project';
    protected $useAutoIncrement     = true;
    protected $returnType           = 'object';
    protected $allowedFields        = ['judul_project', 'slug', 'link_project','picture_project'];

    // Dates
    protected $useTimestamps        = true;
    public function resultProject(){
        $data = $this->orderBy('created_at', 'DESC');
        return $data;
    }
    public function getProject($slug = false)
    {
        if ($slug == false) {
            return
                $this->findAll();
        }
        return
            $this->where(['slug' => $slug])->first();
    }
}