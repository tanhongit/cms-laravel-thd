<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCourseUserRequest;
use App\Http\Requests\UpdateCourseUserRequest;
use App\Repositories\CourseUserRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;
use Response;

class CourseUserController extends AppBaseController
{
    /** @var  CourseUserRepository */
    private $courseUserRepository;

    public function __construct(CourseUserRepository $courseUserRepo)
    {
        $this->courseUserRepository = $courseUserRepo;
    }

    /**
     * Display a listing of the CourseUser.
     *
     * @param Request $request
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function index(Request $request)
    {
        $courseUsers = $this->courseUserRepository->all();

        return view('course_users.index')
            ->with('courseUsers', $courseUsers);
    }

    /**
     * Show the form for creating a new CourseUser.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|Response
     */
    public function create()
    {
        return view('course_users.create');
    }

    /**
     * Store a newly created CourseUser in storage.
     *
     * @param CreateCourseUserRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|Response
     */
    public function store(CreateCourseUserRequest $request)
    {
        $input = $request->all();

        $courseUser = $this->courseUserRepository->create($input);

        Flash::success('Course User saved successfully.');

        return redirect(route('courseUsers.index'));
    }

    /**
     * Display the specified CourseUser.
     *
     * @param int $id
     *
     * @return Factory|RedirectResponse|Redirector|View|Response
     */
    public function show($id)
    {
        $courseUser = $this->courseUserRepository->find($id);

        if (empty($courseUser)) {
            Flash::error('Course User not found');

            return redirect(route('courseUsers.index'));
        }

        return view('course_users.show')->with('courseUser', $courseUser);
    }

    /**
     * Show the form for editing the specified CourseUser.
     *
     * @param int $id
     *
     * @return Factory|RedirectResponse|Redirector|View|Response
     */
    public function edit($id)
    {
        $courseUser = $this->courseUserRepository->find($id);

        if (empty($courseUser)) {
            Flash::error('Course User not found');

            return redirect(route('courseUsers.index'));
        }

        return view('course_users.edit')->with('courseUser', $courseUser);
    }

    /**
     * Update the specified CourseUser in storage.
     *
     * @param int $id
     * @param UpdateCourseUserRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|Response
     */
    public function update($id, UpdateCourseUserRequest $request)
    {
        $courseUser = $this->courseUserRepository->find($id);

        if (empty($courseUser)) {
            Flash::error('Course User not found');

            return redirect(route('courseUsers.index'));
        }

        $courseUser = $this->courseUserRepository->update($request->all(), $id);

        Flash::success('Course User updated successfully.');

        return redirect(route('courseUsers.index'));
    }

    /**
     * Remove the specified CourseUser from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|Response
     */
    public function destroy($id)
    {
        $courseUser = $this->courseUserRepository->find($id);

        if (empty($courseUser)) {
            Flash::error('Course User not found');

            return redirect(route('courseUsers.index'));
        }

        $this->courseUserRepository->delete($id);

        Flash::success('Course User deleted successfully.');

        return redirect(route('courseUsers.index'));
    }
}
