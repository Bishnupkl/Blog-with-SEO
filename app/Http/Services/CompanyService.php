<?php


namespace App\Http\Services;


use App\Http\Interfaces\CompanyRepositoryInterface;

class CompanyService extends Service
{

    public function interface()
    {
        return CompanyRepositoryInterface::class;
    }

    public function index()
    {
        $company= $this->interface->index();
        $company.="is nice man";
        return $company;

    }
}