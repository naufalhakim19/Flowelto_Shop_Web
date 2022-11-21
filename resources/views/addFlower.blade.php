@extends('header')

@section('content')

    <h1 class="text-center py-5">Add New Flower</h1>


    <form class="container w-20" method="POST" action="/adding" enctype="multipart/form-data">
        @csrf
        <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label ">Category Name</label>
            <div class="col-sm-10">
                <select class="form-control w-25" name="category" id="">
                    @foreach ($category as $item)
                        <option value={{$item->id}}>{{ $item->categoryName }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label">Flower Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control w-50" name="flower_name">
            </div>
        </div>
        <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label">Flower Price (Rupiah)</label>
            <div class="col-sm-10">
                <input type="number" class="form-control w-50" name="price">
            </div>
        </div>
        <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label">Description</label>
            <div class="col-sm-10">
                <input type="text" class="form-control w-50" name="desc" placeholder="Description">
            </div>
        </div>
        <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label">Flower Image</label>
            <div class="col-sm-10">
                <input type="file" name="image">
            </div>
        </div>
        <div class="form-group row my-5">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">add</button>
            </div>
        </div>
    </form>

@endsection
