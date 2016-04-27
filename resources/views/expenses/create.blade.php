@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row">
        <h1>Create New Expense</h1>
        {{ Form::open(['url' => '/expenses', 'role'=>'form']) }}
            @include('expenses.form', ['buttonText' => 'Create'])
        {{ Form::close() }}
    </div>
</div>
@endsection