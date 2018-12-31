@extends('layouts.app')
@section('content')
<!-- start main -->
<div class="main_bg">
  <div class="container">
    <div class="main row">
      <div class="col-md-12"> 
        <!-- Library Stock/Accession Register -->
        @if(session()->has('bookList'))
        <div class="alert alert-success">
          <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
          {{session()->get('bookList')}}
        </div>
        @endif
        <!-- View -->
        <h3><strong>Book Lists</strong><button class="fa-btn btn-1 btn-1e circle-btn-add pull-right" id="addbooklist"><i class="fa fa-plus"></i></button></h3><br>
        <div class="table-responsive" style="display: block; overflow-x: auto; white-space: nowrap; border:1px solid lightgray;">
          <table class="table table-hover stdnt-table">
            <thead>
                  <tr>
                    <th>ID</th>
                    <th>Date</th>
                    <th>Book Title</th>
                    <th>Author Name</th>
                    <th>Publisher Address</th>
                    <th>Publish Date</th>
                    <th>Total Pages</th>
                    <th>Price</th>
                    <th>Seller Name</th>
                    <th>ISBN No</th>
                    <th>Remarks</th>
                    <th>Description</th>
                    <th>Membership Record</th>
                    <th>Total Books</th>
                    <th>Action</th>
                  </tr>
              </thead>
              <tbody>
              @if(count($showList)>0)
                @foreach($showList as $booklist)
                  <tr id="tbl_show{{$booklist->id}}">
                    <td>{{$booklist->id}}</td>
                    <td>{{$booklist->date}}</td>
                    <td>{{$booklist->bookTitle}}</td>
                    <td>{{$booklist->authorName}}</td>
                    <td>{{$booklist->publisherAddress}}</td>
                    <td>{{$booklist->publishDate}}</td>
                    <td>{{$booklist->totalPages}}</td>
                    <td>{{$booklist->price}}</td>
                    <td>{{$booklist->sellerName}}</td>
                    <td>{{$booklist->ISBN}}</td>
                    <td>{{$booklist->remarks}}</td>
                    <td>{{$booklist->description}}</td>
                    <td>{{$booklist->membershipRecord}}</td>
                    <td>{{$booklist->totalBooks}}</td>
                    <td>
                      <a href=""><i class="fa fa-pencil"></i></a> &nbsp;
                      <a href="" data-toggle="modal" onclick="delete_booklist('{{$booklist->id}}');"><i class="fa fa-trash text-danger"></i></a>
                    </td>
                  </tr>
                @endforeach
                @else
                <tr>
                  <td>No Record added to Show Please add new record</td>
                </tr>
              @endif
              </tbody>
          </table>
          <div class="text-right"><?php echo $showList->render(); ?></div>
        </div>
        <!-- End View -->
        <div class="box box-primary" id="bookListForm" style="display: none;">
            <h3 class="box-title">Library Stock/Accession Register</h3>
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
               <input type="date" class="form-control" name="date" id="date" placeholder="Date">
             </div>
             <div class="form-group">
               <label for="bookTitle">Title of book with edition</label>
               <input type="text" class="form-control" name="bookTitle" id="bookTitle" placeholder="Title of book with edition">
             </div>
             <div class="form-group">
               <label for="author">Author</label>
               <input type="text" class="form-control" name="authorName" id="author" placeholder="Author">
             </div>
             <div class="form-group">
               <label for="publisherAddress">Publisher with address</label>
               <input type="text" class="form-control" name="publisherAddress" id="publisherAddress" placeholder="Publisher with address">
             </div>
             <div class="form-group">
               <label for="publishDate">Date of publish</label>
               <input type="date" class="form-control" name="publishDate" id="publishDate" placeholder="Date of publish">
             </div>
             <div class="form-group">
               <label for="totalPages">No. of Pages</label>
               <input type="number" class="form-control" name="totalPages" id="totalPages" placeholder="No. of Pages">
             </div>
             <div class="form-group">
               <label for="price">Price</label>
               <input type="text" class="form-control" name="price" id="price" placeholder="Price">
             </div>
             <div class="form-group">
               <label for="sellerName">Name of seller/Donor</label>
               <input type="text" class="form-control" name="sellerName" id="sellerName" placeholder="Name of seller/Donor">
             </div>
             <div class="form-group">
               <label for="ISBN">ISBN</label>
               <input type="text" class="form-control" name="ISBN" id="ISBN" placeholder="ISBN">
             </div>
             <div class="form-group">
               <label for="remarks">Remarks</label>
               <textarea class="form-control" id="remarks" name="remarks" placeholder="Remarks"></textarea>
             </div>
             <div class="form-group">
               <label for="description">Book description</label>
               <textarea class="form-control" id="description" name="description" placeholder="Book description"></textarea>
             </div>
             <div class="form-group">
               <label for="membershipRecord">Library membership record</label>
               <input type="text" class="form-control" id="membershipRecord" name="membershipRecord" placeholder="Library membership record">
             </div>
             <div class="form-group">
               <label for="bookForm">List of Books in soft form/digital form</label>
               <textarea class="form-control" id="bookForm" name="totalBooks" placeholder="List of Books in soft form/digital form"></textarea>
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