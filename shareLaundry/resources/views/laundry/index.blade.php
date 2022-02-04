@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>세탁실 미리보기</h1>
            <h2>세탁실 규칙</h2>
            <div>
                <ul>
                    <li>
                         혼자 너무 오래 돌리기 없기~
                    </li>
                    <li>
                         세탁기 내부에 세탁물이 있으면 → 건조기로 옮김
                    </li>
                    <li>
                         Q. 건조기 둘다 사용중이면요?
                        <br/>
                        1. 단톡방에 한번 알려주세요~
                        (알고보면 다들 착한 사람, 한마디만 해서 배려부탁드려요)
                        <br/>
                        1-1.  해당 층 이용자가 아니면, 매니저도 한번 알림할께요 😉
                        <br/>
                        2. 그래도 반응이 없으면? 옆에 세탁바구니로~
                         내 옷처럼 조심히 다루고 예쁘게 넣기
                        <br/>
                         세탁바구니가 더러우면, 건조기옆 수건으로 닦기
                </ul>
                            
                            
                            
            </div>
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