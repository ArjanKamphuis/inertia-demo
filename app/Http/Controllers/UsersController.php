<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\RedirectResponse;
use Inertia\Inertia;
use Inertia\Response;

class UsersController extends Controller
{
    public function index(): Response
    {
        return Inertia::render('Users/Index', [
            'users' => User::query()
                ->when(request('search'), function(Builder $query, string $search) {
                    $query->where('name', 'like', "%{$search}%");
                })
                ->orderBy('name')
                ->paginate(10)
                ->withQueryString()
                ->through(fn(User $user) => [
                    'id' => $user->id,
                    'name' => $user->name,
                    'can' => [
                        'edit' => auth()->user()->can('edit', $user)
                    ]
                ]),
            'filters' => request()->only(['search']),
            'can' => [
                'createUser' => auth()->user()->can('create', User::class)
            ]
        ]);
    }

    public function create(): Response
    {
        return Inertia::render('Users/Create');
    }

    public function store(): RedirectResponse
    {
        User::create(request()->validate([
            'name' => ['required'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required']
        ]));
        return redirect('/users');
    }
}
