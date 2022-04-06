<?php

namespace App\Http\Controllers;

use App\Models\Budget;
use Illuminate\Http\Request;

class BudgetFormController extends Controller
{
    public function index()
    {
        return view('users.budgetForm');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'month' => 'required',
            'pay-frequency' => 'required',
        ]);

        $request->user()->budgets()->create($request);

        return back();
    }

    public function destroy(Budget $entry)
    {
        $this->authorize('delete', $entry);

        $entry->delete();

        return back();
    }
}
