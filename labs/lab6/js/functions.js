

$.ajax({

    type: "GET",
    url: "api/getProducts.php",
    dataType: "json",
    success: function(data,status) {
      //alert(data[0].productName);
      data.forEach(function(product){
          $("#products").append("<div class='row'>" + 
                                "<div class='col1'>" + product.productName + "</div>"+
                                "<div class='col2'>"+"$" + product.productPrice + "</div>"+
                                "</div>");
      })
    },
    complete: function(data,status) { //optional, used for debugging purposes
    //alert(status);
    }
                    
});//ajax
                
                
//Gets Category list from database and displays them in the dropdown menu
$.ajax({
    type: "GET",
    url: "api/getCategories.php",
    dataType: "json",
    success: function(data, status) {
        data.forEach(function(key) {
            $("#categories").append("<option value=" + key["catId"] + ">" + key["catName"] + "</option>");
        });
    }
});

$("#searchForm").on("click", function() {
    $.ajax({

        type: "GET",
        url: "api/getSearchResult.php",
        dataType: "json",
        data: { 
            "product": $("[name=product]").val(),
            "category": $("[name=category]").val(),
            "priceFrom": parseInt($("[name=priceFrom]").val()),
            "priceTo": parseInt($("[name=priceTo]").val()),
            "orderBy": $("[name=orderBy]:checked").val()
        },
        success: function(data,status) {
            $("#results").html("<h3> Search Results: <h3>");
            $("#br").html("<br><hr><br>");
            data.forEach(function(key){
                $("#searchResults").append(key['productName'] + " " + key['productDescription'] + " $" + key['productPrice'] + "<br>");
            });//foreach
        
        },
        complete: function(data,status) { //optional, used for debugging purposes
            //alert(status);
        }

    });//ajax
});//searchForm