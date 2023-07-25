import axios from 'axios';

export default class Tags {

    constructor(m) {
        this.m = m;
        window.addEventListener('load', _ => {
            this.init();
            this.registerEvents(document);
        });
    }

    init() {
        document.querySelectorAll('[data-tag-load]').forEach(load => {
            axios.get(load.dataset.url)
                .then(res => {
                    load.innerHTML = res.data.html;
                    this.registerEvents(load);
                })
                .catch(err => {
                    console.log(err);
                });
        });
    }

    makeData(dom) {
        const data = {};
        dom.querySelectorAll('input').forEach(input => {
            data[input.name] = input.value;
        });
        // no need now for future use
        // dom.querySelectorAll('select').forEach(select => {
        //     data[select.name] = select.value;
        // });
        // dom.querySelectorAll('textarea').forEach(textarea => {
        //     data[textarea.name] = textarea.value;
        // });
        // dom.querySelectorAll('checkbox').forEach(checkbox => {
        //     data[checkbox.name] = checkbox.checked;
        // });
        // dom.querySelectorAll('radio').forEach(radio => {
        //     data[radio.name] = radio.checked;
        // });
        return data;
    }

    resetData(dom) {
        dom.querySelectorAll('input').forEach(input => {
            input.value = '';
        });
        // no need now for future use
        // dom.querySelectorAll('select').forEach(select => {
        //     select.value = '';
        // });
        // dom.querySelectorAll('textarea').forEach(textarea => {
        //     textarea.value = '';
        // });
        // dom.querySelectorAll('checkbox').forEach(checkbox => {
        //     checkbox.checked = false;
        // });
        // dom.querySelectorAll('radio').forEach(radio => {
        //     radio.checked = false;
        // });
    }

    registerEvents(dom) {
        dom.querySelectorAll('[data-tag-action]').forEach(action => {
            action.addEventListener('click', _ => {
                this.handleAction(action);
            });
        });
    }

    handleAction(action) {

        switch (action.dataset.tagActionType) {
            case 'load':
                this.handleLoad(action);
                break;
            case 'remove':
                this.handleRemove(action);
                break;
            case 'destroy':
                this.handleDestroy(action);
                break;
            case 'store':
                this.handleStore(action);
                break;
            case 'update':
                this.handleUpdate(action);
                break;


            default:
        }
    }

    // Handlers

    handleLoad(action) {
        axios.get(action.dataset.url)
            .then(res => {
                const target = document.querySelector(action.dataset.tagTarget);
                target.innerHTML = res.data.html;
                this.registerEvents(target);
            })
            .catch(err => {
                console.log(err);
            });
    }

    handleRemove(action) {
        const target = document.querySelector(action.dataset.tagTarget);
        target.innerHTML = '';
    }

    handleDestroy(action) {
        axios.delete(action.dataset.url)
            .then(res => {
                const target = document.querySelector(action.dataset.tagTarget);
                target.innerHTML = '';
                this.init();
            })
            .catch(err => {
                console.log(err);
            });
    }

    handleStore(action) {
        const target = document.querySelector(action.dataset.tagTarget);
        const data = this.makeData(target);
        axios.post(action.dataset.url, data)
            .then(res => {
                this.resetData(target);
                this.init();
                this.m.addMessage(res.data.message);
            })
            .catch(err => {
                this.handleError(err);
            });
    }

    handleUpdate(action) {
        const target = document.querySelector(action.dataset.tagTarget);
        const data = this.makeData(target);
        axios.put(action.dataset.url, data)
            .then(res => {
                target.innerHTML = '';
                this.init();
            })
            .catch(err => {
                console.log(err);
            });
    }


    // Helpers
    handleError(err) {
        if (err.response) {
            err.response.data.errors.name.forEach(error => {
                this.m.addMessage({
                    type: 'danger',
                    text: error
                });
            });
        } else {
            this.m.addMessage({
                type: 'danger',
                text: err.message
            });
        }
    }



}