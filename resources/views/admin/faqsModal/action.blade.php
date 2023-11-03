

<div class="modal fade" id="edit{{$faq->f_id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="padding:60px;">
  <div class="modal-dialog modal-lg" >
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update FAQ's</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form class="wc-form" method="POST"  action="/admin/faqsupdate/{{$faq->f_id}}" enctype='multipart/form-data'>
        {{ csrf_field() }}
      <div class="modal-body">
       
            <div class="form-group">
              <label class="wc-label" for="email">Title:</label>
              <input class="wc-input" type="text" id="title" placeholder="Enter service name" name="title" value="{{$faq->f_title}}" required>
            </div>
            <div class="form-group">
              <label class="wc-label" for="email">Description:</label>
              <textarea class="wc-input" name="longDesc" class="customToolbarEditor" id="editor" >{{$faq->f_desc}}</textarea>
              
            </div>
            <br>
            <div class="wc-form-row" >
                <div class="form-group">
                    <label  class="wc-label" for="email">Order:</label>
                    <input class="wc-input" type="number" id="sort" name="order" value="{{$faq->f_orders}}" required>
                </div>
                <div class="form-group">
                    <label class="wc-label">Status:</label>
                   <select  class="wc-input" aria-label="Default select example" name="status" required>
                        
                        <option value="Active" <?php if($faq->f_status=="Active") echo 'selected="selected"'; ?> >Active</option>
                        <option value="Deactive" <?php if($faq->f_status=="Deactive") echo 'selected="selected"'; ?>>Deactive</option>
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





<div class="modal" id="delete{{$faq->f_id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="padding:60px;">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Confirmation</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="wc-form" method="POST"  action="/admin/faqsdelete/{{$faq->f_id}}" enctype='multipart/form-data'>
        {{ csrf_field() }}
        <h6 style="font-size:20px;">Are you sure you want to delete this item?</h6>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="wc-admin-button w-button">Delete</button>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="modal" id="view{{$faq->f_id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="padding:60px;">
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
          
          <div class="form-group">
              <h6 class="wc-heading xsmall">{{$faq->f_title}}</h6>
          </div>
          <br>
          <div class="form-group">
              <div>{!!html_entity_decode($faq->f_desc)!!}</div>
          </div>
          <br>
            <div class="wc-form-row" >
               <div class="form-group">
                  <label >Orders:</label>
                  <p>{{$faq->f_orders}}</p>
              </div>
              <div class="form-group">
                  <label >Status:</label>
                  <p>{{$faq->f_status}}</p>
              </div>
            </div>
          
        </div>
      </div>
    </div>
  </div>
</div>

