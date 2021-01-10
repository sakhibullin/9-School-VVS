	function myFunction1() {
 var x = document.getElementById("first__group");
 x.style.display = 'block';
document.getElementById("second__group").style.display = 'none';
document.getElementById("third__group").style.display = 'none';
document.getElementById("fours__group").style.display = 'none';
document.getElementById("a5__group").style.display = 'none';

}

		function myFunction2() {
 var x = document.getElementById("second__group");
 x.style.display = 'block';
document.getElementById("first__group").style.display = 'none';
document.getElementById("third__group").style.display = 'none';
document.getElementById("fours__group").style.display = 'none';
document.getElementById("a5__group").style.display = 'none';
}

		function myFunction3() {
 var x = document.getElementById("third__group");
 x.style.display = 'block';
document.getElementById("second__group").style.display = 'none';
document.getElementById("first__group").style.display = 'none';
document.getElementById("fours__group").style.display = 'none';
document.getElementById("a5__group").style.display = 'none';
}

function myFunction4() {
 var x = document.getElementById("fours__group");
 x.style.display = 'block';
document.getElementById("second__group").style.display = 'none';
document.getElementById("third__group").style.display = 'none';
document.getElementById("first__group").style.display = 'none';
document.getElementById("a5__group").style.display = 'none';
}

function myFunction5() {
 var x = document.getElementById("a5__group");
 x.style.display = 'block';
 document.getElementById("second__group").style.display = 'none';
document.getElementById("third__group").style.display = 'none';
document.getElementById("fours__group").style.display = 'none';
document.getElementById("first__group").style.display = 'none';
}


$(function(){
    vislideshow();
});