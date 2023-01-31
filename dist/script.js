"use strict" // To enable Strict mode

const weekday = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
const months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
const abreviateDate = (d) => {
  return d.slice(0, 3)
}

const today = new Date();
console.log(today);
console.log(today.getDay());
const day = abreviateDate(weekday[today.getDay()]);
const date = today.getDate();
const month = abreviateDate(months[today.getMonth()]);
const year = today.getFullYear();

const labelUdpate = document.querySelector(".update");

console.log(`Updated ${day} + ${date} ${month} ${year}, `);

console.log("Mohi".slice(0, 3));