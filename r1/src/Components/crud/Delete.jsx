export default function Delete({ deleteModalData, setDeleteModalData, setDeleteData }) {

    const destroy = _ => {
        setDeleteData(deleteModalData);
        setDeleteModalData(null);
    }

    if (null === deleteModalData) {
        return null;
    }

    return (
        <div className="modal">
            <div className="modal-dialog  modal-dialog-centered">
                <div className="modal-content">
                    <div className="modal-header">
                        <h5 className="modal-title red-color">Confirm delete</h5>
                        <button type="button" className="btn btn-close" onClick={_ => setDeleteModalData(null)}></button>
                    </div>
                    <div className="modal-body">
                        <p>Are you sure to delete this color?</p>
                    </div>
                    <div className="modal-footer">
                        <button type="button" className="green" onClick={_ => setDeleteModalData(null)}>Cancel</button>
                        <button type="button" className="red" onClick={destroy}>Delete</button>
                    </div>
                </div>
            </div>
        </div>
    );

}