<?php
namespace App\Repositories\ParentsNotes;

use App\Repositories\BaseRepository;
use App\Models\ParentsNote;

class ParentsNotesRepository extends BaseRepository implements ParentsNotesRepositoryInterface
{
    //lấy model tương ứng
    public function getModel()
    {
        return ParentsNote::class;
    }

    public function getParentsNotesWidthPagination()
    {
        return $this->model->paginate(config('common.pagination.backend'));
    }

    // Delete ParentsNotes where $id
    public function deleteParentsNotes($id)
    {
        return  $this->model->where('id',$id)->first()->delete();
    }

     // Trashed ParentsNotes
    public function trashedParentsNotes()
    {
        return  $this->model->onlyTrashed()->paginate(config('common.pagination.backend'));
    }

     // Restore ParentsNotes where $id
    public function restoreParentsNotes($id)
    {
        return  $this->model->onlyTrashed()->where('id', $id)->first();
    }

     // OnlyTrashed ParentsNotes where $id
    public function onlyTrashedParentsNotes($id)
    {
        return  $this->model->onlyTrashed()->where('id', $id)->first();
    }

    public function getParentsNotesByCategoryId($id)
    {
        return $this->model->where('categories_id', $id)->first();
    }
}