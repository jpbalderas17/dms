<!-- Button trigger modal -->
<div class="modal fade" tabindex="-1" role="dialog" id='NewFolderModal'>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Create New Folder</h4>
      </div>
      <div class="modal-body">
        <form action='post'>
          <div class='form-group'>
              <label>Create Folder To</label>
              <select class='form-control'>
                  <option>My Drive</option>
                  <option>My Drive/Folder 01</option>
                  <option>My Drive/Folder 01/ Sub Folder1</option>
                  <option>My Drive/Folder 01/ Sub Folder2</option>
                  <option>My Drive/Folder 02</option>
              </select>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Folder Name</label>
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Folder Name">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Description</label>
            <textarea placehoder='description' class='form-control'></textarea>
          </div>
          <button type="submit" class="btn btn-success">Save</button>
        </form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
