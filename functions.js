function submitt(){
    event.preventDefault();
    $.ajax({
        url: "../controller/userController.php",
        type: "POST",
        dataType: "json",
        data: $(insertForm).serialize(),
        success: function(result){
            console.log(result);
            if(result.msg == ''){
                $('#msg').text('');
                $('#errName').text(result.errName);
                $('#errEmail').text(result.errEmail);
                $('#errMessage').text(result.errMessage);
            }else{
                $('#msg').text(result.msg);
                $('#errName').text('');
                $('#errEmail').text('');
                $('#errMessage').text('');
                location.reload();
            }
        },
        error: function(error){
            console.log(error);
        }
    });
}



$(document).ready(function() {
    $('.sort-btn').click(function() {
        var sortValue = $(this).val();

        $.ajax({
            url: '../controller/messageController.php', 
            type: 'POST',
            data: { sort: sortValue },
            success: function(data) {
                
            }
        });
    });
});

