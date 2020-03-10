<?php

namespace Envant\ModelMutator;

use Illuminate\Support\Facades\Request;

trait AllowedQueryMutationsTrait
{
    use AllowedAppendsTrait;
    use AllowedHiddenTrait;
    use AllowedIncludesTrait;
    use AllowedVisibleTrait;
}
