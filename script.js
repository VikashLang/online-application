$(document).ready(function () {
    $('#applicationForm').on('submit', function (event) {
        event.preventDefault(); 

        $.ajax({
            url: 'process.php', 
            type: 'POST',
            data: $(this).serialize(),
            success: function (response) {
                $('#result').html(response);
            },
            error: function () {
                $('#result').html('<p style="color: red;">An error occurred. Please try again.</p>');
            },
        });
    });
});
