
const fileInput = document.getElementById("fileInput");
const fileList = document.getElementById("fileList");

// Manejar el evento "dragover" para indicar que se pueden soltar archivos
fileList.addEventListener("dragover", (e) => {
    e.preventDefault();
    fileList.classList.add("dragover");
});

// Manejar el evento "dragleave" para quitar el indicador de arrastrar y soltar
fileList.addEventListener("dragleave", () => {
    fileList.classList.remove("dragover");
});

// Manejar el evento "drop" para agregar archivos
fileList.addEventListener("drop", (e) => {
    e.preventDefault();
    fileList.classList.remove("dragover");

    const files = e.dataTransfer.files;

    // Verificar que no se exceda el límite de 3 archivos
    if (fileList.childElementCount + files.length > 3) {
        alert("Máximo 3 archivos permitidos.");
        return;
    }

    // Agregar archivos a la lista
    for (const file of files) {
        const fileItem = document.createElement("div");
        fileItem.classList.add("file-item");
        fileItem.innerHTML = `
            <span class="file-name">${file.name}</span>
            <button class="delete-button">Eliminar</button>
        `;

        // Manejar la eliminación de archivos
        const deleteButton = fileItem.querySelector(".delete-button");
        deleteButton.addEventListener("click", () => {
            fileList.removeChild(fileItem);
        });

        fileList.appendChild(fileItem);
    }
});

// Manejar la selección de archivos mediante el botón de "Elegir archivos"
fileInput.addEventListener("change", () => {
    const files = fileInput.files;

    // Verificar que no se exceda el límite de 3 archivos
    if (fileList.childElementCount + files.length > 3) {
        alert("Máximo 3 archivos permitidos.");
        return;
    }

    // Agregar archivos a la lista
    for (const file of files) {
        const fileItem = document.createElement("div");
        fileItem.classList.add("file-item");
        fileItem.innerHTML = `
            <span class="file-name">${file.name}</span>
            <button class="delete-button">Eliminar</button>
        `;

        // Manejar la eliminación de archivos
        const deleteButton = fileItem.querySelector(".delete-button");
        deleteButton.addEventListener("click", () => {
            fileList.removeChild(fileItem);
        });

        fileList.appendChild(fileItem);
    }

    // Limpiar el campo de selección de archivos
    fileInput.value = null;
});
