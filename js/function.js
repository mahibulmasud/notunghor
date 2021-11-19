


// ------------query ajax
// auto refresh Div Content
$(document).ready(function(){ 
    $("#update").click(function(){
        var image = $("#image").val();
        if ($.trim(image) != '') {
            $.ajax({
                url:"check/checkrefresh.php",
                method:"POST",
                data:{eimage:image},
                dataType:"file",
                success:function(data){
                    // $('#userstatus').html(data);
                }
            });
            return false;
        }
    });
});  