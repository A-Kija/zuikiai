import axios from 'axios';

// Server Side Rendering with JS

if (document.querySelector('#colors--list')) {
    const colorsList = document.querySelector('#colors--list');

    axios.get('http://colors.test/colors/list')
        .then(res => {
            const html = res.data.html;
            colorsList.innerHTML = html;
        })
        .catch(err => console.log(err));

}
    