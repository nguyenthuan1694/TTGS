<?php

namespace App\Http\Controllers;

use App\Http\Requests\ParentsNotesStoreRequest;
use App\Http\Requests\ParentsNotesUpdateRequest;
use App\Models\Image;
use App\Models\ParentsNote;
use App\Models\Introduce;

use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use App\Repositories\ParentsNotes\ParentsNotesRepository;
use App\Repositories\Category\CategoryRepository;

class ParentsNoteController extends Controller
{
    /**
     * @var ParentsNotesRepositoryInterface|\App\Repositories\Repository
    */
    protected $parentsNotesRepository;

    /**
     * @var CategoryRepositoryInterface|\App\Repositories\Repository
    */
    protected $categoryRepository;

    public function __construct(
        ParentsNotesRepository $parentsNotesRepository,
        CategoryRepository $categoryRepository
    )
    {
        $this->parentsNotesRepository = $parentsNotesRepository;
        $this->categoryRepository = $categoryRepository;
    }


    /**
     * Display a listing of products.
     *
     * @return View
     */
    public function index()
    {
        $parentsNotes = $this->parentsNotesRepository->getParentsNotesWidthPagination();
        return view('backend.parents_notes.index')->with('parentsNotes', $parentsNotes);
    }

    /**
     * Show the form for creating a new product.
     *
     * @return View
     */
    public function create()
    {
        $categories = $this->categoryRepository->getAll();
        return view('backend.parents_notes.create')
            ->with('categories', $categories)
        ;
    }

    /**
     * Store a new product.
     *
     * @param ParentsNotesStoreRequest $request
     * @return RedirectResponse
     */
    public function store(ParentsNotesStoreRequest $request)
    {
        $this->parentsNotesRepository->create($request->all());
        return redirect()->route('parentsNotes.index')->with('success', 'You have successfully created a new product');
    }

    /**
     * Show the form for editing the parentsNotesStoreRequest.
     *
     * @param ParentsNotes $parents_notes
     * @return View
     */
    public function edit(ParentsNote $parentsNote)
    {
        return view('backend.parents_notes.edit')
            ->with('parentsNote', $parentsNote)
        ;
    }

     /**
     * Update the specified resource in storage.
     *
     * @param ParentsNotesUpdateRequest $request
     * @return RedirectResponse
     */
    public function update(ParentsNotesUpdateRequest $request)
    {
        $this->parentsNotesRepository->update($request->id, $request->all());
        return redirect()->route('parentsNotes.index')->with('success', 'You have successfully updated the category');
    }


    /**
     * Display the parentsNotes.
     *
     * @param ParentsNotes $parentsNotes
     */
    public function show(ParentsNotes $parentsNotes)
    {
        //
    }

    /**
     * Move the parentsNotes to trash.
     *
     * @param ParentsNotes $parentsNotes
     * @return RedirectResponse
     * @throws Exception
     */
    public function destroy(ParentsNotes $parentsNotes)
    {
        $this->parentsNotesRepository->deleteParentsNotes($parentsNotes['id']);
        return redirect()->back()->with('success', 'You have successfully move the news to trashed');
    }

    /**
     * Display a listing of the trashed introduce.
     *
     * @return View
     */
    public function trashed()
    {
        $parentsNotes = $this->parentsNotesRepository->trashedParentsNotes();
        return view('backend.parents_notes.trashed')->with('parentsNotes', $parentsNotes);
    }

    /**
     * Restored a trashed introduce.
     *
     * @param Request $request
     * @param int $id
     * @return RedirectResponse
     */
    public function restore(Request $request, $id)
    {
        $parentsNotes = $this->parentsNotesRepository->restoreParentsNotes($id);
        $parentsNotes->restore();
        return redirect()->back()->with('success', 'You have successfully restored the news');
    }

    /**
     * Force delete a trashed introduce.
     *
     * @param int $id
     * @return RedirectResponse
     */
    public function forceDelete($id)
    {
        $parentsNotes = $this->parentsNotesRepository->onlyTrashedParentsNotes($id);
        $parentsNotes->forceDelete();
        return redirect()->back()->with('success', 'You have successfully deleted the news');
    }
}


