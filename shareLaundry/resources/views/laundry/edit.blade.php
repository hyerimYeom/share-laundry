@extends('layouts.app');

@section('content')
<div class="container">
<h1>세탁실 기계 추가</h1>
    <div class="flex justify-content-center">
        <form action="/laundry/{{ $car->id }}" method="post">
            @csrf
            @method('PUT')
            <input 
                type="text"
                class="blocked"
                name="name"
                value="{{ $laundry->name }}"
                placeholder="리스트에 보여질 이름..."
            >
            <input 
                type="text"
                class="blocked"
                name="brand"
                value="{{ $laundry->brand }}"
                placeholder="브랜드"
            >
            <input 
                type="text"
                class="blocked"
                name="buy_when"
                value="{{ $laundry->buy_when }}"
                placeholder="구입한 년도"
            >
            <input 
                type="text"
                class="blocked"
                name="sort"
                value="{{ $laundry->sort }}"               
                placeholder="w-세탁기, d-건조기"
            >
            <button type="submit">저장</button>
        </form>
    </div>
</div>
@endsection
