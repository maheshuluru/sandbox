@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row">
        <h1>Edit Expense</h1>
        {{ Form::model($expense, ['url' => '/expenses/'. $expense->id, 'method'=>'PUT', 'class'=>'form']) }}
            @include('expenses.form', ['buttonText' => 'Update'])
        {{ Form::close() }}
    </div>
</div>
@endsection