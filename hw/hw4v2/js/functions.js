function searchCat() {
    
    if ($("#keyword").val() == "") {
        $("#empty").html("Please enter a food category like seafood or vegan").css("color", "red");
    }else {
        $("#empty").html("Loading...");
        
    
        $.ajax({
                method: "GET",
                url: "api/mealdbProxi.php",
                dataType: "json",
                data: { "keyword": $("#keyword").val() },
                success: function(data, status) {
                    // alert(data);
                    var array = data['meals'];
                    alert(array[0]['strMealThumb']);
                    $("#empty").html("");
                    
                    let htmlString = "";
                    let i = 0;
                    $("#meals").html("");
                    for (let rows=0; rows < 3; rows++) {
                        htmlString += "<div class='row'>";
                        
                        for (let cols=0; cols < 3; cols++) {
                            htmlString += "<div class='name'>"+ array[i++]['strMeal']+"</div>";
                            htmlString += "<img src='"+ array[i++]['strMealThumb']+"' width='300' height='280'>";
                        }//cols for
                        htmlString += "</div>";
                    }//rows for
                    $("#meals").append(htmlString);
                   
                },
                complete: function(data, status) {
                    // alert(status);
                }
        }); //ajax 
        
        
        
    }
}