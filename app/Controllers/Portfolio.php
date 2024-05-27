<?php

namespace App\Controllers;

use App\Models\Biodata_model;

class Portfolio extends BaseController
{
    public function index(): string
    {
        $getModel = new Biodata_model();
        $dataBiodata['portfolio_daffa'] = $getModel->getBiodata();
        return view('index', $dataBiodata);
    }
}
