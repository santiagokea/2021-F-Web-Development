// Compoment
let item = {

  saveItem : function(){
    const itemName = document.querySelector("#itemName").value
    let divItem = `<div class="item">${itemName}</div>`
    document.querySelector("#items").insertAdjacentHTML('afterbegin', divItem) 
  } 

}