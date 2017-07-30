<div class="clearfix"></div>
<!-- start: JavaScript-->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

<script src="js/jquery-migrate-1.0.0.min.js"></script>
<script src="js/jquery-ui-1.10.0.custom.min.js"></script>
<script src="js/jquery.ui.touch-punch.js"></script>
<script src="js/modernizr.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.cookie.js"></script>
<script src='js/fullcalendar.min.js'></script>
<script src='js/jquery.dataTables.min.js'></script>
<script src="js/excanvas.js"></script>
<script src="js/jquery.flot.js"></script>
<script src="js/jquery.flot.pie.js"></script>
<script src="js/jquery.flot.stack.js"></script>
<script src="js/jquery.flot.resize.min.js"></script>
<script src="js/jquery.chosen.min.js"></script>
<script src="js/jquery.uniform.min.js"></script>
<script src="js/jquery.cleditor.min.js"></script>
<script src="js/jquery.noty.js"></script>
<script src="js/jquery.elfinder.min.js"></script>
<script src="js/jquery.raty.min.js"></script>
<script src="js/jquery.iphone.toggle.js"></script>
<script src="js/jquery.uploadify-3.1.min.js"></script>

<script src="js/jquery.gritter.min.js"></script>

<script src="js/jquery.imagesloaded.js"></script>

<script src="js/jquery.masonry.min.js"></script>

<script src="js/jquery.knob.modified.js"></script>

<script src="js/jquery.sparkline.min.js"></script>

<script src="js/counter.js"></script>

<script src="js/retina.js"></script>

<script src="js/custom.js"></script>

<script type="text/javascript">
	function ajaxLoad(){
		return '<img src="ajax/loading.gif" alt="" />';
	}
	function ajaxLoad2(){
		return '<center><img src="ajax/ajaxloader.gif" alt="" /></center>';
	}
	function dropCategory(value){
		$.get('ajax/ajax.drop.cate.php',
		{action : 3 , data : value},
			function(result){
				$("#catediv").html(result);
			}
		)
	}
	function selectDivision(value){
		$("#setDistrict").html(ajaxLoad());
		$.get('ajax/ajax.inc.php',
		{action : 1 , data : value},
			function(result){
				$("#setDistrict").html(result);
			}
		)
	}
	function selectCategory(value){
		$("#setSubcate").html(ajaxLoad());
		$.get('ajax/ajax.inc.php',
		{action : 2 , data : value},
			function(result){
				$("#setSubcate").html(result);
			}
		)
	}
	function updateDivision(value){
		var dv_name = $("#dv_name").val();
		$.get('ajax/update.ajax.php',
		{action : 1 , name : dv_name, id: value},
			function(result){
				$("#updateDiv").html(result);
			}
		)
	}
	function drop_district(value){
		if(confirm('Are you sure you want to delete this item?')){
			$("#drop_info").html(ajaxLoad2());
			var id = value;
			$.get('drop/dropDistrict.php',
			{dropid: id},
				function(data){
					$("#drop_info").html(data);
				}
			)
		}else{
			return false;
		}
	}
	function updataDistrict(value){
		var id = value;
		var name = $("#district_name").val();
		var dv_id = $("#dv_id").val();
		$.post('update/district_update.php',
		{id : id, name:name,dv_id:dv_id},
			function(data){
				$("#resultid").html(data);
			}
		)
	}	
	
</script>

<!-- end: JavaScript-->

</body>
</html>