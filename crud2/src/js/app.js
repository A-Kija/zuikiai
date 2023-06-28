import axios from 'axios';

// Server Side Rendering with JS

const insertList = (listDom, res) => {
    const html = res.data.html;
    listDom.innerHTML = html;
    const deleteButtons = document.querySelectorAll('.button--delete');
    const editButtons = document.querySelectorAll('.button--edit');
    const colorsList = document.querySelector('.colors--list');
    
    deleteButtons.forEach(button => {
        button.addEventListener('click', () => {
            axios.delete(button.dataset.url)
                .then(res => {
                    if (res.data.success) {
                        getList(colorsList);
                    }
                })
                .catch(err => console.log(err));
        });
    });
    editButtons.forEach(button => {
        button.addEventListener('click', () => {
            axios.get(button.dataset.url)
                .then(res => {
                    if (res.data.success) {
                        insertEdit(res);
                    }  
                })
                .catch(err => console.log(err));
        });
    });
}

const insertEdit = (res) => {
    const editModal = document.querySelector('.edit--modal');
    const html = res.data.html;
    editModal.innerHTML = html;
    const closeModal = document.querySelectorAll('.--close');
    closeModal.forEach(button => {
        button.addEventListener('click', () => {
            editModal.innerHTML = '';
        });
    });
}

const getList = colorsList => {
    axios.get(colorsList.dataset.url)
        .then(res => {
            insertList(colorsList, res);
        })
        .catch(err => console.log(err));
}


if (document.querySelector('.colors--list')) {
    const colorsList = document.querySelector('.colors--list');
    const createButton = document.querySelector('.create--button');
    const createColor = document.querySelector('.create--color');
    


    createButton.addEventListener('click', () => {
        axios.post(createButton.dataset.url, {
            name: 'New Color',
            hex: createColor.value
        })
            .then(res => {
                if (res.data.success) {
                    getList(colorsList);
                }
            })
            .catch(err => console.log(err));
    });







    getList(colorsList);
}
