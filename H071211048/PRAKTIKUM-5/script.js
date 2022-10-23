let money = 5000
let card = []
var moneyEL = document.getElementById('money');
moneyEL.innerHTML=money
function startGame (){
    var playerBet = document.getElementById('setYourBet').value
    if (!playerBet) {
        alert('set your bet first') 
    } else if (playerBet > money || playerBet < 0) {
        alert('your money less than your bet or your bet < 0')
    }else{
        money = money - playerBet
        document.getElementById('money').innerHTML=money
        card.push(getRndInteger())
        card.push(getRndInteger())
        message.innerHTML = 'Draw a New Card?'
        document.getElementById('card').innerHTML=card
        document.getElementById('sum').innerHTML=sumCard(card)
        document.getElementById('start').innerHTML='Want to Play Again?'
        gameCondition()
    }
}

function takeCard() {
    card.push(getRndInteger())
    document.getElementById('card').innerHTML=card
    document.getElementById('sum').innerHTML=sumCard(card)
    gameCondition()
}
function gameCondition(){
    var playerBet = document.getElementById('setYourBet').value;
    if (sumCard (card) == 21) {
        document.getElementById('take').disabled=true
        message.innerHTML='Congrats!';  
        money += playerBet * 6;
        moneyEL.innerText=money
        card = [];
    } else if (sumCard (card) > 21) {
        document.getElementById('take').disabled=true
        message.innerHTML='You Lose!'
        card = [];
    }else{
        document.getElementById('take').disabled=false;
    }
}
function resetMoney () {
    moneyEL.innerText=5000;
}
function getRndInteger() {
    return Math.floor(Math.random() * 11 ) + 1;
}
function sumCard (card) {
    return(sum = card.reduce((num1, num2)=>num1+num2,0));
}