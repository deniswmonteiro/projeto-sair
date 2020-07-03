/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./node_modules/css-loader/index.js?!./node_modules/postcss-loader/src/index.js?!./node_modules/typeface-quicksand/index.css":
/*!***********************************************************************************************************************************!*\
  !*** ./node_modules/css-loader??ref--6-1!./node_modules/postcss-loader/src??ref--6-2!./node_modules/typeface-quicksand/index.css ***!
  \***********************************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

var escape = __webpack_require__(/*! ../css-loader/lib/url/escape.js */ "./node_modules/css-loader/lib/url/escape.js");
exports = module.exports = __webpack_require__(/*! ../css-loader/lib/css-base.js */ "./node_modules/css-loader/lib/css-base.js")(false);
// imports


// module
exports.push([module.i, "/* quicksand-300normal - latin */\n@font-face {\n  font-family: 'Quicksand';\n  font-style: normal;\n  font-display: swap;\n  font-weight: 300;\n  src:\n    local('Quicksand Light '),\n    local('Quicksand-Light'),\n    url(" + escape(__webpack_require__(/*! ./files/quicksand-latin-300.woff2 */ "./node_modules/typeface-quicksand/files/quicksand-latin-300.woff2")) + ") format('woff2'), \n    url(" + escape(__webpack_require__(/*! ./files/quicksand-latin-300.woff */ "./node_modules/typeface-quicksand/files/quicksand-latin-300.woff")) + ") format('woff'); /* Modern Browsers */\n}\n\n/* quicksand-400normal - latin */\n@font-face {\n  font-family: 'Quicksand';\n  font-style: normal;\n  font-display: swap;\n  font-weight: 400;\n  src:\n    local('Quicksand Regular '),\n    local('Quicksand-Regular'),\n    url(" + escape(__webpack_require__(/*! ./files/quicksand-latin-400.woff2 */ "./node_modules/typeface-quicksand/files/quicksand-latin-400.woff2")) + ") format('woff2'), \n    url(" + escape(__webpack_require__(/*! ./files/quicksand-latin-400.woff */ "./node_modules/typeface-quicksand/files/quicksand-latin-400.woff")) + ") format('woff'); /* Modern Browsers */\n}\n\n/* quicksand-500normal - latin */\n@font-face {\n  font-family: 'Quicksand';\n  font-style: normal;\n  font-display: swap;\n  font-weight: 500;\n  src:\n    local('Quicksand Medium '),\n    local('Quicksand-Medium'),\n    url(" + escape(__webpack_require__(/*! ./files/quicksand-latin-500.woff2 */ "./node_modules/typeface-quicksand/files/quicksand-latin-500.woff2")) + ") format('woff2'), \n    url(" + escape(__webpack_require__(/*! ./files/quicksand-latin-500.woff */ "./node_modules/typeface-quicksand/files/quicksand-latin-500.woff")) + ") format('woff'); /* Modern Browsers */\n}\n\n/* quicksand-600normal - latin */\n@font-face {\n  font-family: 'Quicksand';\n  font-style: normal;\n  font-display: swap;\n  font-weight: 600;\n  src:\n    local('Quicksand SemiBold '),\n    local('Quicksand-SemiBold'),\n    url(" + escape(__webpack_require__(/*! ./files/quicksand-latin-600.woff2 */ "./node_modules/typeface-quicksand/files/quicksand-latin-600.woff2")) + ") format('woff2'), \n    url(" + escape(__webpack_require__(/*! ./files/quicksand-latin-600.woff */ "./node_modules/typeface-quicksand/files/quicksand-latin-600.woff")) + ") format('woff'); /* Modern Browsers */\n}\n\n/* quicksand-700normal - latin */\n@font-face {\n  font-family: 'Quicksand';\n  font-style: normal;\n  font-display: swap;\n  font-weight: 700;\n  src:\n    local('Quicksand Bold '),\n    local('Quicksand-Bold'),\n    url(" + escape(__webpack_require__(/*! ./files/quicksand-latin-700.woff2 */ "./node_modules/typeface-quicksand/files/quicksand-latin-700.woff2")) + ") format('woff2'), \n    url(" + escape(__webpack_require__(/*! ./files/quicksand-latin-700.woff */ "./node_modules/typeface-quicksand/files/quicksand-latin-700.woff")) + ") format('woff'); /* Modern Browsers */\n}\n\n", ""]);

// exports


/***/ }),

/***/ "./node_modules/css-loader/lib/css-base.js":
/*!*************************************************!*\
  !*** ./node_modules/css-loader/lib/css-base.js ***!
  \*************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

/*
	MIT License http://www.opensource.org/licenses/mit-license.php
	Author Tobias Koppers @sokra
*/
// css base code, injected by the css-loader
module.exports = function(useSourceMap) {
	var list = [];

	// return the list of modules as css string
	list.toString = function toString() {
		return this.map(function (item) {
			var content = cssWithMappingToString(item, useSourceMap);
			if(item[2]) {
				return "@media " + item[2] + "{" + content + "}";
			} else {
				return content;
			}
		}).join("");
	};

	// import a list of modules into the list
	list.i = function(modules, mediaQuery) {
		if(typeof modules === "string")
			modules = [[null, modules, ""]];
		var alreadyImportedModules = {};
		for(var i = 0; i < this.length; i++) {
			var id = this[i][0];
			if(typeof id === "number")
				alreadyImportedModules[id] = true;
		}
		for(i = 0; i < modules.length; i++) {
			var item = modules[i];
			// skip already imported module
			// this implementation is not 100% perfect for weird media query combinations
			//  when a module is imported multiple times with different media queries.
			//  I hope this will never occur (Hey this way we have smaller bundles)
			if(typeof item[0] !== "number" || !alreadyImportedModules[item[0]]) {
				if(mediaQuery && !item[2]) {
					item[2] = mediaQuery;
				} else if(mediaQuery) {
					item[2] = "(" + item[2] + ") and (" + mediaQuery + ")";
				}
				list.push(item);
			}
		}
	};
	return list;
};

function cssWithMappingToString(item, useSourceMap) {
	var content = item[1] || '';
	var cssMapping = item[3];
	if (!cssMapping) {
		return content;
	}

	if (useSourceMap && typeof btoa === 'function') {
		var sourceMapping = toComment(cssMapping);
		var sourceURLs = cssMapping.sources.map(function (source) {
			return '/*# sourceURL=' + cssMapping.sourceRoot + source + ' */'
		});

		return [content].concat(sourceURLs).concat([sourceMapping]).join('\n');
	}

	return [content].join('\n');
}

// Adapted from convert-source-map (MIT)
function toComment(sourceMap) {
	// eslint-disable-next-line no-undef
	var base64 = btoa(unescape(encodeURIComponent(JSON.stringify(sourceMap))));
	var data = 'sourceMappingURL=data:application/json;charset=utf-8;base64,' + base64;

	return '/*# ' + data + ' */';
}


/***/ }),

/***/ "./node_modules/css-loader/lib/url/escape.js":
/*!***************************************************!*\
  !*** ./node_modules/css-loader/lib/url/escape.js ***!
  \***************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = function escape(url) {
    if (typeof url !== 'string') {
        return url
    }
    // If url is already wrapped in quotes, remove them
    if (/^['"].*['"]$/.test(url)) {
        url = url.slice(1, -1);
    }
    // Should url be wrapped?
    // See https://drafts.csswg.org/css-values-3/#urls
    if (/["'() \t\n]/.test(url)) {
        return '"' + url.replace(/"/g, '\\"').replace(/\n/g, '\\n') + '"'
    }

    return url
}


/***/ }),

/***/ "./node_modules/style-loader/lib/addStyles.js":
/*!****************************************************!*\
  !*** ./node_modules/style-loader/lib/addStyles.js ***!
  \****************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

/*
	MIT License http://www.opensource.org/licenses/mit-license.php
	Author Tobias Koppers @sokra
*/

var stylesInDom = {};

var	memoize = function (fn) {
	var memo;

	return function () {
		if (typeof memo === "undefined") memo = fn.apply(this, arguments);
		return memo;
	};
};

var isOldIE = memoize(function () {
	// Test for IE <= 9 as proposed by Browserhacks
	// @see http://browserhacks.com/#hack-e71d8692f65334173fee715c222cb805
	// Tests for existence of standard globals is to allow style-loader
	// to operate correctly into non-standard environments
	// @see https://github.com/webpack-contrib/style-loader/issues/177
	return window && document && document.all && !window.atob;
});

var getTarget = function (target, parent) {
  if (parent){
    return parent.querySelector(target);
  }
  return document.querySelector(target);
};

var getElement = (function (fn) {
	var memo = {};

	return function(target, parent) {
                // If passing function in options, then use it for resolve "head" element.
                // Useful for Shadow Root style i.e
                // {
                //   insertInto: function () { return document.querySelector("#foo").shadowRoot }
                // }
                if (typeof target === 'function') {
                        return target();
                }
                if (typeof memo[target] === "undefined") {
			var styleTarget = getTarget.call(this, target, parent);
			// Special case to return head of iframe instead of iframe itself
			if (window.HTMLIFrameElement && styleTarget instanceof window.HTMLIFrameElement) {
				try {
					// This will throw an exception if access to iframe is blocked
					// due to cross-origin restrictions
					styleTarget = styleTarget.contentDocument.head;
				} catch(e) {
					styleTarget = null;
				}
			}
			memo[target] = styleTarget;
		}
		return memo[target]
	};
})();

var singleton = null;
var	singletonCounter = 0;
var	stylesInsertedAtTop = [];

var	fixUrls = __webpack_require__(/*! ./urls */ "./node_modules/style-loader/lib/urls.js");

module.exports = function(list, options) {
	if (typeof DEBUG !== "undefined" && DEBUG) {
		if (typeof document !== "object") throw new Error("The style-loader cannot be used in a non-browser environment");
	}

	options = options || {};

	options.attrs = typeof options.attrs === "object" ? options.attrs : {};

	// Force single-tag solution on IE6-9, which has a hard limit on the # of <style>
	// tags it will allow on a page
	if (!options.singleton && typeof options.singleton !== "boolean") options.singleton = isOldIE();

	// By default, add <style> tags to the <head> element
        if (!options.insertInto) options.insertInto = "head";

	// By default, add <style> tags to the bottom of the target
	if (!options.insertAt) options.insertAt = "bottom";

	var styles = listToStyles(list, options);

	addStylesToDom(styles, options);

	return function update (newList) {
		var mayRemove = [];

		for (var i = 0; i < styles.length; i++) {
			var item = styles[i];
			var domStyle = stylesInDom[item.id];

			domStyle.refs--;
			mayRemove.push(domStyle);
		}

		if(newList) {
			var newStyles = listToStyles(newList, options);
			addStylesToDom(newStyles, options);
		}

		for (var i = 0; i < mayRemove.length; i++) {
			var domStyle = mayRemove[i];

			if(domStyle.refs === 0) {
				for (var j = 0; j < domStyle.parts.length; j++) domStyle.parts[j]();

				delete stylesInDom[domStyle.id];
			}
		}
	};
};

function addStylesToDom (styles, options) {
	for (var i = 0; i < styles.length; i++) {
		var item = styles[i];
		var domStyle = stylesInDom[item.id];

		if(domStyle) {
			domStyle.refs++;

			for(var j = 0; j < domStyle.parts.length; j++) {
				domStyle.parts[j](item.parts[j]);
			}

			for(; j < item.parts.length; j++) {
				domStyle.parts.push(addStyle(item.parts[j], options));
			}
		} else {
			var parts = [];

			for(var j = 0; j < item.parts.length; j++) {
				parts.push(addStyle(item.parts[j], options));
			}

			stylesInDom[item.id] = {id: item.id, refs: 1, parts: parts};
		}
	}
}

function listToStyles (list, options) {
	var styles = [];
	var newStyles = {};

	for (var i = 0; i < list.length; i++) {
		var item = list[i];
		var id = options.base ? item[0] + options.base : item[0];
		var css = item[1];
		var media = item[2];
		var sourceMap = item[3];
		var part = {css: css, media: media, sourceMap: sourceMap};

		if(!newStyles[id]) styles.push(newStyles[id] = {id: id, parts: [part]});
		else newStyles[id].parts.push(part);
	}

	return styles;
}

function insertStyleElement (options, style) {
	var target = getElement(options.insertInto)

	if (!target) {
		throw new Error("Couldn't find a style target. This probably means that the value for the 'insertInto' parameter is invalid.");
	}

	var lastStyleElementInsertedAtTop = stylesInsertedAtTop[stylesInsertedAtTop.length - 1];

	if (options.insertAt === "top") {
		if (!lastStyleElementInsertedAtTop) {
			target.insertBefore(style, target.firstChild);
		} else if (lastStyleElementInsertedAtTop.nextSibling) {
			target.insertBefore(style, lastStyleElementInsertedAtTop.nextSibling);
		} else {
			target.appendChild(style);
		}
		stylesInsertedAtTop.push(style);
	} else if (options.insertAt === "bottom") {
		target.appendChild(style);
	} else if (typeof options.insertAt === "object" && options.insertAt.before) {
		var nextSibling = getElement(options.insertAt.before, target);
		target.insertBefore(style, nextSibling);
	} else {
		throw new Error("[Style Loader]\n\n Invalid value for parameter 'insertAt' ('options.insertAt') found.\n Must be 'top', 'bottom', or Object.\n (https://github.com/webpack-contrib/style-loader#insertat)\n");
	}
}

function removeStyleElement (style) {
	if (style.parentNode === null) return false;
	style.parentNode.removeChild(style);

	var idx = stylesInsertedAtTop.indexOf(style);
	if(idx >= 0) {
		stylesInsertedAtTop.splice(idx, 1);
	}
}

function createStyleElement (options) {
	var style = document.createElement("style");

	if(options.attrs.type === undefined) {
		options.attrs.type = "text/css";
	}

	if(options.attrs.nonce === undefined) {
		var nonce = getNonce();
		if (nonce) {
			options.attrs.nonce = nonce;
		}
	}

	addAttrs(style, options.attrs);
	insertStyleElement(options, style);

	return style;
}

function createLinkElement (options) {
	var link = document.createElement("link");

	if(options.attrs.type === undefined) {
		options.attrs.type = "text/css";
	}
	options.attrs.rel = "stylesheet";

	addAttrs(link, options.attrs);
	insertStyleElement(options, link);

	return link;
}

function addAttrs (el, attrs) {
	Object.keys(attrs).forEach(function (key) {
		el.setAttribute(key, attrs[key]);
	});
}

function getNonce() {
	if (false) {}

	return __webpack_require__.nc;
}

function addStyle (obj, options) {
	var style, update, remove, result;

	// If a transform function was defined, run it on the css
	if (options.transform && obj.css) {
	    result = typeof options.transform === 'function'
		 ? options.transform(obj.css) 
		 : options.transform.default(obj.css);

	    if (result) {
	    	// If transform returns a value, use that instead of the original css.
	    	// This allows running runtime transformations on the css.
	    	obj.css = result;
	    } else {
	    	// If the transform function returns a falsy value, don't add this css.
	    	// This allows conditional loading of css
	    	return function() {
	    		// noop
	    	};
	    }
	}

	if (options.singleton) {
		var styleIndex = singletonCounter++;

		style = singleton || (singleton = createStyleElement(options));

		update = applyToSingletonTag.bind(null, style, styleIndex, false);
		remove = applyToSingletonTag.bind(null, style, styleIndex, true);

	} else if (
		obj.sourceMap &&
		typeof URL === "function" &&
		typeof URL.createObjectURL === "function" &&
		typeof URL.revokeObjectURL === "function" &&
		typeof Blob === "function" &&
		typeof btoa === "function"
	) {
		style = createLinkElement(options);
		update = updateLink.bind(null, style, options);
		remove = function () {
			removeStyleElement(style);

			if(style.href) URL.revokeObjectURL(style.href);
		};
	} else {
		style = createStyleElement(options);
		update = applyToTag.bind(null, style);
		remove = function () {
			removeStyleElement(style);
		};
	}

	update(obj);

	return function updateStyle (newObj) {
		if (newObj) {
			if (
				newObj.css === obj.css &&
				newObj.media === obj.media &&
				newObj.sourceMap === obj.sourceMap
			) {
				return;
			}

			update(obj = newObj);
		} else {
			remove();
		}
	};
}

var replaceText = (function () {
	var textStore = [];

	return function (index, replacement) {
		textStore[index] = replacement;

		return textStore.filter(Boolean).join('\n');
	};
})();

function applyToSingletonTag (style, index, remove, obj) {
	var css = remove ? "" : obj.css;

	if (style.styleSheet) {
		style.styleSheet.cssText = replaceText(index, css);
	} else {
		var cssNode = document.createTextNode(css);
		var childNodes = style.childNodes;

		if (childNodes[index]) style.removeChild(childNodes[index]);

		if (childNodes.length) {
			style.insertBefore(cssNode, childNodes[index]);
		} else {
			style.appendChild(cssNode);
		}
	}
}

function applyToTag (style, obj) {
	var css = obj.css;
	var media = obj.media;

	if(media) {
		style.setAttribute("media", media)
	}

	if(style.styleSheet) {
		style.styleSheet.cssText = css;
	} else {
		while(style.firstChild) {
			style.removeChild(style.firstChild);
		}

		style.appendChild(document.createTextNode(css));
	}
}

function updateLink (link, options, obj) {
	var css = obj.css;
	var sourceMap = obj.sourceMap;

	/*
		If convertToAbsoluteUrls isn't defined, but sourcemaps are enabled
		and there is no publicPath defined then lets turn convertToAbsoluteUrls
		on by default.  Otherwise default to the convertToAbsoluteUrls option
		directly
	*/
	var autoFixUrls = options.convertToAbsoluteUrls === undefined && sourceMap;

	if (options.convertToAbsoluteUrls || autoFixUrls) {
		css = fixUrls(css);
	}

	if (sourceMap) {
		// http://stackoverflow.com/a/26603875
		css += "\n/*# sourceMappingURL=data:application/json;base64," + btoa(unescape(encodeURIComponent(JSON.stringify(sourceMap)))) + " */";
	}

	var blob = new Blob([css], { type: "text/css" });

	var oldSrc = link.href;

	link.href = URL.createObjectURL(blob);

	if(oldSrc) URL.revokeObjectURL(oldSrc);
}


/***/ }),

/***/ "./node_modules/style-loader/lib/urls.js":
/*!***********************************************!*\
  !*** ./node_modules/style-loader/lib/urls.js ***!
  \***********************************************/
/*! no static exports found */
/***/ (function(module, exports) {


/**
 * When source maps are enabled, `style-loader` uses a link element with a data-uri to
 * embed the css on the page. This breaks all relative urls because now they are relative to a
 * bundle instead of the current page.
 *
 * One solution is to only use full urls, but that may be impossible.
 *
 * Instead, this function "fixes" the relative urls to be absolute according to the current page location.
 *
 * A rudimentary test suite is located at `test/fixUrls.js` and can be run via the `npm test` command.
 *
 */

module.exports = function (css) {
  // get current location
  var location = typeof window !== "undefined" && window.location;

  if (!location) {
    throw new Error("fixUrls requires window.location");
  }

	// blank or null?
	if (!css || typeof css !== "string") {
	  return css;
  }

  var baseUrl = location.protocol + "//" + location.host;
  var currentDir = baseUrl + location.pathname.replace(/\/[^\/]*$/, "/");

	// convert each url(...)
	/*
	This regular expression is just a way to recursively match brackets within
	a string.

	 /url\s*\(  = Match on the word "url" with any whitespace after it and then a parens
	   (  = Start a capturing group
	     (?:  = Start a non-capturing group
	         [^)(]  = Match anything that isn't a parentheses
	         |  = OR
	         \(  = Match a start parentheses
	             (?:  = Start another non-capturing groups
	                 [^)(]+  = Match anything that isn't a parentheses
	                 |  = OR
	                 \(  = Match a start parentheses
	                     [^)(]*  = Match anything that isn't a parentheses
	                 \)  = Match a end parentheses
	             )  = End Group
              *\) = Match anything and then a close parens
          )  = Close non-capturing group
          *  = Match anything
       )  = Close capturing group
	 \)  = Match a close parens

	 /gi  = Get all matches, not the first.  Be case insensitive.
	 */
	var fixedCss = css.replace(/url\s*\(((?:[^)(]|\((?:[^)(]+|\([^)(]*\))*\))*)\)/gi, function(fullMatch, origUrl) {
		// strip quotes (if they exist)
		var unquotedOrigUrl = origUrl
			.trim()
			.replace(/^"(.*)"$/, function(o, $1){ return $1; })
			.replace(/^'(.*)'$/, function(o, $1){ return $1; });

		// already a full url? no change
		if (/^(#|data:|http:\/\/|https:\/\/|file:\/\/\/|\s*$)/i.test(unquotedOrigUrl)) {
		  return fullMatch;
		}

		// convert the url to a full url
		var newUrl;

		if (unquotedOrigUrl.indexOf("//") === 0) {
		  	//TODO: should we add protocol?
			newUrl = unquotedOrigUrl;
		} else if (unquotedOrigUrl.indexOf("/") === 0) {
			// path should be relative to the base url
			newUrl = baseUrl + unquotedOrigUrl; // already starts with '/'
		} else {
			// path should be relative to current directory
			newUrl = currentDir + unquotedOrigUrl.replace(/^\.\//, ""); // Strip leading './'
		}

		// send back the fixed url(...)
		return "url(" + JSON.stringify(newUrl) + ")";
	});

	// send back the fixed css
	return fixedCss;
};


/***/ }),

/***/ "./node_modules/typeface-quicksand/files/quicksand-latin-300.woff":
/*!************************************************************************!*\
  !*** ./node_modules/typeface-quicksand/files/quicksand-latin-300.woff ***!
  \************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "/fonts/vendor/typeface-quicksand/files/quicksand-latin-300.woff?9a2540cce836fdfccdf35a7184b24af8";

/***/ }),

/***/ "./node_modules/typeface-quicksand/files/quicksand-latin-300.woff2":
/*!*************************************************************************!*\
  !*** ./node_modules/typeface-quicksand/files/quicksand-latin-300.woff2 ***!
  \*************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "/fonts/vendor/typeface-quicksand/files/quicksand-latin-300.woff2?7555adc38bfc401504f137e1e604ed84";

/***/ }),

/***/ "./node_modules/typeface-quicksand/files/quicksand-latin-400.woff":
/*!************************************************************************!*\
  !*** ./node_modules/typeface-quicksand/files/quicksand-latin-400.woff ***!
  \************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "/fonts/vendor/typeface-quicksand/files/quicksand-latin-400.woff?89b7578bfa5a888dae676a596e423cb6";

/***/ }),

/***/ "./node_modules/typeface-quicksand/files/quicksand-latin-400.woff2":
/*!*************************************************************************!*\
  !*** ./node_modules/typeface-quicksand/files/quicksand-latin-400.woff2 ***!
  \*************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "/fonts/vendor/typeface-quicksand/files/quicksand-latin-400.woff2?aa06b1e97f0640360f4b7355cdd0e4ab";

/***/ }),

/***/ "./node_modules/typeface-quicksand/files/quicksand-latin-500.woff":
/*!************************************************************************!*\
  !*** ./node_modules/typeface-quicksand/files/quicksand-latin-500.woff ***!
  \************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "/fonts/vendor/typeface-quicksand/files/quicksand-latin-500.woff?5dacfd42158e8ea0ea6ecd13ed27240e";

/***/ }),

/***/ "./node_modules/typeface-quicksand/files/quicksand-latin-500.woff2":
/*!*************************************************************************!*\
  !*** ./node_modules/typeface-quicksand/files/quicksand-latin-500.woff2 ***!
  \*************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "/fonts/vendor/typeface-quicksand/files/quicksand-latin-500.woff2?71d7b62210ccadec855179ef008f507f";

/***/ }),

/***/ "./node_modules/typeface-quicksand/files/quicksand-latin-600.woff":
/*!************************************************************************!*\
  !*** ./node_modules/typeface-quicksand/files/quicksand-latin-600.woff ***!
  \************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "/fonts/vendor/typeface-quicksand/files/quicksand-latin-600.woff?68229628ae890c4956a344b94454475f";

/***/ }),

/***/ "./node_modules/typeface-quicksand/files/quicksand-latin-600.woff2":
/*!*************************************************************************!*\
  !*** ./node_modules/typeface-quicksand/files/quicksand-latin-600.woff2 ***!
  \*************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "/fonts/vendor/typeface-quicksand/files/quicksand-latin-600.woff2?63b2ff32faf922e07008a45318493705";

/***/ }),

/***/ "./node_modules/typeface-quicksand/files/quicksand-latin-700.woff":
/*!************************************************************************!*\
  !*** ./node_modules/typeface-quicksand/files/quicksand-latin-700.woff ***!
  \************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "/fonts/vendor/typeface-quicksand/files/quicksand-latin-700.woff?25e58c7536f16dac306d49aa480abfa1";

/***/ }),

/***/ "./node_modules/typeface-quicksand/files/quicksand-latin-700.woff2":
/*!*************************************************************************!*\
  !*** ./node_modules/typeface-quicksand/files/quicksand-latin-700.woff2 ***!
  \*************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "/fonts/vendor/typeface-quicksand/files/quicksand-latin-700.woff2?e84fd014ffd68f5d72d276fbe3ced630";

/***/ }),

/***/ "./node_modules/typeface-quicksand/index.css":
/*!***************************************************!*\
  !*** ./node_modules/typeface-quicksand/index.css ***!
  \***************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {


var content = __webpack_require__(/*! !../css-loader??ref--6-1!../postcss-loader/src??ref--6-2!./index.css */ "./node_modules/css-loader/index.js?!./node_modules/postcss-loader/src/index.js?!./node_modules/typeface-quicksand/index.css");

if(typeof content === 'string') content = [[module.i, content, '']];

var transform;
var insertInto;



var options = {"hmr":true}

options.transform = transform
options.insertInto = undefined;

var update = __webpack_require__(/*! ../style-loader/lib/addStyles.js */ "./node_modules/style-loader/lib/addStyles.js")(content, options);

if(content.locals) module.exports = content.locals;

if(false) {}

/***/ }),

/***/ "./resources/js/app-scripts.js":
/*!*************************************!*\
  !*** ./resources/js/app-scripts.js ***!
  \*************************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _scripts_alterar_senha__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./scripts/_alterar-senha */ "./resources/js/scripts/_alterar-senha.js");
/* harmony import */ var _scripts_alterar_senha__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_scripts_alterar_senha__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _scripts_evento_form_campo__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./scripts/_evento-form-campo */ "./resources/js/scripts/_evento-form-campo.js");
/* harmony import */ var _scripts_evento_form_campo__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_scripts_evento_form_campo__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _scripts_mascara_campos__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./scripts/_mascara-campos */ "./resources/js/scripts/_mascara-campos.js");
/* harmony import */ var _scripts_mascara_campos__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_scripts_mascara_campos__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var _scripts_mostra_senha__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./scripts/_mostra-senha */ "./resources/js/scripts/_mostra-senha.js");
/* harmony import */ var _scripts_mostra_senha__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(_scripts_mostra_senha__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var _scripts_notificacoes__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./scripts/_notificacoes */ "./resources/js/scripts/_notificacoes.js");
/* harmony import */ var _scripts_notificacoes__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(_scripts_notificacoes__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var _scripts_remove_form_erro__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./scripts/_remove-form-erro */ "./resources/js/scripts/_remove-form-erro.js");
/* harmony import */ var _scripts_remove_form_erro__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(_scripts_remove_form_erro__WEBPACK_IMPORTED_MODULE_5__);
/* harmony import */ var _scripts_sala_dispositivos__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ./scripts/_sala-dispositivos */ "./resources/js/scripts/_sala-dispositivos.js");
/* harmony import */ var _scripts_sala_dispositivos__WEBPACK_IMPORTED_MODULE_6___default = /*#__PURE__*/__webpack_require__.n(_scripts_sala_dispositivos__WEBPACK_IMPORTED_MODULE_6__);
/* harmony import */ var _scripts_temperatura_ar_condicionado__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ./scripts/_temperatura-ar-condicionado */ "./resources/js/scripts/_temperatura-ar-condicionado.js");
/* harmony import */ var _scripts_temperatura_ar_condicionado__WEBPACK_IMPORTED_MODULE_7___default = /*#__PURE__*/__webpack_require__.n(_scripts_temperatura_ar_condicionado__WEBPACK_IMPORTED_MODULE_7__);
__webpack_require__(/*! typeface-quicksand */ "./node_modules/typeface-quicksand/index.css");










/***/ }),

/***/ "./resources/js/scripts/_alterar-senha.js":
/*!************************************************!*\
  !*** ./resources/js/scripts/_alterar-senha.js ***!
  \************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

/** ativa/desativa campo de alteração de senha */
var chkAlterarSenha = document.querySelector("[data-perfil='chk_alterar_senha']");
var divAlterarSenha = document.querySelector("[data-perfil='form_senha']");
var inputsAlterarSenha = document.querySelectorAll("[data-perfil='form_senha'] input");
$(chkAlterarSenha).click(function () {
  divAlterarSenha.classList.toggle("active");
  inputsAlterarSenha.forEach(function (input) {
    1 == $(chkAlterarSenha).prop("checked") ? input.removeAttribute("disabled") : input.setAttribute("disabled", !0);
  });
});

/***/ }),

/***/ "./resources/js/scripts/_evento-form-campo.js":
/*!****************************************************!*\
  !*** ./resources/js/scripts/_evento-form-campo.js ***!
  \****************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

"use strict";

/** adiciona evento de click em botão a partir de um input */

var inputForm = document.querySelectorAll("input");
inputForm.forEach(function (input) {
  input.addEventListener("keyup", function (e) {
    if (e.keyCode === 13) {
      e.preventDefault();
      document.querySelector(".btn-confirmar").click();
    }
  });
});

/***/ }),

/***/ "./resources/js/scripts/_mascara-campos.js":
/*!*************************************************!*\
  !*** ./resources/js/scripts/_mascara-campos.js ***!
  \*************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

"use strict";

/** formata números de cpf */

document.querySelectorAll("input[id$='cpf']").forEach(function (e) {
  $(e).mask("000.000.000-00");
});

/***/ }),

/***/ "./resources/js/scripts/_mostra-senha.js":
/*!***********************************************!*\
  !*** ./resources/js/scripts/_mostra-senha.js ***!
  \***********************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

"use strict";

/** muda ícone do botão que mostra a senha */

var btnMostraSenha = document.querySelectorAll(".btn-mostra-senha");
var icoMostraSenha = document.querySelectorAll("[data-icone-senha]");
icoMostraSenha.forEach(function (icone) {
  icone.setAttribute("src", "/img/ico-esconde.svg");
});
btnMostraSenha.forEach(function (btn) {
  btn.addEventListener("click", function () {
    /** mostra/esconde a senha */
    document.querySelectorAll("[data-senha]").forEach(function (tipo) {
      "password" == tipo.type ? tipo.type = "text" : tipo.type = "password";
    });
    /** modifica o ícone do botão */

    btn.classList.toggle("btn-mostra-senha"), btn.classList.contains("btn-mostra-senha") ? icoMostraSenha.forEach(function (icone) {
      icone.setAttribute("src", "/img/ico-esconde.svg");
    }) : icoMostraSenha.forEach(function (icone) {
      icone.setAttribute("src", "/img/ico-mostra.svg");
    });
  });
});

/***/ }),

/***/ "./resources/js/scripts/_notificacoes.js":
/*!***********************************************!*\
  !*** ./resources/js/scripts/_notificacoes.js ***!
  \***********************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

"use strict";

/** duração das notificações */

$("div.alert").not(".alert-important").delay(4000).fadeOut(350);

/***/ }),

/***/ "./resources/js/scripts/_remove-form-erro.js":
/*!***************************************************!*\
  !*** ./resources/js/scripts/_remove-form-erro.js ***!
  \***************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

"use strict";

/** remove borda vermelha e aviso de erro */

var inputsErro = document.querySelectorAll(".uk-form-danger");
$(inputsErro).each(function () {
  $(this).change(function () {
    $(this).removeClass("uk-form-danger"), $(this).next().remove();
  });
});

/***/ }),

/***/ "./resources/js/scripts/_sala-dispositivos.js":
/*!****************************************************!*\
  !*** ./resources/js/scripts/_sala-dispositivos.js ***!
  \****************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

"use script";
/** previne mudança de aba de dispositivos na tela touch */
//document.querySelector(".uk-switcher").style.cssText = "touch-action = 'none'";

$(".uk-switcher").css("touch-action", "none");
/** muda aba do dispositivo e imagem correspondente */

$("[data-group]").each(function () {
  var allTarget = $(this).find("[data-target]"),
      allClick = $(this).find("[data-click]"),
      activeClass = "active";
  allTarget.first().addClass(activeClass);
  allClick.first().addClass(activeClass);
  allClick.click(function (e) {
    e.preventDefault();
    var id = $(this).data("click"),
        target = $('[data-target="' + id + '"]');
    allClick.removeClass(activeClass);
    allTarget.removeClass(activeClass);
    target.addClass(activeClass);
    $(this).addClass(activeClass);
  });
});
/** muda a cor do ícone do dispositivo de acordo com o interruptor acionado */

var interruptores = document.querySelectorAll(".check");
var icoDispositivos = document.querySelectorAll("[data-dispositivo]");
interruptores.forEach(function (interruptor) {
  interruptor.addEventListener("click", function () {
    icoDispositivos.forEach(function (dispositivo) {
      interruptor.id == dispositivo.dataset.dispositivo && interruptor.checked && interruptor.classList.contains("interruptor-lampada") ? dispositivo.style.background = "#193" : interruptor.id == dispositivo.dataset.dispositivo && interruptor.checked && interruptor.classList.contains("interruptor-arcondicionado") ? dispositivo.style.background = "#06c" : interruptor.id != dispositivo.dataset.dispositivo || interruptor.checked || (dispositivo.style.background = "#e21");
    });
  });
});
/** mostra os ícones do dispositivos de acordo com a aba */

var avisoArcondicionado = document.querySelectorAll(".aviso-arcondicionado");
var iconesLampada = document.querySelectorAll(".icones-lampada");
var iconesArcondicionado = document.querySelectorAll(".icones-arcondicionado");
var allClick = document.querySelectorAll("[data-click]");
$(iconesArcondicionado).css("display", "none");
$(avisoArcondicionado).css("display", "none");
allClick.forEach(function (tab) {
  $(tab).click(function () {
    "lampada" === tab.dataset.click ? ($(iconesLampada).css("display", "block"), $(iconesArcondicionado).css("display", "none"), $(avisoArcondicionado).css("display", "none")) : ($(iconesLampada).css("display", "none"), $(iconesArcondicionado).css("display", "block"), $(avisoArcondicionado).css("display", "block"));
  });
});

/***/ }),

/***/ "./resources/js/scripts/_temperatura-ar-condicionado.js":
/*!**************************************************************!*\
  !*** ./resources/js/scripts/_temperatura-ar-condicionado.js ***!
  \**************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

"use strict";

/** cria slider para mudança de temperatura do ar-condicionado */

var slidersTemperatura = document.querySelectorAll("[data-slider]");
var interruptoresArcondicionado = document.querySelectorAll(".check");
slidersTemperatura.forEach(function (slider) {
  slider.setAttribute("disabled", !0), noUiSlider.create(slider, {
    start: [16],
    connect: "lower",
    tooltips: [wNumb({
      decimals: 0,
      suffix: " ºC"
    })],
    step: 1,
    range: {
      min: [16],
      max: [26]
    }
  }), slider.noUiSlider.on("update", function () {
    console.log(slider.noUiSlider.get().slice(0, 2));
  });
});
/** ativa slider da temperatura quando interruptor do ar-condicionado é acionado */

var tooltipsTemperatura = document.querySelectorAll(".noUi-tooltip");
var btnTemperatura = document.querySelectorAll(".noUi-handle");
interruptoresArcondicionado.forEach(function (btnInterruptor) {
  btnInterruptor.addEventListener("click", function () {
    slidersTemperatura.forEach(function (slider) {
      btnInterruptor.id == slider.dataset.slider && btnInterruptor.checked ? (slider.removeAttribute("disabled"), tooltipsTemperatura.forEach(function (e, c) {
        c === btnInterruptor.id.substr(-1) - 1 && e.classList.add("enabled");
      }), btnTemperatura.forEach(function (e, c) {
        c === btnInterruptor.id.substr(-1) - 1 && e.classList.add("enabled");
      })) : btnInterruptor.id != slider.dataset.slider || btnInterruptor.checked || (slider.setAttribute("disabled", !0), tooltipsTemperatura.forEach(function (e, c) {
        c === btnInterruptor.id.substr(-1) - 1 && e.classList.remove("enabled");
      }), btnTemperatura.forEach(function (e, c) {
        c === btnInterruptor.id.substr(-1) - 1 && e.classList.remove("enabled");
      }));
    });
  });
});

/***/ }),

/***/ "./resources/sass/app.scss":
/*!*********************************!*\
  !*** ./resources/sass/app.scss ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!*********************************************************************!*\
  !*** multi ./resources/js/app-scripts.js ./resources/sass/app.scss ***!
  \*********************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! /home/denismonteiro/projeto-automacao/resources/js/app-scripts.js */"./resources/js/app-scripts.js");
module.exports = __webpack_require__(/*! /home/denismonteiro/projeto-automacao/resources/sass/app.scss */"./resources/sass/app.scss");


/***/ })

/******/ });