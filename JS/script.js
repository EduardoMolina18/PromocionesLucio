var swiper = new Swiper(".mySwiper-1", {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev"
    }
});

var swiper = new Swiper (".mySwiper-2", {
    slidesPerView: 3,
    spaceBetween: 30,
    loop: true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev"
    },
    breakpoints : {
        0: {
            slidesPerView: 1
        },
        520: {
            slidesPerView: 2
        },
        950: {
            slidesPerView: 3
        },
    }
})


//CARRITO

document.addEventListener('DOMContentLoaded', function() {
    const carrito = document.getElementById('carrito');
    const elementos1 = document.getElementById('lista-1');
    const elementos2 = document.getElementById('lista-2');
    const elementos3 = document.getElementById('lista-3');
    const elementos4 = document.getElementById('lista-4');
    const lista = document.querySelector('#lista-carrito tbody');
    const vaciarCarritoBtn = document.getElementById('vaciar-carrito');
    const totalPrecio = document.createElement('p');
    totalPrecio.id = 'total-precio';
    carrito.appendChild(totalPrecio);

    let total = 0;

    cargarEventListeners();

    function cargarEventListeners () {
        if (elementos1) elementos1.addEventListener('click', comprarElemento);
        if (elementos2) elementos2.addEventListener('click', comprarElemento);
        if (elementos3) elementos3.addEventListener('click', comprarElemento);
        if (elementos4) elementos4.addEventListener('click', comprarElemento);
        if (carrito) carrito.addEventListener('click', eliminarElemento);
        if (vaciarCarritoBtn) vaciarCarritoBtn.addEventListener('click', vaciarCarrito);
    }

    function comprarElemento(e) {
        e.preventDefault();
        if(e.target.classList.contains('agregar-carrito')) {
            const elemento = e.target.parentElement.parentElement || e.target.parentElement;
            leerDatosElemento(elemento);
        }
    }

    function leerDatosElemento(elemento) {
        const infoElemento = {
            imagen: elemento.querySelector('img').src,
            titulo: elemento.querySelector('h3').textContent,
            precio: elemento.querySelector('.precio').textContent,
            id: elemento.querySelector('a').getAttribute('data-id')
        }

        insertarCarrito(infoElemento);
    }

    function insertarCarrito(elemento) {
        const row = document.createElement('tr');
        row.innerHTML = `
            <td>
                <img src="${elemento.imagen}" width=70 height: 100>
            </td>
            <td>
                ${elemento.titulo}
            </td>
            <td>
                ${elemento.precio}
            </td>
            <td>
                <a href="#" class="borrar" data-id="${elemento.id}">X</a>
            </td>
        `;

        lista.appendChild(row);

        // Convertir el precio a un número y sumarlo al total
        const precio = parseFloat(elemento.precio.replace('$', ''));
        total += precio;
        actualizarTotal();
    }

    function eliminarElemento(e) {
        e.preventDefault();
        if (e.target.classList.contains('borrar')) {
            const elemento = e.target.parentElement.parentElement;
            const precio = parseFloat(elemento.querySelector('td:nth-child(3)').textContent.replace('$', ''));
            total -= precio;
            elemento.remove();
            actualizarTotal();
        }
    }

    function vaciarCarrito() {
        while(lista.firstChild) {
            lista.removeChild(lista.firstChild);
        }
        total = 0;
        actualizarTotal();
        return false;
    }

    function actualizarTotal() {
        totalPrecio.textContent = `Total: $${total.toFixed(2)}`;
    }
});