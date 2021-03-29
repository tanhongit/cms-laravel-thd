<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateViewRequest;
use App\Http\Requests\UpdateViewRequest;
use App\Repositories\ViewRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;
use Response;

class ViewController extends AppBaseController
{
    /** @var  ViewRepository */
    private $viewRepository;

    public function __construct(ViewRepository $viewRepo)
    {
        $this->viewRepository = $viewRepo;
    }

    /**
     * Display a listing of the View.
     *
     * @param Request $request
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function index(Request $request)
    {
        $views = $this->viewRepository->all();

        return view('views.index')
            ->with('views', $views);
    }

    /**
     * Show the form for creating a new View.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|Response
     */
    public function create()
    {
        return view('views.create');
    }

    /**
     * Store a newly created View in storage.
     *
     * @param CreateViewRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|Response
     */
    public function store(CreateViewRequest $request)
    {
        $input = $request->all();

        $view = $this->viewRepository->create($input);

        Flash::success('View saved successfully.');

        return redirect(route('views.index'));
    }

    /**
     * Display the specified View.
     *
     * @param int $id
     *
     * @return Factory|RedirectResponse|Redirector|View|Response
     */
    public function show($id)
    {
        $view = $this->viewRepository->find($id);

        if (empty($view)) {
            Flash::error('View not found');

            return redirect(route('views.index'));
        }

        return view('views.show')->with('view', $view);
    }

    /**
     * Show the form for editing the specified View.
     *
     * @param int $id
     *
     * @return Factory|RedirectResponse|Redirector|View|Response
     */
    public function edit($id)
    {
        $view = $this->viewRepository->find($id);

        if (empty($view)) {
            Flash::error('View not found');

            return redirect(route('views.index'));
        }

        return view('views.edit')->with('view', $view);
    }

    /**
     * Update the specified View in storage.
     *
     * @param int $id
     * @param UpdateViewRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|Response
     */
    public function update($id, UpdateViewRequest $request)
    {
        $view = $this->viewRepository->find($id);

        if (empty($view)) {
            Flash::error('View not found');

            return redirect(route('views.index'));
        }

        $view = $this->viewRepository->update($request->all(), $id);

        Flash::success('View updated successfully.');

        return redirect(route('views.index'));
    }

    /**
     * Remove the specified View from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|Response
     */
    public function destroy($id)
    {
        $view = $this->viewRepository->find($id);

        if (empty($view)) {
            Flash::error('View not found');

            return redirect(route('views.index'));
        }

        $this->viewRepository->delete($id);

        Flash::success('View deleted successfully.');

        return redirect(route('views.index'));
    }
}
