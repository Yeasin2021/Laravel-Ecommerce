<?php

namespace App\Design\Patterns\Repositories;
use App\Models\Feature;


class SingleFeatureRepository implements SingleFeatureInterface
{
    public function add(array $data)
    {
        return  Feature::create($data);
    }

}

?>
