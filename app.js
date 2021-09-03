var jPerson = {
  "name" : "Santiago",
  "emails" : ["@a", "@b", "@c"],
  "colors" : ["gray", "green", "blue"]
}

document.querySelector("#name").innerHTML = jPerson.name

for( var i = 0; i < jPerson.emails.length; i++ ){
  var email = jPerson.emails[i]
  var color = jPerson.colors[i]
  var divEmail = `<div class="email" style="color: ${color}">${email}</div>`
  document.querySelector("#emails").insertAdjacentHTML("beforebegin", divEmail)
}



// document.querySelector("#name").innerHTML = jPerson.name
// // <div class="email" style="color: blue">@x</div>
// jPerson.emails.forEach( email => {
//   var divEmail = `<div class="email" style="color: blue">${email}</div>`
//   // beforebegin beforeend afterbegin afterend
//   document.querySelector("#emails").insertAdjacentHTML("beforebegin", divEmail)
// })



// the emails must also contain @c
// How to you add @c to the emails array?
// jPerson.emails.push("@c")

// for( var i = 0; i < jPerson.emails.length; i++ ){
//   console.log( jPerson.emails[i] )
// }
// jPerson.emails.forEach( email => {
//   console.log( email )
// })
// How do I show all my emails?
// console.log( jPerson.emails  )






// var jPerson = { 
//   "name" : "Santiago",
//   "lastName" : "Donoso",
//   "year" : 2021,
//   "nickName" : "Santi" 
// }
// console.log( jPerson )
// jPerson.name = "XXX"
// console.log( jPerson.name )
// jPerson.lastName = "YYY"
// console.log( jPerson.lastName )
// jPerson.hobby = "XXXXXXXXX"


// console.log( `Hi ${}` )





// var aLetters = ["a", "b", "c", "d", "e"]
// for(var i = 0; i < aLetters.length; i++){
//   if( i == 1 && aLetters[i] == "b" ) continue 
//   console.log(aLetters[i])
// }
// if {}
// else()
// Show all letters except the letter in
// index 1 if it is a b






// Create a loop that shows all letters
// except the letter which is in index 1




// aLetters.forEach( sLetter => {
//   console.log(sLetter)
// } )



// aLetters.foreach( function(sLetter){

// } )


