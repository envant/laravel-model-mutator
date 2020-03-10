<?php

namespace Envant\ModelMutator;

use Illuminate\Support\Facades\Request;

trait AllowedLoadsTrait
{
    public function allowedLoads($relations)
    {
        $this->loadMissing(array_intersect(explode(',', Request::get('include')), $relations));

        return $this;
    }
}
