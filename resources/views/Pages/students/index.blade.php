@extends('layouts.app')


@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="page-title"> Students Page </h1>
</div>

<div class="col-lg-12">

    <form action="{{ route('student.store') }}" method="post" >
        @csrf
        <div class="row">
            <div class="col-lg-8">
                <div class="form-group">
                    <input class="form-control form-control-lg" type="text" placeholder="Enter user name" >
                </div>
            </div>
            <div class="col-lg-4">
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </div>
    </form>

</div>
</div>
</div>
@endsection
