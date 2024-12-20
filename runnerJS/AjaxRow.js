/**
 * InlineEditor row object wrapper
 * @constructor
 * @param {object} inlineRow
 */
Runner.AjaxRow = function( inlineRow ) {
	this.row = inlineRow;
	
	if ( !inlineRow ) {
		// A stub
		this.row = {
			id: 1,
			gridLayout: ""
		};
	}
}

Runner.AjaxRow.prototype = {
	/**
	 * @param {string} fName
	 * @return {jQuery object}
	 */
	fieldCell: function( fName ) {
		var $span = Runner.getFieldSpan( fName, this.row.id );

		if ( this.row.gridLayout === Runner.pages.constants.VERTICAL_LAYOUT ) {
			return $span.closest("div");
		}
		
		return $span.closest("[data-field]");
	},
	
	/**
	 * @param {string} fName
	 * @return {string}
	 */
	getFieldText: function( fName ) {
		var $span = Runner.getFieldSpan( fName, this.row.id );
		return $span.html();
	},
	
	/**
	 * @param {string} fName
	 * @param {string} text
	 */	
	setFieldText: function( fName, text ) {
		var $span = Runner.getFieldSpan( fName, this.row.id );
		$span.html( text );		
	},
	
	/**
	 * @param {string} fName
	 * @return {mixed}
	 */
	getFieldValue: function( fName ) {
		if ( this.row.rowVals && typeof this.row.rowVals[ fName ] != 'undefined' ) {
			return this.row.rowVals[ fName ];
		}
		
		var $span = Runner.getFieldSpan( fName, this.row.id );
		return $span.attr("val").trim();		
	},
	
	/**
	 * @param {string} fName
	 * @param {mixed} value
	 */	
	setFieldValue: function( fName, value ) {
		var $span = Runner.getFieldSpan( fName, this.row.id );
		$span.attr("val", value);		
	},
	
	/**
	 * @return {jQuery object}
	 */
	record: function() {
		if ( this.row.gridLayout === Runner.pages.constants.VERTICAL_LAYOUT || this.row.gridLayout === Runner.pages.constants.COLUMNS_LAYOUT ) {
			return $(".panel-body", "[data-record-id='" + this.row.id + "']");
		}	
		return $("[data-record-id='" + this.row.id + "'][data-field]"); //layout dep ?
	},
	
	/**
	 * @return {jQuery object}
	 */
	getDefaultMessageCell: function() {
		if ( this.row.gridLayout === Runner.pages.constants.VERTICAL_LAYOUT || this.row.gridLayout === Runner.pages.constants.COLUMNS_LAYOUT ) {
			return this.record();
		}
		
		return this.record().eq(0);
	},
	
	/**
	 * @param {string} message
	 * @param {mixed} container
	 */
	setMessage: function( message, container ) {
		var $messageWrap;
		
		if ( !container && this.row.messageContainer ) {
			this.row.messageContainer.html( message );
			return;	
		}

		container = container || this.getDefaultMessageCell();
		$messageWrap = $(".row-message", container);
			
		if ( $messageWrap.length ) {
			this.row.messageContainer = $messageWrap.html( message );
			return;
		}
		
		if ( this.row.gridLayout === Runner.pages.constants.VERTICAL_LAYOUT || this.row.gridLayout === Runner.pages.constants.COLUMNS_LAYOUT ) {
			this.row.messageContainer = $("<div class='row-message'></div>").html( message ).prependTo( container );
		} else {
			this.row.messageContainer = $("<span class='row-message'></span>").html( message ).appendTo( container );
		}		
	},
	
	/**
	 *
	 */
	getMessage: function() {
		if ( this.row.messageContainer ) {
			return this.row.messageContainer.html();
		}
		
		return "";
	},
	
	/**
	 * @return {string}
	 */
	id: function() {
		return this.row.id;
	},
	
	/**
	 * @return {object}
	 */
	getRowObject: function() {
		return this.row;
	}
};
