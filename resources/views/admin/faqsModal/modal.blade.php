<div class="modal fade" id="insertModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="padding:60px;">
  <div class="modal-dialog modal-lg" >
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create New FAQ's</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form class="wc-form" method="POST"  action="/admin/faqsadd" enctype='multipart/form-data'>
        {{ csrf_field() }}
      <div class="modal-body">
       
            <div class="form-group">
              <label class="wc-label" for="email">Title:</label>
              <input class="wc-input" type="text" id="title" placeholder="Enter faq title" name="title" required>
            </div>
           
              <div class="form-group">
                <label class="wc-label" for="email">Description:</label>
                <textarea class="wc-input" name="longDesc" class="customToolbarEditor" id="editor"></textarea>
              </div>
              <br>
               <div class="wc-form-row" >
                <div class="form-group">
                    <label  class="wc-label" for="email">Order:</label>
                    <input class="wc-input" type="number" id="sort" name="order" value="" required>
                </div>
                <div class="form-group">
                    <label class="wc-label">Status:</label>
                   <select  class="wc-input" aria-label="Default select example" name="status" required>
                        <option value="" disabled selected>Select your option</option>
                        <option value="Active">Active</option>
                        <option value="Deactive">Deactive</option>
                    </select>
                </div>
            </div>
        
      </div>
      <div class="modal-footer">
        <button type="submit" class="wc-admin-button w-button">Save</button>
        </form>
      </div>
    </div>
  </div>
</div>
</div>