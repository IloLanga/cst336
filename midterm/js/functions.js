let questionId;
let answer;
let feedback;
let points = 0;//localStorage.getItem("points");

document.getElementById("newQuestion").style.display = "none";
document.getElementById("checkAnswer").style.display = "none";
init();

function init() {
    $.ajax({
    
        type: "GET",
        url: "api/getQuestion.php",
        dataType: "json",
        //data: { "": },
        success: function(data,status) {
            //alert(data);
            // $("#checkAnswer").disable = false;
            
            $("#question").html("<h2>" + data.questionText + "</h2>");
            
            $("#answers").append("<option value='" + data.choice1 + "'>" + data.choice1 + "</option>");
            $("#answers").append("<option value='" + data.choice2 + "'>" + data.choice2 + "</option>");
            $("#answers").append("<option value='" + data.choice3 + "'>" + data.choice3 + "</option>");
            $("#answers").append("<option value='" + data.choice4 + "'>" + data.choice4 + "</option>");
            
            $("#img").html(' <img src="img/' + data.questionImage + '"  width=300px/>');
            
            answer = data.answer;
            questionId = data.questionId;
            feedback = data.feedback;
        
        },
        complete: function(data,status) { //optional, used for debugging purposes
            //alert(status);
        }
    
    });//ajax
}

$("#answers").on("change", function() {
    if ($("#answers").val() != "select") {
        document.getElementById("checkAnswer").style.display = "inline";
    }
});


$("#checkAnswer").on("click", function() {
    document.getElementById("newQuestion").style.display = "inline";
    document.getElementById("checkAnswer").style.display = "none";
    if ($("#answers").val() == "select") {
        $("#feedback").html("You must select an answer").css("color", "red");
    } else if ($("#answers").val() == answer) {
            
        $("#feedback").html(feedback).css("color", "green");
        points += 20;
    } else {
        $("#feedback").html($("#answers").val() + " : incorrect answer").css("color", "red");
        points -= 5;
    }
    $("#total").html("Total : " + points);
    
});

$("#hint").on("click", function() {
    document.getElementById("hint").style.display = "none";
    $.ajax({

        type: "GET",
        url: "api/getHint.php",
        dataType: "json",
       data: { 
           "questId":  questionId
       },
        success: function(data,status) {
        //alert(key['hint']);
        data.forEach(function(key){
                $("#feedback").html(key['hint']).css("color", 'black');
            });//foreach
        
        },
        complete: function(data,status) { //optional, used for debugging purposes
        //alert(status);
        }

    });//ajax
    
});

$("#newQuestion").on("click", function() {
    document.getElementById("checkAnswer").style.display = "inline";
    document.getElementById("hint").style.display = "inline";
    document.getElementById("newQuestion").style.display = "none";
    init();
    //  $.ajax({
    
    //     type: "GET",
    //     url: "api/getQuestion.php",
    //     dataType: "json",
    //     //data: { "": },
    //     success: function(data,status) {
    //         //alert(data);
    //         // $("#checkAnswer").disable = false;
            
    //         $("#question").html("<h2>" + data.questionText + "</h2>");
            
    //         $("#answers").append("<option value=" + data.choice1 + ">" + data.choice1 + "</option>");
    //         $("#answers").append("<option value=" + data.choice2 + ">" + data.choice2 + "</option>");
    //         $("#answers").append("<option value=" + data.choice3 + ">" + data.choice3 + "</option>");
    //         $("#answers").append("<option value=" + data.choice4 + ">" + data.choice4 + "</option>");
            
    //         $("#img").html(' <img src="img/' + data.questionImage + '" width=300px/>');
            
    //         answer = data.answer;
    //         questionId = data.questionId;
    //         feedback = data.feedback;
        
    //     },
    //     complete: function(data,status) { //optional, used for debugging purposes
    //         //alert(status);
    //     }
    
    // });//ajax
});
