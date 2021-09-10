//This is a valid JSON object
let item = {"name":"shoe", "price":10}
// Save this object to localStorage
// Convert anything to text to put it in localStorage
// JSON.stringify
localStorage.myItem = JSON.stringify( item )
// Read the item and alert the price only
let itemFromMemory = JSON.parse(localStorage.myItem) // {"name":"shoe","price":10}
alert( itemFromMemory.price )







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












// function one(q){ return document.querySelector(q) }
// function all(q){ return document.querySelectorAll(q) }


// // Compoment
// let item = {

//   save : function(){
//     const itemName = one("#itemName").value
//     let divItem = ` <div class="item">
//                       <div>${itemName}</div>
//                       <div onclick="item.delete()">🗑️</div>
//                     </div>`
//     one("#items").insertAdjacentHTML('afterbegin', divItem) 
//     one("#itemName").value = ""
//   },
  
//   delete : function(){
//     event.target.parentNode.remove()
//   }

// }