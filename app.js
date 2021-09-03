var jPerson = {
  "name" : "Santiago",
  "emails" : ["@a", "@b"]
}

document.querySelector("#name").innerHTML = jPerson.name
// <div class="email" style="color: blue">@x</div>
jPerson.emails.forEach( email => {
  console.log(email)
})



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


