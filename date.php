
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>  

<body>
<form id="profileForm" class="form-horizontal"
    data-bv-feedbackicons-valid="glyphicon glyphicon-ok"
    data-bv-feedbackicons-invalid="glyphicon glyphicon-remove"
    data-bv-feedbackicons-validating="glyphicon glyphicon-refresh">

    <div class="form-group">
        <label class="col-sm-3 control-label">Birthday</label>
        <div class="col-sm-3">
            <input type="text" class="form-control" name="birthday" placeholder="YYYY/MM/DD"
                data-bv-date="true"
                data-bv-date-format="YYYY/MM/DD"
                data-bv-date-message="The value is not a valid date" />
        </div>
    </div>
</form>
</body>
<script>
$(document).ready(function() {
    $('#profileForm').bootstrapValidator();
});
</script>

