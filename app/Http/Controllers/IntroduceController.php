<?php

namespace App\Http\Controllers;

use App\Http\Requests\IntroduceStoreRequest;
use App\Http\Requests\IntroduceUpdateRequest;
use App\Models\Image;
use App\Models\Introduce;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use App\Repositories\Introduce\IntroduceRepository;

class IntroduceController extends Controller
{
    /**
     * @var IntroduceRepositoryInterface|\App\Repositories\Repository
    */
    protected $introduceRepository;

    public function __construct(IntroduceRepository $introduceRepository)
    {
        $this->introduceRepository = $introduceRepository;
    }


    /**
     * Display a listing of products.
     *
     * @return View
     */
    public function index()
    {
        $introduces = $this->introduceRepository->getIntroduceWidthPagination();
        return view('backend.introduce.index')->with('introduces', $introduces);
    }

     /**
     * Show the form for creating a new product.
     *
     * @return View
     */
    public function create()
    {
        return view('backend.introduces.create');
    }

    /**
     * Store a new product.
     *
     * @param IntroduceStoreRequest $request
     * @return RedirectResponse
     */
    public function store(IntroduceStoreRequest $request)
    {
        $this->introduceRepository->create($request->all());
        return redirect()->route('introduce.index')->with('success', 'You have successfully created a new product');
    }

    /**
     * Show the form for editing the introduce.
     *
     * @param Introduce $introduce
     * @return View
     */
    public function edit(Introduce $introduce)
    {
        return view('backend.introduce.edit')
            ->with('introduce', $introduce);
    }

     /**
     * Update the specified resource in storage.
     *
     * @param IntroduceUpdateRequest $request
     * @return RedirectResponse
     */
    public function update(IntroduceUpdateRequest $request)
    {
        $this->introduceRepository->update($request->id, $request->all());
        return redirect()->route('introduces.index')->with('success', 'You have successfully updated the category');
    }


    /**
     * Display the introduce.
     *
     * @param Introduce $introduce
     */
    public function show(Introduce $introduce)
    {
        //
    }

    /**
     * Move the introduce to trash.
     *
     * @param Introduce $introduce
     * @return RedirectResponse
     * @throws Exception
     */
    public function destroy(Introduce $introduce)
    {
        $this->introduceRepository->deleteIntroduce($introduce['id']);
        return redirect()->back()->with('success', 'You have successfully move the news to trashed');
    }

    /**
     * Display a listing of the trashed introduce.
     *
     * @return View
     */
    public function trashed()
    {
        $introduce = $this->introduceRepository->trashedIntroduce();
        return view('backend.introduce.trashed')->with('introduce', $introduce);
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
        $introduce = $this->introduceRepository->restoreIntroduce($id);
        $introduce->restore();
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
        $introduce = $this->introduceRepository->onlyTrashedIntroduce($id);
        $introduce->forceDelete();
        return redirect()->back()->with('success', 'You have successfully deleted the news');
    }
}


