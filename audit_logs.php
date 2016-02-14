<?php
    require_once 'support/config.php';
    if(!isLoggedIn()){
        toLogin();
        die();
    }
    if(!AllowUser(array(1))){
        redirect("index.php");
    }
    makeHead("View Users");
?>
<div id='wrapper'>
<?php
     require_once 'template/navbar.php';
?>
</div>

<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Audit Logs</h1>
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
                                <button href='' class='btn btn-default pull-left'> <span class='fa fa-download'></span> Download</button>
                        </div>
                    </div>
                    <br/>    

                    <div class='panel panel-default'>
                        
                        <div class='panel-body ' >
                            <div class='dataTable_wrapper '>
                                <table class='table responsive table-bordered table-condensed table-hover ' id='dataTables'>
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Department</th>
                                            <th>Action</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                   		<tr>
                                   			<td> Prettie Pantaleon</td>
                                   			<td> ppantaleon@gmail.com</td>
                                   			<td> Information Technology</td>
                                   			<td> Created Folder "Sample Folder1"</td>
                                   			<td>2016-01-07</td>
                                   		</tr>
                                   		<tr>
                                   			<td> John Doe</td>
                                   			<td> ppantaleon@gmail.com</td>
                                   			<td> Information Technology</td>
                                   			<td> Created Folder "Shared Folder1"</td>
                                   			<td>2016-01-07</td>
                                   		</tr>
                                   		<tr>
                                   			<td> John Doe</td>
                                   			<td> ppantaleon@gmail.com</td>
                                   			<td> Information Technology</td>
                                   			<td> Created Folder "Shared Folder2"</td>
                                   			<td>2016-01-07</td>
                                   		</tr>
                                   		<tr>
                                   			<td> Prettie Pantaleon</td>
                                   			<td> ppantaleon@gmail.com</td>
                                   			<td> Information Technology</td>
                                   			<td> Uploaded File "ProdCom-1"</td>
                                   			<td>2016-01-08</td>
                                   		</tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
</div>
<script>
    $(document).ready(function() {
        $('#dataTables').DataTable({
                 "scrollY": true,
                "scrollX": true
        });
    });
    </script>
<?php
    makeFoot();
?>