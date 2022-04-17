<?php

namespace App\Controllers;

use App\Models\komikmodel;

class komik extends BaseController
{
    protected $komikmodel;

    public function __construct()
    {
        $this->komikmodel = new komikmodel();
    }


    public function index()
    {
        // $komik = $this->komikmodel->findAll();

        $data = [
            'title' => 'daftar komik',
            'komik' => $this->komikmodel->getkomik()
        ];

        //cara konek db tanpa model
        //$db = \Config\Database::connect();
        //$komik = $db->query("SELECT * FROM komik");
        //foreach ($komik->getResultArray() as $row) {
        //    d($row);
        // }


        // $komikmodel = new \app\Models\komikmodel();
        // 



        return view('komik/index', $data);
    }

    public function detail($slug)
    {
        $komik = $this->komikmodel->getkomik($slug);
        $data = [
            'title' => 'detail komik',
            'komik' => $this->komikmodel->getkomik($slug)
        ];
        return view('komik/detail', $data);
    }
}
