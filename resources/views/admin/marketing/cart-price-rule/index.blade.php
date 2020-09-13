@extends('admin.layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <a href="{{route('admin.cart-price-rule.create')}}" class="btn btn-dark">
                        <i class="fas fa-plus"></i> New Rule
                    </a>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header border-0 bg-gradient-info d-flex p-0">
                                <h3 class="card-title p-3"><strong>Cart Price Rules</strong></h3>
                            </div>
                            <div class="card-body table-responsive p-0">
                                <table class="table table-striped table-valign-middle">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Coupon</th>
                                        <th>Max</th>
                                        <th>Discount</th>
                                        <th>Type</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($cartPrices as $item)
                                        <tr>
                                            <td>{{$item->id}}</td>
                                            <td>{{$item->name}}</td>
                                            <td>{{$item->description}}</td>
                                            <td>{{$item->coupon_code}}</td>
                                            <td>{{$item->max_use}}</td>
                                            <td>{{$item->discount_amount}}</td>
                                            <td>{{$item->discount_type}}</td>
                                            <td>{{$item->status==1?'Active':'Inactive'}}</td>
                                            <td>
                                                <a href="" class="btn btn-sm btn-warning">Edit</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <div class="card-footer clearfix flex">
                                    <x-admin.pagination :collection="$cartPrices"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
