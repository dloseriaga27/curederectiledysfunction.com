<div class="modal fade" id="edit{{$blog->b_id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="padding:60px;">
  <div class="modal-dialog modal-lg" >
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Blog</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form class="wc-form" method="POST" id="saveService" action="/blogsupdate/{{$blog->b_id}}" enctype='multipart/form-data'>
        {{ csrf_field() }}
      <div class="modal-body">
       
            <div class="form-group">
              <label for="file">Thumbnail:</label>
              <input type="file" id="file" accept="image/png, image/gif, image/jpeg"  placeholder="Enter service name" name="thumbnail">
            </div>
            <div class="form-group">
              <label for="email">Title:</label>
              <input type="text" id="title" placeholder="Enter service name" name="title" value="{{$blog->b_title}}">
            </div>
      
            <div class="form-group">
              <label for="email">Short Description</label>
              <input type="text" id="shortDesc" placeholder="Short Description" name="shortDesc" value="{{$blog->b_shortDesc}}">
            </div>
              <div class="form-group">
              <label for="email">Description:</label>
              <textarea name="longDesc" class="customToolbarEditor" id="editor">{{$blog->b_longDesc}}</textarea>
              
            </div>
            <div class="form-group">
                    <label >Status:</label>
                   <select  aria-label="Default select example" name="status" >
                        
                        <option value="Active" <?php if($blog->b_status=="Active") echo 'selected="selected"'; ?> >Active</option>
                        <option value="Deactive" <?php if($blog->b_status=="Deactive") echo 'selected="selected"'; ?>>Deactive</option>
                    </select>
                </div>
        
      </div>
      <div class="modal-footer">
        <button type="submit">Save</button>
        </form>
      </div>
    </div>
  </div>
</div>
</div>

<div class="modal" id="delete{{$blog->s_id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="padding:60px;">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Confirmation</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="wc-form" method="POST" id="saveService" action="/blogsdelete/{{$blog->b_id}}" enctype='multipart/form-data'>
        {{ csrf_field() }}
        <h6 style="font-size:20px;">Are you sure you want to delete this service?</h6>
        <input type="text" id="file" placeholder="Enter service name" name="thumbnail" value="{{$blog->b_path}}" hidden>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-danger">Delete</button>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="modal" id="view{{$blog->b_id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="padding:60px;">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"></h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="wc-service-item">
          <img class="wc-service-thumbnail" src="{{ asset($blog->b_path) }}">
          <br>
          <div class="form-group">
              <label for="email">Title:</label>
              <h6>{{$blog->b_title}}</h6>
          </div>
   
          <div class="form-group">
              <label for="email">Short Description::</label>
              <p>{{$blog->b_shortDesc}}</p>
          </div>
        
          <div class="form-group">
              <label for="email">Long Description::</label>
              <p>{!!html_entity_decode($blog->b_longDesc)!!}</p>
          </div>
            <div class="form-group">
                    <label >Status:</label>
                  <p>{{$blog->b_status}}</p>
                </div>
         
            </div>
        </div>
      </div>
    </div>
  </div>
</div>

