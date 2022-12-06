var knappEl  = document.getElementById("knapp")
var upgrade1 = document.getElementById("oppgrader1")
var upgrade2 = document.getElementById("oppgrader2")
var upgrade3 = document.getElementById("oppgrader3")
var demoEl   = document.getElementById("utskrift")
var errorEl  = document.getElementById("error")
var antallpoengperklikk = 1
var antallklikk = 0


knappEl .addEventListener("click", klikkefunksjon);
upgrade1.addEventListener("click", addverdi);
upgrade2.addEventListener("click", addverdi)
upgrade3.addEventListener("click", addverdi)

function klikkefunksjon(e){
    antallklikk += antallpoengperklikk;
    demoEl.innerHTML = "du har klikket " + antallklikk + " ganger.";
    //document.forms.saveScore.score.value = antallklikk;
    errorEl.innerHTML = ""
    setClock();
    document.forms.saveScore.score.value = antallklikk;
}

//setInterval(setClock, 10)

const hourHand   = document.querySelector('[data-hour-hand]')
const minuteHand = document.querySelector('[data-minute-hand]')
const secondHand = document.querySelector('[data-second-hand]')

function setClock() {
    const currentDate  = new Date() 
    const secondsRatio = antallklikk / 60
    const minutesRatio = (secondsRatio) / 60
    const hoursRatio   = (minutesRatio) / 12
    setRotation(secondHand, secondsRatio)
    setRotation(minuteHand, minutesRatio)
    setRotation(hourHand  , hoursRatio)
}
function addverdi(e){

    string = e.target.innerHTML
    
    numbers = string.split(" ")

    pris = Number(numbers[0].slice(1))
    ekstraKlikk = Number(numbers[2].slice(1))

    if (antallklikk >= pris){
        antallpoengperklikk += ekstraKlikk;
        antallklikk -= pris
        demoEl.innerHTML = "du har klikket " + antallklikk + " ganger.";
        errorEl.innerHTML = "din verdi per klikk har økt med " + ekstraKlikk ;
    }else{
    errorEl.innerHTML = "du har ikke nok poeng";
    }
}


function setRotation(element, rotationRatio) {
    element.style.setProperty('--rotation', rotationRatio * 360)
}
setClock()
