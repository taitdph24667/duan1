$(function(){
	$("#search_input").keyup(function()
	{
		var a = $(this).val();
		var search_input = a.replace(/lv|level|lever/gi, "").trim();
        
		if(search_input.length > 1)
		{
			$.ajax({
				type: "POST",
				url: "/data/idmap/ajax-search.php",
				data: {keyword:search_input},
				beforeSend: function() {
					$('.loading').show();
				},
                
				success: function(data)
				{
					$('#search_data').html(data);
					$('#search_title').html(search_input);
					$(".loading").hide();
				}
			});
		}
		else
		{
		    $('#search_data').empty();
		}
		return false;
	});
});