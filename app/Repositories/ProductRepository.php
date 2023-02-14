<?php

namespace App\Repositories;

use App\Models\Product;

/**
 * Class ProductRepository.
 */
class ProductRepository extends BaseRepository
{

    /**
     * @return string
     *  Return the model
     */
    public function model()
    {
        return Product::class;
    }

    public function destroy($id)
    {
        return Product::where('id', $id)->delete();
    }

    public function create(array $data)
    {
        return Product::create($data);
    }

    public function show($id)
    {
        $query = $this->model->query();

        require $query->where('id', $id)->get();
    }

    public function getListProduct($filter = [])
    {
        $query = $this->model->query();

        $limit = isset($filter['limit']) ? (int) $filter['limit'] : config('paginate.limit-default');

        if (isset($filter['name'])) {
            $query = $query->where('products.name', 'like', '%' . $filter['name'] . '%');
        }

        if (isset($filter['description'])) {
            $query = $query->where('products.description', 'like', '%' . $filter['description'] . '%');
        }

        if (isset($filter['type'])) {
            $query = $query->where('products.type', 'like', '%' . $filter['type'] . '%');
        }

        $query = $query->orderBy('id', 'DESC');

        return $query->paginate($limit);
    }

    public function getAll()
    {
        return $this->model->query()->get();
    }
}
