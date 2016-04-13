<?php require '../main/index-main.php'; ?>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <?php require '../main/index-top.php'; ?>
            <?php require '../main/index-left-menu.php'; ?>
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">User Profile</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" method="post">
                                        <div class="form-group">
                                            <label>Full Name</label>
                                            <input class="form-control" id="userName" placeholder="Please input Full Name">
                                        </div>
                                        <div class="form-group">
                                            <label>User Name</label>
                                            <input class="form-control" placeholder="Please input User Name">
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" class="form-control">
                                            <p class="help-block">Change password must type new password.</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Password Confirm</label>
                                            <input type="password" class="form-control">
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                            <button  class="btn btn-default">Cancel</button>
                                        </div>

                                    </form>
                                </div>

                                <!-- /.col-lg-12 (nested) -->
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

</body>

</html>
