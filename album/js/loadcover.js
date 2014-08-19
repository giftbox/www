var itemCount = 0;

function getJsonFinish(data)
{
	$.each(data, function(index, value){
		$('#show_all_album').append(
			'<div class="the_album">' +
				'<div class="album_border">' +
					'<img src="upload/' + value.img + '" alt="" class="album_cover"/>' +
				'</div>' +
				'<h3 class="album_name">' + value.name + '</h3>' +
			'</div>' +
			'<div id="separate' + index + '" class="separate"></div>'
		);
		++itemCount;
	});
	justify_list();
}

function justify_list()
{
	var containerWidth = $('#droptarget').width() - 200;
	var columnCount = parseInt(containerWidth / 194);
	var rowCount = parseInt(itemCount / columnCount);
	if (itemCount % columnCount != 0) {
		++rowCount;
	}
	var excessWidth = containerWidth - columnCount * 194;
	var everySeparateWidth = parseInt(excessWidth / (columnCount - 1));
	$('.separate').width(everySeparateWidth);
	for (var i = 1; i != rowCount+1; ++i) {
		var hideSeparateNum = i * columnCount - 1;
		var hideSeparateId = '#separate' + hideSeparateNum;
		$(hideSeparateId).width(0);
	}
}

function beginLoad()
{
	$.getJSON("data/album.json", getJsonFinish);
}

$(document).ready(beginLoad);