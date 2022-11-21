@extends('header')

@section('content')

<H1 class="text-center mt-5">Manage categories</H1>

<div class="container">
    <div class="row">
        @foreach ($category as $item)
            <div class="col-md-6">
                <div class="card" style="min-height: 30rem;">
                    <img src="{{ asset('asset/' . $item->categoryImage) }}" class="card-img-top"
                            style="height: 40rem;">
                    <div class="card-body rounded" style="background-color: #CBF3F9">
                        <h5 class="card-title text-center">{{ $item->categoryName }}</h5>
                        <div class="text-center">
                            <a href="/updateCategories/{{$item->id}}" type="button" class="btn btn-warning">Update</a>
                            <a href="/deletedCategories/{{$item->id}}" type="button" class="btn btn-danger">Delete</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection
