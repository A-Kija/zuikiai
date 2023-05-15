import 'bootstrap/dist/css/bootstrap.min.css';
import './App.scss';
import './buttons.scss';
import Create from './Components/crud/Create';
import { useEffect, useState } from 'react';
import { crudCreate, crudRead } from './Functions/localStorageCrud';
import List from './Components/crud/List';

const KEY = 'myFancyColors';

export default function App() {


    const [colors, setColors] = useState(null);

    const [createData, setCreateData] = useState(null);

    useEffect(_ => {
        setColors(crudRead(KEY));
    }, []);

    useEffect(_ => {
        if (null === createData) {
            return;
        }
        crudCreate(KEY, createData)
    }, [createData]);

    return (
        <div className="container">
            <div className="row">
                <div className="col-4">
                    <Create />
                </div>
                <div className="col-8">
                    <List colors={colors} />
                </div>
            </div>
        </div>
    );

}