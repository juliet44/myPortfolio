


$(document).ready(function() {
 
   $(".navbar a").on('click', function(event) {     
    
     if (this.hash !== "") {
       
       event.preventDefault();
      
       const hash = this.hash;
       
       $('html, body').animate({
         scrollTop: $(hash).offset().top - 60
       }, 800
       , function() {        
         window.location.hash = hash;
       }
       );
     } // End if
   });
 });

//resume tabs
//btns
let educ=document.querySelector("#educ");
let exp=document.querySelector("#exp");
let project=document.querySelector("#project");

//all
let tabContent=document.querySelectorAll(".tabContent");
let buttons=document.querySelectorAll(".tab button");
//parent tabs


educ.addEventListener("click", ()=>{
    showPanel(0);
    
});

exp.addEventListener("click", ()=>{
   showPanel(1);

});
project.addEventListener("click", ()=>{
   showPanel(2);
});


//tabs function
 function showPanel(panelIndex){
    tabContent.forEach(function(node){
        node.style.display="none";
    });
    buttons.forEach(function(b){
      b.style.backgroundColor="";
       
    });  

    tabContent[panelIndex].style.display="block";
    buttons[panelIndex].style.backgroundColor="#ff8c00";
 }
 

 showPanel(0);

//carousel interval
 $('.carousel').carousel({
   interval: 3000
})


///animations 
const headings= document.querySelectorAll(".head");
console.log(headings);
const observer= new IntersectionObserver(function(entries){

  entries.forEach(entry=>{
    if(entry.intersectionRatio >0){
      entry.target.style.animation = `anim1 2s forwards ease-out`;
    }else{
      entry.target.style.animation='none'; 
    }
  });  
});

headings.forEach(heading=>{
  observer.observe(heading);
});

//about content
const aboutContent= document.querySelector(".aboutContent");

const observerContent= new IntersectionObserver(function(entries){

  entries.forEach(entry=>{
    if(entry.intersectionRatio >0){
      entry.target.style.animation = `anim2 3s forwards ease-out`;
    }else{
      entry.target.style.animation='none'; 
    }
  });  
});

observerContent.observe(aboutContent);