const valuesBJ = {
  'suits': ['H', 'D', 'C', 'S'],
  'ranks': ['2', '3', '4', '5', '6', '7', '8', '9', 'T', 'J', 'Q', 'K', 'A'],
  'values': {'2': 2,'3': 3,'4': 4,'5': 5,'6': 6,'7': 7,'8': 8,'9': 9,'T': 10,'J': 10,'Q': 10,'K': 10,'A': [1, 11]}
};

var debitChips = 5000;
var plySum = 0;
var dealSum = 0;
var bet = 0;
var x, doubleChips;
document.querySelector('#hitbutton').disabled = true;
document.querySelector('#standbutton').disabled = true;

// document.querySelector('#hitBtn button').addEventListener('click', hit);

function start() {
  deal()
}

function hit() {
  x = ranCardGen();
  let plyDiv = document.querySelector('#plyCards');
  let plyCardImg = document.createElement('img');
  plyCardImg.src = 'cards/' + x + '.png';
  plyDiv.appendChild(plyCardImg);
  if (x[0] === 'A') {
    if (plySum + 11 <= 21) {
      plySum += 11;
    } else {
      plySum += 1;
    }
  } else {
    plySum += valuesBJ['values'][x[0]];
  }
  document.querySelector('#plyHandResult').innerHTML = plySum;
  if (plySum > 21) {
    let plyBust = document.createElement('h1');
    plyBust.innerHTML = 'Player Bust';
    plyBust.id = 'plybust';
    document.querySelector('#bust').appendChild(plyBust);
    document.querySelector('#hitbutton').disabled = true;
    document.querySelector('#standbutton').disabled = true;
    document.querySelector('#dealbutton').disabled = true;
    setTimeout(refresh, 5000);
  }
}

document.querySelector('#dealBtn button').addEventListener('click', deal);

function deal() {
  bet = parseInt(document.getElementById("inputbet").value)
  if(bet > debitChips ||  bet <= 0){
    document.querySelector('#noChipMsg').innerHTML = "Uangmu tidak sebanyak dosamu"
  }else{
    document.querySelector('#noChipMsg').innerHTML ="";
    debitChips = (debitChips - bet);
    document.querySelector('#chipCountResult').innerHTML = "$" + debitChips;
    x = ranCardGen();
    let dealBtnDiv = document.querySelector('#plyCards');
    let dealBtnCardImg = document.createElement('img');
    dealBtnCardImg.src = 'cards/' + x + '.png';
    dealBtnDiv.appendChild(dealBtnCardImg);
    if (x[0] === 'A') {
      if (plySum + 11 <= 21) {
        plySum += 11;
      } else {
        plySum += 1;
      }
    } else {
      plySum += valuesBJ['values'][x[0]];
    }
    document.querySelector('#plyHandResult').innerHTML = plySum;
    document.querySelector('#dealbutton').disabled = true;
    document.querySelector('#hitbutton').disabled = false;
    document.querySelector('#standbutton').disabled = false;
  }
}
document.querySelector('#standBtn button').addEventListener('click', stand);

function stand() {
  document.querySelector('#dealbutton').disabled = true;
  document.querySelector('#hitbutton').disabled = true;
  document.querySelector('#standbutton').disabled = true;
  if (plySum <= 21) {
    while (dealSum <= 17 && dealSum <= plySum) {
      x = ranCardGen();
      let dealDiv = document.querySelector('#dealerCards');
      let dealCardImg = document.createElement('img');
      dealCardImg.src = 'cards/' + x + '.png';
      dealDiv.appendChild(dealCardImg);
      if (x[0] === 'A') {
        if (dealSum + 11 <= 21) {
          dealSum += 11;
        } else {
          dealSum += 1;
        }
      } else {
        dealSum += valuesBJ['values'][x[0]];
      }
      document.querySelector('#dealHandResult').innerHTML = dealSum;
    }
  }
  if (dealSum > 21) {
    let dealBust = document.createElement('h1');
    dealBust.innerHTML = 'Dealer Bust';
    dealBust.id = 'dealbust';
    document.querySelector('#bust').appendChild(dealBust);
    setTimeout(refresh, 5000);
  } else if (dealSum > plySum) {
    let dealWin = document.createElement('h1');
    dealWin.innerHTML = 'Dealer Win!';
    dealWin.id = 'dealwin';
    document.querySelector('#bust').appendChild(dealWin);
    setTimeout(refresh, 5000);
  } else if (dealSum < plySum) {
    let plyWin = document.createElement('h1');
    plyWin.innerHTML = 'You Win!';
    plyWin.id = 'plywin';
    document.querySelector('#bust').appendChild(plyWin);
    setTimeout(refresh, 5000);
  } else if (dealSum === plySum) {
    let draw = document.createElement('h1');
    draw.innerHTML = 'Its a Tie!';
    draw.id = 'drawID';
    document.querySelector('#bust').appendChild(draw);
    setTimeout(refresh, 5000);
  }
}

// function refresh() {
//   location.reload()
// }
function refresh() {
  if (dealSum > 21) {
    document.querySelector('#dealbust').remove();
    removeImg();
    doubleChips = (bet * 2) + debitChips;
    document.querySelector('#chipCountResult').innerHTML = "$" + doubleChips;
    debitChips = doubleChips;
    document.querySelector('#dealbutton').disabled = false;
  } else if (dealSum > plySum) {
    document.querySelector('#dealwin').remove();
    removeImg();
    document.querySelector('#dealbutton').disabled = false;
  } else if (plySum > 21) {
    document.querySelector('#plybust').remove();
    removeImg();
    document.querySelector('#dealbutton').disabled = false;
  } else if (dealSum < plySum) {
    document.querySelector('#plywin').remove();
    removeImg();
    doubleChips = (bet * 2) + debitChips;
    document.querySelector('#chipCountResult').innerHTML = "$" + doubleChips;
    debitChips = doubleChips;
    document.querySelector('#dealbutton').disabled = false;
  } else if (dealSum === plySum) {
    document.querySelector('#drawID').remove();
    removeImg();
    doubleChips = bet + debitChips;
    document.querySelector('#chipCountResult').innerHTML = "$" + doubleChips;
    debitChips = doubleChips;
    document.querySelector('#dealbutton').disabled = false;
  }
  if (debitChips <= 0) {
    document.querySelector('#noChipMsg').innerHTML = "<== Duit mu habis sob || Reload page dulu ||" 
    document.querySelector('#dealbutton').disabled = true;
  }
  bet = 0;
  plySum = 0;
  dealSum = 0;
  document.querySelector('#plyHandResult').innerHTML = plySum;
  document.querySelector('#dealHandResult').innerHTML = dealSum;
}

function removeImg() {
  let u = document.querySelectorAll('.Cards img');
  for (let q = 0; q < u.length; q++) {
    u[q].remove();
  }
}

function ranCardGen() {
  let deck = [];
  for (let i = 0; i < valuesBJ['suits'].length; i++) {
    for (let j = 0; j < valuesBJ['ranks'].length; j++) {
      deck.push(valuesBJ['ranks'][j] + valuesBJ['suits'][i]);
    }
  }
  return deck[Math.floor(Math.random() * 52)];
}
