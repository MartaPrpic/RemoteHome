require('./bootstrap');

let category = document.getElementById('category');

category.addEventListener("click", function(e){
    if(document.getElementById('shared').selected){
        document.getElementById('type').style.display="block";
    }
} );

let regije= [
  {
      ime : "Slavonija and Baranja",
      summerTemp : "30",
      winterTemp : "-2",
      wind : "very",
      sun : "middle",
      areaType : "lowland",
      population : "middle",
      description : ["hospitals", "good wifi", "agriculture", "farms", "peacefull living", "city lifestyle", "bicycling", "beautiful parks", "student city"],
      points: 0
  },

  {
      ime: "Lika and Gorski Kotar",
      summerTemp: "15",
      winterTemp: "-10",
      wind: "not at all",
      sun: "low",
      areaType: "mountains",
      population: "low",
      description: ["farms", "peacefull living", "climbing", "beautiful nature", "fishing"],
      points: 0
  },
  {
      ime: "Central part",
      summerTemp: "25",
      winterTemp: "0",
      wind: "middle",
      sun: "middle",
      areaType: "lowland and highland",
      population: "high",
      description: ["hospitals", "good wifi", "climbing", "historical buildings", "city lifestyle", "beautiful parks", "student city"],
      points: 0
  },
  {
      ime: "Istra and Kvarner",
      summerTemp: "30",
      winterTemp: "5",
      wind: "not at all",
      sun: "very",
      areaType: "lowland and highland",
      population: "middle",
      description: ["hospitals", "peacefull living", "good wifi", "fishing", "climbing", "historical buildings", "city lifestyle", "beautiful beaches", "student city"],
      points: 0
  },
  {
      ime: "Dalmatia",
      summerTemp: "32",
      winterTemp: "5",
      wind: "not at all",
      sun: "very",
      areaType: "lowland",
      population: "middle",
      description: ["hospitals","beautiful beaches", "beautiful nature", "good wifi", "agriculture", "historical buildings", "city lifestyle", "peacefull living", "student city",],
      points: 0
  },
  {
      ime: "Islands",
      summerTemp: "30",
      winterTemp: "5",
      wind: "not at all",
      sun: "very",
      areaType: "lowland",
      population: "low",
      description: ["beautiful nature", "beautiful beaches", "peacefull living", "fishing", "agriculture"],
      points: 0
  }
];

let start = document.getElementById("quiz-btn");
let next = document.getElementById("next");
let sections = document.getElementById("sections");
let finish = document.getElementById("finish");
let buttons = document.getElementById("nav-btns");
let numOfSections = sections.childElementCount;
let userInput = {
  summerTemp: null,
  winterTemp: null,
  wind: null,
  sun: null,
  areaType: [],
  population: null,
  description: []
};
let sectionsArray = Array.from(sections.children);
let currentPage = 0;
sectionsArray.forEach( section => section.style.display = "none");
console.log(sections);

start.addEventListener('click',  function(e){
  e.preventDefault();
  sections.firstElementChild.style.display = "block";
  document.getElementById("question-container").style.display ="block";
  document.getElementById("hello").style.display = "none";
  back.style.display = "none";
  finish.style.display = "none";

})

next.addEventListener("click", function(e){
  e.preventDefault();
  back.style.display = "inline";
      if( currentPage == 2){
          next.style.display = "none";
          finish.style.display = "inline";
      }else { next.style.display = "inline";
          finish.style.display ="none";}
      if(sections.children[currentPage].style.display == "block") {
          sections.children[currentPage].style.display = "none";
          sections.children[currentPage+1].style.display ="block";
      }
      currentPage++;
})

back.addEventListener("click", function(e){
  e.preventDefault();
      if(currentPage == 3) {next.style.display = "inline"; finish.style.display ="none";}
      if(sections.children[currentPage].style.display == "block") {
          if (sections.children[1].style.display == "block"){
              back.style.display = "none";
          }else {back.style.display = "inline";}
          sections.children[currentPage].style.display = "none";
          sections.children[currentPage-1].style.display ="block";
      }
  currentPage--;
})

finish.addEventListener("click", function(e){
  e.preventDefault();
  buttons.style.display = "none";
  Array.from(document.getElementById("interests").children).forEach(function(check){
      if (check.checked) userInput.description.push(check.nextElementSibling.innerHTML);
  });
  Array.from(document.getElementsByName("summerTemp")).forEach(function(radio){
      if(radio.checked) userInput.summerTemp = (radio.nextElementSibling.innerHTML).toString();
  });
  Array.from(document.getElementsByName("winterTemp")).forEach(function(radio){
      if(radio.checked) userInput.winterTemp = (radio.nextElementSibling.innerHTML).toString();
  });
  if(document.getElementById("slider1").value == 1) userInput.wind = "middle";
  else if (document.getElementById("slider1").value == 2) userInput.wind = "very";

  if(document.getElementById("slider2").value == 1) userInput.sun = "middle";
  else if (document.getElementById("slider2").value == 2) userInput.sun = "very";

  Array.from(document.getElementsByName("areaType")).forEach(function (check){
      if(check.checked) userInput.areaType.push(check.nextElementSibling.innerHTML);
  });
  if(document.getElementById("slider3").value == 0) userInput.population = "low";
  else if (document.getElementById("slider3").value == 1) userInput.population = "middle";
  else if (document.getElementById("slider3").value == 2) userInput.population = "very";

  console.log(userInput);
  let usporedi = function(userInput, regije){
      for( let i = 0; i < regije.length; i++){
          for ( let j = 0; j < userInput.description.length; j++){
                  if(regije[i].description.includes(userInput.description[j])) regije[i].points++
          }
          for( let k =0; k < userInput.areaType.length; k++){
              if(regije[i].areaType.includes(userInput.areaType[k])) regije[i].points++
          }
          if(regije[i].population.includes(userInput.population)) regije[i].points++;
          if(regije[i].summerTemp.includes(userInput.summerTemp)) regije[i].points++;
          if(regije[i].winterTemp.includes(userInput.winterTemp)) regije[i].points++;
          if(regije[i].wind.includes(userInput.wind)) regije[i].points++;
          if(regije[i].sun.includes(userInput.sun)) regije[i].points++;
      }
  }
  usporedi(userInput, regije);

  let getResult = function(){
      regije.sort(function(regijaA,regijaB){ return regijaB.points-regijaA.points});
      let result = [];
      let maxPoints = regije[0].points;
      result = regije.filter(regija => regija.points == maxPoints);
      result.forEach(regija => document.getElementById("result").innerHTML += regija.ime)
  }

  getResult();

})

let $slider = $("#slider");
let $fill = $(".bar .fill");

function setBar() {
  $fill.css("width", $slider.val() + "%");
}

$slider.on("input", setBar);

setBar();