//btns
let educ=document.querySelector("#educ");
let exp=document.querySelector("#exp");
let skill=document.querySelector("#skill");

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
skill.addEventListener("click", ()=>{
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
 

 showPanel(2);


