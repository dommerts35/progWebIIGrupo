// Espera a que el contenido del DOM esté completamente cargado
// El modelo de objeto de documento (DOM) es una interfaz de programación para HTML. 
//Traduce el contenido de un documento HTML a un objeto estandarizado, al que los 
//lenguajes de programación funcionales como JavaScript tienen facilidad de acceso y modificación.
document.addEventListener("DOMContentLoaded", () => {
    // Selecciona el formulario con el id "registroForm"
    const form = document.getElementById("registroForm");

    // Añade un evento al formulario que se ejecutará al intentar enviar el formulario
    form.addEventListener("submit", function(event) {
        // Previene el comportamiento predeterminado del envío del formulario
        event.preventDefault();

        // Obtiene y limpia los valores de los campos del formulario
        //getElementById: seleccionar un elemento del documento por medio del valor del atributo id que se le haya asignado.
        //value.trim(): Quita los espacios iniciales, finales y repetidos del texto.
        const user = document.getElementById("user").value.trim();
        const name = document.getElementById("name").value.trim();
        const clave1 = document.getElementById("clave1").value.trim();
        const clave2 = document.getElementById("clave2").value.trim();
        const email = document.getElementById("email").value.trim();

        // Verifica si las contraseñas coinciden
        // Desigualdad (!=) Funciona de la misma forma que la igualdad, pero negándola. 
        // Desigualdad estricta (!== ) Lo mismo que la igualdad estricta, pero negándola.
        if (clave1 !== clave2) {
            // Muestra una alerta si las contraseñas no son iguales
            alert("Las contraseñas no son iguales");
            return; // Termina la ejecución de la función
        }

        // Crea un objeto FormData para almacenar los datos del formulario (pares clave-valor)
        const formData = new FormData();
        formData.append("user", user);
        formData.append("name", name);
        formData.append("clave1", clave1);
        formData.append("clave2", clave2);
        formData.append("email", email);

        // Envía los datos del formulario usando el método POST a "validacion_datos.php"
        fetch("validacion_datos.php", {
            method: "POST",
            body: formData
        })
        // Procesa la respuesta del servidor y la convierte a texto
        .then(response => response.text())
        // Muestra la respuesta del servidor en una alerta
        .then(data => {
            alert(data);
        })
        // Muestra un error en la consola si ocurre algún problema durante la solicitud
        .catch(error => {
            console.error("Error:", error);
        });
    });
});
