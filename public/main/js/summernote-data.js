$.ajax({
  url: 'https://api.github.com/emojis',
  async: false
}).then(function(data) {
  window.emojis = Object.keys(data);
  window.emojiUrls = data;
});;

/*Summernote Init*/

$(function() {
	"use strict";
	$('.summernote').summernote({
		height: 200,
		toolbar: [
            [ 'style', [ 'style' ] ],
            [ 'font', [ 'bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear'] ],
            [ 'fontname', [ 'fontname' ] ],
            [ 'fontsize', [ 'fontsize' ] ],
            [ 'color', [ 'color' ] ],
            [ 'para', [ 'ol', 'ul', 'paragraph', 'height' ] ],
            [ 'insert', [ 'link'] ],
            [ 'view', [ 'undo', 'redo', 'fullscreen'] ]
        ],
		hint: {
			match: /:([\-+\w]+)$/,
	    search: function (keyword, callback) {
	      callback($.grep(emojis, function (item) {
	        return item.indexOf(keyword)  === 0;
	      }));
	    },
			template: function (item) {
	      var content = emojiUrls[item];
	      return '<img src="' + content + '" width="20" /> :' + item + ':';
	    },
	    content: function (item) {
	      var url = emojiUrls[item];
	      if (url) {
	        return $('<img />').attr('src', url).css('width', 20)[0];
	      }
	      return '';
	    }
		}
	});
});
