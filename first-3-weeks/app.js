// let items = []

// if( ! localStorage.items ){
//   alert("no items in storage")
// }else{
//   items = JSON.parse( localStorage.items )
//   console.log(items)
// }
// Ternary
// console.log(items)





//This is a valid JSON object
// let item = {"name":"shoe", "price":10}
// // Save this object to localStorage
// // Convert anything to text to put it in localStorage
// // JSON.stringify
// localStorage.myItem = JSON.stringify( item )
// // Read the item and alert the price only
// let itemFromMemory = JSON.parse(localStorage.myItem) // {"name":"shoe","price":10}
// alert( itemFromMemory.price )

// Set an item in localStorage
// localStorage.setItem("name", "AAA")
// localStorage.lastName = "DDDD"
// alert(localStorage.lastName)
// Get from localStorage
/*
let theName = localStorage.getItem("name")
console.log("theName", theName)
*/
// Delete an item from localStorage
// localStorage.removeItem("name")




function one(q){ return document.querySelector(q) }
function all(q){ return document.querySelectorAll(q) }

let items = ! localStorage.items ? [] : JSON.parse( localStorage.items )

// Compoment
let item = {

  save : function(){
    // This is for the DOM
    const itemId  = Math.random()
    const itemName = one("#itemName").value
    let divItem = ` <div class="item" data-itemId="${itemId}">
                      <div>${itemName}</div>
                      <div onclick="item.delete()">🗑️</div>
                    </div>`
    one("#items").insertAdjacentHTML('afterbegin', divItem) 
    one("#itemName").value = ""
    // This is for memory (localStorage)
    // {"name":"XXXXXXX"}
    let jItem = {"id" : itemId ,"name":itemName}
    // Push the jItem to the items array
    items.push(jItem)
    // Save the items array in localStorage
    localStorage.items = JSON.stringify( items )
  },
  
  delete : function(){
    // This is for the DOM
    // alert("deleting item with id: ", item.itemId)
    event.target.parentNode.remove()
    const idFromParentElement = event.target.parentNode.getAttribute("data-itemId")

    // for(let i = 0; i < items.length; i++){
    //   let element = items[i]
    //   // See if the id matches, if so remove it
    //   if( idFromParentElement == element.id ){
    //     items.splice(i, 1)
    //   }
    // }
    // localStorage.items = JSON.stringify(items)
    
    items = items.filter( element => element.id !=  idFromParentElement)
    localStorage.items = JSON.stringify(items)

    // alert("delete item with id "+ idFromParentElement)
    // Option 1: Set the id of the item in the parent
    // Option 2: Pass the id of the item to this function
    // With the id loop/filter the items array
    // If there is a match in the id remove the item  it from the items array
    // Remember that this is only in JS memory
    // Therefore, you must re-write to items array to localStorage (as text)
  }

}