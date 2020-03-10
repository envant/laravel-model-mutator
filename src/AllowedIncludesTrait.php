<?php

namespace Envant\ModelMutator;

use Illuminate\Support\Facades\Request;

trait AllowedIncludesTrait
{
    public function allowedIncludes($relations)
    {
        $this->loadMissing(array_intersect(explode(',', Request::get('include')), $relations));

        return $this;
    }
}
