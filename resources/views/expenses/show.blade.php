@extends('layouts.master')

@section('content')
<h1>Expense Detail</h1>

<div class="panel panel-default">
    <div class="panel-heading">
        {{ $expense->name }}
    </div>
    <div class="panel-body">
        {{ $expense->price }}
    </div>
</div>
@endsection