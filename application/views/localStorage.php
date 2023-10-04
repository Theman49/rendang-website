<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    if(localStorage.getItem('id_session') == null){
        localStorage.setItem('id_session', <?=$random?>);
    }
    
    idSession = localStorage.getItem('id_session');
   
    $.post('<?=site_url('localStorage/cekSession')?>', {id_session: idSession}, function(data){
        console.log(data);
        document.location.href = '<?=site_url($target)?>';

    })
</script>