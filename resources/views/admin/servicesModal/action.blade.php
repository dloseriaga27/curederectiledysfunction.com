<div class="modal fade" id="edit{{$service->s_id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="padding:60px;">
  <div class="modal-dialog modal-lg" >
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Services</h5>
         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form class="wc-form" method="POST" id="saveService" action="/admin/servicesupdate/{{$service->s_id}}" enctype='multipart/form-data'>
        {{ csrf_field() }}
      <div class="modal-body">
       
            <div class="form-group">
              <label class="wc-label" for="file">Thumbnail:</label>
              <input class="wc-input" type="file" id="file" accept="image/png, image/gif, image/jpeg"  placeholder="Enter service name" name="thumbnail" required>
            </div>
            <div class="form-group">
              <label class="wc-label" for="email">Title:</label>
              <input class="wc-input" type="text" id="title" placeholder="Enter service name" name="title" value="{{$service->s_title}}" required>
            </div>
            <div class="wc-form-row" >
                <div class="form-group">
                    <label  class="wc-label" for="email">Pricing:</label>
                    <input class="wc-input" type="text" id="pricing" placeholder="$100" name="pricing" value="{{$service->s_pricing}}" required>
                </div>
                <div class="form-group">
                    <label class="wc-label">Status:</label>
                   <select  class="wc-input" aria-label="Default select example" name="status" required>
                        
                        <option value="Active" <?php if($service->s_status=="Active") echo 'selected="selected"'; ?> >Active</option>
                        <option value="Deactive" <?php if($service->s_status=="Deactive") echo 'selected="selected"'; ?>>Deactive</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
              <label class="wc-label" for="email">Short Description</label>
              <input class="wc-input" type="text" id="shortDesc" placeholder="Short Description" name="shortDesc" value="{{$service->s_shortDesc}}" maxlength="200" required>
            </div>
              <div class="form-group">
              <label class="wc-label" for="email">Description:</label>
              <textarea class="wc-input textarea" name="longDesc" class="customToolbarEditor" id="editor">{{$service->s_longDesc}}</textarea>
              
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

<div class="modal" id="delete{{$service->s_id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="padding:60px;">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Confirmation</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="wc-form" method="POST" id="saveService" action="/admin/servicesdelete/{{$service->s_id}}" enctype='multipart/form-data'>
        {{ csrf_field() }}
        <h6 style="font-size:20px;">Are you sure you want to delete this service?</h6>

        <input type="text" id="file" placeholder="Enter service name" name="thumbnail" value="{{$service->s_path}}" hidden>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-danger">Delete</button>
        </form>
      </div>
    </div>
  </div>
</div>




<div class="modal" id="view{{$service->s_id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="padding:60px;">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="wc-service-item">
          <img class="wc-service-thumbnail" src="{{ asset($service->s_path) }}">
         <br>
          <div class="form-group">
              <h6 class="wc-heading xsmall">{{$service->s_title}}</h6>
          </div>
     <br>
          <p>{{$service->s_shortDesc}}
            <br>
            {!!html_entity_decode($service->s_longDesc)!!}
          </p>
        
          
  
          <div class="wc-form-row" >
                <div class="form-group">
                    <label class="wc-label" for="email">Pricing:</label>
                    <p>{{$service->s_pricing}}</p>
                </div>
                <div class="form-group">
                    <label class="wc-label" >Status:</label>
                  <p>{{$service->s_status}}</p>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>

