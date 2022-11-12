let player = {
    name: "Your Money",
    chips: 5000,
};

let cards = [];
let sum = 0;
let hasBlackJack = false;
let isAlive = false;
let message = "";
let messageEl = document.getElementById("message-el");
let sumEl = document.getElementById("sum-el");
let cardsEl = document.getElementById("cards-el");
let walletEl = document.getElementById("wallet-el");
let resetEl = document.getElementById("reset-el");

walletEl.textContent = player.name + " : $" + player.chips;

disableButtonTake();

function getRandomCard() {
    let randomNumber = Math.floor(Math.random() * 13) +1;
    if (randomNumber > 10) { 
        return 10;
    } else if (randomNumber === 1) {
        return 11;
    } else {
        return randomNumber;
    }
}
function startGame() {
    if (player.chips == 0) {
        alert("Your Money = 0, Please Reset Your Money!");
    } else if (bet.value > player.chips) {
        alert("Saldo Anda Kurang");
    } else if (bet.value == 0 || bet.value == "") {
        alert("Masukkan Bet Terlebih Dahulu");
    } else {
        enableButtonTake();
        var start = document.getElementById("mulai");
        start.innerText = "WANT TO PLAY AGAIN?";
        player.chips -= bet.value;
        walletEl.innerText = player.name + " : $" + player.chips;
        isAlive = true;
        let firstCard = getRandomCard();
        let secondCard = getRandomCard();
        cards = [firstCard, secondCard];
        sum = firstCard + secondCard;
        renderGame();
    }
}
function renderGame() {
    cardsEl.textContent = "Cards: ";
    for (let i = 0; i < cards.length; i++) {
        cardsEl.textContent += cards[i] + " ";
    }
    sumEl.textContent = "Sum : " + sum;
    if (sum <= 20) {
        message = "Do You Want To Draw A New Card?";
    } else if (sum === 21) {
        message = "You've Got Blackjack!";
        hasBlackJack = true;
        player.chips += bet.value * 2;
        walletEl.innerText = player.name + ": $" + player.chips;
    } else {
        disableButtonTake();
        message = "Game Is Over You Can't Take New Card!";
        isAlive = false;
    }
    messageEl.textContent = message;
}
function newCard() {
    let card = getRandomCard();
    sum += card;
    cards.push(card);
    renderGame();
}
function reset() {
    player.chips = 5000;
    walletEl.textContent = player.name + ": $" + player.chips;
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
