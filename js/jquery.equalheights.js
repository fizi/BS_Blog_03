/**
* jQuery Equal Heights by row
* 
* Copyright (c) 2016 iBird Rose & KFan
* Dual licensed under the MIT and GPL licenses.
*
* Version 1.0.0
*/

;jQuery.fn.extend({
	equalHeights: function(options) {
		var self = this;
		
		options = $.extend({
			innerItem: false,
			parent: $(this).parent(),
			byRow: true
		}, options);
		
		this.setItemsWithInner = (function (items, height, inner, parent) {
			if (inner) {
				if (height == "auto") {
					$(items).find(inner).height(height);
				} else {
					$(items).find(inner).each(function () {
						var nHeight = height;
						$(this).siblings().each(function () {
							nHeight -= $(this).outerHeight();
						});
						
						var p = this;
						do {
							var p = $(p).parent();
							
							nHeight -= parseInt($(p).css("padding-top"));
							nHeight -= parseInt($(p).css("padding-bottom"));
						} while (!$(p).is(parent));
						
						$(this).height(nHeight);
					});
				}
			} else {
				$(items).height(height);
			}
		});
		
		var allEachItems = $(this);
		
		$(options.parent).each(function () {
			var eachItems = [];
			var items = [];
			var itemsWidth = 0;
			var maxHeight = 0;
			var selfParent = this;
			
			if (options.parent.length > 1) {
				eachItems = $(this).find(allEachItems);
			} else {
				eachItems = allEachItems;
			}
			
			self.setItemsWithInner(eachItems, "auto", options.innerItem);

			$(eachItems).each(function () {
				var itemWidth = $(this).outerWidth(true);
				
				var itemHeight = $(this).height();

				if (itemWidth + itemsWidth > $(selfParent).width() && items.length > 0 && options.byRow) {
					self.setItemsWithInner(items, maxHeight, options.innerItem, selfParent);

					items = [this];
					maxHeight = itemHeight;
					itemsWidth = itemWidth;
					
					return;
				}

				if (maxHeight < itemHeight) {
					maxHeight = itemHeight;
				}

				items.push(this);
				itemsWidth += itemWidth;
			});

			if (items.length > 0) {
				self.setItemsWithInner(items, maxHeight, options.innerItem, selfParent);
				items = [];
			}
		});

		return this;
	}
});

$(document).ready(function () {
	$("[data-equalheights]").each(function () {
		var key = $(this).attr("data-equalheights");
		var items = $(this).find(key);

		$(items).equalHeights();
		$(window).resize(function () {
			$(items).equalHeights();
		});
	});
});