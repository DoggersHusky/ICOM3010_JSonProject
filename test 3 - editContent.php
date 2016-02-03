<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>BootStrap testing</title>
        <script src="ckeditor/ckeditor.js"></script>
        <script type="text/javascript" src="includes/jquery-1.11.1.min.js"></script>
        <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
       	<!-- <link rel="stylesheet" type="text/css" href="includes/style.css" /> -->
        <!-- Bootstrap core CSS -->
        <link href="includes/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <link href="includes/bootstrap/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
        
        <!-- Custom styles for this template -->
    	<link href="includes/bootstrap/css/carousel.css" rel="stylesheet">
        <link href="includes/style.css" rel="stylesheet">
    </head>
    
    <body>
    	<div id="loader" class="loader"></div>
        <!-- menu -->
        <div class="navbar-wrapper">
          <div class="container">
            <nav class="navbar navbar-inverse navbar-static-top">
              <div class="container">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="#">Doggers Husky Protfolio</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                  <ul class="nav navbar-nav" id="menu">
                  </ul>
                </div>
              </div>
            </nav>
          </div>
        </div>
		<!-- end of menu -->
        
        <!-- Carousel
        ================================================== -->
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img class="first-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="First slide">
              <div class="container">
                <div class="carousel-caption">
                  <h1>Example headline.</h1>
                  <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
                  <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
                </div>
              </div>
            </div>
            <div class="item">
              <img class="second-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">
              <div class="container">
                <div class="carousel-caption">
                  <h1>Another example headline.</h1>
                  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                  <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                </div>
              </div>
            </div>
            <div class="item">
              <img class="third-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
              <div class="container">
                <div class="carousel-caption">
                  <h1>One more for good measure.</h1>
                  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                  <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
                </div>
              </div>
            </div>
          </div>
          <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div><!-- /.carousel -->
        
        <!-- Wrap the rest of the page in another container to center all the content. -->

    	<div class="container marketing">
            <div class="alert alert-danger alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <strong>Warning!</strong> Website is still in the early testing phase!
            </div>
        	<form>
            <!-- START THE FEATURETTES -->
            	<div id="feedBack"></div>
                <input type="hidden" id="ID" name="ID" value="">
                <div class="input-group input-group-lg">
                  <span class="input-group-addon" id="sizing-addon1">Article Name:</span>
                  <input type="text" class="form-control"  aria-describedby="sizing-addon1" id="contentTitle" name="contentTitle" value="">
                </div><br/>
                <div class="input-group input-group-lg">
                  <span class="input-group-addon" id="sizing-addon1">Page:</span>
                  <input type="text" class="form-control"  aria-describedby="sizing-addon1" id="page" name="page" value="">
                </div>
                <br/>
				<div class="input-group input-group-lg">
                  <span class="input-group-addon" id="sizing-addon1">Product Image:</span>
                  <input type="text" class="form-control" aria-describedby="sizing-addon1" id="txtSelectedFile" name="productImage" style="cursor:pointer;" value="Click here to select a file" onclick="openCustomRoxy2()">
                </div>
                <br/>
				<div id="roxyCustomPanel2" style="display: none;">
					 <iframe src="./fileman/index.html?integration=custom&type=files&txtFieldId=txtSelectedFile" style="width:100%;height:100%" frameborder="0">
					 </iframe>
				</div>
                
                <textarea name="editor1" id="editor1" rows="10" cols="80"></textarea><br/>

                <input class="btn btn-lg btn-primary" id="btnSubmit" type="button" value="Submit" class="buttons" />
            <!-- /END THE FEATURETTES -->
            </form>
            
            <!-- FOOTER -->
          <footer>
            <p class="pull-right"><a href="#">Back to top</a></p>
            <p>&copy; 2015 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
          </footer>
    
        </div><!-- /.container -->
    </body>
    <script src="includes/bootstrap/js/bootstrap.min.js"></script>

    <script>
		
	var roxyFileman = '/fileman/index.html'; 
        
	   CKEDITOR.replace( 'editor1',{filebrowserBrowseUrl:roxyFileman,
									allowedContent: true,
									filebrowserImageBrowseUrl:roxyFileman+'?type=image',
									removeDialogTabs: 'link:upload;image:upload'}); 
		//CKEDITOR.config.contentsCss = 'style.css' ;
		CKEDITOR.config.toolbar = 'htmlbuttons';
		CKEDITOR.config.removePlugins = 'save';
		
		
		
		function openCustomRoxy2(){
		  $('#roxyCustomPanel2').dialog({modal:true, width:875,height:600});
		}
		function closeCustomRoxy2(){
		  $('#roxyCustomPanel2').dialog('close');
		}
		
		//references
		var btnSubmit = document.getElementById("btnSubmit");
		// server sided script to retrieve the json for the content
		var retrieveScript = "test 1 - script.php?id="+urlParam('ID');
		
		//server sided script to retreive the menu content
		//var menuRetrieveScript = "test 2 - menu.php";
		
		//get page
		var currentPage = 0;
		//post per page
		var postPerPage = 2;
		// JSON data returned from server
		var json;
		//used to get footer infomation
		var currentContent = $("#content").html();
		//note function to populate footer should be called first before anything else
		
		
		// send request to get content
		$.ajax({
			type: "GET",
			url: retrieveScript,
			contentType: "application/json",
			success: onResponse,
			error: onError
		});
		
		/*
		// send request to get menu items
		$.ajax({
			type: "GET",
			url: menuRetrieveScript,
			contentType: "application/json",
			success: onResponseMenu,
			error: onError
		});
		*/
		
		function onError() {
		}
		
		
		// wire up event listener
		btnSubmit.addEventListener("click", onSubmit);
		
		function onSubmit(e) {
			var arr = { 
			ID: $('#ID').attr('value'), 
			contentTitle: ''+$('#contentTitle').val(), 
			page: ''+$('#page').val(), 
			imgUrl: ''+$('#txtSelectedFile').val(), 
			content : ''+CKEDITOR.instances.editor1.getData()
			};
			$.ajax({
				url: 'test 3 - sendPhp.php',
				type: 'POST',
				data: JSON.stringify(arr),
				contentType: 'application/json; charset=utf-8',
				dataType: 'json',
				async: false,
				success: function(msg) {
					alert(msg);
				}
			});
		}
		
		/*
		// used for the menu
		function testMe(e) {
			$("#loader").show(0);
			if (e != "") {
				currentPage = 0;
			  // send request to get pictures from JSON
				$.ajax({
					type: "GET",
					url: "test 1 - script.php?page=" + e,
					contentType: "application/json",
					success: onResponse,
					error: onError
				});
			}
		}
		*/
		
		
		// used for the menu
		function goToPage(page) {
			$("#loader").show(0);
			currentPage = page;
		  	buildContent();
		}
		
		//--------------------
		
		/*
		function onResponseMenu(result, textStatus, xmlhttp) {
			//store this in a local json variable to prevent using the global one
			var json = JSON.parse(xmlhttp.responseText);
			var i;
			var count = 0;
			var out = "";
			totalData = json.length;
			for (i = 0; i < totalData; i++) {
				if (json[i].linkUnderPage === "") {
					for (var n = 0; n < totalData; n++) {
						if (json[i].page === json[n].linkUnderPage) {
							count++;
						}
					}
					if (count > 0) {
						//there is menu items
						out += "<li class=\"dropdown\" id=\"" + ((json[i].pageMenu == 1) ? "" : json[i].page)  + "\">";
						out += "<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">" + json[i].pageLinkName + "<span class=\"caret\"></span></a>";
						out += "<ul class=\"dropdown-menu\">";
						for (var n = 0; n < totalData; n++) {
							if (json[i].page === json[n].linkUnderPage) {
								out += "<li id=\"" + json[n].page + "\">";
								out += "<a href=\"#\" onclick=\"testMe('" + json[n].page  + "')\">" +json[n].pageLinkName + "</a></li>";
							}
						}
						out += "</ul>";
						out += "</li>";
					}else{
						//no menu items to be found	
						out += "<li>";
						out += "<a href=\"#\" onclick=\"testMe('" + json[i].page  + "')\">" + json[i].pageLinkName + "</a>";
						out += "</li>";
					}
					count = 0;
				}
			}
			$("#menu").append(out);
		}
		*/
		
		
		function buildContent() {
			var i;
			
			for (i = 0; i < json.length; i++) {
				$('#ID').attr('value', json[i].ID);
				$( "#contentTitle").val(json[i].contentTitle);
				//$( "#txtSelectedFile").val(json[i].imgUrl);
				$('#txtSelectedFile').attr('value', json[i].imgUrl);
				$('#page').attr('value', json[i].page);
				$( "#editor1").val(htmlspecialchars_decode(json[i].content));
			}
			$("#loader").delay(800).fadeOut("slow");
		}
		
		
		
		function onResponse(result, textStatus, xmlhttp) {
			//set the json object
			json = JSON.parse(xmlhttp.responseText);
			//build the content
			buildContent();
		}
		
		
		
		base64_decode = function(s) {
			var e={},i,b=0,c,x,l=0,a,r='',w=String.fromCharCode,L=s.length;
			var A="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/";
			for(i=0;i<64;i++){e[A.charAt(i)]=i;}
			for(x=0;x<L;x++){
				c=e[s.charAt(x)];b=(b<<6)+c;l+=6;
				while(l>=8){((a=(b>>>(l-=8))&0xff)||(x<(L-2)))&&(r+=w(a));}
			}
			return r;
		};
		
		function urlParam(name){
			var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
			return results[1] || 0;
		}
		
		function htmlspecialchars_decode(string, quote_style) {
		  //       discuss at: http://phpjs.org/functions/htmlspecialchars_decode/
		  //      original by: Mirek Slugen
		  //      improved by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
		  //      bugfixed by: Mateusz "loonquawl" Zalega
		  //      bugfixed by: Onno Marsman
		  //      bugfixed by: Brett Zamir (http://brett-zamir.me)
		  //      bugfixed by: Brett Zamir (http://brett-zamir.me)
		  //         input by: ReverseSyntax
		  //         input by: Slawomir Kaniecki
		  //         input by: Scott Cariss
		  //         input by: Francois
		  //         input by: Ratheous
		  //         input by: Mailfaker (http://www.weedem.fr/)
		  //       revised by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
		  // reimplemented by: Brett Zamir (http://brett-zamir.me)
		  //        example 1: htmlspecialchars_decode("<p>this -&gt; &quot;</p>", 'ENT_NOQUOTES');
		  //        returns 1: '<p>this -> &quot;</p>'
		  //        example 2: htmlspecialchars_decode("&amp;quot;");
		  //        returns 2: '&quot;'
		
		  var optTemp = 0,
			i = 0,
			noquotes = false;
		  if (typeof quote_style === 'undefined') {
			quote_style = 2;
		  }
		  string = string.toString()
			.replace(/&lt;/g, '<')
			.replace(/&gt;/g, '>');
		  var OPTS = {
			'ENT_NOQUOTES': 0,
			'ENT_HTML_QUOTE_SINGLE': 1,
			'ENT_HTML_QUOTE_DOUBLE': 2,
			'ENT_COMPAT': 2,
			'ENT_QUOTES': 3,
			'ENT_IGNORE': 4
		  };
		  if (quote_style === 0) {
			noquotes = true;
		  }
		  if (typeof quote_style !== 'number') { // Allow for a single string or an array of string flags
			quote_style = [].concat(quote_style);
			for (i = 0; i < quote_style.length; i++) {
			  // Resolve string input to bitwise e.g. 'PATHINFO_EXTENSION' becomes 4
			  if (OPTS[quote_style[i]] === 0) {
				noquotes = true;
			  } else if (OPTS[quote_style[i]]) {
				optTemp = optTemp | OPTS[quote_style[i]];
			  }
			}
			quote_style = optTemp;
		  }
		  if (quote_style & OPTS.ENT_HTML_QUOTE_SINGLE) {
			string = string.replace(/&#0*39;/g, "'"); // PHP doesn't currently escape if more than one 0, but it should
			// string = string.replace(/&apos;|&#x0*27;/g, "'"); // This would also be useful here, but not a part of PHP
		  }
		  if (!noquotes) {
			string = string.replace(/&quot;/g, '"');
		  }
		  // Put this in last place to avoid escape being double-decoded
		  string = string.replace(/&amp;/g, '&');
		
		  return string;
		}
		
		
		
	</script>
</html>

