@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>세탁실 미리보기</h1>
            <div class="card-group">
                @foreach($dryers as $dryer)
                <div class="card">
                    <div class="card-header h2">
                        {{ $dryer['machine_name'] }}
                    </div>
                    <div class="card-body">
                        <p>사용여부 : 
                            @if ( $dryer['status'] == 1)
                            {{__('사용중')}}
                            @else
                            {{ __('사용 가능') }}
                            @endif
                        </p>
                        <p>사용시간 : 
                            @if ( $dryer['status'] == 1)
                            {{ $dryer['duration_time'] }}
                            @else
                            {{ __(' - ') }}
                            @endif
                            </p>
                    </div>
                    <div class="card-footer text-end">
                        <a href="./dryer/{{ $dryer['id'] }}" class="link">  → </a>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="card-group">
                @foreach($washers as $washer)
                <div class="card">
                    <div class="card-header h2">
                        {{ $washer['machine_name'] }}
                    </div>
                    <div class="card-body">
                        <p>사용여부 : 
                            @if ( $washer['status'] == 1)
                            {{__('사용중')}}
                            @else
                            {{ __('사용 가능') }}
                            @endif
                        </p>
                        <p>사용시간 : 
                            @if ( $washer['status'] == 1)
                            {{ $washer['duration_time'] }}
                            @else
                            {{ __(' - ') }}
                            @endif
                            </p>
                    </div>
                    <div class="card-footer text-end">
                        <a href="./laundry/{{ $washer['id'] }}" class="link">  → </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection