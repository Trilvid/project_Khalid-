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
            <h3 class="box-title">All Users</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <div class="table-responsive">
              <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>S/N</th>
                  <th>Fullname</th>
                  <th>Email</th>
                  <th>Role</th>
                  <th>Account Balance</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody v-for="(user, index)  in allUser">
                <tr>
                  <td>@{{index + 1}}</td>
                  <td>@{{user.fullname}}</td>
                  <td>@{{user.email}}</td>
                  <td>@{{user.role}}</td>
                  <td>@{{user.wallet_balance}}</td>
                  <td><button data-bs-toggle="modal" data-bs-target="#fundModal" @click="selectedUser(index)">Fund</button>
                    <button data-bs-toggle="modal" data-bs-target="#deleteModal" @click="selectedUser(index)">Delete</button></td>
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
      <!-- /.content -->
    </div>
    
    <textarea style="display: none;" id="allUser" cols="30" rows="10">{{ json_encode($allUser) }}</textarea>

    <div class="modal fade" id="fundModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <input type="number" class="form-control" v-model="fund.amount" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter amount">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" @click="fundAccount()">Save changes</button>
          </div>
        </div>
      </div>
    </div> 

    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
           <p>
            Are you sure you want to delete this user?
           </p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" @click="deleteUserAccount()">Delete</button>
          </div>
        </div>
      </div>
    </div> 

    
    <textarea style="display: none;" id="processFund" cols="30" rows="10">{{ route('user.process.fund.method') }}</textarea>
    <textarea style="display: none;" id="deleteAccount" cols="30" rows="10">{{ route('user.delete.account') }}</textarea>
    
</div>
@endsection




@section('scripts')
<script src="{{asset('assets/back/js/vendors.min.js')}}"></script>
<script src="{{asset('assets/back/vendor_components/datatable/datatables.min.js')}}"></script>
<script src="{{asset('assets/back/js/pages/data-table.js')}}"></script>

<script src="{{asset('assets/app/admin/all_user.js')}}"></script>

@endsection
