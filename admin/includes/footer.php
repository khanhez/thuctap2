</div>
</div>
<!-- /.container-fluid -->
<div id="footer">
	<p>Nguyen ngoc khanh</p>
</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="../js/jquery.js"></script>
<!-- format for noidung -->
<script type="text/javascript" src="../ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="../ckfinder/ckfinder.js"></script>
<script type="text/javascript" src="../ckfinder/ckfinder_v1.js"></script>
<script  type="text/javascript">
	CKEDITOR.replace('noidung');
</script>
<!-- end noidung -->

<!-- boostrap picker -->
<!-- Include Date Range Picker -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css"/>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>

<script type="text/javascript">
	$(function (){
		$("#datepicker").datepicker({
			autoclose: true,
			todayHighlight: true
		}).datepicker('update', new Date());
	});
</script>


<!-- Bootstrap Core JavaScript -->
<script src="../js/bootstrap.min.js"></script>

<!-- Morris Charts JavaScript -->
<script src="../js/plugins/morris/raphael.min.js"></script>
<script src="../js/plugins/morris/morris.min.js"></script>
<script src="../js/plugins/morris/morris-data.js"></script>

</body>

</html>
