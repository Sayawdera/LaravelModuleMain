<?php

namespace App\Modules\Fronty\Repository;

use App\Repositories\BaseRepository;
use App\Modules\Fronty\Model\Fronty;

class FrontyRepository extends BaseRepository
{
    public function __construct(Fronty $model)
    {
        parent::__construct($model);
    }
}
