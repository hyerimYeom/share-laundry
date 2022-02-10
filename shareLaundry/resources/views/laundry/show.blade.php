@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @foreach($laundry as $item)  
                <h1>{{ $item['machine_name'] }}</h1>
                @if ($item['status'] == 1)
                    {{__('사용중 : '). $item['duration_time'] . ('분 남았습니다.')}}    
                @else
                    {{__('사용가능')}}    
                <p>시간 입력 :</p>
                <input type="text" class="form-control-sm">
                {{-- 최소/최대시간 입력 가능하도록 --}}
            
                {{-- 사용하기 --}}
                <button class="btn-sm btn-primary">사용하기</button>
                @endif
            @endforeach
            <div>
                <a href="/laundry">목록으로</a>
            </div>
        </div> 
    </div>
    
</div>
@endsection