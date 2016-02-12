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
                    <form>
                        <div class='row'>
                            <div class='col-md-6 col-md-offset-4'>
                                <div class="form-group">
                                    <label >File Name</label>
                                    <input type='text' disabled='true' value='Sample Name' class='form-control'>
                                </div>
                                <div class="form-group">
                                    <label >Access</label>
                                    <select class='form-control'>
                                        <option>Read</option>
                                        <option>Read/Write</option>
                                    </select>
                                </div>
                                
                                
                              <h3>Users</h3>
                               <div class='dataTable_wrapper '>
                                    <table class='table-responsive table-bordered table-condensed table-hover ' id='Users'>
                                        <thead>
                                            <tr>
                                                
                                                <th style='max-width:5px'></th>
                                                <th>Name</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                if(empty($_GET['status']) || $_GET['status']=='All'){
                                                    $assets=$con->myQuery("SELECT CONCAT(last_name,', ',first_name,' ',middle_name)as current_holder FROM qry_assets WHERE is_deleted=0")->fetchAll(PDO::FETCH_ASSOC);
                                                }
                                               

                                                foreach ($assets as $asset):
                                            ?>
                                                <tr>
                                                    <?php
                                                    if($_SESSION[WEBAPP]['user']['user_type']==1 || $_SESSION[WEBAPP]['user']['user_type']==2):
                                                    ?>
                                                        <th class='text-center'>
                                                            <input type='checkbox'>
                                                        </th>
                                                    <?php
                                                    endif
                                                    ?>
                                                    <?php
                                                        foreach ($asset as $key => $value):
                                                    ?>
                                                        <td>
                                                            <?php
                                                                echo htmlspecialchars($value);
                                                            ?>
                                                        </td>
                                                    <?php

                                                        endforeach;
                                                    ?>
                                                </tr>
                                            <?php
                                                endforeach;
                                            ?>
                                        </tbody>
                                    </table>
                                </div>

                                <h3>User Groups</h3>
                                   <div class='dataTable_wrapper '>
                                        <table class='table-responsive table-bordered table-condensed table-hover ' id='UserGroups'>
                                            <thead>
                                                <tr>
                                                    
                                                    <th style='max-width:5px'></th>
                                                    <th>Name</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><input type='checkbox'></td>
                                                    <td>Production Commitee</td>
                                                </tr>
                                                <tr>
                                                    <td><input type='checkbox'></td>
                                                    <td>Human Resources</td>
                                                </tr>
                                                <tr>
                                                    <td><input type='checkbox'></td>
                                                    <td>Executives</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                <br/>
                                <div class="form-group">
                                    
                                    <button type='submit' class='btn btn-success'><span class='fa fa-share'></span> Share</button>
                                    <button type='button' class='btn btn-default' onclick='window.history.back()'>Cancel</button>
                                </div>
                            </div>
                        </div>
                       
                    </form>
                </div>
            </div>
</div>
<script>
    $(document).ready(function() {
        $('#Users').DataTable({
                 "scrollY": true
                //"scrollX": true
        });
        $('#UserGroups').DataTable({
                 "scrollY": true
                //"scrollX": true
        });
    });
    </script>
<?php
	makeFoot();
?>