let q1_value = 10;
let q2_value = 18;
let q3_value = 18;
let q4_value = 18;
let q5_value = 18;
let q6_value = 18;

let totalPoints = 0;

let q1_answer = "Red";
let q2_answer = "nepal";
let q3_answer = "FP";
let q3_response = "";
let q4_answer = "Mozambic";
let q6_answer = "50";


 $(".active").on('click', function(){
        $(".active").css("opacity", "1");
        $(this).css("opacity", "0.5");
        q3_response = $(this).attr("id");
});


$("#submitBtn").on("click", function() {
    
    totalPoints = 0;
    
    //QUESTION 1
    let q1_response = $("input[name=q1]:checked").val();
    if (q1_answer == q1_response) {
        $("#q1_feedback").html("Correct !").css("color", "green");
        totalPoints += q1_value;
    } else {
         $("#q1_feedback").html("False...").css("color", "red");
    }
    
    //QUESTION 2
    let q2_response = $("#q2").val().toLowerCase();
    if (q2_answer == q2_response) {
        $("#q2_feedback").html("Correct !").css("color", "green");
        totalPoints += q2_value;
    } else {
        $("#q2_feedback").html("False...").css("color", "red");
    }
    
    //QUESTION 3
    if (q3_answer == q3_response){
        $("#q3_feedback").html("Correct !").css("color", "green");
        totalPoints += q3_value;
    } else {
        $("#q3_feedback").html("False...").css("color", "red");
    }
    
    //QUESTION 4
    let q4_response = $("input[name=q4]:checked").val();
    if (q4_answer == q4_response) {
        $("#q4_feedback").html("Correct !").css("color", "green");
        totalPoints += q4_value;
    } else {
         $("#q4_feedback").html("False...").css("color", "red");
    }
    
    //QUESTION 5
    if (document.getElementById("Switzerland").checked && document.getElementById("Vatican").checked && !document.getElementById("Colombia").checked && !document.getElementById("France").checked){
        $("#q5_feedback").html("Correct !").css("color", "green");
        totalPoints += q5_value;
    } else {
        $("#q5_feedback").html("False...").css("color", "red");

    }
    
    //QUESTION 6
    let q6_response = $("#q6").val();
    if (q6_answer == q6_response) {
        $("#q6_feedback").html("Correct !").css("color", "green");
        totalPoints += q6_value;
    } else {
        $("#q6_feedback").html("False...").css("color", "red");
    }
    
    //END QUESTION
    $("#totalPoints").html("Score: " + totalPoints + "%");
    
    if (totalPoints == 100) {
        $("#congrats").html("Yeay ! You did it !").css("color", "white");
    }
});