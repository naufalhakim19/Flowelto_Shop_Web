@extends('header')

@section('content')

    <h1 class="text-center mt-5" style="margin-top:10rem">Carts</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Flower Image</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($carts as $cart)
                <tr>
                    <?php $image = $cart->flower->flowerImage; ?>
                    <th class="w-25" scope="row"><img class="img img-fluid" src="{{ asset("asset/$image") }}" alt=""></th>
                    <td class="w-25">{{ $cart->flower->flowerName }}</td>
                    <td class="w-25">Rp. {{ $cart->flower->flowerPrice * $cart->quantity }}</td>
                    <td class="w-25">
                        <form class="form-row" method="POST" action="/updatequantity/{{ $cart->id }}">
                            @csrf
                            <label class="col-form-label mx-1" for="">Quantity : </label>
                            <input type="number" value="{{ $cart->quantity }}" name="quantity"
                                class="form-control mx-1 w-25">
                            <button type="submit" class="btn btn-primary mx-1x">Update Cart</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <form action="/checkout" method="POST" class="text-center">
        @csrf
        <button class="btn btn-danger">Checkout</button>
    </form>

@endsection
