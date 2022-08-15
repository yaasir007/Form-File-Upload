//Selecting the elements
const daysEl = document.getElementById("days");
const hoursEl = document.getElementById("hours");
const minsEl = document.getElementById("mins");
const secondsEl = document.getElementById("seconds");

//Setting deadline date
const deadlineMamaDay = new Date('May 26, 2022 00:00:00').getTime();

//Algorithm for Changing the countdown timer
function countdown() {
  const currentDate = new Date();
  const totalSecondsLeft = (deadlineMamaDay - currentDate)/1000;

  const days = Math.floor(totalSecondsLeft / 3600 / 24);
  const hours = Math.floor(totalSecondsLeft/ 3600) % 24;
  const mins = Math.floor(totalSecondsLeft / 60) % 60;
  const seconds = Math.floor(totalSecondsLeft) % 60;

  daysEl.innerHTML = days;
  hoursEl.innerHTML = hours;
  minsEl.innerHTML = mins;
  secondsEl.innerHTML = seconds;

};

//inital call to function
countdown();
setInterval(countdown, 1000);
