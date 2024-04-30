<?php

namespace App\Http\Controllers\Admin;

use App\Enums\RoleTypes;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Http\Resources\UserResource;
use App\Mail\User\PasswordMail;
use App\Models\User;
use App\Services\Admin\UserService;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\View\View;

class UserController extends Controller
{

    /**
     * @param  UserService  $service
     */
    public function __construct(protected UserService $service)
    {
    }

    public function index()
    {
//        $this->authorize('viewAny', User::class);

        return view('admin.users.index',
            ['users' => UserResource::collection(User::all())]
        );
    }

    /**
     * @return View
     */
    public function create(): View
    {
        $roles = RoleTypes::arrayRoles();

        return view('admin.users.create', ['roles' => $roles]);
    }

    /**
     * @param  UserRequest  $request
     * @return RedirectResponse
     */
    public function store(UserRequest $request): RedirectResponse
    {
//        $this->authorize('create', User::class);

        $data = $request->validated();

        $password = Str::random(8);
        $email =$data['email'];

        $data['password'] = Hash::make($password);
        $user = User::firstOrcreate(['email' => $email], $data);
        Mail::to($email)->send(new PasswordMail($password));

        event(new Registered($user));

        return redirect()->route('users.index');
    }

    /**
     * @param  User  $user
     * @return View
     */
    public function show(User $user): View
    {
//        $this->authorize('view', $user);

        return view('admin.users.show', ['user' => new UserResource($user)]);
    }

    /**
     * @param  User  $user
     * @return View
     */
    public function edit(User $user): View
    {
        //        $this->authorize('view', $user);

        return view('admin.users.edit', [
            'user' => new UserResource($user),
            'roles' => RoleTypes::arrayRoles(),
        ]);
    }

    /**
     * @param  UserRequest  $request
     * @param  User  $user
     * @return RedirectResponse
     */
    public function update(UserRequest $request, User $user): RedirectResponse
    {
//        $this->authorize('update', $user);

        $user->update($request->validated());

        return redirect()->route('users.show', ['user' => $user]);
    }

    /**
     * @param  User  $user
     * @return RedirectResponse
     */
    public function destroy(User $user): RedirectResponse
    {
//        $this->authorize('delete', $user);

        $user->delete();

        return redirect()->route('users.index');
    }
}
