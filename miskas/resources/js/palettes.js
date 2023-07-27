console.log('palettes.js');

if (document.querySelector('#palette--create--form')) {
    const paletteCreateForm = document.querySelector('#palette--create--form');
    const colorInput = document.querySelector('#color--input div');
    const addColorButton = document.querySelector('#add--color--button');

    addColorButton.addEventListener('click', _ => {
        const colorInputCopy = colorInput.cloneNode(true);
        // append before addColorButton
        paletteCreateForm.insertBefore(colorInputCopy, addColorButton);
        colorInputCopy.querySelector('button').addEventListener('click', _ => colorInputCopy.remove());
    });

    window.addEventListener('load', _ => {
        document.querySelectorAll('.color--button--remove').forEach(button => {
            button.addEventListener('click', _ => button.parentElement.remove());
        });
    });
}