{{-- 모달 --}}
<div class="modal align-item-center" tabindex="-1" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">세탁기 이름 </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>세탁기 이름 : {{ $laundry }}</p>
                <input type="text" class="hidden" name="user_id">
                <input type="text" class="hidden" name="status" value="1">
                <input type="text" class="hidden" name="laundry_id" value="{{ laundries->id }}">
                <p>사용시간</p>
                <input type="text" name="duration_time" >
                <p></p>
                <button>사용하기</button>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
{{-- 모달끝 --}}
</div>
<script>
    var myModal = document.getElementById('myModal')
    var myInput = document.getElementById('myInput')

    myModal.addEventListener('shown.bs.modal', function () {
        myInput.focus()
    })
</script>