function one(q){ return document.querySelector(q) }
function all(q){ return document.querySelectorAll(q) }


// Compoment
let item = {

  saveItem : function(){
    const itemName = one("#itemName").value
    let divItem = ` <div class="item">
                      <div>${itemName}</div>
                      <div>🗑️</div>
                    </div>`

    one("#items").insertAdjacentHTML('afterbegin', divItem) 
    one("#itemName").value = ""
  } 

}