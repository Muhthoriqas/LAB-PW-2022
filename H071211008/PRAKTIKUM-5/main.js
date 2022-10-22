var rst = document.getElementById('reset')
var py = document.getElementById('play')
var yc = document.getElementById('cards')
var sg = document.getElementById('start')
var tc = document.getElementById('take')
var ym = document.getElementById('money')
var ip = document.getElementById('bet')
var sum = document.getElementById('sum')
var info = document.getElementById('info')

var player = { 
    money : 5000,
    start : 'START GAME',
    sm : " ",
    play : 'Play A Round'
}

ym.innerText = player.money;

function reset(){
    ip.value = " "
    sg.innerHTML = player.start
    sum.innerHTML = player.sm
    yc.innerHTML = ""
    py.innerHTML = player.play
    info.innerHTML = " "
    ym.innerHTML = 5000
}


function startGame() { 
    if (Number(ip.value) === "0" || ip.value === ""){
        alert ("Set Your Bet First")
    }else if(ip.value > player.money){ 
        alert("your money is less than your bet")
    }else if (player.money <  0){
        alert("Your money = 0 Please Reset Your Money")
    }else{

        let num1 = randomCard()
        let num2 = randomCard()
        cards.innerHTML = "";

        let cards1 = document.createElement("span");
        let cards2 = document.createElement("span");
        cards1.innerHTML = num1
        cards2.innerHTML = num2
        cards.appendChild(cards1);
        cards.appendChild(cards2);
        sum.innerHTML = num1 + num2
        sg.innerHTML = "Want to Play Again?"
        player.money = player.money - ip.value;
        ym.innerText = player.money

        if (sum.innerHTML == 21){
            //py.innerHTML = 'You Got BlackJack'
            //info.innerHTML = "You Already Get BlackJack"
            sg.innerHTML = player.start
            ip.value = " "
        }else if(Number(sum.innerHTML) < 21){
            py.innerHTML = 'Draw New Card?'
            info.innerHTML = " "
        }else{
            py.innerHTML = 'You Lose!!'
            info.innerHTML = 'Game is Over You Cant Take Your New Card' 
            ip.value = " "
        }
    }
}

function takeCard() {
    if (Number(ip.value) === "0" || ip.value === "" || sg.innerHTML == player.start ){
        alert ("Start The Game First")
    }
    else if (Number(sum.innerHTML) < 21){
        var card_n = document.createElement("span")
        card_n.innerHTML = randomCard()
        cards.appendChild(card_n)
        sum.innerHTML = Number(sum.innerHTML) + Number(card_n.innerHTML)

        if (sum.innerHTML == 21){
            ym.innerHTML = Number(ym.innerHTML) + Number(ip.value * 6)
            py.innerHTML = 'You Got BlackJack'
            info.innerHTML = ("You Already Get BlackJack")
            sg.innerHTML = player.start
            ip.value = " "
        }else if(Number(sum.innerHTML) < 21){
            py.innerHTML = 'Draw New Card?'
            info.innerHTML = " "
        }else{
            py.innerHTML = 'You Lose!!'
            info.innerHTML = 'Game is Over You Cant Take Your New Card'
            ip.value = " "
        }
    } 
}

function randomCard(){
    let random = Math.floor(Math.random ()* 13) + 1;
    if (random === 1){
        return 11
    }else if(random > 10){
        return 10
    }else{
        return random;
    }
}
