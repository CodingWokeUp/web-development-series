/*document.write("Hello World!");*/

//document.getElementById("para").innerHTML = "Hello";

// VARIABLES
var num1 = 10;
let name = "Wasim";
console.log(name);
const pi = 3.14;
//document.getElementById("para").innerHTML = num1 + name;

// FUNCTIONS
function sum(x) {
  return x;
}
var x = sum(name);
//document.getElementById("para").innerHTML = x;

// STRING METHODS
var xyz = "Banana, Apple, Kiwi";
//document.getElementById("para").innerHTML = xyz.substring(0, 6);
//document.getElementById("para").innerHTML = xyz.length;

// ARRAY METHODS
/*var fruits = new Array("apple", "banana", "kiwi");
document.getElementById("para").innerHTML = fruits.toString();
document.getElementById("para2").innerHTML = fruits.pop();
document.getElementById("para3").innerHTML = fruits.shift();
fruits.push("Mango");
document.getElementById("para").innerHTML = fruits.toString();*/

// Array Iteration
/*var numbers = [10, 50, 58, 57];
let txt = "";
numbers.forEach(myFunction);
document.getElementById("para").innerHTML = txt;

function myFunction(value, index, array) {
  txt += value + "<br>";
}*/

// Function
/*function changeText() {
  document.getElementById("para2").innerHTML = name;
}*/

// DATES
const d = new Date();
//document.getElementById("para").innerHTML = d;
document.getElementById("para").innerHTML = d.getFullYear();
document.getElementById("para2").innerHTML = d.getMonth() + 1;
document.getElementById("para3").innerHTML = d.getDate();
