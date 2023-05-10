export default function Dogs() {

    const dogs = ['šuo', 'šunius', 'Bobikas', 'kudlius', 'Šarikas', 'avigalvis'];

    return (
        <div className="sq-bin">
        
        {
            dogs.map((d, i) => <div key={i} className="sq">{d}</div>)
        }
        
        </div>
    )
}