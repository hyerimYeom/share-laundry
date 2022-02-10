{{-- 모달 --}}
<div class="modal align-item-center" tabindex="-1" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="machine_name"> </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                <input type="hidden" name="status" value="1">
                <input type="hidden" name="laundry_id" value="">
                <div class="input-group mb-3">
                    <span class="input-group-text">사용시간</span>
                    <input type="text" class="form-control" aria-label="시간을 입력해주세요" name="duration_time" value="">
                    <span class="input-group-text">분</span>
                </div>
            {{-- <a href="./using/" class="btn btn-success">사용하기</a> --}}
            </div>
            <div class="modal-footer d-flex justify-content-between">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">취소</button>
                <button type="button" class="btn btn-primary">사용하기</button>
            </div>
        </div>  
    </div>
</div>
{{-- 모달끝 --}}

<script>
    
    var myModal = document.getElementById('myModal');
    // var machine ={{ json_encode($laundries) }};
    var machines =<?= $laundries ?>;
    //여기서 초기화
    let laundry_id = 0;
    let machine_name = '';
    
    //누를때마다 확인하는건 추후 다른 방법 조사 후 수정
    document.addEventListener('click', function(e){
        if(e.target.id.includes('myInput')){
            laundry_id = e.target.dataset.indexNumber;
            document.getElementsByName('laundry_id')[0].value =laundry_id;
        }         
        
        machines.forEach(machine => {
            if(machine.id == laundry_id){
                machine_name = machine.name;
                document.getElementById('machine_name').innerHTML = machine_name;
            }
        });
    })
</script>