// Fetching data
var hours = document.querySelector(".hours"),
  minutes = document.querySelector(".minutes"),
  seconds = document.querySelector(".seconds");

// Counter
var hoursCounter = 0,
  minutesCounter = 0,
  secondsCounter = 0,
  stopTime = true;

// Buttons
var startBtn = document.querySelector(".startBtn"),
  stopBtn = document.querySelector(".stopBtn"),
  resetBtn = document.querySelector(".resetBtn");

// Stopwatch Starter
function start() {
  if (stopTime == true) {
    stopTime = false;
    startBtn.innerHTML = "Start";
    timerCycle();
  }
}

// Stopwatch Stopper
function stop() {
  if (stopTime == false) {
    stopTime = true;
    startBtn.innerHTML = "Resume";
  }
}

// Stopwatch Reseter
function reset() {
  stopTime = true;
  hours.innerHTML = "00";
  minutes.innerHTML = "00";
  seconds.innerHTML = "00";
  hoursCounter = 0;
  minutesCounter = 0;
  secondsCounter = 0;
  startBtn.innerHTML = "Start";
}

// Time Cycle
function timerCycle() {
  if (stopTime == false) {
    secondsCounter = parseInt(secondsCounter);
    minutesCounter = parseInt(minutesCounter);
    hoursCounter = parseInt(hoursCounter);

    secondsCounter++;

    if (secondsCounter == 60) {
      minutesCounter++;
      secondsCounter = 0;
    }

    if (minutesCounter == 60) {
      hoursCounter++;
      minutesCounter = 0;
    }

    // Adding Leading 0
    if (secondsCounter < 10 || secondsCounter == 0) {
      seconds.innerHTML = "0" + secondsCounter.toString();
    } else {
      seconds.innerHTML = secondsCounter.toString();
    }

    if (minutesCounter < 10 || minutesCounter == 0) {
      minutes.innerHTML = "0" + minutesCounter.toString();
    } else {
      minutes.innerHTML = minutesCounter.toString();
    }

    if (hoursCounter < 10 || hoursCounter == 0) {
      hours.innerHTML = "0" + hoursCounter.toString();
    } else {
      hours.innerHTML = hoursCounter.toString();
    }

    // Cycle
    setTimeout(timerCycle, 1000);
  }
}

// Event Listeners
startBtn.addEventListener("click", start);
stopBtn.addEventListener("click", stop);
resetBtn.addEventListener("click", reset);
