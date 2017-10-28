@extends('users.userdashboard.key')

@section('body')

<div id="wrapper">

       <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Update Payment Details</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading text-warning">
                            Enter Payment Information
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form">
                                        <div class="form-group">
                                            <label>Bank Name*</label>
                                            <input class="form-control" placeholder="Enter Bank Name">
                                        </div>
                                        <div class="form-group">
                                            <label>Bank Address*</label>
                                            <input class="form-control" placeholder="Enter Bank Address">
                                        </div>
                                        <div class="form-group">
                                            <label>Bank Country*</label>
                                            <input class="form-control" placeholder="Enter Bank Country">
                                        </div>
                                        <div class="form-group">
                                            <label>Bank State/City*</label>
                                            <input class="form-control" placeholder="Enter Bank State/City">
                                        </div>
                                        <div class="form-group">
                                            <label>Your Account Name*</label>
                                            <input class="form-control" placeholder="Enter Your Account Name ">
                                        </div>
                                        <div class="form-group">
                                            <labe>Your Account Number*</label>
                                            <input class="form-control" placeholder="Enter Your Account Number">
                                        </div>
                                        <div class="form-group">
                                            <label>Account Type*</label>
                                            <input class="form-control" placeholder="Enter Your Bank Account Type">
                                        </div>

                                        <div class="form-group">
                                            <label>Swift Code (International Only)</label>
                                            <input class="form-control" placeholder="Enter Swift Code (If any)">
                                        </div>








                                        <button type="submit" class="btn btn-primary">Submit Details</button>
                                    </form>
                                </div>

                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

@stop
