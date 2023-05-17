import 'bootstrap/dist/css/bootstrap.min.css';
import './App.scss';
import './buttons.scss';
import Create from './Components/crud/Create';
import { useEffect, useState } from 'react';
import { crudCreate, crudDelete, crudEdit, crudRead } from './Functions/localStorageCrud';
import List from './Components/crud/List';
import Delete from './Components/crud/Delete';
import Edit from './Components/crud/Edit';
import Messages from './Components/crud/Messages';
import { v4 as uuidv4 } from 'uuid';
import axios from 'axios';

const KEY = 'myFancyColors';
const API = 'https://www.thecolorapi.com/id?hex=';

export default function App() {

    const [listUpdate, setListUpdate] = useState(Date.now());
    const [colors, setColors] = useState(null);
    const [createData, setCreateData] = useState(null);
    const [deleteModalData, setDeleteModalData] = useState(null);
    const [deleteData, setDeleteData] = useState(null);
    const [editModalData, setEditModalData] = useState(null);
    const [editData, setEditData] = useState(null);
    const [messages, setMessages] = useState([]);

    //R read
    useEffect(_ => {
        setColors(crudRead(KEY));
    }, [listUpdate]);

    //C create
    useEffect(_ => {
        if (null === createData) {
            return;
        }
        axios.get(API + createData.color.substring(1))
        .then(res => {
            createData.title = res.data.name.value;
            crudCreate(KEY, createData);
            setListUpdate(Date.now());
            msg('New color was creates', 'ok');
        });

    }, [createData]);

    //U update
    useEffect(_ => {
        if (null === editData) {
            return;
        }
        axios.get(API + editData.color.substring(1))
        .then(res => {
            editData.title = res.data.name.value;
            crudEdit(KEY, editData, editData.id);
            setListUpdate(Date.now());
            msg('Color was edited', 'ok');
        });
    }, [editData]);

    //D deleate
    useEffect(_ => {
        if (null === deleteData) {
            return;
        }
        crudDelete(KEY, deleteData.id);
        setListUpdate(Date.now());
        msg('Color has gone', 'ok');
    }, [deleteData]);

    const msg = (text, type) => {
        const id = uuidv4();
        const message = {
            id,
            text,
            type
        }
        setMessages(m => [...m, message]);
        setTimeout(_=> setMessages(m => m.filter(m => m.id !== id)), 5000);
    }

    return (
        <>
            <div className="container">
                <div className="row">
                    <div className="col-4">
                        <Create setCreateData={setCreateData} />
                    </div>
                    <div className="col-8">
                        <List
                            colors={colors}
                            setDeleteModalData={setDeleteModalData}
                            setEditModalData={setEditModalData}
                        />
                    </div>
                </div>
            </div>
            <Delete
                deleteModalData={deleteModalData}
                setDeleteModalData={setDeleteModalData}
                setDeleteData={setDeleteData}
            />
            <Edit
                editModalData={editModalData}
                setEditModalData={setEditModalData}
                setEditData={setEditData}
            />
            <Messages messages={messages} />
        </>
    );

}