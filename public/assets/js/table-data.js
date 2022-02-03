$(function() {
	'use strict'
	
	//Data table example
	var table = $('#exportexample').DataTable( {
		lengthChange: false,
		buttons: [ 'copy', 'excel', 'pdf', 'colvis' ]
	} );
	table.buttons().container()
	.appendTo( '#exportexample_wrapper .col-md-6:eq(0)' );
	
	
	$('#example1').DataTable({
		language: {
         url: '//cdn.datatables.net/plug-ins/1.10.22/i18n/French.json'
     }
	});
	$('#example2').DataTable({
		language: {
            url: '//cdn.datatables.net/plug-ins/1.10.22/i18n/French.json'
        }
	});
	$('#example3').DataTable( {
      responsive: true,
      language: {
         url: '//cdn.datatables.net/plug-ins/1.10.22/i18n/French.json'
     }
    } );
	$('#example4').DataTable({
		language: {
         url: '//cdn.datatables.net/plug-ins/1.10.22/i18n/French.json'
     }
	});
   $('#example5').DataTable({
		language: {
         url: '//cdn.datatables.net/plug-ins/1.10.22/i18n/French.json'
     }
	});
	
	/*Input Datatable*/
	 var table = $('#example-input').DataTable({
      'columnDefs': [
         {
            'targets': [1, 2, 3, 4, 5],
            'render': function(data, type, row, meta){
               if(type === 'display'){
                  var api = new $.fn.dataTable.Api(meta.settings);

                  var $el = $('input, select, textarea', api.cell({ row: meta.row, column: meta.col }).node());

                  var $html = $(data).wrap('<div/>').parent();

                  if($el.prop('tagName') === 'INPUT'){
                     $('input', $html).attr('value', $el.val());
                     if($el.prop('checked')){
                        $('input', $html).attr('checked', 'checked');
                     }
                  } else if ($el.prop('tagName') === 'TEXTAREA'){
                     $('textarea', $html).html($el.val());

                  } else if ($el.prop('tagName') === 'SELECT'){
                     $('option:selected', $html).removeAttr('selected');
                     $('option', $html).filter(function(){
                        return ($(this).attr('value') === $el.val());
                     }).attr('selected', 'selected');
                  }

                  data = $html.html();
               }

               return data;
            }
         }
      ],
      'responsive': true
   });
   $('#example-input tbody').on('keyup change', '.child input, .child select, .child textarea', function(e){
       var $el = $(this);
       var rowIdx = $el.closest('ul').data('dtr-index');
       var colIdx = $el.closest('li').data('dtr-index');
       var cell = table.cell({ row: rowIdx, column: colIdx }).node();
       $('input, select, textarea', cell).val($el.val());
       if($el.is(':checked')){
          $('input', cell).prop('checked', true);
       } else {
          $('input', cell).removeProp('checked');
       }
   });
	
});