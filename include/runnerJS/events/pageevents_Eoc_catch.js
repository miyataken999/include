




















































































	

Runner.pages.PageSettings.addPageEvent('Eoc_catch', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '_______11';
	
	if ( !pageObj.buttonEventBefore['_______11'] ) {
		pageObj.buttonEventBefore['_______11'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
window.open('http://urlounge.co.jp/mailsystem/send_mail/all4/regist_mail_all.php',
'win',
'width=500,height=400,menubar=yes,status=yes,scrollbars=yes') ; return false ;

params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");

		}
	}
	
	if ( !pageObj.buttonEventAfter['_______11'] ) {
		pageObj.buttonEventAfter['_______11'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="_______11"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "_______11" + "_" + Runner.genId();
		
		// create object
		var button________11 = new Runner.form.Button({
			id: this.id ,
			btnName: "_______11"
		});
		
		// init
		button________11.init( {args: [ pageObj, proxy, pageid ]} );
	});
});


	

Runner.pages.PageSettings.addPageEvent('Eoc_catch', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '________3';
	
	if ( !pageObj.buttonEventBefore['________3'] ) {
		pageObj.buttonEventBefore['________3'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
window.open('http://urlounge.co.jp/mailsystem/send_mail/all5/regist_mail_all.php',
'win',
'width=500,height=400,menubar=yes,status=yes,scrollbars=yes') ; return false ;

params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;

		}
	}
	
	if ( !pageObj.buttonEventAfter['________3'] ) {
		pageObj.buttonEventAfter['________3'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="________3"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "________3" + "_" + Runner.genId();
		
		// create object
		var button_________3 = new Runner.form.Button({
			id: this.id ,
			btnName: "________3"
		});
		
		// init
		button_________3.init( {args: [ pageObj, proxy, pageid ]} );
	});
});


	

Runner.pages.PageSettings.addPageEvent('Eoc_catch', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '_________31';
	
	if ( !pageObj.buttonEventBefore['_________31'] ) {
		pageObj.buttonEventBefore['_________31'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['_________31'] ) {
		pageObj.buttonEventAfter['_________31'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="_________31"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "_________31" + "_" + Runner.genId();
		
		// create object
		var button__________31 = new Runner.form.Button({
			id: this.id ,
			btnName: "_________31"
		});
		
		// init
		button__________31.init( {args: [ pageObj, proxy, pageid ]} );
	});
});


	

Runner.pages.PageSettings.addPageEvent('Eoc_catch', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '____1';
	
	if ( !pageObj.buttonEventBefore['____1'] ) {
		pageObj.buttonEventBefore['____1'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.

params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['____1'] ) {
		pageObj.buttonEventAfter['____1'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.

window.open("https://urlounge.co.jp/include/henkyaku/create_fax.php?result="+result["txt"]);
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="____1"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "____1" + "_" + Runner.genId();
		
		// create object
		var button_____1 = new Runner.form.Button({
			id: this.id ,
			btnName: "____1"
		});
		
		// init
		button_____1.init( {args: [ pageObj, proxy, pageid ]} );
	});
});



	

Runner.pages.PageSettings.addPageEvent('Eoc_catch', Runner.pages.constants.PAGE_EDIT, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '_______8';
	
	if ( !pageObj.buttonEventBefore['_______8'] ) {
		pageObj.buttonEventBefore['_______8'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.

	if(window.confirm('宅配取引を自動反映します。\nよろしいですか?')){
	}else{
		window.alert('キャンセルされました');
		return false;
	}

params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['_______8'] ) {
		pageObj.buttonEventAfter['_______8'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"];
ctrl.setMessage(message);

if(message == 'OK'){
	location.reload();
}

		}
	}
	
	$('a[id="_______8"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "_______8" + "_" + Runner.genId();
		
		// create object
		var button________8 = new Runner.form.Button({
			id: this.id ,
			btnName: "_______8"
		});
		
		// init
		button________8.init( {args: [ pageObj, proxy, pageid ]} );
	});
});




















	

Runner.pages.PageSettings.addPageEvent('Eoc_catch', Runner.pages.constants.PAGE_EDIT, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '______8';
	
	if ( !pageObj.buttonEventBefore['______8'] ) {
		pageObj.buttonEventBefore['______8'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
//params["txt"] = "Hello";
 //ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
$("div[data-brick='editfields']>.container:nth-child(3)").toggleClass("open_takuhai_history");
		}
	}
	
	if ( !pageObj.buttonEventAfter['______8'] ) {
		pageObj.buttonEventAfter['______8'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
//var message = result["txt"] + " !!!";
//ctrl.setMessage(message);

		}
	}
	
	$('a[id="______8"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "______8" + "_" + Runner.genId();
		
		// create object
		var button_______8 = new Runner.form.Button({
			id: this.id ,
			btnName: "______8"
		});
		
		// init
		button_______8.init( {args: [ pageObj, proxy, pageid ]} );
	});
});


























































































	

Runner.pages.PageSettings.addPageEvent('Eoc_catch', Runner.pages.constants.PAGE_EDIT, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'New_Button7';
	
	if ( !pageObj.buttonEventBefore['New_Button7'] ) {
		pageObj.buttonEventBefore['New_Button7'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['New_Button7'] ) {
		pageObj.buttonEventAfter['New_Button7'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.

window.open("https://rifa.life/lounge_API/brother/print_toutyaku.php?user_id=" + result["user_id"] + "&ecc_id=" + result["ecc_id"]);

var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="New_Button7"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "New_Button7" + "_" + Runner.genId();
		
		// create object
		var button_New_Button7 = new Runner.form.Button({
			id: this.id ,
			btnName: "New_Button7"
		});
		
		// init
		button_New_Button7.init( {args: [ pageObj, proxy, pageid ]} );
	});
});

























	

Runner.pages.PageSettings.addPageEvent('Eoc_catch', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '______10';
	
	if ( !pageObj.buttonEventBefore['______10'] ) {
		pageObj.buttonEventBefore['______10'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.

	if(window.confirm('宅配取引を自動反映します。\nよろしいですか?')){
	}else{
		window.alert('キャンセルされました');
		return false;
	}


params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['______10'] ) {
		pageObj.buttonEventAfter['______10'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="______10"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "______10" + "_" + Runner.genId();
		
		// create object
		var button_______10 = new Runner.form.Button({
			id: this.id ,
			btnName: "______10"
		});
		
		// init
		button_______10.init( {args: [ pageObj, proxy, pageid ]} );
	});
});



	

Runner.pages.PageSettings.addPageEvent('Eoc_catch', Runner.pages.constants.PAGE_VIEW, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject) {
	
console.log('Eoc_view');

// Place event code here.
// Use "Add Action" button to add code snippets.;
});
	

Runner.pages.PageSettings.addPageEvent('Eoc_catch', Runner.pages.constants.PAGE_ADD, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject) {
	// Place event code here.
// Use "Add Action" button to add code snippets.

var address1 = Runner.getControl(pageid,'address1');
address1.on('focus',function(){
	var zip1 = Runner.getControl(pageid,'zip1').getDispElem().attr("id");
	var zip2 = Runner.getControl(pageid,'zip2').getDispElem().attr("id");
	var address1 = Runner.getControl(pageid,'address1').getDispElem().attr("id");
	var address2 = Runner.getControl(pageid,'address2').getDispElem().attr("id");
	var address3 = Runner.getControl(pageid,'address3').getDispElem().attr("id");
	if($("#"+address3).val() == ''){
		AjaxZip3.zip2addr(zip1,zip2,address1,address2,address3);
	}
});


var wareki = Runner.getControl(pageid,'wareki');
wareki.on("keyup", function(){
	CSeireki();
});
function CSeireki() {

var wa, nen, base, seireki,tuki,hi;
//var formCSeireki = $("Eoc");
/**************************************************
マスターのデータを取得する  和暦項目を取得して表示
***************************************************/
wa  = Runner.getControl(pageid,'wareki').getValue();
// 西暦を調べる
nen = wa.substring(1,3);
tuki = wa.substring(3,5);
hi = wa.substring(5,7);
wa = wa.substring(0,1);
//alert("和暦は"+wa);
switch (wa) {
  case "M": base = 1867; break;
  case "T": base = 1911; break;
  case "S": base = 1925; break;
  case "H": base = 1988; break;
}
//formCSeireki.b1.value = "
seireki = base + parseInt(nen);
//alert("年号は"+seireki);

/***************************************************
データを振り分け
****************************************************/
Runner.getControl(pageid,'b1').setValue(seireki);
Runner.getControl(pageid,'b2').setValue(tuki);
Runner.getControl(pageid,'b3').setValue(hi);
// Runner.getControl(pageid,'birth_day').setValue(seireki+"-"+tuki+"-"+hi);

var birthyear=seireki;
var birthmonth=tuki;
var birthday=hi;
var age=0;
now = new Date();
y=now.getYear();
m=now.getMonth()+1;
d=now.getDate();

  if(y<1900) {y=y+1900;}
  if(m < birthmonth){age=y-birthyear-1}
  if(m > birthmonth){age=y-birthyear}
  if(m == birthmonth){
  if(d < birthday){age=y-birthyear-1}
  else{age=y-birthyear}
  }
	Runner.getControl(pageid,'age').setValue(age);
}


Runner.getControl(pageid,'b3').on("keyup", function(){
	CWareki();
});
/**************************************************************************************
和暦変換
***************************************************************************************/

 function CWareki() {
    var n, nengou, base, b2, b3;
    n = Runner.getControl(pageid,'b1').getValue();
    if (n == "") return;
    n = parseInt(n);
    if(n <= 0) return;
    if (n < 1868) {
            nengou = "西暦";
            base = 1;
    }
    else if ((1868 <= n) && (n <= 1911)) {
            nengou = "M";
            base = 1968;
    }
    else if ((1912 <= n) && (n <= 1925)) {
            nengou = "T";
            base = 1912;
    }
    else if ((1926 <= n) && (n <= 1988)) {
            nengou = "S";
            base = 1926;
    }
    else {
            nengou = "H";
            base = 1989;
    }

    b2 = Runner.getControl(pageid,'b2').getValue();
    b3 = Runner.getControl(pageid,'b3').getValue();

    var bases = n - base + 1;
    if(bases < 10){
        bbb = nengou + "0" + (n - base + 1) + "" + b2 + "" + b3;
        Runner.getControl(pageid,'wareki').setValue(bbb);
	}else{
		bbb = nengou + "" + (n - base + 1) + "" + b2 + "" + b3;
        Runner.getControl(pageid,'wareki').setValue(bbb);
	}
	CSeireki();
};
});
	

Runner.pages.PageSettings.addPageEvent('Eoc_catch', Runner.pages.constants.PAGE_EDIT, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject) {
	// Place event code here.
// Use "Add Action" button to add code snippets.

$("#saveButton1").click(function() {
	var uid = proxy.uid;
	var ecc_id_val = Runner.getControl(pageid,'ecc_id').getValue();
	window.open("https://rifa.life/lounge_API/brother/print_toutyaku.php?ecc_id=" + ecc_id_val + "&user_id=" + uid);
});


var address1 = Runner.getControl(pageid,'address1');
address1.on('focus',function(){
	var zip1 = Runner.getControl(pageid,'zip1').getDispElem().attr("id");
	var zip2 = Runner.getControl(pageid,'zip2').getDispElem().attr("id");
	var address1 = Runner.getControl(pageid,'address1').getDispElem().attr("id");
	var address2 = Runner.getControl(pageid,'address2').getDispElem().attr("id");
	var address3 = Runner.getControl(pageid,'address3').getDispElem().attr("id");
	if($("#"+address3).val() == ''){
		AjaxZip3.zip2addr(zip1,zip2,address1,address2,address3);
	}
});


var wareki = Runner.getControl(pageid,'wareki');
wareki.on("keyup", function(){
	CSeireki();
});
function CSeireki() {

var wa, nen, base, seireki,tuki,hi;
//var formCSeireki = $("Eoc");
/**************************************************
マスターのデータを取得する  和暦項目を取得して表示
***************************************************/
wa  = Runner.getControl(pageid,'wareki').getValue();
// 西暦を調べる
nen = wa.substring(1,3);
tuki = wa.substring(3,5);
hi = wa.substring(5,7);
wa = wa.substring(0,1);
//alert("和暦は"+wa);
switch (wa) {
  case "M": base = 1867; break;
  case "T": base = 1911; break;
  case "S": base = 1925; break;
  case "H": base = 1988; break;
}
//formCSeireki.b1.value = "
seireki = base + parseInt(nen);
//alert("年号は"+seireki);

/***************************************************
データを振り分け
****************************************************/
Runner.getControl(pageid,'b1').setValue(seireki);
Runner.getControl(pageid,'b2').setValue(tuki);
Runner.getControl(pageid,'b3').setValue(hi);
// Runner.getControl(pageid,'birth_day').setValue(seireki+"-"+tuki+"-"+hi);

var birthyear=seireki;
var birthmonth=tuki;
var birthday=hi;
var age=0;
now = new Date();
y=now.getYear();
m=now.getMonth()+1;
d=now.getDate();

  if(y<1900) {y=y+1900;}
  if(m < birthmonth){age=y-birthyear-1}
  if(m > birthmonth){age=y-birthyear}
  if(m == birthmonth){
  if(d < birthday){age=y-birthyear-1}
  else{age=y-birthyear}
  }
	Runner.getControl(pageid,'age').setValue(age);
}


Runner.getControl(pageid,'b3').on("keyup", function(){
	CWareki();
});
/**************************************************************************************
和暦変換
***************************************************************************************/

 function CWareki() {
    var n, nengou, base, b2, b3;
    n = Runner.getControl(pageid,'b1').getValue();
    if (n == "") return;
    n = parseInt(n);
    if(n <= 0) return;
    if (n < 1868) {
            nengou = "西暦";
            base = 1;
    }
    else if ((1868 <= n) && (n <= 1911)) {
            nengou = "M";
            base = 1968;
    }
    else if ((1912 <= n) && (n <= 1925)) {
            nengou = "T";
            base = 1912;
    }
    else if ((1926 <= n) && (n <= 1988)) {
            nengou = "S";
            base = 1926;
    }
    else {
            nengou = "H";
            base = 1989;
    }

    b2 = Runner.getControl(pageid,'b2').getValue();
    b3 = Runner.getControl(pageid,'b3').getValue();

    var bases = n - base + 1;
    if(bases < 10){
        bbb = nengou + "0" + (n - base + 1) + "" + b2 + "" + b3;
        Runner.getControl(pageid,'wareki').setValue(bbb);
	}else{
		bbb = nengou + "" + (n - base + 1) + "" + b2 + "" + b3;
        Runner.getControl(pageid,'wareki').setValue(bbb);
	}
	CSeireki();
}


/**************************************************************************************
タブ移動
***************************************************************************************/
var tabindex_i = 1;

$(".form-group[data-fieldname='space_1'] .rnr-button").attr("tabindex",tabindex_i);  tabindex_i++;
tab_obj = Runner.getControl(pageid,'UN_REACHABLE'); if(tab_obj != false){tab_obj.getDispElem().attr("tabindex",tabindex_i);  tabindex_i++;}
tab_obj = Runner.getControl(pageid,'UN_REACHABLE_brand'); if(tab_obj != false){tab_obj.getDispElem().attr("tabindex",tabindex_i);  tabindex_i++;}
tab_obj = Runner.getControl(pageid,'created_t'); if(tab_obj != false){tab_obj.getDispElem().attr("tabindex",tabindex_i);  tabindex_i++;}
tab_obj = Runner.getControl(pageid,'updated_at'); if(tab_obj != false){tab_obj.getDispElem().attr("tabindex",tabindex_i);  tabindex_i++;}
tab_obj = Runner.getControl(pageid,'purchase_type'); if(tab_obj != false){tab_obj.getDispElem().attr("tabindex",tabindex_i);  tabindex_i++;}
tab_obj = Runner.getControl(pageid,'ecc_id'); if(tab_obj != false){tab_obj.getDispElem().attr("tabindex",tabindex_i);  tabindex_i++;}
tab_obj = Runner.getControl(pageid,'ecc_seq'); if(tab_obj != false){tab_obj.getDispElem().attr("tabindex",tabindex_i);  tabindex_i++;}
tab_obj = Runner.getControl(pageid,'name1'); if(tab_obj != false){tab_obj.getDispElem().attr("tabindex",tabindex_i);  tabindex_i++;}
tab_obj = Runner.getControl(pageid,'name2'); if(tab_obj != false){tab_obj.getDispElem().attr("tabindex",tabindex_i);  tabindex_i++;}
tab_obj = Runner.getControl(pageid,'option5'); if(tab_obj != false){tab_obj.getDispElem().attr("tabindex",tabindex_i);  tabindex_i++;}
tab_obj = Runner.getControl(pageid,'wareki'); if(tab_obj != false){tab_obj.getDispElem().attr("tabindex",tabindex_i);  tabindex_i++;}
tab_obj = Runner.getControl(pageid,'b1'); if(tab_obj != false){tab_obj.getDispElem().attr("tabindex",tabindex_i);  tabindex_i++;}
tab_obj = Runner.getControl(pageid,'b2'); if(tab_obj != false){tab_obj.getDispElem().attr("tabindex",tabindex_i);  tabindex_i++;}
tab_obj = Runner.getControl(pageid,'b3'); if(tab_obj != false){tab_obj.getDispElem().attr("tabindex",tabindex_i);  tabindex_i++;}
tab_obj = Runner.getControl(pageid,'age'); if(tab_obj != false){tab_obj.getDispElem().attr("tabindex",tabindex_i);  tabindex_i++;}
tab_obj = Runner.getControl(pageid,'option11'); if(tab_obj != false){tab_obj.getDispElem().attr("tabindex",tabindex_i);  tabindex_i++;}
tab_obj = Runner.getControl(pageid,'zip1'); if(tab_obj != false){tab_obj.getDispElem().attr("tabindex",tabindex_i);  tabindex_i++;}
tab_obj = Runner.getControl(pageid,'zip2'); if(tab_obj != false){tab_obj.getDispElem().attr("tabindex",tabindex_i);  tabindex_i++;}
tab_obj = Runner.getControl(pageid,'address1'); if(tab_obj != false){tab_obj.getDispElem().attr("tabindex",tabindex_i);  tabindex_i++;}
tab_obj = Runner.getControl(pageid,'address2'); if(tab_obj != false){tab_obj.getDispElem().attr("tabindex",tabindex_i);  tabindex_i++;}
tab_obj = Runner.getControl(pageid,'address3'); if(tab_obj != false){tab_obj.getDispElem().attr("tabindex",tabindex_i);  tabindex_i++;}
tab_obj = Runner.getControl(pageid,'tel'); if(tab_obj != false){tab_obj.getDispElem().attr("tabindex",tabindex_i);  tabindex_i++;}
tab_obj = Runner.getControl(pageid,'tel2'); if(tab_obj != false){tab_obj.getDispElem().attr("tabindex",tabindex_i);  tabindex_i++;}
tab_obj = Runner.getControl(pageid,'fax'); if(tab_obj != false){tab_obj.getDispElem().attr("tabindex",tabindex_i);  tabindex_i++;}
tab_obj = Runner.getControl(pageid,'mail1'); if(tab_obj != false){tab_obj.getDispElem().attr("tabindex",tabindex_i);  tabindex_i++;}
tab_obj = Runner.getControl(pageid,'mail2'); if(tab_obj != false){tab_obj.getDispElem().attr("tabindex",tabindex_i);  tabindex_i++;}
tab_obj = Runner.getControl(pageid,'hentou_houhou'); if(tab_obj != false){tab_obj.getDispElem().attr("tabindex",tabindex_i);  tabindex_i++;}
tab_obj = Runner.getControl(pageid,'option12'); if(tab_obj != false){tab_obj.getDispElem().attr("tabindex",tabindex_i);  tabindex_i++;}
tab_obj = Runner.getControl(pageid,'line_check'); if(tab_obj != false){tab_obj.getDispElem().attr("tabindex",tabindex_i);  tabindex_i++;}
tab_obj = Runner.getControl(pageid,'remark'); if(tab_obj != false){tab_obj.getDispElem().attr("tabindex",tabindex_i);  tabindex_i++;}
tab_obj = Runner.getControl(pageid,'bank_name'); if(tab_obj != false){tab_obj.getDispElem().attr("tabindex",tabindex_i);  tabindex_i++;}
tab_obj = Runner.getControl(pageid,'bank_details_code'); if(tab_obj != false){tab_obj.getDispElem().attr("tabindex",tabindex_i);  tabindex_i++;}
tab_obj = Runner.getControl(pageid,'bank_details_deposit_type'); if(tab_obj != false){tab_obj.getDispElem().attr("tabindex",tabindex_i);  tabindex_i++;}
tab_obj = Runner.getControl(pageid,'bank_details_blunch_name'); if(tab_obj != false){tab_obj.getDispElem().attr("tabindex",tabindex_i);  tabindex_i++;}
tab_obj = Runner.getControl(pageid,'bank_details_blunch_code'); if(tab_obj != false){tab_obj.getDispElem().attr("tabindex",tabindex_i);  tabindex_i++;}
tab_obj = Runner.getControl(pageid,'bank_details_account_number'); if(tab_obj != false){tab_obj.getDispElem().attr("tabindex",tabindex_i);  tabindex_i++;}
tab_obj = Runner.getControl(pageid,'bank_details_symbol'); if(tab_obj != false){tab_obj.getDispElem().attr("tabindex",tabindex_i);  tabindex_i++;}
tab_obj = Runner.getControl(pageid,'bank_details_number'); if(tab_obj != false){tab_obj.getDispElem().attr("tabindex",tabindex_i);  tabindex_i++;}
tab_obj = Runner.getControl(pageid,'bank_details_account_name'); if(tab_obj != false){tab_obj.getDispElem().attr("tabindex",tabindex_i);  tabindex_i++;}


$(window).load(function(){
	//tab_obj = Runner.getControl(pageid,'sagawa_haisou_hoken');
	//if(tab_obj != false){
		//tab_obj.getDispElem().focus();
	//}
	var masterKey = Runner.getControl(pageid,'space_1').getValue();
	$("a[href='Eoc_takuhai_events_list.php?mastertable=Eoc_takuhai_for_catch&masterkey1="+masterKey+"']").click();

	$(".form-group[data-fieldname='space_1'] .rnr-button").focus();

	var takuhai_error = Runner.getControl(pageid,'space_2').getValue();
	if(takuhai_error == 'error'){
		alert("宅配取引エラー\n\n進行中ステータス\n「新規申込」「到着済」「成約あり」\nが重複しております。\n不要取引はステータス「除外」に変更してください");
		$("div[data-brick='editfields']>.container:nth-child(3)").addClass("open_takuhai_history").addClass("open_takuhai_history_error");
	}
	
})

;
});

//	AJAX snippets
