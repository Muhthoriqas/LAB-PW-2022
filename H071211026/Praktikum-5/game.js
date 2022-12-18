var uang = 5000;
var money = document.getElementById("money");
let cardsteks = document.getElementById("your-cards");
let sum = document.getElementById("sum");
var cards = [];
let msg = document.getElementById("kondisi");
let mgsg = document.getElementById("pesan");
var bet = document.getElementById("bet");
disableButtonTake();

function start() {
    cards =[]
    document.getElementById("sum").innerHTML = "";

    if (bet.value > 0) {
        if (bet.value <= uang) {
            
            cards.push(randomCard());
            cards.push(randomCard());
           document.getElementById("sum").innerHTML = sumCard(cards);

            uang -= bet.value;
            money.innerHTML = uang;
            disableButtonStart();
            enableButtonTake();
            cek();

        } 
        else {
            alert("Your Money is Less Than Your Bet")
        }
        cardsteks.innerText = cards;
        sum.innerHTML = sumCard(cards);
    } 
    else {
        alert("Set Your Bet Before You Start!")
    }
}

function take() {
    cards.push(randomCard());
    cardsteks.innerText = cards;
    document.getElementById("sum").innerHTML = sumCard(cards);
    var bet = document.getElementById("bet");
    console.log(sumCard(cards))
    cek();
}

function cek(){
    if (sumCard(cards) == 21 ){       
        msg.innerHTML = "You Win the Game!"
        uang += bet.value * 6
        money.innerHTML = uang;
        mgsg.innerHTML = "You Got Blackjack!"
        disableButtonTake();
        enableButtonStart();
    } 
    else if (sumCard(cards) > 21 ) {
        msg.innerHTML = "You Lose!"
        mgsg.innerHTML = "Game is Over You Can't Take New Card"
        disableButtonTake();
        enableButtonStart();
    } 
}

function randomCard() {
    return Math.floor(Math.random() * 11) + 1;
}

function sumCard(cards) {
    return(sum = cards.reduce((partialsum, a) => partialsum+a, 0))
}

function reset() {
    location.reload();
}

function disableButtonStart() {
    document.getElementById("start").disabled = true;
}

function disableButtonTake() {
    document.getElementById("take").disabled = true;
}

function enableButtonStart(){
    document.getElementById("start").disabled = false;
}

function enableButtonTake(){
    document.getElementById("take").disabled = false;
}