<?php
namespace App\Repositories\ParentsNotes;

interface ParentsNotesRepositoryInterface
{
    public function getParentsNotesWidthPagination();

    public function deleteParentsNotes($id);

    public function trashedParentsNotes();

    public function restoreParentsNotes($id);

    public function onlyTrashedParentsNotes($id);

    public function getParentsNotesByCategoryId($id);
}