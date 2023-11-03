

<div class="modal" id="delete{{$subscribe->c_id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="padding:60px;">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Confirmation</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="wc-form" method="POST" id="saveService" action="/subscribedelete/{{$subscribe->c_id}}" enctype='multipart/form-data'>
        {{ csrf_field() }}
        <h6 style="font-size:20px;">Are you sure you want to delete this service?</h6>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-danger">Delete</button>
        </form>
      </div>
    </div>
  </div>


