@extends('header')

@section('content')

@guest

<div class="container" style="margin-top: 7rem">

    <div class="row">
        <div class="col-md-5">
            <img src="{{ asset('asset/' . $flowersDetail->flowerImage) }}" class="rounded img img-fluid">
        </div>
        <div class="col-md-5">
            <h1 class="ml-5">{{ $flowersDetail->flowerName }}</h1>
            <h3 class="ml-5 " style="color: lightcoral">Rp. {{ $flowersDetail->flowerPrice }}</h3>
            <p class="ml-5 text-justify">{{ $flowersDetail->description }}</p>
            <form action="" class="ml-5 form-inline">
                <input class="form-control w-25" type="number" name="" id="">
                <button type="button" class="btn btn-primary ml-2">Add To Cart</button>
            </form>
        </div>
    </div>
</div>

@else

@if(auth()->User()->role == 'User')
<div class="container" style="margin-top: 7rem">

    <div class="row">
        <div class="col-md-5">
            <img src="{{ asset('asset/' . $flowersDetail->flowerImage) }}" class="rounded img img-fluid">
        </div>
        <div class="col-md-5">
            <h1 class="ml-5">{{ $flowersDetail->flowerName }}</h1>
            <h3 class="ml-5 " style="color: lightcoral">Rp. {{ $flowersDetail->flowerPrice }}</h3>
            <p class="ml-5 text-justify">{{ $flowersDetail->description }}</p>
            <form method="POST" action="/addtocarts/{{$flowersDetail->id}}" class="ml-5 form-inline">
                @csrf
                <input class="form-control w-25" type="number" name="quantity" id="">
                <button type="submit" class="btn btn-primary ml-2">Add To Cart</button>
            </form>
        </div>
    </div>
</div>
@endif

@if (auth()->User()->role == 'Manager')
<div class="container" style="margin-top: 7rem">

    <div class="row">
        <div class="col-md-5">
            <img src="{{ asset('asset/' . $flowersDetail->flowerImage) }}" class="rounded img img-fluid">
        </div>
        <div class="col-md-5">
            <h1 class="ml-5">{{ $flowersDetail->flowerName }}</h1>
            <h3 class="ml-5 " style="color: lightcoral">Rp. {{ $flowersDetail->flowerPrice }}</h3>
            <p class="ml-5 text-justify">{{ $flowersDetail->description }}</p>
        </div>
    </div>
</div>
@endif


@endguest


@endsection
