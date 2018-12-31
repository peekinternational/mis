@extends('layouts.app')
@section('content')
<!-- start main -->
<div class="main_bg">
  <div class="container">
    <div class="main row">
      <div class="col-md-12"> 
        @if(session()->has('Inventry'))
        <div class="alert alert-success">
          <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
          {{session()->get('Inventry')}}
        </div>
        @endif
        <!-- View -->
        <h3><strong>Inventory Record</strong><button class="fa-btn btn-1 btn-1e circle-btn-add pull-right" id="addInventryRecrd"><i class="fa fa-plus"></i></button></h3><br>
        <div class="table-responsive" style="display: block; overflow-x: auto; white-space: nowrap; border:1px solid lightgray;">
          <table class="table table-hover stdnt-table">
            <thead>
                  <tr>
                    <th>ID</th>
                    <th>Article Name</th>
                    <th>Purchase Date</th>
                    <th>Rate</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Purchased out of FTF/NSB/Donation</th>
                    <th>Head of A/C</th>
                    <th>Sign of receiving person</th>
                    <th>Remarks</th>
                    <th>Sign of DDO/Pricipal</th>
                    <th>Requisition details</th>
                    <th>Details of bill passing</th>
                    <th>Add/Delete stock</th>
                    <th>Item Issued & Return details</th>
                    <th>Action</th>
                  </tr>
              </thead>
              <tbody>
              @if(count($showInventory)>0)
                @foreach($showInventory as $inventryRecrd)
                  <tr id="tbl_show{{$inventryRecrd->id}}">
                    <td>{{$inventryRecrd->id}}</td>
                    <td>{{$inventryRecrd->articleName}}</td>
                    <td>{{$inventryRecrd->PurchaseDate}}</td>
                    <td>{{$inventryRecrd->rate}}</td>
                    <td>{{$inventryRecrd->quantity}}</td>
                    <td>{{$inventryRecrd->price}}</td>
                    <td>{{$inventryRecrd->purchasedOut}}</td>
                    <td>{{$inventryRecrd->headofAC}}</td>
                    <td>{{$inventryRecrd->receivingSign}}</td>
                    <td>{{$inventryRecrd->remarks}}</td>
                    <td>{{$inventryRecrd->principalSign}}</td>
                    <td>{{$inventryRecrd->requisitionDetail}}</td>
                    <td>{{$inventryRecrd->billPassing}}</td>
                    <td>{{$inventryRecrd->adddeleteStock}}</td>
                    <td>{{$inventryRecrd->itemIssued}}</td>
                    <td>
<<<<<<< HEAD
                      <a href="{{url('/adminView/editUpdateInventory/'.$inventryRecrd->id)}}"><i class="fa fa-pencil"></i></a> &nbsp;
=======
                      <a href=""><i class="fa fa-pencil"></i></a> &nbsp;
>>>>>>> f7bbf2ca0d51829353daca26c61842ad66595bf7
                      <a href="" data-toggle="modal" onclick="delete_inventryRecrd('{{$inventryRecrd->id}}');"><i class="fa fa-trash text-danger"></i></a>
                    </td>
                  </tr>
                @endforeach
                @else
                <tr>
<<<<<<< HEAD
                  <td colspan="8">No Record added to Show Please add new record</td>
=======
                  <td>No Record added to Show Please add new record</td>
>>>>>>> f7bbf2ca0d51829353daca26c61842ad66595bf7
                </tr>
              @endif
              </tbody>
          </table>
<<<<<<< HEAD
          <div class="text-right">{{$showInventory->render()}}</div>
=======
          <div class="text-right"><?php echo $showInventory->render(); ?></div>
>>>>>>> f7bbf2ca0d51829353daca26c61842ad66595bf7
        </div>
        <!-- End View -->

        <!-- Minutes of Meeting -->
        <div class="box box-primary" id="inventryRecrdForm" style="display: none;">
          <h3 class="box-title"><strong>General Stock Register</strong></h3>
          <br>
          <!-- form start -->
          <form role="form" method="post" action="{{url('adminView/update_inventory')}}">
            {{ csrf_field() }}
            <div class="box-body">
              <div class="form-group col-md-6">
                <label for="PurchaseDate">Date of purchase</label>
                <input type="date" class="form-control" name="purchaseDate" id="purchaseDate" placeholder="date">
              </div>
              <div class="form-group col-md-6">
                <label for="article">Name of article</label>
                <input type="text" class="form-control" name="articleName" id="articleName" placeholder="Name of article">
              </div>
              <div class="form-group col-md-6">
                <label for="rate">Rate</label>
                <input type="text" class="form-control" name="rate" id="rate" placeholder="Rate">
              </div>
              <div class="form-group col-md-6">
                <label for="quantity">Quantity</label>
                <input type="text" class="form-control" name="quantity" id="quantity" placeholder="Quantity">
              </div>
              <div class="form-group col-md-6">
                <label for="price">Price</label>
                <input type="text" class="form-control" name="price" id="price" placeholder="Price">
              </div>
              <div class="form-group col-md-6">
                <label for="purchasedOut">Purchased out of FTF/NSB/Donation</label>
                <input type="text" class="form-control" id="purchasedOut" name="purchasedOut" placeholder="Purchased Out">
              </div>
              <div class="form-group col-md-6">
                <label for="headofAC">Head of A/C</label>
                <input type="text" class="form-control" id="headofAC" name="headofAC" placeholder="Head of A/C">
              </div>
              <div class="form-group col-md-6">
                <label for="sign">Sign of receiving person</label>
                <input type="text" class="form-control" id="sign" name="receivingSign" placeholder="Sign of receiving person">
              </div>
              <div class="form-group col-md-6">
                <label for="remarks">Remarks</label>
                <textarea class="form-control" id="remarks" name="remarks" placeholder="Remarks" rows="7"></textarea>
              </div>
              <div class="form-group col-md-6">
                <label for="SignDdo">Sign of DDO/Pricipal</label>
                <textarea class="form-control" id="SignDdo" name="principalSign" placeholder="Sign of DDO/Pricipal" rows="7"></textarea>
              </div>
              <div class="form-group col-md-6">
                <label for="requisition">Requisition details</label>
                <textarea class="form-control" id="requisition" name="requisitionDetail" placeholder="Requisition Details" rows="7"></textarea>
              </div>
              <div class="form-group col-md-6">
                <label for="billPassing">Details of bill passing</label>
                <textarea class="form-control" id="billPassing" name="billPassing" placeholder="Details of bill passing" rows="7"></textarea>
              </div>
              <div class="form-group col-md-6">
                <label for="addStock">Add/Delete stock</label>
                <input type="text" class="form-control" name="adddeleteStock" placeholder="Add/Delete Stock">
              </div>
              <div class="form-group col-md-6">
                <label for="itemIssued">Item Issued & Return details</label>
                <textarea class="form-control" id="itemIssued" name="itemIssued" placeholder="Item Issued & Return details"></textarea>
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
  $('#addInventryRecrd').click(function(){
    $('#inventryRecrdForm').toggle();
  });


  function delete_inventryRecrd(id)
  {
    if(confirm("Are you sure you want to delete class time table")){
      $.ajax({
        url: "{{url('adminView/delete_inventryRecrd')}}/"+id,
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