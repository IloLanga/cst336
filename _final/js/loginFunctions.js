$("#signIn").on("click",  function() {
    console.log($('#passwordInput').val());
    if ($('#usernameInput').is(':empty') || $("#passwordInput").is(':empty')){
      $("#errorMsg").html("Missing username or password").css("color", "red");
    } else {
        $("#errorMsg").html("");
        call();
    }
})

function call() {
    
    $.ajax({
        type: "POST",
        url: "loginProcess.php",
        dataType: "json",
        data: { "username": $("#usernameInput").val(),
            "password": $("#passwordInput").val()
        },
        success: function(data,status) {
            alert(data);
        
        },
        complete: function(data,status) { //optional, used for debugging purposes
            alert(status);
        }
        
    });//ajax
    
}
        
        
        