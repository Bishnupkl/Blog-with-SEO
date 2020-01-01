<?php


namespace App\Http\Interfaces;


interface RepositoryInterface
{

    /**
     * @param array $attributes
     * @return mixed
     */
    public function create(array $attributes);


}