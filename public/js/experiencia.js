// JavaScript para clonar el formulario al hacer clic en el botón
const addFormButton = document.getElementById('add-form-btn');
const formContainer = document.querySelector('.form-container');
let numeroExperiencia = 1;
let maxForms = 2; // Número máximo de formularios a agregar

addFormButton.addEventListener('click', () => {
    if (numeroExperiencia < maxForms) {
        const clonedForm = formContainer.cloneNode(true);
        numeroExperiencia++;

        // Incrementa el número en el formulario clonado
        clonedForm.querySelector('#experiencia-number').textContent = numeroExperiencia;

        // Limpia los valores del formulario clonado
        clonedForm.querySelector('#titulo').value = '';
        clonedForm.querySelector('#empresa').value = '';
        clonedForm.querySelector('#ubicacion').value = '';
        clonedForm.querySelector('#start-date').value = '';
        clonedForm.querySelector('#descripcion').value = '';

        // Agrega un botón "Eliminar" al formulario clonado
        const deleteButton = document.createElement('button');
        deleteButton.textContent = 'Eliminar';
        deleteButton.className = 'delete-button'; // Agrega la clase "delete-button"
        deleteButton.addEventListener('click', () => {
            // Elimina el formulario clonado cuando se hace clic en el botón "Eliminar"
            formContainer.removeChild(clonedForm);
            numeroExperiencia--;

            // Habilita el botón de agregar nuevamente
            addFormButton.disabled = false;
        });
        clonedForm.appendChild(deleteButton);

        // Agrega el formulario clonado al final del contenedor
        formContainer.insertAdjacentElement('beforeend', clonedForm);

        if (numeroExperiencia === maxForms) {
            addFormButton.disabled = true; // Deshabilita el botón después de agregar el número máximo de formularios
        }
    }
});


