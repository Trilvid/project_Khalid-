@extends('layouts.master')
@section('title')
    <title>Admin Account</title>
@endsection
@section('styles')

@endsection
@section('content') 
<div class="content-wrapper" id="content">
  @csrf
    <div class="container-full">
      <!-- Main content -->
      <section class="content">
        <div class="row">
  
       
        <div class="col-12">
  
         <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">All Payment Method</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <div class="table-responsive">
              <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>S/N</th>
                  <th>Payment Name</th>
                  <th>Wallet Address</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody v-for="(allpaymentmethod, index)  in allpaymentmethods">
                <tr>
                  <td>@{{index + 1}}</td>
                  <td>@{{allpaymentmethod.payment_name}}</td>
                  <td>@{{allpaymentmethod.wallet_address}}</td>
                  <td> <button data-bs-toggle="modal" data-bs-target="#editModal" @click="editMethod(index)">Edit</button></td>
                </tr>
               
        
              </tbody>
          
              </table>
            </div>
          </div>
          <!-- /.box-body -->
          </div>
          <!-- /.box -->
  
          <!-- /.box -->          
        </div>
        <!-- /.col -->
        </div>
        <!-- /.row -->
      </section>
      <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <input type="text" class="form-control" v-model="selectedMethod.payment_name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">

              <input type="text" class="form-control" v-model="selectedMethod.wallet_address" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary" @click="changePaymentDetails()">Edit</button>
            </div>
          </div>
        </div>
      </div>

      {{-- <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <p>Are you sure you want to delete</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div> --}}
      <!-- /.content -->
    </div>
    
    
    

    <textarea style="display: none;" id="editpayment" cols="30" rows="10">{{ route('user.edit.payment.method') }}</textarea>

    <textarea style="display: none;" id="allpaymentmethods" cols="30" rows="10">{{ json_encode($allpaymentmethods) }}</textarea>

</div>
@endsection




@section('scripts')
<script src="{{asset('assets/back/js/vendors.min.js')}}"></script>
<script src="{{asset('assets/back/vendor_components/datatable/datatables.min.js')}}"></script>
<script src="{{asset('assets/back/js/pages/data-table.js')}}"></script>

<script src="{{asset('assets/app/admin/all_payment_method.js')}}"></script>

@endsection
