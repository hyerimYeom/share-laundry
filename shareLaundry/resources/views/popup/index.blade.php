
<script>
    let msg = `{{ $guest['msg'] }}`;
    let url = `{{ $guest['url'] }}`;
    
    let returnValue = confirm(msg);
    window.location.href = url;
</script>
