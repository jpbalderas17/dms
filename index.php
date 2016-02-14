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
                    <h1 class="page-header">My Drive</h1>
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
                            <ol class="breadcrumb">
                              <li class="active">My Drive</li>
                            </ol>
                            <div class='dataTable_wrapper '>
                                <table class='table responsive table-bordered table-condensed table-hover ' id='dataTables'>
                                    <thead>
                                        <tr>
                                            
                                            <th style='max-width:5px'></th>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th style='max-width:80px;'>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                             <th class='text-center'>
                                                <input type='checkbox'>
                                            </th>
                                            <td><a href='index2.php'><span class='fa fa-folder-o'></span> Sample Folder1</a></td>
                                            <td></td>

                                            <td class='text-center'>
                                                <a class='btn btn-sm btn-default' href='#' data-toggle='modal' data-target='#CommentModal'><span class='fa fa-comment'></span></a>
                                                <a class='btn btn-sm btn-default' href='share_file.php'><span class='fa fa-share'></span></a>
                                                <a class='btn btn-sm btn-warning' href='#' data-toggle='modal' data-target='#EditFolderModal'><span class='fa fa-pencil'></span></a>
                                                <a class='btn btn-sm btn-danger' href='#' ><span class='fa fa-trash'></span></a>
                                            </td>
                                        </tr>
                                        <?php
                                            
                                            $assets=$con->myQuery("SELECT asset_name,check_out_date,id FROM qry_assets WHERE is_deleted=0")->fetchAll(PDO::FETCH_ASSOC);
                                          

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
                                                    if($key=='id'):
                                                ?>
                                                    <td class='text-center'>
                                                        <button class='btn btn-sm btn-default' href='#' data-toggle='modal' data-target='#CommentModal'><span class='fa fa-comment'></span></button>
                                                        <a class='btn btn-sm btn-default' href='share_file.php'><span class='fa fa-share'></span></a>
                                                        <a class='btn btn-sm btn-warning' href='#' data-toggle='modal' data-target='#EditFileModal'><span class='fa fa-pencil'></span></a>
                                                        <a class='btn btn-sm btn-danger' href='#'><span class='fa fa-trash'></span></a>
                                                    </td>
                                                <?php
                                                    elseif($key=="check_out_date" || $key=="expected_check_in_date" || $key=="EOL"):
                                                ?>
                                                    <td>
                                                        <?php
                                                            if($value!="0000-00-00"){
                                                                echo htmlspecialchars($value);                                                                
                                                            }
                                                        ?>
                                                    </td>

                                                <?php
                                                    elseif($key=="asset_name"):
                                                ?>
                                                    <td>
                                                        <span class='fa fa-file-o'></span>&nbsp; <?php echo htmlspecialchars($value)?>
                                                    </td>
                                                <?php
                                                    elseif($key=="asset_status_label"):
                                                ?>
                                                        <td>
                                                            <?php
                                                                if($asset['check_out_date']!="0000-00-00"){
                                                                    echo "Deployed (".htmlspecialchars($asset['current_holder']).")";
                                                                }
                                                                else{
                                                                    echo htmlspecialchars($value);
                                                                }
                                                            ?>
                                                        </td>
                                                <?php
                                                    elseif($key=="asset_status"):
                                                        #skipped keys
                                                    else:
                                                ?>
                                                    <td>
                                                        <?php
                                                            echo htmlspecialchars($value);
                                                        ?>
                                                    </td>
                                                <?php
                                                    endif;
                                                    endforeach;
                                                ?>
                                            </tr>
                                        <?php
                                            endforeach;
                                        ?>
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