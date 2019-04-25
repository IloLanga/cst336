//https://api.thecatapi.com/v1/images/search

$.ajax({

    method: "GET",
    url: "api/goodreadsProxy.php",
    dataType: "json",
    data: {"keyword": },
    success: function(data,status) {
    alert(data);
    
    },
    complete: function(data,status) { //optional, used for debugging purposes
    alert(status);
    }

});//ajax