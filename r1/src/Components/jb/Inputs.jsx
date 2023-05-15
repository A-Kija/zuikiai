import { useState } from "react"

export default function Inputs() {

    const [checkbox, setCheckbox] = useState({
        A: false,
        B: true,
        C: true,
        D: false
    });

    const [radio, setRadio] = useState('A');

    const handleCheckbox = cb => setCheckbox(b => ({...b, [cb]: !b[cb]}));

    const handleRadio = cb => setRadio(b => b === cb ? '' : cb);
    

    return (
        <>
        <fieldset>
            <legend>Checkboxes</legend>
            <div>
                <input type="checkbox" id="_a" checked={checkbox.A} onChange={_ => handleCheckbox('A')}></input>
                <label htmlFor="_a">A</label>
            </div>
            <div>
                <input type="checkbox" id="_b" checked={checkbox.B} onChange={_ => handleCheckbox('B')}></input>
                <label htmlFor="_b">B</label>
            </div>
            <div>
                <input type="checkbox" id="_c" checked={checkbox.C} onChange={_ => handleCheckbox('C')}></input>
                <label htmlFor="_c">C</label>
            </div>
            <div>
                <input type="checkbox" id="_d" checked={checkbox.D} onChange={_ => handleCheckbox('D')}></input>
                <label htmlFor="_d">D</label>
            </div>
        </fieldset>

        <fieldset>
            <legend>Radio</legend>
            <div>
                <input type="checkbox" id="_ra" checked={radio === 'A'} onChange={_ => handleRadio('A')}></input>
                <label htmlFor="_ra">A</label>
            </div>
            <div>
                <input type="checkbox" id="_rb" checked={radio === 'B'} onChange={_ => handleRadio('B')}></input>
                <label htmlFor="_rb">B</label>
            </div>
            <div>
                <input type="checkbox" id="_rc" checked={radio === 'C'} onChange={_ => handleRadio('C')}></input>
                <label htmlFor="_rc">C</label>
            </div>
            <div>
                <input type="checkbox" id="_rd" checked={radio === 'D'} onChange={_ => handleRadio('D')}></input>
                <label htmlFor="_rd">D</label>
            </div>
        </fieldset>


        </>
    )
}