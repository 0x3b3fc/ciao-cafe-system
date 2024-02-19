<?php

namespace Domain\Settings\Services;

use Domain\Settings\Models\SubCategory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class CategoryService
{
    private Model|Builder $SubCategoryModel;

    public function __construct()
    {
        $this->SubCategoryModel = new SubCategory();
    }

    public function index(): Collection
    {
        try {
            return $this->SubCategoryModel->get();
        } catch (\Throwable $exception) {
            throw $exception;
        }
    }

    public function create(Request $request): ?Model
    {
        try {
            $data = $request->validated();
            $data['name'] = $request->input('name');
            $data['category_id'] = $request->input('category_id');
            $data['is_active'] = $request->input('is_active');
            return $this->SubCategoryModel->create($data);
        } catch (\Throwable $exception) {
            throw $exception;
        }
    }
}
