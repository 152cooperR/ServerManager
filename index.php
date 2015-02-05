<html xmlns="http://www.w3.org/1999/html">
<head>

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css"/>

</head>
<body>

<div class="jumbotron">
    <div class="container">
    <h1>Server Overview</h1>
        <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>Warning!</strong> You {SERVER TYPE} with the name {SERVER NAME} is using all of its RAM!
        </div>
    </div>
</div>
<div class="container-fluid">

    <!-- Server is running template -->
    <div class="col-md-3">
        <div class="panel panel-success">



            <div class="panel-heading"><p>{SERVER TYPE} {SERVER NAME}</p></div>
            <div class="panel-body">

                <p class="text-primary">Power Management</p>

                    <input type="button" class="btn btn-danger" value="Stop Sever">
                    <input type="button" class="btn btn-warning" value="Restart Sever"><br/>

                <hr/>

                <p class="text-primary">CPU Usage 40%</p> <!--TODO add working php for % of usages -->
                <div class="progress">
                    <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                    </div>
                </div>
                <hr/>
                <p class="text-primary">RAM Usage 100%</p>
                <div class="progress">
                    <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 100%">

                    </div>
                </div>
                <hr/>


            <p class="text-primary">FTP</p>

                <table class="table table-bordered">
                    <tr class="">
                        <th>Username</th>
                        <th>152cooperR</th>
                    </tr>
                    <tr>
                        <th>Password</th>
                        <th>SomeJavaPoop</th>
                    </tr>
                    <tr>
                        <th>IP</th>
                        <th>192.168.3.164</th>
                    </tr>
                    <tr>
                        <th>Port</th>
                        <th>25565</th>
                    </tr>
                </table>
                <hr/>
                <p class="text-primary">Control Panel</p>
                <input type="button" value="View Control Panel" class="btn btn-primary"><br/><br/>
                <p class="text-center text-primary">Add User</p>
                <form action="#adduser" method="post" class="form-group">

                    <input type="text" class="form-control" placeholder="Username"><br/>
                    <input type="text" class="form-control" placeholder="Password"><br/>
                    <input type="submit" class="btn btn-primary" value="Add User">

                </form>
            </div>

         </div>
    </div>
    <!-- End of template -->
    <!-- Stopped template -->
    <div class="col-md-3">
        <div class="panel panel-danger">

            <div class="panel-heading"><p></p></div>
            <div class="panel-body">

                <input type="button" class="btn btn-success" value="Start Sever">
                <hr/>


            </div>

        </div>
    </div>
    <!-- End of template -->
</div>
<script src="js/jquery-2.1.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>

