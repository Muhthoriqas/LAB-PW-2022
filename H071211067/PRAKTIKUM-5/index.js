let player = {
    name: "Your Money",
    chips: 1000000,
};

let cards = [];
let sum = 0;
let hasBlackJack = false;
let isAlive = false;
let message = "";
let messageEl = document.getElementById("message-el");
let sumEl = document.getElementById("sum-el");
let cardsEl = document.getElementById("cards-el");
let playerEl = document.getElementById("player-el");
let resetEl = document.getElementById("reset-el");

playerEl.textContent = player.name + ": Rp" + player.chips;

function getRandomCard() {
    let randomNumber = Math.floor(Math.random() * 13) + 1;
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
        alert("Your Money < bet, Please Reset Your Money Or Change Bet!");
    } else if (bet.value == 0 || bet.value == "") {
        alert("Set Your Bet Before Start");
    } else {
        var mulaimain = document.getElementById("mulai");
        mulaimain.innerText = "WANT TO PLAY AGAIN?";
        player.chips -= bet.value;
        playerEl.innerText = player.name + ": Rp" + player.chips;
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

    sumEl.textContent = "Sum: " + sum;
    if (sum <= 20) {
        message = "Do You Want To Draw A New Card?";
    } else if (sum === 21) {
        message = "You've Got Blackjack!";
        hasBlackJack = true;
        player.chips += bet.value * 6;
        playerEl.innerText = player.name + ": Rp" + player.chips;
    } else {
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
    player.chips = 10000000;
    playerEl.textContent = player.name + ": Rp" + player.chips;
}
