<?php


namespace App\Http\Repositories;


use App\Company;

class CompanyRepository extends Repository
{

    public function model()
    {
        return Company::class;
    }

    public function index()
    {
        $company="Gagan gurung";
        return $company;

    }
}