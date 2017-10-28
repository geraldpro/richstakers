@extends('users.userdashboard.key')

@section('body')

<div id="wrapper">
    <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Current Match Listing</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            DataTables Advanced Tables
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Match Date</th>
                                        <th>Local Time</th>
                                        <th>Team A</th>
                                        <th>Team B</th>
                                        <th>Match Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="odd gradeX">
                                        <td>14th Match, 2017</td>
                                        <td>2:00 pm (Gmt)</td>
                                        <td>Arsenal</td>
                                        <td>Chelsea</td>
                                        <td class="center">Played</td>
                                    </tr>

                                    <tr class="odd gradeX">
                                        <td>14th Match, 2017</td>
                                        <td>2:00 pm (Gmt)</td>
                                        <td>Arsenal</td>
                                        <td>Chelsea</td>
                                        <td class="center">Played</td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>14th Match, 2017</td>
                                        <td>2:00 pm (Gmt)</td>
                                        <td>Arsenal</td>
                                        <td>Chelsea</td>
                                        <td class="center">Played</td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>14th Match, 2017</td>
                                        <td>2:00 pm (Gmt)</td>
                                        <td>Arsenal</td>
                                        <td>Chelsea</td>
                                        <td class="center">Played</td>
                                    </tr>
                               </tbody>
                            </table>
                            <!-- /.table-responsive -->
                            <div class="well">
                                <h4>DataTables Usage Information</h4>
                                <p>DataTables is a very flexible, advanced tables plugin for jQuery. In SB Admin, we are using a specialized version of DataTables built for Bootstrap 3. We have also customized the table headings to use Font Awesome icons in place of images. For complete documentation on DataTables, visit their website at <a target="_blank" href="https://datatables.net/">https://datatables.net/</a>.</p>
                                <a class="btn btn-default btn-lg btn-block" target="_blank" href="https://datatables.net/">View DataTables Documentation</a>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

            <!-- /.row -->

            <!-- /.row -->

            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>

    @stop
