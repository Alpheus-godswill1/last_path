const slider = document.querySelector(".slider");
const hero = document.querySelector(".hero");
const tim = new TimelineMax();

tim.fromTo(hero,2, {height : "1%"}, {height: "70%",ease: Power2.easeInout});




