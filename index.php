<?php
require (dirname(__FILE__) .'/src/ISOCodeConverter.php');
$tool = new ISOCodeConverter();
$display = null;
if(isset($_POST['submit'])){
    if(isset($_POST['code'])) {
        $display = $tool->convertLanguageCode($_POST['code']);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>LanguageTools</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />"
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2-bootstrap-theme/0.1.0-beta.6/select2-bootstrap.css">
    <link rel="stylesheet" href="css/paper.css" />
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div class="row">
        <div class="container">
            <h1 class="text-center" >LanguageTools</h1>
            <p class="text-center" ><?php echo date("Y-m-d h:i:sa")?></p>
        </div>
    </div>
    <div class="row">
        <div class="container">
            <div class="col-md-8 col-md-offset-2 well bs-component">
                <form class="form-horizontal" action="index.php" method="post">
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="aibid">Input a code:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="code" id="aibid" placeholder="ISO639-1 or ISO639-2/T">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-9">
                            <button type="reset" class="btn btn-primary" value="Reset">Reset</button>
                            <input type="submit" class="btn btn-success" name="submit" value="Submit" />
                        </div>
                    </div>
                </form>
                <?php if(isset($display)){
                    echo '<div class="well">';
                    echo '<h3>Result</h3><p class="lead">The converted code is:<strong> '.$display.'</strong></p>';
                    echo '</div>';
                } ?>
            </div>
        </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
</body>
</html>
