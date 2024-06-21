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
                  <th>User Name</th>
                  <th>User Email</th>
                  <th>Payment method</th>
                  <th>Amount</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody v-for="(allDeposit, index)  in allDeposits">
                <tr>
                  <td>@{{index + 1}}</td>
                  <td>@{{allDeposit.user.fullname}}</td>
                  <td>@{{allDeposit.user.email}}</td>
                  <td>@{{allDeposit.method.payment_name}}</td>
                  <td>@{{allDeposit.amount}}</td>
                  <td>@{{allDeposit.status}}</td>
                  <td> <button data-bs-toggle="modal" data-bs-target="#approveModal"  @click="selectedUser(index)">Approve</button></td>
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
      <div class="modal fade" id="approveModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Select Status</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <select class="form-control" v-model ="deposit.status">
                <option value="Approved">Approve</option>
                <option value="Declined">Decline</option>
              </select>
             
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary" @click="approveDeposit()">Approve</button>
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
    
    <textarea style="display: none;" id="allDeposit" cols="30" rows="10">{{ json_encode($allDeposit) }}</textarea>
    <textarea style="display: none;" id="approveDeposit" cols="30" rows="10">{{ route('user.approve.deposit') }}</textarea>
</div>
@endsection




@section('scripts')
<script src="{{asset('assets/back/js/vendors.min.js')}}"></script>
<script src="{{asset('assets/back/vendor_components/datatable/datatables.min.js')}}"></script>
<script src="{{asset('assets/back/js/pages/data-table.js')}}"></script>

<script src="{{asset('assets/app/admin/all_deposit.js')}}"></script>

@endsection
