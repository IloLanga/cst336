   
        //Joseph Barker
        
       
        
        init(); //call at start
        
        let products = [];
        let product = "";
        let price = "";
        let quantity1 = 1;
        let quantity2;
        
        
        
        
        function init(){
         $.ajax({
                        type: "GET",
                        url: "api/getProducts.php",
                        dataType: "json",
                        success: function(data,status) {
                           $("#productName").html(data.productName)
                           $("#productPrice").html(data.productPrice)
                           $("#totTow").html(data.productPrice * quantity1);
                           
                           
                          
                    },
                        complete: function(data,status) { //optional, used for debugging purposes
                        //alert(status);
                        }
                    });//ajax
                    
                    
                $.ajax({
                    type: "GET",
                    url: "api/getAllProducts.php",
                    dataType: "json",
                    success: function(data, status) {
                        data.forEach(function(key) {
                            $("#productList").append("<option value=" + ">" + key["productName"] + "</option>");
                        });
                    }
                }); 
                
                
                
        } //end init function
                    
 
        
        
        
        function CheckPromo(){
            $.ajax({
                        type: "GET",
                        url: "api/promoAPI.php",
                        dataType: "json",
                          data: { "promoKey": $("#promoInput").val()},
                        success: function(data,status) {
                       // alert(data.product);
                         alert(data);
                        
                        },
                        complete: function(data,status) { //optional, used for debugging purposes
                        //alert(status);
                        }
                        
            });//ajax
                    
        } //end checkPromo function
                    
 
        
        
        $("#promoInput").on("change", function(){
            CheckPromo();   
        });
        
        $("#quantityInp1").on("change", function(){
            let price = parseFloat($("#productPrice").text()); 
            let quantity = $("#qty").val();
            let productTotal = price*quantity;
            //let total = price*quantity;
            $("#productTotal").html("$" + productTotal);
        })
                    
                    
                    
                    
        