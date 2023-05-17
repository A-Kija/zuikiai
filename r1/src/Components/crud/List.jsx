import { useRef } from "react";

export default function List({ colors, setDeleteModalData, setEditModalData, doSort, sort, filter, setFilter }) {

    const ec = useRef(0);

    const destroy = c => setDeleteModalData(c);
    const edit = c => {
        console.log(++ec.current);
        setEditModalData(c);
    };

    return (
        <div className="card m-5">
            <h5 className="card-header color-yellow list-header">
                <span>My fancy colors</span>
                <span className={'sort-button ' + sort} onClick={doSort}></span>
                <input type="text" value={filter} onChange={e => setFilter(e.target.value)}></input>
            </h5>
            <div className="card-body">
                <ul className="list-group list-group-flush">
                    {console.log(colors)}
                    {
                        colors
                            ? colors.length
                                ? colors.map(c => (c.show
                                    ? <li key={c.id} className="list-group-item">
                                        <div className="color-item">
                                            <div className="color-line" style={{ backgroundColor: c.color }}>
                                                {c.title}
                                            </div>
                                            <div className="buttons">
                                                <button onClick={_ => destroy(c)}>delete</button>
                                                <button onClick={_ => edit(c)}>edit</button>
                                            </div>
                                        </div>
                                    </li>
                                    : null))
                                : 'No colors yet'
                            : '...loading'
                    }
                </ul>
            </div>
        </div>
    )
}