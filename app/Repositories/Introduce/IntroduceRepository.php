<?php
namespace App\Repositories\Introduce;

use App\Repositories\BaseRepository;
use App\Models\Introduce;

class IntroduceRepository extends BaseRepository implements IntroduceRepositoryInterface
{
    public function getModel()
    {
        return Introduce::class;
    }

    public function getIntroduceWidthPagination()
    {
        return $this->model->paginate(config('common.pagination.backend'));
    }

    // Delete Introduce where $id
    public function deleteIntroduce($id)
    {
        return  $this->model->where('id',$id)->first()->delete();
    }

     // Trashed Introduce
     public function trashedIntroduce()
     {
         return  $this->model->onlyTrashed()->paginate(config('common.pagination.backend'));
     }
 
      // Restore Introduce where $id
     public function restoreIntroduce($id)
     {
         return  $this->model->onlyTrashed()->where('id', $id)->first();
     }
 
      // OnlyTrashed Introduce where $id
     public function onlyTrashedIntroduce($id)
     {
         return  $this->model->onlyTrashed()->where('id', $id)->first();
     }
}