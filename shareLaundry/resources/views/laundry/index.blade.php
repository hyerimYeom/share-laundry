@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <p>index page</p>
            <h1>세탁실 미리보기</h1>
            @foreach($laundries as $laundry)
            <div class="card">
                <div class="card-header">{{ $laundry['machine_name'] }}</div>
                <div class="card-body">
                    <p>사용여부 : </p>
                    <p>사용시간 : </p>
                    <a href="./{{ $laundry['id'] }}"></a><p>자세히 </p>
                    {{-- <h2>{{ $laundry[''] }}</h2> --}}
                    {{-- <h1>{{ $laundry->}}</h1> --}}
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection