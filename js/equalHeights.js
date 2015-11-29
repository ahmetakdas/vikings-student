/* equalHeights.js */

$.fn.equalHeights = function() {
	// The equals
	var $this = $(this);
	// For every equal
	$this.each(function(){
		// Current row
		var $row = $(this);
		
		// The childs to give height
		var childs = $row.data('equals');
		var aChilds = childs.split(",");
		
		// For every childs array loop it
		$.each(aChilds, function(index, value){
			var currentTallest = 0;
			var aElements = $row.find(String(value));
			
			if($this.data('row')){
				var iPerRow = $this.data('row');
			}
			else {
				// TAKE ALL
				var iPerRow = aElements.size();
			}
			
			for(var i = 0; i < aElements.length; i+=iPerRow) {
				aElements.slice(i, i+iPerRow).each(function(){
					$(this).css('min-height', '0px');
					if ($(this).outerHeight() > currentTallest) { 
						currentTallest = $(this).outerHeight(); 
					}  
				});
				
				if($('.slicknav_menu:visible').length == 0 || $row.data('force') == true){
					aElements.slice(i, i+iPerRow).css({'min-height': currentTallest +'px'});
				}
				currentTallest = 0;
			}
		});
	});
	
	return this;
};