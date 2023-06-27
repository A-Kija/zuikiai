import axios from 'axios';

// Server Side Rendering with JS

const insertList = (listDom, res) => {
    const html = res.data.html;
    listDom.innerHTML = html;
    const deleteButtons = document.querySelectorAll('.delete--button');
    deleteButtons.forEach(button => {
        console.log(button);
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
