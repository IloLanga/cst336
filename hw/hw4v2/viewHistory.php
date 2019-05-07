<!DOCTYPE html>
<html>
    <head>
        <title> View History </title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link href="css/styles.css" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
        <style>
            h1 {
                border-radius: 4px;
                background-color: #e7e7e7; color: black;
                font : Pacifico;
            }
            #keywords {
            
                padding: 14px 40px;
            }
        </style>
        
        <script>
        /*global*/
        
            
            $(document).ready(function(){
            
                $.ajax({
                    method: "GET",
                       url: "api/historyAPI.php",
                  dataType: "json",
                      data: {
                             "action": "keyword",
                            },
                    success: function(data, status) {
                        // alert(data[0].keyword);
                        
                        data.forEach(function(i){
                            
                            // $("#keywords").append("<a onclick='displayFavorites(this)' href='#'>" + i.keyword+ "</a> "); // avoid onclick as ;uch as possible
                            $("#keywords").append("<li  class='history'>" + i.keyword+ "</li> ");
                            
                        });
                    },
                    complete: function(data, status) { //optional, used for debugging purposes
                    //   alert(status);
                    }
                  });//ajax
            
            });//documentReady
            
        </script>
        
    </head>
    <body>

            <h1> History </h1>
            <br>
            Here are the words that you searched :
            
            <div id="keywords"></div>
            
        <footer>
            <hr>
            Internet Programming. 2019 &copy; Poilliot <br />
            <strong>Disclaimer:</strong> The information in this webpage is fictious. <br />
            It is used for academic purpose only <br />
        </footer>

    </body>
</html>