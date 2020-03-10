<?php

namespace Envant\ModelMutator;

use Illuminate\Support\Facades\Request;

trait AllowedVisibleTrait
{
    public function allowedVisible($attributes)
    {
        $attributes = array_intersect(explode(',', Request::get('visible')), $attributes);
        $this->makeVisible($attributes);

        return $this;
    }
}
