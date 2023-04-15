function myFunction() {
    var date = new Date();
    var forHours = document.querySelector(".hours");
    var forMinutes = document.querySelector(".minutes");
    var forSeconds = document.querySelector(".seconds");
    var hours = date.getHours() % 12 || 12;
    var minutes = date.getMinutes();
    var seconds = date.getSeconds();

    if(hours > 12){
        forHours.innerHTML = hours + " AM";
    }

    else if(hours < 12){
        forHours.innerHTML = hours + " PM";
    }

    forMinutes.innerHTML = minutes;
    forSeconds.innerHTML = seconds;
}

setInterval(myFunction, 1000);