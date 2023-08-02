export default function Delete({ deletePerson, setDeletePerson, destroy }) {

    if (!deletePerson) {
        return null;
    }


    return (
        <div className="modal">
            <div className="modal-dialog modal-dialog-centered">
                <div className="modal-content">
                    <div className="modal-header">
                        <h5 className="modal-title">Confirm</h5>
                        <button type="button" className="btn-close" onClick={_ => setDeletePerson(null)}></button>
                    </div>
                    <div className="modal-body">
                        <p>Do you really want to disconnect <b>{deletePerson.name}</b> from <b>{deletePerson.social}</b>?</p>
                    </div>
                    <div className="modal-footer">
                        <button type="button" className="btn btn-info" onClick={_ => setDeletePerson(null)}>Nop</button>
                        <button type="button" className="btn btn-danger" onClick={_=> destroy(deletePerson.id)}>Yes</button>
                    </div>
                </div>
            </div>
        </div>
    );
}