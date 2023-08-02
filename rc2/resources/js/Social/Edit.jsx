import { useEffect, useState } from 'react';
export default function Delete({ editPerson, setEditPerson, update }) {


    const [name, setName] = useState('');
    const [age, setAge] = useState(18);
    const [network, setNetwork] = useState('');


    useEffect(() => {
        if (editPerson) {
            setName(editPerson.name);
            setAge(editPerson.age);
            setNetwork(editPerson.social);
        }
    }, [editPerson]);

    useEffect(() => {
        if (age < 30) {
            setNetwork('tt');
        }
        else if (age < 60) {
            setNetwork('ig');
        }
        else {
            setNetwork('fb');
        }
    }, [age]);

    const doUpdate = _ => {
        const person = {
            name,
            age,
            social: network,
            id: editPerson.id
        }
        update(person);
    }

    if (!editPerson) {
        return null;
    }


    return (
        <div className="modal">
            <div className="modal-dialog modal-dialog-centered">
                <div className="modal-content">
                    <div className="modal-header">
                        <h5 className="modal-title">Confirm</h5>
                        <button type="button" className="btn-close" onClick={_ => setEditPerson(null)}></button>
                    </div>
                    <div className="modal-body">
                        <div className="card m-4">
                            <div className="card-body">
                                <h5 className="card-title">Add</h5>
                                <h6 className="card-subtitle mb-2 text-muted">New nice person</h6>
                                <div className="mb-3">
                                    <label className="form-label">Name</label>
                                    <input type="text" className="form-control" value={name} onChange={e => setName(e.target.value)} />
                                </div>
                                <div className="mb-3">
                                    <label className="form-label">How old <b>{age}</b></label>
                                    <input type="range" className="form-range" min="18" max="98" value={age} onChange={e => setAge(e.target.value)} />
                                </div>
                                <div className="mb-3">
                                    <label className="form-label">Lovely social networks</label>
                                    <ul className="netwoks">
                                        <li className={network === 'tt' ? 'active' : ''} onClick={_ => setNetwork('tt')}>TT</li>
                                        <li className={network === 'ig' ? 'active' : ''} onClick={_ => setNetwork('ig')}>IG</li>
                                        <li className={network === 'fb' ? 'active' : ''} onClick={_ => setNetwork('fb')}>FB</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div className="modal-footer">
                        <button type="button" className="btn btn-info" onClick={_ => setEditPerson(null)}>Nop</button>
                        <button type="button" className="btn btn-danger" onClick={_ => doUpdate()}>Save</button>
                    </div>
                </div>
            </div>
        </div>
    );
}