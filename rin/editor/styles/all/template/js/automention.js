var ment_settings = {
	at: "@",
	insertTpl: '[mention]${name}[/mention]',
	limit: 500,
	maxLen: maxncharc,
	callbacks: {
		/*
		 It function is given, At.js will invoke it if local filter can not find any data
		 @param query [String] matched query
		 @param callback [Function] callback to render page.
		 */
		remoteFilter: function(query, callback) {
			if (query.length < 2) {
				callback([]);
			}
			else {
				$.getJSON(U_AJAX_MENTION_URL, {q: query}, function (data) {
					callback(data)
				});
			}
		},
		matcher: function(flag, subtext) {
			var regexp = new XRegExp('(\\s+|^)' + flag + '([\\p{L}-_ ]+)', 'gi');
			var match = regexp.exec(subtext);
			return (match != null && match[2]) ? match[2] : null;
		}
	}
}
function automentionck( local ) {
	$(local).atwho('setIframe').atwho(ment_settings);
	$(local).atwho(ment_settings);
}
