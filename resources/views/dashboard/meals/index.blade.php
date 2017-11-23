@extends('layouts.app')
@section('title', 'All Meals')
@section('page-actions')
    <a href="{{ route('meals.create') }}" class="btn btn-default"><i class="fa fa-plus"></i> Add New Meal</a>
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if($meals->count())
                                @foreach($meals as $meal)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $meal->name }}</td>
                                    <td>{{ $meal->description }}</td>
                                    <td width="100px">
                                        <a href="{{ route('meals.edit', compact('meal')) }}" class="btn btn-sm
                                        btn-default">
                                            <i class="fa fa-edit"></i> edit
                                        </a>
                                        <a href="{{ route('meals.destroy', compact('meal')) }}" class="hide btn btn-sm
                                        btn-danger">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                                @else
                                    <tr class="text-center">
                                        <td colspan="6">No meal is added yet</td>
                                    </tr>
                                @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
