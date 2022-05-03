<!DOCTYPE html>
<html>
<head>
<link href="//code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.min.css" rel="stylesheet" type="text/css" />
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="//code.jquery.com/ui/1.11.1/jquery-ui.min.js"></script>
<style type='text/css'>
  /* Style to hide Dates / Months */
  .ui-datepicker-calendar,.ui-datepicker-month { display: none; }
</style>
<script type='text/javascript'>
  $(function(){
    $('.datepicker').datepicker({
        changeMonth: false,
        changeYear: true,
        showButtonPanel: true,
        yearRange: '1950:2014',
        dateFormat: 'yy',
        onClose: function(dateText, inst) { 
            var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
            $(this).datepicker('setDate', new Date(year, 0, 1));
        }});
    });
</script>
<body>
  <input class='datepicker'/>
</body>
</html>