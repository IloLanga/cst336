var microfiberAmount = 0;
var sunscreenAmount = 0;
var ipanemaAmount = 0;
var shippingAmount = 0;
var subtotalAmount = 0;
var tax = 0;

$("#microfiberBeachTowel").on("change", function(){
    microfiberAmount = parseInt($("#microfiberBeachTowel").val()) * 30;
    $("#microfiberBeachTowelTotal").html("$" + microfiberAmount);
});

$("#sunscreen").on("change", function(){
    sunscreenAmount = parseInt($("#sunscreen").val()) * 10;
    $("#sunscreenTotal").html("$" + sunscreenAmount);
});

$("#ipanema").on("change", function() {
    ipanemaAmount = parseInt($("#ipanema").val()) * 20;
    $("#ipanemaTotal").html("$" + ipanemaAmount);
});

$("#shippingChoice").on("change", function(){
    if($(this).val() == "regular"){
        shippingAmount = 5;
    }else if($(this).val() == "nextDay"){
        shippingAmount = 15
    }else if($(this).val() == "threeDay"){
        shippingAmount = 10;
    }
    $("#shipping").html("$" + shippingAmount);
});

$(".updateTotal").on("change", function() {
    subtotalAmount = microfiberAmount + sunscreenAmount + ipanemaAmount + shippingAmount;
    $("#subtotal").html("$" + subtotalAmount);
    
    tax = subtotalAmount * 0.1;
    $("#tax").html("$" + tax);
    
    $("#total").html("$" + (subtotalAmount + tax));
});

$("#confirmBtn").on("click", function() {
    let noError = true;
    $("#shippingSpan").html("");
    $("#acceptSpan").css("color", "black");
    
    if (!$("#accept").is(":checked")){
        $("#acceptSpan").css("color", "red");
        noError = false;
    }
    
    if($("#shippingChoice").val() == ""){
        $("#shippingSpan").html("A shipping option must be selected").css("color", "red");
        noError = false;
    }
    
    if(noError){
        $("#noError").html("THANK YOU FOR YOUR PURCHASE!");
    }
} );