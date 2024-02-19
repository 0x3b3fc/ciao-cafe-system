<?php

namespace Domain\Settings\Services;

use Domain\Settings\Models\Category;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class CategoryService
{
    private Model|Builder $categoryModel;

    public function __construct()
    {
        $this->categoryModel = new Category();
    }

    public function index(): Collection
    {
        try {
            return $this->categoryModel->get();
        } catch (\Throwable $exception) {
            throw $exception;
        }
    }

    public function create(Request $request): ?Model
    {
        try {
            $data = $request->validated();
            $data['name'] = $request->input('name');
            $data['is_active'] = $request->input('is_active');
            return $this->categoryModel->create($data);
        } catch (\Throwable $exception) {
            throw $exception;
        }
    }
}
