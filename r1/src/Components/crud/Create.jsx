import { useEffect, useRef, useState } from 'react';

export default function Create({ setCreateData }) {

    const [color, setColor] = useState('#ffffff');

    const ci = useRef();

    useEffect(() => {
        ci.current.focus();
    }, []);

    const save = _ => {
        setCreateData({ color, title: 'No name'});
        setColor('#ffffff');
    }

    return (
        <div className="card m-5">
            <h5 className="card-header color-yellow">Create new color</h5>
            <div className="card-body">
                <h5 className="card-title color-gray">Create your fancy color</h5>

                <div className="m-3">
                    <label className="form-label">Color picker</label>
                    <input type="color" ref={ci} className="form-control form-control-color" value={color} onChange={e => setColor(e.target.value)} title="Choose your color" />
                </div>

                <button className="yellow" onClick={save}>Save Color</button>
            </div>
        </div>
    )

}