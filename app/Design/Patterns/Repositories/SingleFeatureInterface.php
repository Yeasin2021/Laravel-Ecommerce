<?php

namespace App\Design\Patterns\Repositories;

interface SingleFeatureInterface
{
    public function read();
    public function create(array $data);

}

?>
