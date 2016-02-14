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
                    <h1 class="page-header">Thrash</h1>
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
                                            <th>Name</th>
                                            <th>Delete Date</th>
                                            <th style='max-width:80px;'>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><span class='fa fa-folder-o'></span> Deleted Folder1</td>
                                            <td>2016-01-23</td>

                                            <td class='text-center'>
                                                <button class='btn btn-danger'><span class='fa fa-close'></span></button>
                                            </td>
                                        </tr>
                                         <tr>
                                            <td><span class='fa fa-folder-o'></span> Deleted Folder2</td>
                                            <td>2016-02-15</td>

                                            <td class='text-center'>
                                                <button class='btn btn-danger'><span class='fa fa-close'></span></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><span class='fa fa-file-o'></span>  File1</td>
                                            <td>2016-02-14</td>

                                            <td class='text-center'>
                                                <button class='btn btn-danger'><span class='fa fa-close'></span></button>
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