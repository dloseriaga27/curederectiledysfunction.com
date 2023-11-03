@extends('admin.layout.layout')

@section('content')
<script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>

<div class="w-layout-hflex wc-admin-pagebody-header">
          <div class="wc-admin-pagebody-header-title">Services Data Table</div>
          <button class="wc-admin-button w-button" data-bs-toggle="modal" data-bs-target="#insertModal"><span class="wc-admin-f-icon"></span>Add New </button>
        </div>
        <div class="w-layout-vflex wc-admin-pagebody-tablewrapper">
          <table class="w-layout-vflex wc-admin-pagebody-table">
            <div class="w-layout-hflex wc-admin-pagebody-tablewrappe-theader">
              <div class="wc-admin-pagebody-tablewrappe-td hd one">
                <div>SR No.</div>
              </div>
              <div class="wc-admin-pagebody-tablewrappe-td hd two desktop">
                <div>Thumbnail</div>
              </div>
              <div class="wc-admin-pagebody-tablewrappe-td hd three">
                <div>Title</div>
              </div>
              <div class="wc-admin-pagebody-tablewrappe-td hd four tablet">
                <div>Description</div>
              </div>
           
              <div class="wc-admin-pagebody-tablewrappe-td hd six desktop">
                <div>Status</div>
              </div>
              <div class="wc-admin-pagebody-tablewrappe-td hd seven last">
                <div>Action</div>
              </div>
            </div>


            @php
              $row = 1; //Initialize variable
            @endphp

            @foreach($services as $service)

              <div class="w-layout-hflex wc-admin-pagebody-tablewrappe-tbody">
                <div class="wc-admin-pagebody-tablewrappe-td one">
                  <div>{{$row++;}}</div>
                </div>
                <div class="wc-admin-pagebody-tablewrappe-td two desktop">
                  <div><img  src="{{ asset($service->s_path) }}"></div>
                </div>
                <div class="wc-admin-pagebody-tablewrappe-td three">
                  <div>{{ Str::limit($service->s_title, 50) }}</div>
                </div>
                <div class="wc-admin-pagebody-tablewrappe-td four tablet">
                  <div>{{ Str::limit($service->s_shortDesc, 90) }}</div>
                </div>

                <div class="wc-admin-pagebody-tablewrappe-td six desktop">
                  <div>{{$service->s_status}}</div>
                </div>
                <div class="wc-admin-pagebody-tablewrappe-td seven last">
                  <div data-hover="false" data-delay="0" class="wc-admin-action-dp w-dropdown">
                    <div class="wc-admin-action-toggle w-dropdown-toggle">
                      <div></div>
                    </div>
                    <nav class="wc-admin-action-list w-dropdown-list">
                      <a href="#view{{$service->s_id}}" class="wc-admin-action-link w-dropdown-link" data-bs-toggle="modal"><span class="wc-admin-f-icon blue"></span>View</a>
                      <a href="#edit{{$service->s_id}}" class="wc-admin-action-link w-dropdown-link" data-bs-toggle="modal"><span class="wc-admin-f-icon green"></span>Edit</a>
                      <a href="#delete{{$service->s_id}}" class="wc-admin-action-link w-dropdown-link" data-bs-toggle="modal"><span class="wc-admin-f-icon red"></span>Delete</a>
                    </nav>
                  </div>
                </div>
              </div>

               @include('admin.servicesModal.action')

            @endforeach     
                   
              @include('admin.servicesModal.modal')

          </table>
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