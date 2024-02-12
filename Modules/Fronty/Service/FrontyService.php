<?php

namespace Modules\Fronty\Service;

use App\Modules\Fronty\Repository\FrontyRepository;
use App\Services\BaseService;

class FrontyService extends BaseService
{
    public function __construct(FrontyRepository $repository)
    {
        $this->repository = $repository;
    }
}
