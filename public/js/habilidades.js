// Variables
const skillInput = document.getElementById('skill');
const addskillButton = document.getElementById('add-skill');
const skillList = document.querySelector('.skill-list');

// Evento para agregar habilidades
addskillButton.addEventListener('click', () => {
    const skillText = skillInput.value.trim();

    if (skillText !== '') {
        // Crear un contenedor para la burbuja de habilidades
        const skillContainer = document.createElement('div');
        skillContainer.classList.add('skill-container');

        // Crear la burbuja de habilidades
        const skillBubble = document.createElement('div');
        skillBubble.classList.add('skill-bubble', 'mb-2');
        skillBubble.textContent = skillText;

        // Botón para eliminar habilidades
        const deleteButton = document.createElement('button');
        deleteButton.classList.add('btn', 'btn-danger', 'delete-skill');
        deleteButton.textContent = 'Eliminar';

        // Agregar la burbuja de habilidades y el botón de eliminar al contenedor
        skillContainer.appendChild(skillBubble);
        skillContainer.appendChild(deleteButton);

        // Agregar el contenedor de capacidades a la lista
        skillList.appendChild(skillContainer);

        // Limpiar el campo de entrada después de agregar
        skillInput.value = '';

        // Evento para eliminar habilidades
        deleteButton.addEventListener('click', () => {
            skillList.removeChild(skillContainer);
        });
    }
});
