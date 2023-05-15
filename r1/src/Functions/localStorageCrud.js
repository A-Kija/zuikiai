import { v4 as uuidv4 } from 'uuid';

const read = key => {
    const data = localStorage.getItem(key);
    if (null === data) {
        return [];
    } else {
        return JSON.parse(data);
    }
}

const write = (key, data) => localStorage.setItem(key, JSON.stringify(data));

export const crudRead = key => read(key);

export const crudCreate = (key, data) => write(key, {...data, id: uuidv4() });

export const editCrud = (key, data, id) => write(key, read(key).map(d => d.id === id ? {...d, ...data, id } : {...d }));

export const deleteCrud = (key, id) => write(key, read(key).filter(d => d.id !== id));