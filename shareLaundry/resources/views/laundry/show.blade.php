@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <p>show page</p>
            <h1>{{ $laundry['machine_name'] }}</h1>
            <h3>사용여부 : </h3>
            <h3>남은시간 : </h3>
        </div>
    </div>
</div>
@endsection