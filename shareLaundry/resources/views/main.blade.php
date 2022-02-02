@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <p>역삼스테이 여성전용 2호점 쉐어하우스</p>
            <p>소개글</p>
            
            <div>
                <div>
                    <h2>
                        역삼스테이에서 다양한 사람들과 더불어 생활해요.
                    </h2>
                    안녕하세요 역삼스테이입니다.
                    <br>
                    강남스테이에는 현재 직장인, 학생, 외국인까지 다양한 친구들이 함께 지내고 있습니다.
                    <br>
                    외롭고 쓸쓸한 혼자가 아닌 더불어 함께 사는 삶을 누려 보세요.
                </div>
                <hr/>
                <div>
                    <h3>역삼 스테이가 제공하는 가치</h3>
                    <ul>
                        <li>
                            ■ 넓은 공간의 쉐어하우스에서 항상 쾌적하게 생활하실 수 있습니다.
                        </li>
                        <li>
                            ■ 주방용품 외에 세탁기, 건조기, 에어컨, 공기청정기, 스팀다리미 등이 완비되어 생활하기 편리합니다.
                        </li>
                        <li>
                            ■ 샴푸, 린스, 바디워시, 화장지, 세탁 액상세제, 섬유유연제, 핸드타올 등 공용물품을 제공해 드립니다.
                        </li>
                        <li>
                            ■ 전기세, 수도세, 가스비 및 난방, 냉방, 인터넷 등이 관리비에 모두 포함되어 있습니다.
                        </li>
                        <li>
                            ■ 넓은 창고가 따로 있으므로, 개인별 수납장을 제공하여 넉넉한 수납 공간을 사용할 수 있습니다.
                        </li>
                    </ul>
                </div>
                <br/>
                <div>
                    <h3>역삼 스테이의 위치</h3>
                    <div>
                    강남역 도보 7분거리 [ 서울특별시 강남구 역삼동 793-9번지 / 역삼동 750-13번지]
                    <br>
                    오픈 세일 기간 중이라 20 %할인된 가격(선착순2명 남음)에 계약 하실 수 있습니다.
                    <br>
                    홈페이지 https://www.yeoksamstay.com/
                    </div>


                </div>
            </div>


            {{-- <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div> --}}
        </div>
    </div>
</div>
@endsection
