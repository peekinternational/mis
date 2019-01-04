@extends('layouts.app')
@section('content')
<!-- start main -->
<div class="main_bg">
  <div class="container">
    <div class="main row">
      <div class="col-md-12"> 
        <div class="box box-primary" id="issuedBookForm">
            <h3 class="box-title">Book Issuance Register</h3>
          <!-- form start --><br>
          <form role="form" method="Post" action="{{url('adminView/issued_book')}}">
            {{ csrf_field() }}
            <div class="box-body">
              <!-- <div class="form-group">
                <label for="SrNo">Sr No</label>
                <input type="number" class="form-control" id="SrNo" placeholder="Sr No">
              </div> -->
              <div class="form-group">
                <label for="bookTitle">Title of book</label>
                <input type="hidden" name="id" value="{{$data->id}}">
                <input type="text" class="form-control" name="bookTitle" value="{{$data->bookTitle}}" id="bookTitle" placeholder="Title of book">
              </div>
              <div class="form-group">
                <label for="author">Author</label>
                <input type="text" class="form-control" name="authorName" id="author" value="{{$data->authorName}}" placeholder="Author">
              </div>
              <div class="form-group">
                <label for="accessionNo">Accession No.</label>
                <input type="text" class="form-control" name="accessionNo" id="accessionNo" value="{{$data->accessionNo}}" placeholder="Accession No">
              </div>
              <div class="form-group">
                <label for="issueDate">Date of issue</label>
                <input type="date" class="form-control" name="issueDate" id="issueDate" value="{{$data->issueDate}}" placeholder="Date of issue">
              </div>
              <div class="form-group">
                <label for="borrowerCardNo">Borrower's Card No.</label>
                <input type="number" class="form-control" min="0" name="borrowerCardNo" id="borrowerCardNo" value="{{$data->borrowerCardNo}}" placeholder="Borrower's Card No">
              </div>
              <div class="form-group">
                <label for="borrowerSign">Borrower's sign</label>
                <input type="text" class="form-control" name="borrowerSign" id="borrowerSign" value="{{$data->borrowerSign}}" placeholder="Borrower's sign">
              </div>
              <div class="form-group">
                <label for="returnDate">Date of return</label>
                <input type="date" class="form-control" name="returnDate" id="returnDate" value="{{$data->returnDate}}" placeholder="Date of return">
              </div>
              <div class="form-group">
                <label for="renewalDate">Date of renewal</label>
                <input type="date" class="form-control" name="renewalDate" id="renewalDate" value="{{$data->renewalDate}}" placeholder="Date of renewal">
              </div>
              <div class="form-group">
                <label for="librarianSign">Librarian sign</label>
                <textarea class="form-control" id="librarianSign" name="librarianSign" placeholder="Librarian sign">{{$data->librarianSign}}</textarea>
              </div>
              <div class="form-group">
                <label for="delayedDays">No. of days delayed</label>
                <input type="number" class="form-control" min="0" name="delayedDays" id="delayedDays" value="{{$data->delayedDays}}" placeholder="No. of days delayed">
              </div>
              <div class="form-group">
                <label for="fine">Fine</label>
                <input type="text" class="form-control" name="fine" id="fine" value="{{$data->fine}}" placeholder="Fine">
              </div>
              <div class="form-group">
                <label for="receiptNo">Receipt No. & Date</label>
                <input type="text" class="form-control" name="receiptNo" id="receiptNo" value="{{$data->receiptNo}}" placeholder="Receipt No. & Date">
              </div>
              <div class="form-group">
                <label for="librarianInitials">Librarian initials</label>
                <textarea class="form-control" id="librarianInitials" name="librarianInitials" placeholder="Librarian initials">{{$data->librarianInitials}}</textarea>
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
  $('#addissuedBooks').click(function() {
    $('#issuedBookForm').toggle();
  });


  function delete_issuedBooks(id)
  {
    if(confirm("Are you sure you want to delete class time table")){
      $.ajax({
        url: "{{url('adminView/delete_issuedBooks')}}/"+id,
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