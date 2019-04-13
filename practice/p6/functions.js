let total = 0;

 $.ajax({
        
        type: "GET",
        url: "api/getRandomProduct.php",
        dataType: 'json',
        success: function(data,status) {
            $("#product").html(data.product);
            $("#unitPrice").html(data.price);
            $("#quantityInput").val(data.qty);
            total = data.price * data.qty;
            $("#total").html("$" + total);
        },
        complete: function(data,status) { //optional, used for debugging purposes
            //alert(status);
        }
        
    });//ajax   

$("#promoCode").on("change", function(){
    $.ajax({
        
        type: "GET",
        url: "api/applyPromoCode.php",
        dataType: 'json',
        data: { 
            "code": $("#promoCode").val(),
        },
        success: function(data,status) {
            // alert(data.valid);
            $("#promoCode").html("");
            if (data.valid) {
                $("#discountPercent").html(data.discount + "%");
                $("#discountPrice").html("$" + total * (data.discount / 100));
                let subtotal = total - (total * (data.discount / 100));
                $("#subtotalTotal").html("$" + subtotal);
                let tax = subtotal / 10;
                $("#taxTotal").html("$" + tax);
                $("#totalTotal").html("$" + (subtotal + tax));
            }else{
                $("#discountPercent").html("0%");
                $("#invalidCode").html("Invalid code").css('color', 'red');
            }
        },
        complete: function(data,status) { //optional, used for debugging purposes
            //alert(status);
        }
        
    });//ajax   
});