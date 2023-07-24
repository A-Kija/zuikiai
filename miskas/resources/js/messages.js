class Messages {
    constructor() {
        window.addEventListener('load', _ => {
            this.dom = document.querySelector('#messages');
        });
        this.messages = [];
    }

    addMessage(message) {
        this.messages.push(message);
    }

    getMessages() {
        return this.messages;
    }

    clearMessages() {
        this.messages = [];
    }

    render() {
        this.dom.innerHTML = '';
        this.messages.forEach(message => {
            this.dom.innerHTML += `<div class="alert alert-dismissible alert-${message.type}">
            ${message.text}
            <button type="button" class="btn-close"></button>
            </div>`;
        });
    }
}