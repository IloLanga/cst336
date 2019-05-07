alert("ALLERRRRR");

function searchCat() {
    
    var keyword = $("#keyword").val();
    
    if (keyword == "") {
        $("#empty").html("Please enter a food category like seafood or chicken").css("color", "red");
    }else {
        $("#empty").html("Loading...").css("color", "black");
        addKey(keyword);
    
        $.ajax({
                method: "GET",
                url: "api/mealdbProxi.php",
                dataType: "json",
                data: { "keyword": keyword },
                success: function(data, status) {
                        var array = data['meals'];
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

function addKey(keyword) {
    // alert(keyword);
    $.ajax({
            method: "GET",
            url: "api/historyAPI.php",
            dataType: "json",
            data: { "keyword": keyword,
            "action": "add"},
            success: function(data, status) {
                alert(data);
                    
                    
                
               
            },
            complete: function(data, status) {
                // alert(status);
            }
    }); //ajax 
    
    
}