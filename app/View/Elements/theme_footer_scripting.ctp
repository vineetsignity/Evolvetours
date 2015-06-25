<?php // datatables Js Block 
	$this->start('scriptBottom'); ?>
	<script type="text/javascript">
	 jQuery(document).ready(function() {
		$('.datatables-demo-code').on('click', function() {
			var modalContent = $(this).prev();
			var modalContainer = $('.datatables-demo-modal').find('.modal-body')

			// Empty Modal of Existing Content
			modalContainer.empty();

			// Clone Content and Place in Modal
			modalContent.clone(modalContent).appendTo(modalContainer);

			// Toggle Modal
			$('.datatables-demo-modal').modal({
				backdrop: 'static'
			})
		});

		$('#datatable3').dataTable({
			"aoColumnDefs": [{
				'bSortable': false,
				'aTargets': [-1]
			}],
			"oLanguage": {
				"oPaginate": {
					"sPrevious": "",
					"sNext": ""
				}
			},
			"iDisplayLength": 5,
			"aLengthMenu": [
				[5, 10, 25, 50, -1],
				[5, 10, 25, 50, "All"]
			],
			"sDom": 'T<"dt-panelmenu clearfix"lfr>t<"dt-panelfooter clearfix"ip>',
			"oTableTools": {
				"sSwfPath": ""
			}
		});

		// MISC DATATABLE HELPER FUNCTIONS
		// Add Placeholder text to datatables filter bar
		$('.dataTables_filter input').attr("placeholder", "Enter Filter Terms Here....");
		// Manually Init Chosen on Datatables Filters
		// $("select[name='datatable2_length']").chosen();
		// $("select[name='datatable3_length']").chosen();
		// $("select[name='datatable4_length']").chosen();
		// Init Xeditable Plugin
		$.fn.editable.defaults.mode = 'popup';
		$('.xedit').editable();
	 });
	 </script>
<?php $this->end(); // datatables Js Block ?>

