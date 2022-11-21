@extends('header')

@section('content')
    <table class="table table-striped" style="margin-top: 7.5rem">
        <thead>
            <tr>
                <th scope="col">Flower Image</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
            </tr>
        </thead>
        <tbody>
            <?php $total = 0 ?>
            @foreach ($transaction as $transaction)
            <?php $total += $transaction->subTotal ?>
                <tr>
                    <?php $image = $transaction->flower->flowerImage; ?>
                    <th class="w-25" scope="row"><img class="img img-fluid" src="{{ asset("asset/$image") }}" alt=""></th>
                    <td class="w-25">{{ $transaction->flower->flowerName }}</td>
                    <td class="w-25">Rp. {{ $transaction->subTotal }}</td>
                    <td class="w-25">{{ $transaction->quantity }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <strong>Your Total: Rp. {{ $total }}</strong>

@endsection
