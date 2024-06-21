@extends('layouts.master')
@section('title')
    <title>Demo Account</title>
@endsection
@section('styles')

@endsection
@section('content') 
<div class="content-wrapper">
    <div class="container-full">
      <!-- Main content -->
      <section class="content" id="content">			
        @csrf
        <div class="row">
  
       
        <div class="col-12">
  
         <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">Demo History</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <div class="table-responsive">
              <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Asset</th>
                  <th>Stake Price</th>
                  <th>Pull/Call</th>
                  <th>Amount</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody  v-for="(trade, index)  in usersTrades">
                <tr>
                  <td>@{{index + 1}}</td>
                  <td>@{{trade.asset}}</td>
                  <td> </td>
                  <td>@{{trade.type}}</td>
                  <td>@{{trade.amount}}</td>
                  <td>@{{trade.status}}</td>
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
</div>
@endsection




@section('scripts')
<script src="{{asset('assets/back/js/vendors.min.js')}}"></script>
<script src="{{asset('assets/back/vendor_components/datatable/datatables.min.js')}}"></script>
<script src="{{asset('assets/back/js/pages/data-table.js')}}"></script>
<script src="{{asset('assets/app/demo_history.js')}}"></script>

@endsection