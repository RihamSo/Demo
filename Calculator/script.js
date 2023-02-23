// let string = ""
// let buttons = document.querySelectorAll('.button')
// Array.from(buttons).forEach((button) => {
//     button.addEventListener('click', (e) => {
//         if (e.target.innerHTML == '=') {
//         console.log(e.target)
//         }
//         //     string = eval(string)
//         //     document.querySelector('input').value = string
//         // }
//         // else{
//         //     console.log(e.target)
//         //     string=string + e.target.innerHTML
//         //     document.querySelector('input').value = string
//         // }
//     })
// })




let string = "";
let buttons = document.querySelectorAll(".button");
Array.from(buttons).forEach((button)=>{
  button.addEventListener('click', (e)=>{
    if(e.target.innerHTML == '='){
      string = eval(string);
      document.querySelector('input').value = string;
    }
    else if(e.target.innerHTML == 'C'){
      string = ""
      document.querySelector('input').value = string;
    }
    else{ 
    console.log(e.target)
    string = string + e.target.innerHTML;
    document.querySelector('input').value = string;
      }
  })
})

// const numArea = document.querySelector('.nums'),
//   buttons = document.querySelectorAll('button[data-value]');

// let stringToEval = "";

// const clickHandler = event => {
//   const value = event.target.attributes["data-value"].nodeValue;
//   stringToEval += value;
//   inputBox.value = stringToEval;
// }

// const execute = () => {
//   inputBox.value = eval(stringToEval)
//   stringToEval = "";
// }

// const clear = () => {
//   inputBox.value = "";
//   stringToEval = "";
// }

// const del = () => {
//   stringToEval = stringToEval.slice(0, -1);
//   inputBox.value = stringToEval;
// }

// buttons.forEach(btn => btn.addEventListener("click", clickHandler));
// btnEquals.addEventListener("click", execute);
// btnClear.addEventListener("click", clear);
// btnDelete.addEventListener("click", del);

// function go(){
//     console.log("hello")
// }