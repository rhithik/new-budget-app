<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class BudgetController extends Controller
{
    public function index(User $user)
    {
        return view('users.budgets', [
            'user' => $user,
        ]);
    }
}
