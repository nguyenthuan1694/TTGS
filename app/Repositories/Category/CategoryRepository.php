<?php
namespace App\Repositories\Category;

use App\Repositories\BaseRepository;
use App\Models\Category;

class CategoryRepository extends BaseRepository implements CategoryRepositoryInterface
{
    //lấy model tương ứng
    public function getModel()
    {
        return Category::class;
    }

    public function getCategoryBySlug($slug)
    {
        $category =  $this->model->with('parent')->where('slug', '=', $slug)->first();
        $products = $category->products()->paginate(config('common.pagination.frontend'));
        return [$category, $products];
    }

    public function getCategory()
    {
        return $this->model->root()->get();
    }

    public function getCategoryBychidren()
    {
        // return $this->model->children
    }
}