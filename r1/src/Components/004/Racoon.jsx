import rand from '../../Functions/rand';
// import randColor from '../../Functions/randColor';

function Racoon({size, niceColor, name}) {

    return (
        <>
            {
                rand(0, 1)
                    ? <span className="blue">{name}</span>
                    : <span className="red">{name}</span>
            }

            <h2 className="red" style={{
                fontSize: size + 'px',
                color: niceColor
            }}
            >
                Rac
                <i className="blue">00</i>
                n
            </h2>
        </>
    );

}

export default Racoon;