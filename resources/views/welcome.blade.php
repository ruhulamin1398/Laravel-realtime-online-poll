<!DOCTYPE html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
        <!-- Styles -->
        <style>
            body { margin-top:20px; }
.panel-body:not(.two-col) { padding:0px }
.glyphicon { margin-right:5px; }
.glyphicon-new-window { margin-left:5px; }
.panel-body .radio,.panel-body .checkbox {margin-top: 0px;margin-bottom: 0px;}
.panel-body .list-group {margin-bottom: 0;}
.margin-bottom-none { margin-bottom: 0; }
.panel-body .radio label,.panel-body .checkbox label { display:block; }
        </style>
    </head>
    <body>


    

<div class="container">


    <div class="row">
        <!-- <div class="col-md-3">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <span class="glyphicon glyphicon-arrow-right"></span>How is My Site? <a href="http://www.jquery2dotnet.com" target="_blank"><span
                            class="glyphicon glyphicon-new-window"></span></a>
                    </h3>
                </div>
                <div class="panel-body">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="optionsRadios">
                                    Good
                                </label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="optionsRadios">
                                    Excellent
                                </label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="optionsRadios">
                                    Bed
                                </label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="optionsRadios">
                                    Can Be Improved
                                </label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="optionsRadios">
                                    No Comment
                                </label>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="panel-footer">
                    <button type="button" class="btn btn-primary btn-sm">
                        Vote</button>
                    <a href="#">View Result</a></div>
            </div>
        </div> -->
        <!-- <div class="col-md-3">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <span class="glyphicon glyphicon-hand-right"></span>Where do you get your news?</h3>
                </div>
                <div class="panel-body">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="">
                                    Internet
                                </label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="">
                                    Television
                                </label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="">
                                    Radio
                                </label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="">
                                    Newspaper
                                </label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="">
                                    Others
                                </label>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="panel-footer text-center">
                    <button type="button" class="btn btn-primary btn-block btn-sm">
                        Vote</button>
                    <a href="#" class="small">View Result</a></div>
            </div>
        </div> -->


        <div class="col-md-6 questionArea ">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <span class="glyphicon glyphicon-circle-arrow-right"></span>Where do you get your news?</h3>
                </div>
                <div class="panel-body two-col">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="well well-sm">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="">
                                        Internet
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="well well-sm">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="">
                                        Television
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="well well-sm margin-bottom-none">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="">
                                        Radio
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="well well-sm margin-bottom-none">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="">
                                        Newspaper
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                    <button type="button" class="btn btn-success btn-sm">
                        <span class="glyphicon glyphicon-ok"></span>Vote</button>
                    <button type="button" class="btn btn-primary btn-sm">
                        View Result</button>
                </div>
            </div>
        </div>



<div class="col-md-6 resultArea">
<div class="panel panel-success ">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <span class="glyphicon glyphicon-circle-arrow-right"></span>Result</h3>
                </div>
                <div class="panel-body two-col">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="well well-sm">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="">
                                        Internet
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="well well-sm">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="">
                                        Television
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="well well-sm margin-bottom-none">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="">
                                        Radio
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="well well-sm margin-bottom-none">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="">
                                        Newspaper
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                    <button type="button" class="btn btn-success btn-sm">
                        <span class="glyphicon glyphicon-ok"></span>Vote</button>
                    <button type="button" class="btn btn-primary btn-sm">
                        View Result</button>
                </div>
            </div>
</div>



    </div>
</div>













    </body>
</html>
