<?php

namespace Envant\ModelMutator;

trait AllowedQueryMutationsTrait
{
    use AllowedAppendsTrait;
    use AllowedHiddenTrait;
    use AllowedIncludesTrait;
    use AllowedVisibleTrait;
    use AllowedCountsTrait;
}
