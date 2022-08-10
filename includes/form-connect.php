<form id="connect-form">
    <input type="email" name="email" id="email" placeholder="Email address" required>
    <input type="text" name="fname" id="fname" placeholder="First Name">
    <input type="text" name="lname" id="lname" placeholder="Last Name">
    <div class="d-flex justify-content-center">
        <button type="submit"><strong>Submit</strong></button>
    </div>
</form>
<script>
(function($){
    $('#connect-form').submit(function(ev) {
        ev.preventDefault();
        let endpoint = "<?php echo admin_url('admin-ajax.php');?>";
        let form = $('#connect-form').serialize();
        let formdata = new FormData;
        formdata.append('action', 'connect');
        formdata.append('connect', form);
        $.ajax(endpoint, {
            type:'POST',
            data:formdata,
            processData:false,
            contentType:false,
            success:function(res) {
                alert(res.data);
            },
            error:function(err) {
                alert(err.data);
            },
        })
    })
})(jQuery);
</script>