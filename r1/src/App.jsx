import 'bootstrap/dist/css/bootstrap.min.css';
import './App.scss';
import './buttons.scss';
import Create from './Components/crud/Create';
import { useEffect, useState } from 'react';
import { crudCreate, crudDelete, crudEdit, crudRead } from './Functions/localStorageCrud';
import List from './Components/crud/List';
import Delete from './Components/crud/Delete';
import Edit from './Components/crud/Edit';

const KEY = 'myFancyColors';

export default function App() {

    const [listUpdate, setListUpdate] = useState(Date.now());

    const [colors, setColors] = useState(null);

    const [createData, setCreateData] = useState(null);
    const [deleteModalData, setDeleteModalData] = useState(null);
    const [deleteData, setDeleteData] = useState(null);
    const [editModalData, setEditModalData] = useState(null);
    const [editData, setEditData] = useState(null);

    //R read
    useEffect(_ => {
        setColors(crudRead(KEY));
    }, [listUpdate]);

    //C create
    useEffect(_ => {
        if (null === createData) {
            return;
        }
        crudCreate(KEY, createData);
        setListUpdate(Date.now());
    }, [createData]);

    //U update
    useEffect(_ => {
        if (null === editData) {
            return;
        }
        crudEdit(KEY, editData, editData.id);
        setListUpdate(Date.now());
    }, [editData]);

    //D dreate
    useEffect(_ => {
        if (null === deleteData) {
            return;
        }
        crudDelete(KEY, deleteData.id);
        setListUpdate(Date.now());
    }, [deleteData]);

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
        </>
    );

}