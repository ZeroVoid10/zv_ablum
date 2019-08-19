$(document).ready(function() {
    $('#uc').submit(function(e) {
        e.preventDefault();

        $.ajax({
            type: 'POST',
            url: 'upload.php',
            data: $(this).serialize(),
            success: function(res) {
                links = JSON.parse(res);
                $('#md-link').html(links[0]);
                $('#link').html(links[1]);
            }
        });
    });
});