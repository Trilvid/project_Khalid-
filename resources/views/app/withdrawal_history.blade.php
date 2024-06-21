@extends('layouts.master')
@section('title')
    <title>Withdrawal History</title>
@endsection
@section('styles')

@endsection
@section('content') 
<div class="content-wrapper" id="content">
    <div class="container-full">
      <!-- Main content -->
      <section class="content">
        <div class="row">
  
       
        <div class="col-12">
  
         <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">WITHDRAWAL HISTORY </h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <div class="table-responsive">
              <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Date</th>
                  <th>Method</th>
                  <th>Payment Coin</th>
                  <th>Amount</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody v-for="(withdrawal, index)  in userWithdrawals">
                <tr >
                  <td>@{{index + 1}}</td>
                  <td>@{{withdrawal.created_at}}</td>
                  <td>Withdrawal</td>
                  <td>@{{withdrawal.method.payment_name}}</td>
                  <td>@{{withdrawal.amount}}</td>
                  <td>@{{withdrawal.status}}</td>
                </tr>
        

              </tbody>
              {{-- <tfoot>
                <tr>
                  <th>Name</th>
                  <th>Position</th>
                  <th>Office</th>
                  <th>Age</th>
                  <th>Start date</th>
                  <th>Salary</th>
                </tr>
              </tfoot> --}}
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
        <textarea style="display: none;" id="userWithdrawal" cols="30" rows="10">{{ json_encode($userWithdrawal) }}</textarea>
      </section>
      <!-- /.content -->
    </div>
</div>
@endsection




@section('scripts')
<script src="{{asset('assets/back/js/vendors.min.js')}}"></script>
<script src="{{asset('assets/back/vendor_components/datatable/datatables.min.js')}}"></script>
<script src="{{asset('assets/back/js/pages/data-table.js')}}"></script>

<script src="{{asset('assets/app/withdrawal_history.js')}}"></script>
@endsection