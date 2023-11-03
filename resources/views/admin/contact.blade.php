@extends('admin.layout.layout')

@section('content')
<script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>

<div class="w-layout-hflex wc-admin-pagebody-header">
          <div class="wc-admin-pagebody-header-title">Contact Data Table</div>
        </div>
        <div class="w-layout-vflex wc-admin-pagebody-tablewrapper">
          <div class="w-layout-vflex wc-admin-pagebody-table">
            <div class="w-layout-hflex wc-admin-pagebody-tablewrappe-theader">
              <div class="wc-admin-pagebody-tablewrappe-td hd one">
                <div>SR No.</div>
              </div>
              <div class="wc-admin-pagebody-tablewrappe-td hd three name">
                <div>Name</div>
              </div>
              <div class="wc-admin-pagebody-tablewrappe-td hd five medium phone l-desktop">
                <div>Phone Number</div>
              </div>
              <div class="wc-admin-pagebody-tablewrappe-td hd five medium email l-desktop">
                <div>Email</div>
              </div>
              <div class="wc-admin-pagebody-tablewrappe-td hd four tablet">
                <div>Message</div>
              </div>
              <div class="wc-admin-pagebody-tablewrappe-td hd six date desktop">
                <div>Date</div>
              </div>
              <div class="wc-admin-pagebody-tablewrappe-td hd seven last">
                <div>Action</div>
              </div>
            </div>


            @php
              $row = 1; //Initialize variable
            @endphp

            @foreach($contacts as $contact)

              <div class="w-layout-hflex wc-admin-pagebody-tablewrappe-tbody">
                <div class="wc-admin-pagebody-tablewrappe-td one">
                  <div>{{$row++;}}</div>
                </div>
               
                <div class="wc-admin-pagebody-tablewrappe-td three name">
                  <div>{{ Str::limit($contact->c_name, 30) }}</div>
                </div>
                <div class="wc-admin-pagebody-tablewrappe-td five medium phone l-desktop">
                  <div>{{$contact->c_phone}}</div>
                </div>
                <div class="wc-admin-pagebody-tablewrappe-td five medium email l-desktop">
                  <div>{{ Str::limit($contact->c_email, 20) }}</div>
                </div>
                 <div class="wc-admin-pagebody-tablewrappe-td four tablet">
                  <div>{{ Str::limit($contact->c_message, 40) }}</div>
                </div>
                <div class="wc-admin-pagebody-tablewrappe-td six date desktop">
                  <div>{{$contact->created_at->format('F d, Y')}}</div>
                </div>
                <div class="wc-admin-pagebody-tablewrappe-td seven last">
                  <div data-hover="false" data-delay="0" class="wc-admin-action-dp w-dropdown">
                    <div class="wc-admin-action-toggle w-dropdown-toggle">
                      <div></div>
                    </div>
                    <nav class="wc-admin-action-list w-dropdown-list">
                      <a href="#view{{$contact->c_id}}" class="wc-admin-action-link w-dropdown-link" data-bs-toggle="modal"><span class="wc-admin-f-icon blue"></span>View</a>
                      <a href="#delete{{$contact->c_id}}" class="wc-admin-action-link w-dropdown-link" data-bs-toggle="modal"><span class="wc-admin-f-icon red"></span>Delete</a>
                    </nav>
                  </div>
                </div>
              </div>

              @include('admin.contactModal.action')

            @endforeach     
                   
           

          </div>
        </div>


<script>
    ClassicEditor
        .create( document.querySelector( '#editor1' ),{} )
        .catch( error => {
            console.error( error );
        } );

    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>


<style type="text/css">
    .ck-content{
        height:150px !important;
    }
</style>


  @endsection