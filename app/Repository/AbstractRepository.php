<?php
/**
 * Created by PhpStorm.
 * User: carlo
 * Date: 5/4/2020
 * Time: 4:32 PM
 */

namespace App\Repository;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

abstract class AbstractRepository
{
    /**
     * @var Model
     */
    private $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function selectConditions($conditions)
    {
        $expressions = explode(';', $conditions);

        foreach ($expressions as $expression)
        {
            $exp = explode(':', $expression);
            $this->model = $this->model->where($exp[0], $exp[1], $exp[2]);
        }
    }

    public function selectFilter($filters)
    {
        $this->model = $this->model->selectRaw($filters);
    }

    public function getResults()
    {
        return $this->model;
    }

    public function saveLocation(array $request)
    {
        $this->model->create($request);
        return response()->json(['data' => $request]);
    }
}
