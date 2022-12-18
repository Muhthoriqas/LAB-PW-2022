var money = 5000;
var moneyInDOM = document.querySelector("#money");
var card = document.getElementById("card");
var max = 11;
var min = 1;
let exc = [];     
var sum = 0;

moneyInDOM.innerHTML = "Your money: Rp. " + money
var bet = document.getElementById("bet").value;

document.querySelector("#takecard").disabled = true;

function startGame() 
{
    document.getElementById("stat").innerHTML = "";
    exc = [];
    document.querySelector("#takecard").disabled = false;
    moneyInDOM.innerHTML = "Your money: Rp. " + money;
    bet = document.getElementById("bet").value;

    if (money <= 0) {
        alert("Your money = " + money + " Please Reset your money");
        document.querySelector("#takecard").disabled = true;
        document.querySelector("#startgame").disabled = true;
    }else if(bet > money){
        alert("Your bet bigger than your money");
        document.querySelector("#takecard").disabled = true;
        document.querySelector("#startgame").disabled = true;
    } else {
        document.querySelector("#takecard").disabled = false;
        document.getElementById("status").innerHTML = "";
        if (!bet) {
            alert("Set your bet first");
        } else {
            money -= bet;
            moneyInDOM.innerHTML = "Your money: Rp. " + money;
            var tmp1 = generateRandom();
            exc.push(tmp1);
            sum += tmp1;
            var tmp2 = generateRandom();
            exc.push(tmp2);
            sum += tmp2;
            card.innerHTML = tmp1 + " " + tmp2;
            document.getElementById("sum").innerHTML = "Sum: " + sum;
        }
    }
}

function takeCard()
{
    document.getElementById("sum").innerHTML = "Sum: " + sum;
    if (sum > 21) {
        document.getElementById("status").innerHTML = "Game is Over You Can't take new card";
        document.getElementById("stat").innerHTML = `<img src="https://pics.me.me/you-thought-that-it-wasadio-meme-but-you-lost-the-39854439.png">`;
        document.getElementById("takecard").disabled = true;
        sum = 0;
        exc = [];
    } else if (sum === 21) {
        document.getElementById("status").innerHTML = "You Already Got BlackJack";
        money = money + (bet * 6);
        moneyInDOM.innerHTML = "Your money: Rp. " + money;
        document.querySelector("#takecard").disabled = true;
        sum = 0;
        exc = [];
    } else {
        var tmp3 = generateRandom();
        sum += tmp3;
        exc.push(tmp3);
        card.innerHTML = card.innerHTML + " " + tmp3;
        document.getElementById("sum").innerHTML = "Sum: " + sum;

        if (sum > 21) {
            document.getElementById("status").innerHTML = "Game is Over You Can't take new card";
            sum = 0;
            document.querySelector("#takecard").disabled = true;
            document.getElementById("stat").innerHTML = `<img src="https://pics.me.me/you-thought-that-it-wasadio-meme-but-you-lost-the-39854439.png">`;
        } else if (sum === 21) {
            document.getElementById("status").innerHTML = "You Already Got BlackJack";
            money += (bet * 6);
            moneyInDOM.innerHTML = "Your money: Rp. " + money;
            document.querySelector("#takecard").disabled = true;
            sum = 0;
            exc = [];
        }
    }
}


function resetGame()
{
    money = 5000;
    document.getElementById("money").innerHTML = "Your money: Rp. " + money;
    sum = 0;
    exc = [];
    document.getElementById("card").innerHTML = "";
    document.getElementById("sum").innerHTML = "Sum: ";
    document.getElementById("bet").value = "";
}

function generateRandom() {
    var num = Math.floor(Math.random() * (max - min + 1)) + min;
    return (exc.includes(num)) ? generateRandom(min, max) : num;
}