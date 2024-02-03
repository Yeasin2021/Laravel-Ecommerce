<?php

namespace App\Design\Patterns\Repositories;
use App\Models\Feature;


class SingleFeatureRepository implements SingleFeatureInterface
{
    public function read()
    {
        return  Feature::all();
    }

    public function create(array $data)
    {
        return  Feature::create($data);
    }

}

?>
