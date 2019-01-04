@extends('layouts.app')
@section('content')
<!-- start main -->
<div class="main_bg">
  <div class="container">
    <div class="main row">
      <div class="col-md-12"> 
        <div class="box box-primary">
            <h3 class="box-title">Books List</h3>
          <!-- form start --><br>
          <form role="form" method="Post" action="{{url('adminView/book_list')}}">
            {{ csrf_field() }}
           <div class="box-body">
             <!-- <div class="form-group">
               <label for="SrNo">Sr No</label>
               <input type="number" class="form-control" id="SrNo" placeholder="Sr No">
             </div> -->
             <div class="form-group">
               <label for="date">Date</label>
               <input type="hidden" name="id" value="{{$data->id}}">
               <input type="date" class="form-control" name="date" id="date" value="{{$data->date}}" placeholder="Date">
             </div>
             <div class="form-group">
               <label for="bookTitle">Title of book with edition</label>
               <input type="text" class="form-control" name="bookTitle" id="bookTitle" value="{{$data->bookTitle}}" placeholder="Title of book with edition">
             </div>
             <div class="form-group">
               <label for="author">Author</label>
               <input type="text" class="form-control" name="authorName" id="author" value="{{$data->authorName}}" placeholder="Author">
             </div>
             <div class="form-group">
               <label for="publisherAddress">Publisher with address</label>
               <input type="text" class="form-control" name="publisherAddress" value="{{$data->publisherAddress}}" id="publisherAddress" placeholder="Publisher with address">
             </div>
             <div class="form-group">
               <label for="publishDate">Date of publish</label>
               <input type="date" class="form-control" name="publishDate" value="{{$data->publishDate}}" id="publishDate" placeholder="Date of publish">
             </div>
             <div class="form-group">
               <label for="totalPages">No. of Pages</label>
               <input type="number" class="form-control" name="totalPages" value="{{$data->totalPages}}" id="totalPages" placeholder="No. of Pages">
             </div>
             <div class="form-group">
               <label for="price">Price</label>
               <input type="text" class="form-control" name="price" id="price" value="{{$data->price}}" placeholder="Price">
             </div>
             <div class="form-group">
               <label for="sellerName">Name of seller/Donor</label>
               <input type="text" class="form-control" name="sellerName" value="{{$data->sellerName}}" id="sellerName" placeholder="Name of seller/Donor">
             </div>
             <div class="form-group">
               <label for="ISBN">ISBN</label>
               <input type="text" class="form-control" name="ISBN" id="ISBN" value="{{$data->ISBN}}" placeholder="ISBN">
             </div>
             <div class="form-group">
               <label for="remarks">Remarks</label>
               <textarea class="form-control" id="remarks" name="remarks" placeholder="Remarks">{{$data->remarks}}</textarea>
             </div>
             <div class="form-group">
               <label for="description">Book description</label>
               <textarea class="form-control" id="description" name="description" placeholder="Book description">{{$data->id}}</textarea>
             </div>
             <div class="form-group">
               <label for="membershipRecord">Library membership record</label>
               <input type="text" class="form-control" id="membershipRecord" name="membershipRecord" value="{{$data->membershipRecord}}" placeholder="Library membership record">
             </div>
             <div class="form-group">
               <label for="bookForm">List of Books in soft form/digital form</label>
               <textarea class="form-control" id="bookForm" name="totalBooks" placeholder="List of Books in soft form/digital form">{{$data->totalBooks}}</textarea>
             </div>
           </div><!-- /.box-body -->

            <div class="box-footer">
              <button type="submit" class="fa-btn btn-1 btn-1e">Submit</button>
            </div>
          </form>
        </div><!-- /.box -->
      </div>
    </div>
  </div>  
</div>
<!-- end main -->

<script>
  $('#addbooklist').click(function(){
    $('#bookListForm').toggle();
  });


  function delete_booklist(id)
  {
    if(confirm("Are you sure you want to delete class time table")){
      $.ajax({
        url: "{{url('adminView/delete_booklist')}}/"+id,
        success: function(response){
          console.log(response);
          if(response == "1"){
            $('#tbl_show'+id).remove();
          }
        }
      });
    }
  }

</script>

@endsection