<div class="modal">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Color</h5>
        <button type="button" class="btn-close --close"></button>
      </div>
      <div class="modal-body">
        <label class="form-label">Color picker</label>
        <input type="color" class="create--color form-control form-control-color" title="Choose your color" value="<?= $color['hex'] ?>">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary --close">Close</button>
        <button 
            type="button" 
            class="btn btn-primary update--button"  
            data-url="<?= URL ?>colors/update/<?= $color['id'] ?>"
            >Save changes</button>
      </div>
    </div>
  </div>
</div>