import { useState } from "react"

export default function Inputs() {


    const [view, setView] = useState('')

    const [text1, setText1] = useState('');
    const [text2, setText2] = useState({t1: '', t2: ''});
    const [range, setRange] = useState(0);
    const [color, setColor] = useState('#ffffff');
    const [select, setSelect] = useState(5);

    const handleText1 = e => {
        setText1(e.target.value);
    }

    const handleText2 = (e, prop) => {
        setText2(t => ({...t, [prop]: e.target.value}));
    }

    const handleRange = e => {
        setRange(e.target.value);
    }

    const handleColor = e => {
        setColor(e.target.value);
    }

    const handleSelect = e => {
        setSelect(e.target.value);
    }


    return (
        <>
        <h1 style={{color}}>{view}</h1>
        <fieldset>
            <legend>1 text & 1 state</legend>
            <div>
            <input type="text" value={text1} onChange={handleText1} />
            <button onClick={_ => setView(text1)}>view</button>
            </div>
        </fieldset>
        <fieldset>
            <legend>2 text & 1 state</legend>
            <div>
            <input type="text" value={text2.t1} onChange={e => handleText2(e, 't1')} />
            <button onClick={_ => setView(text2.t1)}>view</button>
            </div>
            <div>
            <input type="text" value={text2.t2} onChange={e => handleText2(e, 't2')} />
            <button onClick={_ => setView(text2.t2)}>view</button>
            </div>
        </fieldset>
        <fieldset>
            <legend>range ({range}) & color </legend>
            <div>
            <input type="range" value={range} onChange={handleRange} />
            <button onClick={_ => setView(range)}>view</button>
            </div>
            <div>
            <input type="color" value={color} onChange={handleColor} />
            <button onClick={_ => setView(color)}>view</button>
            </div>
        </fieldset>
        <fieldset>
            <legend>select</legend>
            <div>
            <select value={select}  onChange={handleSelect}>
                <option value="HA">One</option>
                <option value="COOCOO">Two</option>
                <option value="5">five</option>
            </select>
            <button onClick={_ => setView(select)}>view</button>
            </div>
        </fieldset>
        
        </>
    )

}