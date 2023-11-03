<div class="modal fade" id="insertModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="padding:60px;">
  <div class="modal-dialog modal-lg" >
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create New Services</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form class="wc-form" method="POST" id="saveService" action="/admin/servicesadd" enctype='multipart/form-data'>
        {{ csrf_field() }}
      <div class="modal-body">
       
            <div class="form-group">
              <label for="file">Thumbnail:</label>
              <input class="wc-input" type="file" id="file" accept="image/png, image/gif, image/jpeg"  placeholder="Enter service name" name="thumbnail">
            </div>
            <div class="form-group">
              <label for="email">Title:</label>
              <input class="wc-input" type="text" id="title" placeholder="Enter service name" name="title">
            </div>
            <div class="wc-form-row" >
                <div class="form-group">
                    <label for="email">Pricing:</label>
                    <input class="wc-input" type="text" id="title" placeholder="$100" name="pricing">
                </div>
                <div class="form-group">
                    <label >Status:</label>
                   <select class="wc-input"  aria-label="Default select example" name="status">
                        <option value="" disabled selected>Select your option</option>
                        <option value="Active">Active</option>
                        <option value="Deactive">Deactive</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
              <label for="email">Short Description</label>
              <input class="wc-input" type="text" id="shortDesc" placeholder="Short Description" name="shortDesc" maxlength="200">
            </div>
              <div class="form-group">
              <label for="email">Description:</label>
               <textarea class="wc-input textarea" name="longDesc" class="customToolbarEditor" id="editor1"></textarea>
              
            </script>
              
            </div>
        
      </div>
      <div class="modal-footer">
        <button class="wc-admin-button w-button" type="submit">Save</button>
        </form>
      </div>
    </div>
  </div>
</div>
</div>