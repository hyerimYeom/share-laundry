@extends('layouts.app')



@section('content')
<div class="container">
@if($err)
    {{ $err }}
@else
    {{ $name }}
@endif
</div>


@endsection