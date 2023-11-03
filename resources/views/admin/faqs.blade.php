@extends('admin.layout.layout')

@section('content')
<script src="https://cdn.ckeditor.com/ckeditor5/28.0.0/classic/ckeditor.js"></script>

<div class="w-layout-hflex wc-admin-pagebody-header">
          <div class="wc-admin-pagebody-header-title">FAQ Data Table</div>
          <button class="wc-admin-button w-button" data-bs-toggle="modal" data-bs-target="#insertModal"><span class="wc-admin-f-icon"></span>Add New </button>
        </div>
        <div class="w-layout-vflex wc-admin-pagebody-tablewrapper">
          <table class="w-layout-vflex wc-admin-pagebody-table">
            <div class="w-layout-hflex wc-admin-pagebody-tablewrappe-theader">
              <div class="wc-admin-pagebody-tablewrappe-td hd one">
                <div>SR No.</div>
              </div>
              <div class="wc-admin-pagebody-tablewrappe-td hd two desktop">
                <div>Order No.</div>
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

              @foreach($faqs as $faq)

              <div class="w-layout-hflex wc-admin-pagebody-tablewrappe-tbody">
              <div class="wc-admin-pagebody-tablewrappe-td one">
                <div>{{$row++;}}</div>
              </div>
              <div class="wc-admin-pagebody-tablewrappe-td two desktop">
                <div>{{$faq->f_orders}}</div>
              </div>
              <div class="wc-admin-pagebody-tablewrappe-td three">
                <div>{{$faq->f_title}}</div>
              </div>
              <div class="wc-admin-pagebody-tablewrappe-td four tablet">
                <div>{!!html_entity_decode($faq->f_desc)!!}</div>
              </div>
              <div class="wc-admin-pagebody-tablewrappe-td six desktop">
                <div>{{$faq->f_status}}</div>
              </div>
              <div class="wc-admin-pagebody-tablewrappe-td seven last">
                <div data-hover="false" data-delay="0" class="wc-admin-action-dp w-dropdown">
                  <div class="wc-admin-action-toggle w-dropdown-toggle">
                    <div></div>
                  </div>
                  <nav class="wc-admin-action-list w-dropdown-list">
                    <a href="#view{{$faq->f_id}}" class="wc-admin-action-link w-dropdown-link" data-bs-toggle="modal"><span class="wc-admin-f-icon blue"></span>View</a>
                      <a href="#edit{{$faq->f_id}}" class="wc-admin-action-link w-dropdown-link" data-bs-toggle="modal"><span class="wc-admin-f-icon green"></span>Edit</a>
                      <a href="#delete{{$faq->f_id}}" class="wc-admin-action-link w-dropdown-link" data-bs-toggle="modal"><span class="wc-admin-f-icon red"></span>Delete</a>
                  </nav>
                </div>
              </div>
            </div>

               @include('admin.faqsModal.action')

            @endforeach     
                   
              @include('admin.faqsModal.modal')

          </table>
        </div>


<script>
    window.editors = {};

    document.querySelectorAll( '#editor' ).forEach( ( node, index ) => {
      ClassicEditor
        .create( node, {} )
        .then( newEditor => {
          window.editors[ index ] = newEditor 
        } );
    } );

</script>



  @endsection

  <style type="text/css">
    .ck-content{
        height:150px !important;
    }
</style>
