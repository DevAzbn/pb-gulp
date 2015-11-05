$(document).ready(function() {

[snp tpl="src/block/fecss/_fecss/.document-ready.js" ]

[snp tpl="src/block/fecss/_page-loader/.document-ready.js" ]

[snp tpl="src/block/fecss/_scrollto/.document-ready.js" ]

[snp tpl="src/block/fecss/_arrow-slider/.document-ready.js" ]

[snp tpl="src/block/fecss/_can-close/.document-ready.js" ]



$(window).on('resize',function(event){
	
	[snp tpl="block/fecss/.fecss/.window-resize.js" ]
	
}).trigger('resize');



});