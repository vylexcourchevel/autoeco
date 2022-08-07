var btn1 = document.querySelector("#btn1");
var btn2 = document.querySelector("#btn2");

btn1.addEventListener("click",function(){
    document.querySelector("#div1").classList.toggle("p_invisible");
})
btn2.addEventListener("click",function(){
    document.querySelector("#div2").classList.toggle("p_invisible");
})