<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Expense;
use App\Http\Requests;
use App\Http\Requests\ExpenseRequest;

class ExpensesController extends Controller
{
    public function index()
    {
        $expenses = Expense::all();
        return view('expenses.index', compact('expenses'));
    }

    public function create()
    {
        return view('expenses.create');
    }
    public function store(ExpenseRequest $request)
    {
        Expense::create($request->all());
        return redirect('/expenses');
    }

    public function show(Expense $expenses)
    {
        return view('expenses.show', ['expense' => $expenses]);
    }

    public function edit(Expense $expenses)
    {
        return view('expenses.edit', ['expense' => $expenses]);
    }

    public function update($id, ExpenseRequest $request)
    {
        $expense = Expense::findOrFail($id);
        $expense->update($request->all());
        return redirect('/expenses');
    }

    public function destroy($id)
    {
        Expense::destroy($id);
        return redirect('/expenses');
    }

}

