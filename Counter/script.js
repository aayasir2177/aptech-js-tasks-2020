var counts = document.querySelector(".counts");
var counted = 0;
var addBtn = document.querySelector(".addBtn");
var subtractBtn = document.querySelector(".subtractBtn");
var resetBtn = document.querySelector(".resetBtn");
var setBtn = document.querySelector(".setBtn");

addBtn.addEventListener("click", function add() {
  counted++;
  counts.innerHTML = counted;
});

subtractBtn.addEventListener("click", function subtract() {
  if (counted > 0) {
    counted--;
    counts.innerHTML = counted;
  } else {
    alert("You can't count in negative!");
  }
});

resetBtn.addEventListener("click", function resest() {
  counted = 0;
  counts.innerHTML = counted;
  counted = document.querySelector(".counted").value = 0;

});

setBtn.addEventListener("click", function set() {
  counted = document.querySelector(".counted").value;
  if (counted > -1) {
    counts.innerHTML = counted;
  }
  else if(counted < 0){
    alert("You can't input negative number! Your counter has been reset!");
    counted = 0;
    counts.innerHTML = 0;
    counted = document.querySelector(".counted").value = 0;
  }
  else{
      alert("Please enter any number!");
  }

});
