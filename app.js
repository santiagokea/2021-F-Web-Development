function one(q){ return document.querySelector(q) }
function all(q){ return document.querySelectorAll(q) }


// Compoment
let item = {

  save : function(){
    const itemName = one("#itemName").value
    let divItem = ` <div class="item">
                      <div>${itemName}</div>
                      <div onclick="item.delete()">🗑️</div>
                    </div>`

    one("#items").insertAdjacentHTML('afterbegin', divItem) 
    one("#itemName").value = ""
  },
  
  delete : function(){
    event.target.parentNode.remove()
  }

}