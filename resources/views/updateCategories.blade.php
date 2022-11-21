@extends('header')

@section('content')

    <div class="container" style="margin-top:10rem"">
            <div class=" row">
        <div class="col-md-4">
            <img class="img-thumbnail round" src="{{ asset("asset/$category->categoryImage") }}" style="height: 20rem;">
        </div>
        <div class="col-md-8">
            <form method="POST" action="/updatedCategories/{{$category->id}}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-4">
                        <label for="colFormLabel1" class="my-2">Category Name</label>
                        <label for="colFormLabel2" class="my-4">Category Image</label>
                    </div>
                    <div class="col-md-8 w-50">
                        <input type="text" class="form-control my-2" id="colFormLabel1" name="name" placeholder="Category Name">
                        <input type="file" class="form-control my-2" id="colFormLabel1" name="image">
                        <button type="submit" class="btn btn-primary ml-1 my-5">Update</button>
                    </div>
                    
                </div>
            </form>
        </div>
    </div>
    </div>



@endsection
