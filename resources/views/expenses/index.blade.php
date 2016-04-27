@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row">
        <h1>Expenses <a class="btn btn-success pull-right" href="/expenses/create" role="button">Create New</a></h1>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($expenses as $expense)
                    <tr>
                        <td>{{ $expense->name }}</td>
                        <td>{{ $expense->price }}</td>
                        <td>
                            <a class="btn btn-info" href="{{ route('expenses.edit', $expense->id) }}" role="button">View</a>
                            <a class="btn btn-warning" href="/expenses/{{ $expense->id }}/edit" role="button">Edit</a>
                            <form action="/expenses/{{ $expense->id }}" method="POST" style="display: inline;">
                                {{  method_field('DELETE') }} 
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-primary">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection