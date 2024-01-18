const wrapper = document.querySelector('.wrapper');
const selectBtn = wrapper.querySelector('.select-btn');
const searchInp = wrapper.querySelector('input');
const options = wrapper.querySelector('.options');

let paises = ["Peru","Chile","Argentina","Brazil","Colombia"];
let selectedLi;

function agregar(selectedPais){
    options.innerHTML = '';
    paises.forEach(pais =>{
        let isSelected = pais == selectedPais ? 'selected' : '';
        let li = `<li onclick="actualizarNombre(this)" class="${isSelected}">${pais}</li>`;
        options.insertAdjacentHTML("beforeend", li);
    });
}

agregar();

function actualizarNombre(selectedLi){
    searchInp.value = "";
    agregar(selectedLi.innerText);
    wrapper.classList.remove('active');
    selectBtn.firstElementChild.innerText = selectedLi.innerText;
}

searchInp.addEventListener("keyup",() => {
    let arr = [];
    let searchWord = searchInp.value.toLowerCase();
    arr = paises.filter(data => {
        return data.toLowerCase().startsWith(searchWord);
    }).map(data =>{
        let isSelected = data == selectBtn.firstElementChild.innerText ? "selected" : "";
        return `<li onclick="actualizarNombre(this)" class="${isSelected}">${data}</li>`;
    }).join("");
    options.innerHTML = arr ? arr : `<p style='margin-top:10px;'>Oops! país no encontrado </p>`;
});

selectBtn.addEventListener("click",() => wrapper.classList.toggle("active"));

