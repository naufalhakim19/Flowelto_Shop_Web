@extends('header')

@section('content')
    <div class="container" style="margin-top: 7rem">
        <div class="row">
            @foreach ($flowers as $item)
                <div class="col-md-3">
                    <div class="card" style="min-height: 10rem">
                        <img src="{{ asset('asset/' . $item->flowerImage) }}" class="img img-fluid" style="height: 15rem">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->flowerName }}</h5>
                            <p class="card-text">Rp. {{ $item->flowerPrice }}</p>
                        </div>
                        <div class="card-footer btn-group">
                            <a href="/ViewFlowersDetail/{{ $item->id }}" class="btn btn-primary">View</a>
                            @guest
                            @else
                                @if (auth()->user()->role == 'Manager')
                                    <a href="/updateFlowers/{{ $item->id }}" class="btn btn-warning">Update</a>
                                    <a href="/deletedflower/{{ $item->id }}" class="btn btn-danger">Delete</a>
                                @endif
                            @endguest
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="my-3">
            {{ $flowers->links() }}
        </div>
    </div>

@endsection
