@extends('layouts.main')

@section('content')
    <main>
        <div class="wrapper">
            
            <div class="prev">
                <a href="{{ route('prodotto', ['id' => $prev]) }}">
                    <i class="fas fa-chevron-left"></i> 
                </a>
                
            </div>
           
            <div class="next">
                <a href="{{ route('prodotto', ['id' => $next]) }}">
                    <i class="fas fa-chevron-right"></i>
                </a>
            </div>
           
            <div class="container">
                <h1>{{ $product['titolo'] }}</h1>
                <img src="{{ $product['src-h'] }}" alt="{{ $product['titolo'] }}">
                <img src="{{ $product['src-p'] }}" alt="{{ $product['titolo'] }}">
                <p>{!! $product['descrizione'] !!}</p>
            </div>
        </div>
    </main>

@endsection