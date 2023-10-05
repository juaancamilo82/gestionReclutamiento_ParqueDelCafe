// JavaScript para clonar el formulario al hacer clic en el botón
const addFormButton = document.getElementById('add-form-btn');
const formContainer = document.querySelector('.form-container');
let studyNumber = 1;
let maxForms = 2; // Número máximo de formularios a agregar

addFormButton.addEventListener('click', () => {
    if (studyNumber < maxForms) {
        const clonedForm = formContainer.cloneNode(true);
        studyNumber++;

        // Incrementa el número en el formulario clonado
        clonedForm.querySelector('#study-number').textContent = studyNumber;

        // Limpia los valores del formulario clonado
        clonedForm.querySelector('#university').value = '';
        clonedForm.querySelector('#degree').value = '';
        clonedForm.querySelector('#start-date').value = '';
        clonedForm.querySelector('#end-date').value = '';

        // Agrega un botón "Eliminar" al formulario clonado
        const deleteButton = document.createElement('button');
        deleteButton.textContent = 'Eliminar';
        deleteButton.addEventListener('click', () => {
            // Elimina el formulario clonado cuando se hace clic en el botón "Eliminar"
            formContainer.removeChild(clonedForm);
            studyNumber--;

            // Habilita el botón de agregar nuevamente
            addFormButton.disabled = false;
        });
        clonedForm.appendChild(deleteButton);

        // Agrega el formulario clonado al final del contenedor
        formContainer.insertAdjacentElement('beforeend', clonedForm);

        if (studyNumber === maxForms) {
            addFormButton.disabled = true; // Deshabilita el botón después de agregar el número máximo de formularios
        }
    }
});















