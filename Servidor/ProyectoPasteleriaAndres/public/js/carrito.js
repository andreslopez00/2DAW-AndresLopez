// Elementos del DOM
let listaProductos = document.getElementById("lista-productos");
let listaCarrito = document.getElementById("lista-carrito");
let totalElement = document.getElementById("total");
let vaciarCarritoBtn = document.getElementById("vaciar-carrito");

// Variables para manejar el carrito
let carrito = [];

// Productos disponibles (esto podría venir de una base de datos más adelante)
let productos = [
    { id: 1, nombre: "Tarta de Chocolate", precio: 15.99 },
    { id: 2, nombre: "Bollo de Crema", precio: 3.99 },
    { id: 3, nombre: "Chocolate con Avellanas", precio: 6.99 },
    { id: 4, nombre: "Dulce de Leche", precio: 4.50 },
];

// Renderizar productos en la página
function mostrarProductos() {
    productos.forEach((producto) => {
        let div = document.createElement("div");
        div.classList.add("producto");
        div.innerHTML = `
            <p>${producto.nombre}</p>
            <p>$${producto.precio.toFixed(2)}</p>
            <button onclick="añadirAlCarrito(${producto.id})">Añadir</button>
        `;
        listaProductos.appendChild(div);
    });
}

// Añadir producto al carrito
function añadirAlCarrito(id, nombre, precio) {
    // Buscar si el producto ya está en el carrito
    let productoExistente = carrito.find(p => p.id === id);
    if (productoExistente) {
        productoExistente.cantidad += 1; // Incrementar cantidad
    } else {
        carrito.push({ id, nombre, precio, cantidad: 1 }); // Añadir nuevo producto
    }

    actualizarCarrito(); // Actualizar visualización
}

// Actualizar la vista del carrito
function actualizarCarrito() {
    listaCarrito.innerHTML = "";
    let total = 0;

    carrito.forEach((producto, index) => {
        let row = document.createElement("tr");

        row.innerHTML = `
            <td>${producto.nombre}</td>
            <td>$${producto.precio.toFixed(2)}</td>
            <td>${producto.cantidad}</td>
            <td>$${(producto.precio * producto.cantidad).toFixed(2)}</td>
            <td>
                <button class="btn btn-danger btn-sm" onclick="quitarDelCarrito(${index})">
                    <i class="fas fa-times"></i>
                </button>
            </td>
        `;

        listaCarrito.appendChild(row);
        total += producto.precio * producto.cantidad;
    });

    totalElement.textContent = `Total: $${total.toFixed(2)}`;
}


// Quitar un producto del carrito
function quitarDelCarrito(index) {
    carrito.splice(index, 1);
    actualizarCarrito();
}

vaciarCarritoBtn.addEventListener("click", () => {
    if (confirm("¿Estás seguro de que quieres vaciar el carrito?")) {
        carrito = [];
        actualizarCarrito();
    }
});
let realizarPedidoBtn = document.createElement("button");
realizarPedidoBtn.textContent = "Realizar Pedido";
realizarPedidoBtn.id = "realizar-pedido-btn"; // Agrega el ID
realizarPedidoBtn.className = "btn btn-success"; // Bootstrap o tus clases


// Insertarlo en un contenedor específico
let contenedorPedido = document.getElementById("realizar-pedido");
contenedorPedido.appendChild(realizarPedidoBtn);

// Event listener como antes
realizarPedidoBtn.addEventListener("click", realizarPedido);


// Función para realizar el pedido
function realizarPedido() {
    if (carrito.length === 0) {
        alert("El carrito está vacío. Añade productos antes de realizar el pedido.");
        return;
    }

    // Preparar los datos para enviar al servidor
    let pedido = {
        clienteId: 1, // Esto se debe obtener del sistema de autenticación
        productos: carrito.map((producto) => ({
            id: producto.id,
            nombre: producto.nombre,
            precio: producto.precio,
        })),
    };

    // Enviar los datos al servidor
    fetch("realizar_pedido.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
        },
        body: JSON.stringify(pedido),
    })
        .then((response) => {
            if (response.ok) {
                alert("Pedido realizado con éxito.");
                carrito = []; // Vaciar el carrito
                actualizarCarrito();
            } else {
                alert("Error al realizar el pedido. Inténtalo nuevamente.");
            }
        })
        .catch((error) => {
            console.error("Error:", error);
            alert("Ocurrió un error al procesar el pedido.");
        });
}

// Inicializar la aplicación
mostrarProductos();
