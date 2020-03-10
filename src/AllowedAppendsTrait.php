<?php

namespace Envant\ModelMutator;

use Illuminate\Support\Facades\Request;

trait AllowedAppendsTrait
{
    public function allowedAppends($attributes)
    {
        $this->append(array_intersect(explode(',', Request::get('append')), $attributes));

        return $this;
    }
}
