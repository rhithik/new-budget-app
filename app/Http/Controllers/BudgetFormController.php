<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BudgetFormController extends Controller
{
    public function index()
    {
        return view('users.budgetForm');
    }
}
