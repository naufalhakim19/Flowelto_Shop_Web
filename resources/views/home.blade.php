@extends('header')

@section('content')

<H1 class="text-center mt-5">Welcome to Flowelto Shop</H1>
<h3 class="text-center">The Best Flower Shop in Binus University</h3>

<div class="container">
    <div class="row">
        @foreach ($category as $item)
            <div class="col-md-6">
                <div class="card" style="min-height: 30rem;">
                    <a href="/ViewFlowers/{{$item->id}}"><img src="{{ asset('asset/' . $item->categoryImage) }}" class="card-img-top"
                            style="height: 40rem;"></a>
                    <div class="card-body rounded" style="background-color: #CBF3F9">
                        <h5 class="card-title text-center">{{ $item->categoryName }}</h5>
                        <div class="text-center">
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection
