let firstCard = getRandomCard()
let secondCard = getRandomCard()
let cards = [firstCard, secondCard]
let sum = firstCard + secondCard
let hasBlackJack = false
let isAlive = true
let message = ""
let massageE1 = document.getElementById('message-el')
let cardsE1 = document.getElementById('cards-el')
let sumE1 = document.getElementById('sum-el')
let startGameE1 = document.getElementById('startGame')
var moneyEL = document.getElementById('money-el')
player = {
    money: 5000
};


document.querySelector("#takeCard").disabled = true
moneyEL.innerHTML = "Your Money: Rp." + player.money;
function getRandomCard() {
    let randomNumber = Math.floor(Math.random() * 11) + 1
    return randomNumber
}
function renderGame() {
    startGameE1.innerText = 'Want to play again?'
    cardsE1.textContent = 'Your Cards: '
    var bet = document.getElementById('bet').value
    for (let i = 0; i < cards.length; i++) {
        cardsE1.textContent += cards[i] + ' '
    }
    sumE1.textContent = 'Sum: ' + sum

    if (sum < 21) {
        message = 'Want another card?'
    } else if (sum == 21) {
        message = 'Blackjack!'
        player.money = player.money + (bet * 6);
        moneyEL.innerText = "Your Money: Rp." + player.money;
        hasBlackJack = true
    } else {
        message = 'Game over'
        isAlive = false
    }
    massageE1.textContent = message
}
function startGame() {
    var bet = document.getElementById('bet').value
    if (bet > 0 & bet <= player.money) {
        player.money -= bet
        moneyEL.innerText = "Your Money: Rp." + player.money
        renderGame()
    } else if (bet > player.money) {
        alert('Uang Anda tidak cukup')
    } else {
        alert('Masukkan bet')
    }
    document.querySelector("#takeCard").disabled = false
}
function takeCard() {
    if (hasBlackJack === false && isAlive === true) {
        let card = getRandomCard(2)
        cards.push(card)
        sum += card
        renderGame()
    } else {
        document.querySelector("#takeCard").disabled = true
    }
}
function reset() {
    location.reload()
}

