import { useState } from 'react';
import variables from '../../variables.module.scss';
export default function Buttons() {

   const [count, setCount] = useState(32);

   const [color, setColor] = useState('orange');

    const makeRed = _ => {
        console.log('%c RED ', `background:${variables.red};`)
    }

    const makeYellow = _ => {
        console.log('%c YELLOW ', `background:${variables.yellow};`)
    }

    const changeColor = _ => {
        setColor(c => c === 'pink' ? 'orange' : 'pink');
    }

    const make8 = _ => {
        // count = 8; //labai labai labai blogai!
        setCount(8); // geras nes nenaudojom seno steito
    }

    const makePlus1 = _ => {
        // setCount(count + 1); // blogai nes naudojamas senas steitas. redaguojama

        setCount(oldState => oldState + 1);
        setCount(c => c + 1);
        setCount(c => c + 1);

        // console.log(count);

    }

    const cycle = _ => {
        setCount(c => {
            if (c >= 9) {
                return 0;
            }
            return c + 1
        });
    }

    return (
        <>
        <h1 style={{color}}>{count}</h1>
        <button className='blue' onClick={cycle}>0 - 9</button>
        <button onClick={changeColor}>Change Color</button>
        <button className="blue" onClick={makePlus1}>+1</button>
        <button className="black" onClick={make8}>8</button>
        <button className="red" onClick={makeRed}>red</button>
        <button className="yellow" onClick={makeYellow}>yellow</button>
        </>
    );

}