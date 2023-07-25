export default class Messages {
    constructor() {
        window.addEventListener('load', _ => {
            this.dom = document.querySelector('#messages');
        });
        this.messages = [];
    }

    addMessage(message) {
        const uuid = Math.random().toString(36).substring(2, 15) + Math.random().toString(36).substring(2, 15);
        message.id = uuid;
        this.messages.push(message);
        // auto remove after 5 seconds
        setTimeout(_ => {
            this.messages = this.messages.filter(message => message.id !== uuid);
            this.render();
        }, 5000);
        this.render();
    }

    render() {
        this.dom.innerHTML = '';
        this.messages.forEach(message => {
            this.dom.innerHTML += `<div data-id="${message.id}" class="alert alert-dismissible alert-${message.type}">
            ${message.text}
            <button type="button" class="btn-close"></button>
            </div>`;
        });
        // register close buttons
        this.dom.querySelectorAll('.btn-close').forEach(btn => {
            btn.addEventListener('click', e => {
                const id = e.target.parentElement.dataset.id;
                this.messages = this.messages.filter(message => message.id !== id);
                this.render();
            });
        });
    }
}
