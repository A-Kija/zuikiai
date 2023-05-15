export default function List({ colors }) {

    return (
        <div className="card m-5">
            <h5 className="card-header color-yellow">My fancy colors</h5>
            <div className="card-body">
                <ul className="list-group list-group-flush">
                    {
                        colors ? colors.map(c => (
                        <li key={c.id} className="list-group-item">
                            <div className="color-line" style={{backgroundColor: c.color}}></div>
                        </li>)) : '...loading'
                    }
                </ul>
            </div>
        </div>
    )
}