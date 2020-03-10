<?php

namespace Envant\ModelMutator;

use Illuminate\Support\Facades\Request;

trait AllowedHiddenTrait
{
    public function allowedHidden($attributes)
    {
        $attributes = array_intersect(explode(',', Request::get('hidden')), $attributes);
        $this->makeHidden($attributes);

        return $this;
    }
}
