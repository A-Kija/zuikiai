export default function Messages({messages}) {

    if (!messages.length) {
        return null;
    }

    return (
        <div className="messages">
            {
                messages.map(m => <div className={'message ' + m.type}>{m.text}</div>)
            }
        </div>
    );

}