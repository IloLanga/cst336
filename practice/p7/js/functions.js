

$.ajax({

    type: "GET",
    url: "api/getAll.php",
    //dataType: "json",
    data: {},
    success: function(data) {
    //alert(data);
    data.forEach(function(key) {
            $("#products").append("<div class='row'>" + 
                                "<div class='col1'>" + product.productName + "</div>"+
                                "<div class='col2'>"+"$" + product.productPrice + "</div>"+
                                "</div>");
        });
    
    },
    complete: function(data,status) { //optional, used for debugging purposes
    //alert(status);
    
    }

});//ajax