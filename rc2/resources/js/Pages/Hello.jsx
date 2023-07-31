import '../../sass/style.scss';

export default function Hello({color, name}) {
    return (
        <h1 className="hello-h1" style={{
            color: color,
        }}>Hello from REACT, {name}</h1>
    );
}