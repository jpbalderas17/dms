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
                    <h1 class="page-header">All Files</h1>
                </div>

                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class='col-lg-12'>
                    <?php
                        Alert();
                    ?>
                    <div class='panel panel-default'>
                        
                        <div class='panel-body ' >
                            <div class='dataTable_wrapper '>
                                <table class='table responsive table-bordered table-condensed table-hover ' id='dataTables'>
                                    <thead>
                                        <tr>
                                            
                                            <th style='max-width:5px'></th>
                                            <th>Name</th>
                                            <th>Owner</th>
                                            <th style='max-width:80px;'>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                             <th class='text-center'>
                                                <input type='checkbox'>
                                            </th>
                                            <td><span class='fa fa-file-o'></span> File 001</td>
                                            <td>Me</td>

                                            <td class='text-center'>
                                                <a class='btn btn-sm btn-default' href='#' data-toggle='modal' data-target='#CommentModal'><span class='fa fa-comment'></span></a>
                                                <a class='btn btn-sm btn-default' href='share_file.php'><span class='fa fa-share'></span></a>
                                                <a class='btn btn-sm btn-warning' href='#' data-toggle='modal' data-target='#EditFileModal'><span class='fa fa-pencil'></span></a>
                                            </td>
                                        </tr>
                                         <tr>
                                             <th class='text-center'>
                                                <input type='checkbox'>
                                            </th>
                                            <td><span class='fa fa-file-o'></span> File 002</td>
                                            <td>John Doe</td>

                                            <td class='text-center'>
                                                <a class='btn btn-sm btn-default' href='#' data-toggle='modal' data-target='#CommentModal'><span class='fa fa-comment'></span></a>
                                                <a class='btn btn-sm btn-default' href='share_file.php'><span class='fa fa-share'></span></a>
                                                <a class='btn btn-sm btn-warning' href='#' data-toggle='modal' data-target='#EditFileModal'><span class='fa fa-pencil'></span></a>
                                            </td>
                                        </tr>
                                        <tr>
                                             <th class='text-center'>
                                                <input type='checkbox'>
                                            </th>
                                            <td><span class='fa fa-file-o'></span> Shared File1</td>
                                            <td>Prettie Pantaleon</td>

                                            <td class='text-center'>
                                                <a class='btn btn-sm btn-default' href='#' data-toggle='modal' data-target='#CommentModal'><span class='fa fa-comment'></span></a>
                                                <a class='btn btn-sm btn-default' href='share_file.php'><span class='fa fa-share'></span></a>
                                                <a class='btn btn-sm btn-warning' href='#' data-toggle='modal' data-target='#EditFileModal'><span class='fa fa-pencil'></span></a>
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
        $('#dataTables').DataTable({
                 "scrollY": true
                //"scrollX": true
        });
    });
    </script>
<?php
	makeFoot();
?>