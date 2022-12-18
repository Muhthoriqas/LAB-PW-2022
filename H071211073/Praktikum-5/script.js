// pemain punya 5000
let moneyAmount = 5000
let money = document.getElementById('money')
money.innerHTML = 'Your Money : ' + moneyAmount

// taruhan <= uang & satu kartu bernilai 1-11
// start -> diberi 2 kartu acak
let firstCard = generateRandomNum(11)
let secondCard = generateRandomNum(11)
let sumTotal = firstCard + secondCard
let card = document.getElementById('cards')
let sum = document.getElementById('sum')

let sBtn = document.getElementById('startBtn')
let dBtn = document.getElementById('drawBtn')

let bet = document.getElementById('bet')

let deck = [firstCard, secondCard]

let messageChange = ''
let message = document.getElementById('subTitle')

isAlive = true
var notStart = true;
hasBlackjack = false


// alert “Set your bet first” ketika startgame tanpa bet 
sBtn.addEventListener("click", function() {
    if(bet.value == 0) {
        alert('Set your bet first')
    } else if(bet.value > moneyAmount) {
        alert('your money is less than your bet')
    } else {
        // start -> startBtn "want to play again?"
        notStart = false;
        renderGame()
        sBtn.innerHTML = 'wanna play again?'
    }
})

function renderGame() {
    card.textContent = 'Your Cards: '
    for (let i = 0; i < deck.length; i++) {
        card.textContent += ' ' + deck[i]         
    }

    // start -> uang terpotong dari taruhan
    moneyAmount -= bet.value

    sum.innerHTML = 'Sum: ' + sumTotal     
    if (sumTotal < 21) {
        messageChange = 'draw another card?'

    } else if (sumTotal === 21) {
        // Jumlah Kartu = 21, maka pemain menang
        messageChange = 'Blackjack!'
        hasBlackjack = true

        dBtn.disabled = true;

        // Jumlah Kartu = 21, uang bertambah 5x lipat dari taruhan
        moneyAmount += (5*(bet.value))
        // money.innerHTML = 'Your Money : ' + moneyAmount
        // ? nda mau tertambah
    } else {
        // lebih dari 21, maka pemain kalah & uang tak kembali
        messageChange = 'Game Over'
        isAlive = false
        
        dBtn.disabled = true;
    }
    message.textContent = messageChange
    money.innerHTML = 'Your Money : ' + moneyAmount

    // start -> bet input reset
    bet.value = ' '
}

// draw -> jumlah nilai kartunya < 21
function drawCard() {
    if(notStart == true){
        alert("Start Game First")
    }else if(bet.value > moneyAmount) {
        alert('your money is less than your bet')
    }else{
        var addCard = generateRandomNum(11)
        deck.push(addCard)
        sumTotal += addCard
        sum.innerHTML = 'Sum: ' + sumTotal 
    
        renderGame()
    }

}


// uang habis , maka permainan berakhir (game over) & MUST RESET
document.getElementById("reset").onclick = function() {
    location.reload();
}

// using Math.random() yg keluar floating point so made this with ranged integers :]
function generateRandomNum(max) {
    return Math.floor(Math.random() * max) + 1;
}

