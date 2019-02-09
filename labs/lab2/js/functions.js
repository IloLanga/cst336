// JavaScript File

var randomNumber = Math.floor(Math.random() * 99) + 1;
//console.log(randomNumber);
//document.getElementById("numberToGuess").innerHTML = randomNumber;

var guesses = document.querySelector('#guesses');
var lastResult = document.querySelector('#lastResult');
var lowOrHigh = document.querySelector('#lowOrHigh');

var guessSubmit = document.querySelector('.guessSubmit');
var guessField = document.querySelector('.guessField');

var guessCount = 1;
var resetButton = document.querySelector('#reset');
resetButton.style.display = 'none';
guessField.focus();



var winCount = 0;
var lostCount = 0;
document.getElementById("winResult").innerHTML = winCount;
document.getElementById("lostResult").innerHTML = lostCount;

function totalResult() {
    document.getElementById("winResult").innerHTML = winCount;
    document.getElementById("lostResult").innerHTML = lostCount;
}


function checkGuess() {
    var userGuess = Number(guessField.value);
    if (guessCount == 1) {
        guesses.innerHTML = 'Previous guesses ';
    }
    guesses.innerHTML += userGuess + ' ';



    if (userGuess == randomNumber) {
        winCount++;
        lastResult.innerHTML = 'Congratulations! You got it right!';
        lastResult.style.backgroundColor = 'green';
        lowOrHigh.innerHTML = '';
        setGameOver();
    }
    else if (guessCount == 7) {
        lostCount++;
        lastResult.innerHTML = 'Sorry, you lost!';
        setGameOver();
    }
    else {
        lastResult.innerHTML = 'Wrong!';
        lastResult.style.backgroundColor = 'red';
        if (userGuess < randomNumber) {

            if (userGuess < 1) {
                lastResult.style.backgroundColor = 'yellow';
                lowOrHigh.innerHTML = 'Number must be higher than 0';
                guessCount--;
            }
            else {
                lowOrHigh.innerHTML = 'Last guess was too low!';
            }
        }
        else if (userGuess > randomNumber) {
            if (userGuess > 99) {
                lastResult.style.backgroundColor = 'yellow';
                lowOrHigh.innerHTML = 'Number must be lower than 99';
                guessCount--;
            }
            else {
                lowOrHigh.innerHTML = 'Last guess was too high!';
            }
        }
    }
    guessCount++;
    guessField.value = '';
    guessField.focus();
}



guessSubmit.addEventListener('click', checkGuess);



function setGameOver() {
    guessField.disabled = true;
    guessSubmit.disabled = true;
    resetButton.style.display = 'inline';
    resetButton.addEventListener('click', resetGame);
}



function resetGame() {
    guessCount = 1;
    
    var resetParas = document.querySelectorAll('.resultParas p');
    for (var i = 0; i < resetParas.length; i++) {
        resetParas[i].textContent = '';
    }

    resetButton.style.display = 'none';

    guessField.disable = false;
    guessSubmit.disabled = false;
    guessField.value = '';
    guessField.focus();

    lastResult.style.backgroundColor = 'white';

    randomNumber = Math.floor(Math.random() * 99) + 1;
    
    totalResult();
    guessField.disable = false;
    
}
