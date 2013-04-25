/*
 * InstallSearch.js - install OpenSearch search engines
 *
 * Function modified from https://developer.mozilla.org/en-US/docs/Adding_search_engines_from_web_pages
 *
 */

function installSearchEngine(url) {
	if (window.external && ("AddSearchProvider" in window.external)) {
	// Firefox 2+, Chrome and IE 7+, OpenSearch
		window.external.AddSearchProvider(url);
	} else {
		// No search engine support (IE 6, Opera, etc).
		alert("No OpenSearch search engine support");
	}
}
