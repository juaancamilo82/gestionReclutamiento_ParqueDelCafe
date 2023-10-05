// Variables
const languageInput = document.getElementById('language');
const addLanguageButton = document.getElementById('add-language');
const languageList = document.querySelector('.language-list');

// Evento para agregar idioma
addLanguageButton.addEventListener('click', () => {
    const languageText = languageInput.value.trim();

    if (languageText !== '') {
        // Crear un contenedor para la burbuja de idioma
        const languageContainer = document.createElement('div');
        languageContainer.classList.add('language-container');

        // Crear la burbuja de idioma
        const languageBubble = document.createElement('div');
        languageBubble.classList.add('language-bubble', 'mb-2');
        languageBubble.textContent = languageText;

        // Botón para eliminar idioma
        const deleteButton = document.createElement('button');
        deleteButton.classList.add('btn', 'btn-danger', 'delete-language');
        deleteButton.textContent = 'Eliminar';

        // Agregar la burbuja de idioma y el botón de eliminar al contenedor
        languageContainer.appendChild(languageBubble);
        languageContainer.appendChild(deleteButton);

        // Agregar el contenedor de idioma a la lista
        languageList.appendChild(languageContainer);

        // Limpiar el campo de entrada después de agregar
        languageInput.value = '';

        // Evento para eliminar idioma
        deleteButton.addEventListener('click', () => {
            languageList.removeChild(languageContainer);
        });
    }
});







