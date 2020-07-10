require('./bootstrap');

var classic = document.getElementById('classic');
var deluxe = document.getElementById('deluxe');
var supreme = document.getElementById('supreme');
var extras = document.getElementById('extras');
var drinks= document.getElementById('drinks');

var classic_clicked=false;
var deluxe_clicked=false;
var supreme_clicked=false;
var extras_clicked=false;
var drinks_clicked=false;

classic.addEventListener("click",classicPizzas);
deluxe.addEventListener("click",deluxePizzas);
supreme.addEventListener("click",supremePizzas);
extras.addEventListener("click",showExtras);
drinks.addEventListener("click",showDrinks);

function getValues(){
    var check_boxes=document.getElementsByClassName('menu_topping-input');
    for(var i=0;i<4;i++){
        if(check_boxes[i].checked === true){
            
        }
    }
}

function showAll(){
        $('.Classic').show();
        $('.Deluxe').show();
        $('.Supreme').show();
        $('.Extras').show();
        $('.Drinks').show();
       
}
function resetColor(){
        classic.style.backgroundColor="black"; 
        deluxe.style.backgroundColor="black";
        supreme.style.backgroundColor="black";
        extras.style.backgroundColor="black";
        drinks.style.backgroundColor="black";
}
function classicPizzas(){
    // classic.style.color = "red";
    // $('.Classic').hide();
    if(!classic_clicked){
        resetColor();
        $('.Classic').show();
        classic.style.backgroundColor="red";
        classic_clicked=true;
        $('.Deluxe').hide();
        $('.Supreme').hide();
        $('.Extras').hide();
        $('.Drinks').hide();
    }else{
        showAll();
        resetColor();
        classic_clicked=false;
    }

}
function deluxePizzas(){
    // classic.style.color = "red";
    // $('.Classic').hide();
    if(!deluxe_clicked){
        resetColor();
        $('.Deluxe').show();
        deluxe.style.backgroundColor="red";
        deluxe_clicked=true;
        $('.Classic').hide();
        $('.Supreme').hide();
        $('.Extras').hide();
        $('.Drinks').hide();
    }else{
        showAll();
        resetColor();
        deluxe_clicked=false;
    }

}
function supremePizzas(){
    // classic.style.color = "red";
    // $('.Classic').hide();
    if(!supreme_clicked){
        resetColor();
        $('.Supreme').show();
        supreme.style.backgroundColor="red";
        supreme_clicked=true;
        $('.Classic').hide();
        $('.Extras').hide();
        $('.Deluxe').hide();
        $('.Drinks').hide();
    }else{
        showAll();
        resetColor();
        supreme_clicked=false;
    }

}
function showExtras(){
    // classic.style.color = "red";
    // $('.Classic').hide();
    if(!extras_clicked){
        resetColor();
        $('.Extras').show();
        extras.style.backgroundColor="red";
        extras_clicked=true;
        $('.Deluxe').hide();
        $('.Supreme').hide();
        $('.Classic').hide();
        $('.Drinks').hide();
    }else{
        showAll();
        resetColor();
        extras_clicked=false;
    }

}
function showDrinks(){
    // classic.style.color = "red";
    // $('.Classic').hide();
    if(!drinks_clicked){
        resetColor();
        $('.Drinks').show();
        drinks.style.backgroundColor="red";
        drinks_clicked=true;
        $('.Classic').hide();
        $('.Supreme').hide();
        $('.Deluxe').hide();
        $('.Extras').hide();
        
    }else{
        showAll();
        resetColor();
        drinks_clicked=false;
    }

}
