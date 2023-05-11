import { useState } from "react"

export default function Ls() {

    const [title, setTitle] = useState(['Racoon', 'Fox']);

    const add = _ => {
        localStorage.setItem('animal', JSON.stringify('5'));
    }

    const get = _ => {
        console.log(typeof JSON.parse(localStorage.getItem('animal')))
        setTitle(JSON.parse(localStorage.getItem('animal')));
    }

    const kill = _ => {
        localStorage.removeItem('animal');
    }

    return (
        <>
            <h1>{title}</h1>

            <button className="yellow" onClick={add}>add</button>
            <button className="yellow" onClick={get}>get</button>
            <button className="red" onClick={kill}>kill</button>
        </>

    );


}
