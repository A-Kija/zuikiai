import { useState } from "react"

export default function Sq4() {

    const [sq, setSq] = useState([]);

    const add = c => setSq(s => [...s, c]);
        

    return (
        <>
            <div className="sq-bin">
                {
                    sq.map((sq, i) => <div className="sq" style={{
                        backgroundColor: sq === 'B' ? '#87ceeb70' : '#dc143c70',
                        borderColor: sq === 'B' ? '#87ceeb' : '#dc143c'
                    }} key={i}></div>)
                }
            </div>
            <button className="red" onClick={_ => add('R')}>add []</button>
            <button className="blue" onClick={_ => add('B')}>add []</button>
        </>
    )

}