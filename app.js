$(document).ready(function(){
	$("#youtube_url").change(function(){
	    var txt = $(this).val();
	    // var nameArray = txt.split(" ");
	    console.log(txt);
	    var ID = '';
		url = txt.replace(/(>|<)/gi,'').split(/(vi\/|v=|\/v\/|youtu\.be\/|\/embed\/)/);
		if(url[2] !== undefined) {
			ID = url[2].split(/[^0-9a-z_\-]/i);
			ID = ID[0];
		}
		else {
			ID = url;
		}
		console.log(ID);
		$('#button').click(function(){
			$('#iframe').html('<iframe width="250px" height="60px" scrolling="no" style="border:none;" src="https://www.download-mp3-youtube.com/api/?api_key=NDAzNzE4Mzk5&format=mp3&video_id='+ID+'"></iframe>');
		});

	});
});
