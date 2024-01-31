const wrapper = document.querySelector('.wrapper');
const selectBtn = wrapper.querySelector('.select-btn');
const searchInp = wrapper.querySelector('input');
const options = wrapper.querySelector('.options');

let casos = [
    "Casa de Cambios",
    "Pago de Empleados",
    "Venta de Producto",
    "Pago Salario Empleados",
    "Obsequio a Clientes",
    "Venta de Electrodomésticos",
    "Control de Mensualidad",
    "Venta de entradas (Teatro)",
    "Venta de Productos Usando While",
    "Casa de Préstamo"
];
let selectedLi;

function agregar(selectedCaso){
    options.innerHTML = '';
    casos.forEach(caso =>{
        let isSelected = caso == selectedCaso ? 'selected' : '';
        let li = `<li onclick="actualizarNombre(this)" class="${isSelected}">${caso}</li>`;
        options.insertAdjacentHTML("beforeend", li);
    });
}

agregar();

function actualizarNombre(selectedLi){
    //searchInp.value = "";
    //agregar(selectedLi.innerText);
    //wrapper.classList.remove('active');
    //selectBtn.firstElementChild.innerText = selectedLi.innerText;

    searchInp.value = "";
    const selectedCaso = selectedLi.innerText;
    agregar(selectedCaso);
    wrapper.classList.remove('active');
    selectBtn.firstElementChild.innerText = selectedCaso;

    // Aquí agregamos la lógica de redirección
    switch (selectedCaso) {
        case "Casa de Cambios":
            window.location.href = 'caso1.php';
            break;
        case "Pago de Empleados":
            window.location.href = 'caso2.php';
            break;
        case "Venta de Producto":
            window.location.href = 'caso3.php';
            break;
        case "Pago Salario Empleados":
            window.location.href = 'caso4.php';
            break;
        case "Obsequio a Clientes":
            window.location.href = 'caso5.php';
            break;
        case "Venta de Electrodomésticos":
            window.location.href = 'caso6.php';
            break;
        case "Control de Mensualidad":
            window.location.href = 'caso7.php';
            break;
        case "Venta de entradas (Teatro)":
            window.location.href = 'caso8.php';
            break;
        case "Venta de Productos Usando While":
            window.location.href = 'caso9.php';
            break;
        case "Casa de Préstamo":
            window.location.href = 'caso10.php';
            break;
        
        default:
            
            break;
    }
}

searchInp.addEventListener("keyup",() => {
    let arr = [];
    let searchWord = searchInp.value.toLowerCase();
    arr = casos.filter(data => {
        return data.toLowerCase().startsWith(searchWord);
    }).map(data =>{
        let isSelected = data == selectBtn.firstElementChild.innerText ? "selected" : "";
        return `<li onclick="actualizarNombre(this)" class="${isSelected}">${data}</li>`;
    }).join("");
    options.innerHTML = arr ? arr : `<p style='margin-top:10px;'>Oops! Caso no encontrado </p>`;
});

selectBtn.addEventListener("click",() => wrapper.classList.toggle("active"));

