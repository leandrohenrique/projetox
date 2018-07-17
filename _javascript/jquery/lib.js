
//$(document).ready(function(){
$(function() {
	var $lastClicked;

	function onTarefaDeleteClick()
	{
		//console.log($(this).parent('#tarefa-item').text().trim());
		$(this).parent('.tarefa-item')
			.off('click')
			.hide('show', function(){
		$(this).remove();
		});
	}
	$('.tarefa-delete').click(onTarefaDeleteClick);

	function onTarefaItemClick()
	{
		if(!$(this).is($lastClicked)) {
			if ($lastClicked !== undefined) {
				savePendingEdition($lastClicked);
			}
		}

		$lastClicked = $(this);

		var text = $lastClicked.children('.tarefa-text').text();
		var html = "<input type='text' " + " class='tarefa-edit' value='" + text +"'>";
		
		$lastClicked.html(content);
		$('.tarefa-edit').keydown(onTarefaEditKeydown);
	}
	$('.tarefa-item').click(onTarefaItemClick);

	function onTarefaEditKeydown(event)
	{
		if (event.wich === 13) {
			savePendingEdition($lastClicked);
			$lastClicked = undefined;
		}
	}

	function savePendingEdition(tarefa)
	{
		var text = $tarefa.children('.tarefa-edit').val();
		$tarefa.empty();

		$tarefa.append("<div class='tarefa-texto'>" + text + "</div>")
			.append("<div class='tarefa-delete'></div>")
			.append("<div class='clear'></div>"); 

		$('.tarefa-delete').click(onTarefaDeleteClick);
		$tarefa.click(onTarefaItemClick); 
	}

});


