@extends('layouts.app')
@section('content')
<!-- start main -->
<div class="main_bg">
  <div class="container">
    <div class="main row">
      <div class="col-md-12"> 
        <!-- Book Issuance Register -->
        @if(session()->has('issuedBook'))
        <div class="alert alert-success">
          <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
          {{session()->get('issuedBook')}}
        </div>
        @endif
        <!-- View -->
        <h3><strong>Book Lists</strong><button class="fa-btn btn-1 btn-1e circle-btn-add pull-right" id="addissuedBooks"><i class="fa fa-plus"></i></button></h3><br>
        <div class="table-responsive" style="display: block; overflow-x: auto; white-space: nowrap; border:1px solid lightgray;">
          <table class="table table-hover stdnt-table">
            <thead>
                  <tr>
                    <th>ID</th>
                    <th>Book Title</th>
                    <th>Author Name</th>
                    <th>Accession No</th>
                    <th>Date of Issue</th>
                    <th>Borrower's Card No</th>
                    <th>Borrower's Sign</th>
                    <th>Date of Return</th>
                    <th>Date of Renewal</th>
                    <th>Librarian Sign</th>
                    <th>No. of days Delayed</th>
                    <th>Fine</th>
                    <th>Receipt No. & Date</th>
                    <th>Librarian Initials</th>
                    <th>Action</th>
                  </tr>
              </thead>
              <tbody>
              @if(count($showIssuedBook)>0)
                @foreach($showIssuedBook as $issuedBooks)
                  <tr id="tbl_show{{$issuedBooks->id}}">
                    <td>{{$issuedBooks->id}}</td>
                    <td>{{$issuedBooks->bookTitle}}</td>
                    <td>{{$issuedBooks->authorName}}</td>
                    <td>{{$issuedBooks->accessionNo}}</td>
                    <td>{{$issuedBooks->issueDate}}</td>
                    <td>{{$issuedBooks->borrowerCardNo}}</td>
                    <td>{{$issuedBooks->borrowerSign}}</td>
                    <td>{{$issuedBooks->returnDate}}</td>
                    <td>{{$issuedBooks->renewalDate}}</td>
                    <td>{{$issuedBooks->librarianSign}}</td>
                    <td>{{$issuedBooks->delayedDays}}</td>
                    <td>{{$issuedBooks->fine}}</td>
                    <td>{{$issuedBooks->receiptNo}}</td>
                    <td>{{$issuedBooks->librarianInitials}}</td>
                    <td>
                      <a href="{{url('adminView/edit-issuedbooks/'.$issuedBooks->id)}}"><i class="fa fa-pencil"></i></a> &nbsp;
                      <a href="" data-toggle="modal" onclick="delete_issuedBooks('{{$issuedBooks->id}}');"><i class="fa fa-trash text-danger"></i></a>
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
          <div class="text-right"><?php echo $showIssuedBook->render(); ?></div>
        </div>
        <!-- End View -->
        <div class="box box-primary" id="issuedBookForm" style="display: none;">
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
                <input type="text" class="form-control" name="bookTitle" id="bookTitle" placeholder="Title of book">
              </div>
              <div class="form-group">
                <label for="author">Author</label>
                <input type="text" class="form-control" name="authorName" id="author" placeholder="Author">
              </div>
              <div class="form-group">
                <label for="accessionNo">Accession No.</label>
                <input type="text" class="form-control" name="accessionNo" id="accessionNo" placeholder="Accession No">
              </div>
              <div class="form-group">
                <label for="issueDate">Date of issue</label>
                <input type="date" class="form-control" name="issueDate" id="issueDate" placeholder="Date of issue">
              </div>
              <div class="form-group">
                <label for="borrowerCardNo">Borrower's Card No.</label>
                <input type="number" class="form-control" min="0" name="borrowerCardNo" id="borrowerCardNo" placeholder="Borrower's Card No">
              </div>
              <div class="form-group">
                <label for="borrowerSign">Borrower's sign</label>
                <input type="text" class="form-control" name="borrowerSign" id="borrowerSign" placeholder="Borrower's sign">
              </div>
              <div class="form-group">
                <label for="returnDate">Date of return</label>
                <input type="date" class="form-control" name="returnDate" id="returnDate" placeholder="Date of return">
              </div>
              <div class="form-group">
                <label for="renewalDate">Date of renewal</label>
                <input type="date" class="form-control" name="renewalDate" id="renewalDate" placeholder="Date of renewal">
              </div>
              <div class="form-group">
                <label for="librarianSign">Librarian sign</label>
                <textarea class="form-control" id="librarianSign" name="librarianSign" placeholder="Librarian sign"></textarea>
              </div>
              <div class="form-group">
                <label for="delayedDays">No. of days delayed</label>
                <input type="number" class="form-control" min="0" name="delayedDays" id="delayedDays" placeholder="No. of days delayed">
              </div>
              <div class="form-group">
                <label for="fine">Fine</label>
                <input type="text" class="form-control" name="fine" id="fine" placeholder="Fine">
              </div>
              <div class="form-group">
                <label for="receiptNo">Receipt No. & Date</label>
                <input type="text" class="form-control" name="receiptNo" id="receiptNo" placeholder="Receipt No. & Date">
              </div>
              <div class="form-group">
                <label for="librarianInitials">Librarian initials</label>
                <textarea class="form-control" id="librarianInitials" name="librarianInitials" placeholder="Librarian initials"></textarea>
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