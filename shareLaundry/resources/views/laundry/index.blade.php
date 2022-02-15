@extends('layouts.app')

@section('content')
@auth
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 pb-10">
                <h1>세탁실 미리보기</h1>
                <div style="border:1px solid black; margin-bottom:1rem">
                    <h2>세탁실 규칙</h2>
                    <ul>
                        <li>혼자 너무 오래 돌리기 없기~</li>
                        <li>세탁기 내부에 세탁물이 있으면 → 건조기로 옮김</li>
                    </ul>
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
                </div>
                {{-- 세탁실 미리보기 --}}
                <div class="card-group row row-cols-2 row-cols-md-2">
                    @foreach($laundries as $item)
                    <div class="col mb-4">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <div class="h2">
                                    {{ $item['name'] }}
                                </div>
                                @if($item['status'] !== 1)
                                    {{-- 만약에 나라면? 취소 버튼 보여주기 ! --}}
                                    {{-- 시간 완료 되었을 경우, 시간 체크해서 5분후에 완료시키기--}}
                                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal" id="myInput{{ $item['id'] }}" data-index-number={{$item['id'] }}>
                                        사용
                                    </button>
                                @elseif($item->user_id == Auth::user()->id)
                                    <a href="./using/" class="btn btn-danger" id="myInput{{ $item['id'] }}" data-index-number="{{ $item['id'] }}" >
                                        취소
                                    </a ">
                                @endif
                            </div>
                            <div class="card-body">
                                <p>사용여부 : 
                                    @if ($item['status'] == 1)
                                    {{ __('사용중')}}
                                    @else
                                    {{ __('사용가능')}}
                                    @endif
                                </p>
                                <p>사용시간 : 
                                    @if ( $item['status'] == 1)
                                    {{ $item['duration_time'] }}
                                    @else
                                    {{ __(' - ') }}
                                    @endif
                                    </p>
                            </div>
                            <div class="card-footer text-end">
                                <a href="./laundry/{{ $item['id'] }}" class="link"> → </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        @include('using.create')
@endauth
@endsection
    