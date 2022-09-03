let kgbtn = document.getElementById('kg');
let poundbtn = document.getElementById('pound');

kgbtn.addEventListener('click',function(){
let input = document.getElementById('input').value;
document.getElementById('output').value = input/2.2046 + " KG";
})

poundbtn.addEventListener('click',function(){
let input = document.getElementById('input').value;
document.getElementById('output').value = input*2.2046 + " Pound";

})