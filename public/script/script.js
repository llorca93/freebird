
var menuButton = document.getElementById('dropdownMenuButton');
console.log('MenuButton');
menuButton.addEventListener('click', displayNav);
function displayNav(){
    var dropdown = document.getElementById('dropdown-menu');
    console.log('la fonction fonctionne');
    dropdown.style.display="block";
    console.log('la fonction a bien fonctionné')
}

document.querySelector('.close').addEventListener('click', function (){
   document.querySelector('.dropdown').style.display='none';
});





