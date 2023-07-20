import axios from "axios";


export default class Tags {


    constructor() {
        console.log('tags.js');
        window.addEventListener('load', _ => {
            this.init();
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

    registerEvents(dom) {
        dom.querySelectorAll('[data-tag-action]').forEach(action => {
            console.log('action', action);
            action.addEventListener('click', _ => {
                console.log('click', action);
                this.handleAction(action);
            });
        });
    }

    handleAction(action) {
        
        switch (action.dataset.tagActionType) {
            case 'load':
                this.handleLoad(action);
                break;
            default:
        }
    }

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



}