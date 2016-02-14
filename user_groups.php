<?php
	require_once 'support/config.php';
	if(!isLoggedIn()){
		toLogin();
		die();
	}
	makeHead("Asset Models");
?>
<div id='wrapper'>
<?php
	 require_once 'template/navbar.php';
?>
</div>

<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">User Groups</h1>
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
                        <div class='col-sm-12'>
                                <a href='frm_user_groups.php' class='btn btn-success pull-right'> <span class='fa fa-plus'></span> Create New</a>
                        </div>
                    </div>
                    <br/>    

                    <div class='panel panel-default'>
                        
                        <div class='panel-body ' >
                            
                                <table class='table table-bordered table-condensed table-hover ' id='dataTables'>
                                    <thead>
                                        <tr>
                                            <th>Group Name</th>
                                            <th style='width:150px'>Members</th>
                                            <th style='width:20px'>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Managers</td>
                                            <td class="text-center"><?php echo rand(1,5); ?></td>
                                            <td class="text-center">
                                                
                                                <a class="btn btn-sm btn-warning" href="#"><span class="fa fa-pencil"></span></a>
                                                <a class="btn btn-sm btn-danger" href="#" onclick="return false"><span class="fa fa-trash"></span></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Executives</td>
                                            <td class="text-center"><?php echo rand(1,5); ?></td>
                                            <td class="text-center">
                                                
                                                <a class="btn btn-sm btn-warning" href="#"><span class="fa fa-pencil"></span></a>
                                                <a class="btn btn-sm btn-danger" href="#" onclick="return false"><span class="fa fa-trash"></span></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Human Resource</td>
                                            <td class="text-center"><?php echo rand(1,5); ?></td>
                                            <td class="text-center">
                                                
                                                <a class="btn btn-sm btn-warning" href="#"><span class="fa fa-pencil"></span></a>
                                                <a class="btn btn-sm btn-danger" href="#" onclick="return false"><span class="fa fa-trash"></span></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Officers</td>
                                            <td class="text-center"><?php echo rand(1,5); ?></td>
                                            <td class="text-center">
                                                
                                                <a class="btn btn-sm btn-warning" href="#"><span class="fa fa-pencil"></span></a>
                                                <a class="btn btn-sm btn-danger" href="#" onclick="return false"><span class="fa fa-trash"></span></a>
                                            </td>
                                        </tr>
                                       
                                    </tbody>
                                </table>
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
</div>
<script>
    $(document).ready(function() {
        $('#dataTables').DataTable({
                 "scrollY": true
        });
    });
    </script>
<?php
    Modal();
	makeFoot();
?>