var screen = document.querySelector('#screen');
var btn = document.querySelectorAll('.btn');

for (item of btn) {
    item.addEventListener('click', (e) => {
        btntext = e.target.innerText;
        if (btntext == 'AC') {
            screen.value = '';
        } else if (btntext == '=') {
            try {
                screen.value = eval(screen.value);
            } catch (error) {
                screen.value = 'Error';
            }
        } else {
            screen.value += btntext;
        }
    })
}



function sin() {
    // screen.value = Math.sin(screen.value);
    screen.value = Math.sin(screen.value*(Math.PI/180));
}

function cos() {
    screen.value = Math.cos(screen.value);
}

function tan() {
    screen.value = Math.tan(screen.value);
}

function pow() {
    screen.value = Math.pow(screen.value, 2);
}

function sqrt() {
    screen.value = Math.sqrt(screen.value);
}

function log() {
    screen.value = Math.log(screen.value);
}

function pi() {
    screen.value = Math.PI;
}

function e() {
    screen.value = Math.E;
}

function fact() {
    var num = parseFloat(screen.value);
    if (!isNaN(num)) {
        var f = 1;
        for (var i = 1; i <= num; i++) {
            f = f * i;
        }
        screen.value = f;
    } else {
        screen.value = 'Error';
    }
}

function backspc() {
    screen.value = screen.value.substr(0, screen.value.length - 1);
}

