<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\Expense;
use App\Http\Requests;
use App\Http\Requests\ExpenseRequest;

class ExpensesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $expenses = Expense::owner()->get();
        return view('expenses.index', compact('expenses'));
    }

    public function create()
    {
        return view('expenses.create');
    }
    public function store(ExpenseRequest $request)
    {
        $expense = new Expense($request->all());
        Auth::user()->expenses()->save($expense);
        return redirect('/expenses');
    }

    public function show(Expense $expense)
    {
        return view('expenses.show', compact('expense'));
    }

    public function edit(Expense $expense)
    {
        return view('expenses.edit', compact('expense'));
    }

    public function update(Expense $expense, ExpenseRequest $request)
    {
        $expense->update($request->all());
        return redirect('/expenses');
    }

    public function destroy(Expense $expense)
    {
        Expense::destroy($expense->id);
        return redirect('/expenses');
    }

}

