@extends('header')

@section('content')

    <div style="margin-top: 7.5rem">
        @foreach ($transactions as $item)
            <a href="/transactionDetail/{{ $item->id }}">
                <div class="container bg-dark text-white text-center p-3 my-2 shadow rounded">
                    <span>Your Transaction At : {{ $item->transactionDate }}</span>
                </div>
            </a>
        @endforeach

    </div>

@endsection
