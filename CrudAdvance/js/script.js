$(document).ready(function () {
    // Adding users
    $(document).on("submit","#addform",function(e){
        e.preventDefault();
        // Ajax
        $.ajax({
            url:"/CrudAdvance/partials/ajax.php",
            type:"POST",
            dataType:"json",
            data: new FormData(this),
            processData: false,
            contentType: false,
            beforeSend:function(){
                console.log("Sending data...");
            },
            success:function(response){
                console.log(response);
            },
            error:function(request,error){
                console.log(arguments);
                console.log("Error: " + error);
            }
        })
    })
})