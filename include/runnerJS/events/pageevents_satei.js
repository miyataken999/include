




















	

Runner.pages.PageSettings.addPageEvent('satei', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '__';
	
	if ( !pageObj.buttonEventBefore['__'] ) {
		pageObj.buttonEventBefore['__'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
params["txt"] = "Hello";
//ctrl.setMessage("Sending request to server...");

$("select[name^='value_status']").val(33);
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['__'] ) {
		pageObj.buttonEventAfter['__'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
//ctrl.setMessage(message);


		}
	}
	
	$('a[id="__"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "__" + "_" + Runner.genId();
		
		// create object
		var button___ = new Runner.form.Button({
			id: this.id ,
			btnName: "__"
		});
		
		// init
		button___.init( {args: [ pageObj, proxy, pageid ]} );
	});
});



	

Runner.pages.PageSettings.addPageEvent('satei', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '___1';
	
	if ( !pageObj.buttonEventBefore['___1'] ) {
		pageObj.buttonEventBefore['___1'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
params["txt"] = "Hello";
//ctrl.setMessage("Sending request to server...");

$("select[name^='value_status']").val(34);

 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['___1'] ) {
		pageObj.buttonEventAfter['___1'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
//ctrl.setMessage(message);

		}
	}
	
	$('a[id="___1"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "___1" + "_" + Runner.genId();
		
		// create object
		var button____1 = new Runner.form.Button({
			id: this.id ,
			btnName: "___1"
		});
		
		// init
		button____1.init( {args: [ pageObj, proxy, pageid ]} );
	});
});


	

Runner.pages.PageSettings.addPageEvent('satei', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '___________';
	
	if ( !pageObj.buttonEventBefore['___________'] ) {
		pageObj.buttonEventBefore['___________'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['___________'] ) {
		pageObj.buttonEventAfter['___________'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="___________"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "___________" + "_" + Runner.genId();
		
		// create object
		var button____________ = new Runner.form.Button({
			id: this.id ,
			btnName: "___________"
		});
		
		// init
		button____________.init( {args: [ pageObj, proxy, pageid ]} );
	});
});


	

Runner.pages.PageSettings.addPageEvent('satei', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '_________';
	
	if ( !pageObj.buttonEventBefore['_________'] ) {
		pageObj.buttonEventBefore['_________'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['_________'] ) {
		pageObj.buttonEventAfter['_________'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="_________"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "_________" + "_" + Runner.genId();
		
		// create object
		var button__________ = new Runner.form.Button({
			id: this.id ,
			btnName: "_________"
		});
		
		// init
		button__________.init( {args: [ pageObj, proxy, pageid ]} );
	});
});
































	

Runner.pages.PageSettings.addPageEvent('satei', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '_____4';
	
	if ( !pageObj.buttonEventBefore['_____4'] ) {
		pageObj.buttonEventBefore['_____4'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['_____4'] ) {
		pageObj.buttonEventAfter['_____4'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="_____4"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "_____4" + "_" + Runner.genId();
		
		// create object
		var button______4 = new Runner.form.Button({
			id: this.id ,
			btnName: "_____4"
		});
		
		// init
		button______4.init( {args: [ pageObj, proxy, pageid ]} );
	});
});























































	

Runner.pages.PageSettings.addPageEvent('satei', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '_______61';
	
	if ( !pageObj.buttonEventBefore['_______61'] ) {
		pageObj.buttonEventBefore['_______61'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
params["txt"] = "Hello";
//ctrl.setMessage("Sending request to server...");

$("select[name^='value_status']").val(119);

 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['_______61'] ) {
		pageObj.buttonEventAfter['_______61'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
//ctrl.setMessage(message);

		}
	}
	
	$('a[id="_______61"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "_______61" + "_" + Runner.genId();
		
		// create object
		var button________61 = new Runner.form.Button({
			id: this.id ,
			btnName: "_______61"
		});
		
		// init
		button________61.init( {args: [ pageObj, proxy, pageid ]} );
	});
});



















































































































	

Runner.pages.PageSettings.addPageEvent('satei', Runner.pages.constants.PAGE_ADD, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject) {
	if($("#js_load_area").html() == ""){
		$("#js_load_area").load("/include/page_event/satei/after_load_js.php",function(){
			js_load();
		});
	}else{
		js_load();
	};

//金性単価の自動反映
$("[id*=value_price_per_gram]").focusin(function(){
	//idの固有連番を取得、抜き出す
	$this_id_num = $(this).attr("id");
	$this_id_num = $this_id_num.split("_");
	$this_id_num = $this_id_num[$this_id_num.length-1];

	$gold_property_val = $("#value_gold_property_"+$this_id_num).val();
	// console.log("gold_property_val "+$gold_property_val);
	// console.log("value_price_per_gram_"+$this_id_num+"  "+$("#value_price_per_gram_"+$this_id_num).val());
	$kinsyou_tanka = $("#kinsyou_auto_list option[data='"+$gold_property_val+"']").val();
	// console.log("#kinsyou_auto_list[data='"+$gold_property_val+"']");
	// console.log("kinsyou_tanka "+$kinsyou_tanka);
	if($kinsyou_tanka != ''){
		if($("#value_price_per_gram_"+$this_id_num).val() == ''){
			$("#kinsyou_auto_list").val($kinsyou_tanka);
			$("#value_price_per_gram_"+$this_id_num).val($kinsyou_tanka);
		}
	}
})

// Place event code here.
// Use "Add Action" button to add code snippets.;
});
	

Runner.pages.PageSettings.addPageEvent('satei', Runner.pages.constants.PAGE_EDIT, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject) {
	if($("#js_load_area").html() == ""){
		$("#js_load_area").load("/include/page_event/satei/after_load_js.php",function(){
			js_load();
		});
	}else{
		js_load();
	};

//金性単価の自動反映
$("[id*=value_price_per_gram]").focusin(function(){
	//idの固有連番を取得、抜き出す
	$this_id_num = $(this).attr("id");
	$this_id_num = $this_id_num.split("_");
	$this_id_num = $this_id_num[$this_id_num.length-1];

	$gold_property_val = $("#value_gold_property_"+$this_id_num).val();
	// console.log("gold_property_val "+$gold_property_val);
	// console.log("value_price_per_gram_"+$this_id_num+"  "+$("#value_price_per_gram_"+$this_id_num).val());
	$kinsyou_tanka = $("#kinsyou_auto_list option[data='"+$gold_property_val+"']").val();
	// console.log("#kinsyou_auto_list[data='"+$gold_property_val+"']");
	// console.log("kinsyou_tanka "+$kinsyou_tanka);
	if($kinsyou_tanka != ''){
		if($("#value_price_per_gram_"+$this_id_num).val() == ''){
			$("#kinsyou_auto_list").val($kinsyou_tanka);
			$("#value_price_per_gram_"+$this_id_num).val($kinsyou_tanka);
		}
	}
})

// Place event code here.
// Use "Add Action" button to add code snippets.;
});
	

Runner.pages.PageSettings.addPageEvent('satei', Runner.pages.constants.PAGE_VIEW, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject) {
	
console.log('satei_view');
// Place event code here.
// Use "Add Action" button to add code snippets.;
});
	

Runner.pages.PageSettings.addPageEvent('satei', Runner.pages.constants.PAGE_LIST, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject) {
	
// Place event code here.
// Use "Add Action" button to add code snippets.;
});

//	AJAX snippets
