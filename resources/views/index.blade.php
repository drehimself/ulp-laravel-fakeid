@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Orders</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @foreach ($orders as $order)
                        <div>
                            <a href="{{ route('order.show', $order) }}">{{ $order->fake_id }} | ${{ $order->price }}</a>
                            {{-- <a href="/orders/{{$order->fake_id}}">{{ $order->fake_id }} | ${{ $order->price }}</a> --}}
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
