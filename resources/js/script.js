const button = document.getElementsByClassName('delete-button');
const resetButton = document.getElementsByClassName('reset-button')
const warning = document.getElementsByClassName('form-warning');

console.log(resetButton);
console.log(button);
console.log(warning);

for (let index = 0; index < button.length; index++) {
    showAndHideElement(button[index], warning[index], 'd-none', 'd-block');
    showAndHideElement(resetButton[index], warning[index], 'd-block', 'd-none');
}

/* FUNCTIONS */
function showAndHideElement(buttonToClick, elementToShow, firstClass, secondClass){
    buttonToClick.addEventListener('click', ()=>{
        elementToShow.classList.remove(firstClass);
        elementToShow.classList.add(secondClass);
    })
}