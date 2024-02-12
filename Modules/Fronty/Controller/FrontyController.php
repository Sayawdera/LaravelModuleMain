<?php

namespace Modules\Fronty\Controller;

use Throwable;
use Modules\Fronty\Model\Fronty;
use Modules\Fronty\Service\FrontyService;
use Illuminate\Database\Eloquent\{Builder, Collection};
use Modules\Fronty\Request\{UpdateFrontyRequest, StoreFrontyRequest};
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Fronty\Resources\FrontyResource;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

/**
 * Class Fronty
 * @package  App\Http\Controllers
 */
class FrontyController extends Controller
{
    /**
     * @var WMOptService
     */
    private FrontyService $service;

     /**
      * @param WMOptService $service
      */
    public function __construct(FrontyService $service)
    {
        $this->service = $service;
    }

    /**
    * @param Request $request
    * @return LengthAwarePaginator|Collection
    * @throws Throwable
    */
    public function index(Request $request): AnonymousResourceCollection
    {
        return FrontyResource::collection( $this->service->paginatedList( $request->all() ) );
    }

    /**
     * @param UpdateWMOptRequest $request
     * @return array|Builder|Collection|WMOpt
     * @throws Throwable
     */
    public function store(UpdateFrontyRequest $request): array |Builder|Collection|Fronty
    {
        return $this->service->createModel($request->validated('data'));

    }

    /**
     * @param $wMOpts
     * @return array|Builder|Collection|WMOpt
     * @throws Throwable
     */
    public function show($frontys): FrontyResource
    {
        return new FrontyResource( $this->service->getModelById( $frontys ) );
    }

    /**
     * @param StoreWMOptRequest $request
     * @param int $wMOpts
     * @return array|WMOpt|Collection|Builder
     * @throws Throwable
     */
    public function update(StoreFrontyRequest $request, int $frontys): array |Fronty|Collection|Builder
    {
        return $this->service->updateModel($request->validated('data'), $frontys);

    }

    /**
     * @param int $wMOpts
     * @return array|Builder|Collection|WMOpt
     * @throws Throwable
     */
    public function destroy(int $frontys): array|Builder|Collection|Fronty
    {
        return $this->service->deleteModel($frontys);
    }
}
