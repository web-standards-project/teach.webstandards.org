$(document).ready(function(){
	disclosureBoxes(); 				// initi disclosure boxes
	externalLinks(); 				// init external links
	
	// Zebra stripe tables
	$(".zebra-stripe tr").mouseover(function() {$(this).addClass("tr-over");}).mouseout(function() {$(this).removeClass("tr-over");});
	$(".zebra-stripe tr:even").addClass("even");
	$(".zebra-stripe tr:odd").addClass("odd");
});

// Disclosure Boxes - toggle opn/closed a div with class .disclosure content
function disclosureBoxes(){
	prepDisclosureBoxes(); // get interface ready
	
	$('a.toggle').click(function(){
		$(this).parent().next('.disclosure-content').slideToggle("slow");
		$(this).toggleClass('active');
		return false;
	});
}

// Close all disclosure boxes by default (progressive enhancement)
// Wrap all disclosure titles with an anchor tag trigger interaction
function prepDisclosureBoxes(){$('.disclosure-content').css({'display':'none'});
	$('.disclosure-title').wrapInner('<a href="#" class="toggle" title="click to open"></a>');
}


// Launch content in new window
// Add class="external" on any link to launch new window
function externalLinks() {
 	if (!document.getElementsByTagName) return;
	var anchors = document.getElementsByTagName("a");
		for (var i=0; i<anchors.length; i++) {
		   var anchor = anchors[i];
		   if (anchor.getAttribute("href") &&
			   anchor.getAttribute("class") == "external")
			   anchor.target = "_blank";
		}
}