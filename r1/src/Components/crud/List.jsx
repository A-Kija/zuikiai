import { useRef } from "react";

export default function List({ colors, setDeleteModalData, setEditModalData }) {

    const ec = useRef(0);
    
    const destroy = c => setDeleteModalData(c);
    const edit = c => {
        console.log(++ec.current);
        setEditModalData(c);
    };

    return (
        <div className="card m-5">
            <h5 className="card-header color-yellow">My fancy colors</h5>
            <div className="card-body">
                <ul className="list-group list-group-flush">
                    {
                        colors
                            ? colors.length
                                ? colors.map(c => (
                                    <li key={c.id} className="list-group-item">
                                        <div className="color-item">
                                            <div className="color-line" style={{ backgroundColor: c.color }}>
                                                {c.title}
                                            </div>
                                            <div className="buttons">
                                                <button onClick={_ => destroy(c)}>delete</button>
                                                <button onClick={_ => edit(c)}>edit</button>
                                            </div>
                                        </div>
                                    </li>))
                                : 'No colors yet'
                            : '...loading'
                    }
                </ul>
            </div>
        </div>
    )
}