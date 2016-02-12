<?php
	require_once 'support/config.php';
	if(!isLoggedIn()){
		toLogin();
		die();
	}
	makeHead();
?>
<div id='wrapper'>
<?php
	 require_once 'template/navbar.php';
?>
</div>

<div id="page-wrapper">
             <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Share File/Folder</h1>
                </div>

                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class='col-lg-12'>
                    <?php
                        Alert();
                    ?>
                        <div class='row'>
                            <div class='col-md-12'>
                                    <H3 >File Name</H3>
                                    <input type='text' disabled='true' value='Sample Name' class='form-control'>
                            </div>
                            <div class='col-md-12'>
                                <h3> <a href='frm_share_file.php' class='btn btn-success'>Add New</a></h3>

                                   <div class='dataTable_wrapper '>
                                        <table class='table-responsive table-bordered table-condensed table-hover ' id='DataTables'>
                                            <thead>
                                                <tr>
                                                    
                                                    <th style='max-width:5px'></th>
                                                    
                                                    <th>Users Shared</th>
                                                    <th>User Groups Shared</th>
                                                    <th>Access Type</th>
                                                    <th>Date Modified</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class='text-center'><input type='checkbox'></td>
                                                    
                                                    <td>User1,User1,User3</td>
                                                    <td>Group1,Group</td>
                                                    <td>Read</td>
                                                    <td>2016-01-12</td>
                                                    <td>
                                                        <a class='btn btn-sm btn-warning' href='frm_share_file.php'><span class='fa fa-pencil'></span></a>
                                                        <a class='btn btn-sm btn-danger' href='#'><span class='fa fa-trash'></span></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td  class='text-center'><input type='checkbox'></td>
                                                    
                                                    <td>User1,User1,User3</td>
                                                    <td>Group1,Group</td>
                                                    <td>Read/Write</td>
                                                    <td>2016-01-12</td>
                                                    <td>
                                                        <a class='btn btn-sm btn-warning' href='frm_share_file.php'><span class='fa fa-pencil'></span></a>
                                                        <a class='btn btn-sm btn-danger' href='#'><span class='fa fa-trash'></span></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td  class='text-center'><input type='checkbox'></td>
                                                    
                                                    <td></td>
                                                    <td>Group</td>
                                                    <td>Read</td>
                                                    <td>2016-02-02</td>
                                                    <td>
                                                        <a class='btn btn-sm btn-warning' href='frm_share_file.php'><span class='fa fa-pencil'></span></a>
                                                        <a class='btn btn-sm btn-danger' href='#'><span class='fa fa-trash'></span></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                            </div>
                        </div>
                       

                </div>
            </div>
</div>
<script>
    $(document).ready(function() {
        $('#DataTables').DataTable({
                 "scrollY": true
                //"scrollX": true
        });
    });
    </script>
<?php
	makeFoot();
?>