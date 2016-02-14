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
                    <form>
                        <div class='row'>
                            <div class='col-md-8 col-md-offset-2'>
                                <div class="form-group">
                                    <label >Group Name</label>
                                    <input type='text'  value='Group Name' class='form-control'>
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
                                                    $assets=$con->myQuery("SELECT CONCAT(first_name,' ',middle_name,' ',last_name) as name,id FROM qry_users")->fetchAll(PDO::FETCH_ASSOC);
                                                }
                                               

                                                foreach ($assets as $asset):
                                            ?>
                                                <tr>
                                                    <?php
                                                    if($_SESSION[WEBAPP]['user']['user_type']==1 || $_SESSION[WEBAPP]['user']['user_type']==2):
                                                    ?>
                                                        <th class='text-center'>
                                                            <input type='checkbox' <?php echo rand(0,1)==1?"checked='true'":''?>>
                                                        </th>
                                                    <?php
                                                    endif
                                                    ?>
                                                    <td>
                                                        <?php echo $asset['name'] ?>
                                                    </td>
                                                    
                                                </tr>
                                            <?php
                                                endforeach;
                                            ?>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="form-group">
                                    
                                    <button type='submit' class='btn btn-success'><span class='fa fa-share'></span> Save</button>
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
      
    });
    </script>
<?php
	makeFoot();
?>