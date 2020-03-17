<?php

namespace Envant\ModelMutator;

use Illuminate\Support\Facades\Request;

trait AllowedCountsTrait
{
    public function allowedCounts($relationsForCount)
    {
        $this->loadCount(array_intersect(explode(',', Request::get('counts')), $relationsForCount));

        return $this;
    }
}
