@extends('header')

@section('content')


    <div class="container" style="margin-top:10rem"">
                        <div class=" row">
        <div class="col-md-4">
            <img class="img-thumbnail round" src="{{ asset("asset/$flower->flowerImage") }}" style="height: 20rem;">
        </div>
        <div class="col-md-8">
            <form method="POST" action="/updatedFlowers/{{ $flower->id }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-2">
                        <label for="colFormLabel1" class="my-2">Category Name</label>
                        <label for="colFormLabel1" class="my-2">Flower Name</label>
                        <label for="colFormLabel1" class="my-2">Flower Price</label>
                        <label for="colFormLabel1" class="my-2">Description</label>
                        <label for="colFormLabel2" class="my-2">Flower Image</label>
                    </div>
                    <div class="col-md-10 w-50">
                        <select class="form-control" name="category_form" id="">
                            @foreach ($category as $item)
                                <option value="{{ $item->id }}">{{ $item->categoryName }}</option>
                            @endforeach
                        </select>
                        <input type="text" class="form-control my-2" id="colFormLabel1" name="name"
                            placeholder="flower Name">
                        <input type="text" class="form-control my-2" id="colFormLabel1" name="price"
                            placeholder="flower price">
                        <input type="text" class="form-control my-2" id="colFormLabel1" name="description"
                            placeholder="Description">
                        <input type="file" class="form-control my-" id="colFormLabel1" name="image">
                        <button type="submit" class="btn btn-primary ml-1 my-5">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>


@endsection
