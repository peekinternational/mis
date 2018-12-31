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
        

        <!-- Minutes of Meeting -->
        <div class="box box-primary" id="inventryRecrdForm">
          <h3 class="box-title"><strong>General Stock Register</strong></h3>
          <br>
          <!-- form start -->
          <form role="form" method="post" action="{{url('adminView/updateInventory')}}">
            {{ csrf_field() }}
            @foreach($inventoryInfo as $inventryRecrd)
            <div class="box-body">
              <div class="form-group col-md-6">
                <label for="PurchaseDate">Date of purchase</label>
                <input type="hidden" name="id" id="id" value="{{$inventryRecrd->id}}">
                <input type="date" class="form-control" name="purchaseDate" id="purchaseDate" value="{{$inventryRecrd->PurchaseDate}}" placeholder="date">
              </div>
              <div class="form-group col-md-6">
                <label for="article">Name of article</label>
                <input type="text" class="form-control" name="articleName" id="articleName" placeholder="Name of article" value="{{$inventryRecrd->articleName}}">
              </div>
              <div class="form-group col-md-6">
                <label for="rate">Rate</label>
                <input type="text" class="form-control" name="rate" id="rate" placeholder="Rate" value="{{$inventryRecrd->rate}}">
              </div>
              <div class="form-group col-md-6">
                <label for="quantity">Quantity</label>
                <input type="text" class="form-control" name="quantity" id="quantity" placeholder="Quantity" value="{{$inventryRecrd->quantity}}">
              </div>
              <div class="form-group col-md-6">
                <label for="price">Price</label>
                <input type="text" class="form-control" name="price" id="price" placeholder="Price" value="{{$inventryRecrd->price}}">
              </div>
              <div class="form-group col-md-6">
                <label for="purchasedOut">Purchased out of FTF/NSB/Donation</label>
                <input type="text" class="form-control" id="purchasedOut" name="purchasedOut" placeholder="Purchased Out" value="{{$inventryRecrd->purchasedOut}}">
              </div>
              <div class="form-group col-md-6">
                <label for="headofAC">Head of A/C</label>
                <input type="text" class="form-control" id="headofAC" name="headofAC" placeholder="Head of A/C" value="{{$inventryRecrd->headofAC}}">
              </div>
              <div class="form-group col-md-6">
                <label for="sign">Sign of receiving person</label>
                <input type="text" class="form-control" id="sign" name="receivingSign" placeholder="Sign of receiving person" value="{{$inventryRecrd->receivingSign}}">
              </div>
              <div class="form-group col-md-6">
                <label for="remarks">Remarks</label>
                <textarea class="form-control" id="remarks" name="remarks" placeholder="Remarks" rows="7">{{$inventryRecrd->receivingSign}}</textarea>
              </div>
              <div class="form-group col-md-6">
                <label for="SignDdo">Sign of DDO/Pricipal</label>
                <textarea class="form-control" id="SignDdo" name="principalSign" placeholder="Sign of DDO/Pricipal" rows="7">{{$inventryRecrd->principalSign}}</textarea>
              </div>
              <div class="form-group col-md-6">
                <label for="requisition">Requisition details</label>
                <textarea class="form-control" id="requisition" name="requisitionDetail" placeholder="Requisition Details" rows="7">{{$inventryRecrd->requisitionDetail}}</textarea>
              </div>
              <div class="form-group col-md-6">
                <label for="billPassing">Details of bill passing</label>
                <textarea class="form-control" id="billPassing" name="billPassing" placeholder="Details of bill passing" rows="7">{{$inventryRecrd->billPassing}}</textarea>
              </div>
              <div class="form-group col-md-6">
                <label for="addStock">Add/Delete stock</label>
                <input type="text" class="form-control" name="adddeleteStock" placeholder="Add/Delete Stock" value="{{$inventryRecrd->adddeleteStock}}">
              </div>
              <div class="form-group col-md-6">
                <label for="itemIssued">Item Issued & Return details</label>
                <textarea class="form-control" id="itemIssued" name="itemIssued" placeholder="Item Issued & Return details">{{$inventryRecrd->itemIssued}}</textarea>
              </div>
            </div><!-- /.box-body -->
            @endforeach

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