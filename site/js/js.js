$(document).ready(function(){$(".page-loader .close-loader").on("click",function(e){e.preventDefault(),$(".page-loader").removeClass("active")}),$(window).load(function(e){$(".page-loader").removeClass("active")}),$(".scrollto").on("click",function(e){e.preventDefault(),$($(this).attr("href").eq(0)).jqfeScrollTo({diff:0,speed:777})}),$(".go-to-top").on("click",function(e){e.preventDefault(),$("body").jqfeScrollTo({diff:0,speed:777})}),$(window).on("scroll",function(){var e=$(document).scrollTop(),i=$(".go-to-top");i.hasClass("active")?220>e&&i.removeClass("active"):e>220&&i.addClass("active")}).trigger("scroll"),$(".arrow-slider").each(function(e){event.preventDefault();var i=$(this),t=i.find(".img-block .item"),o=(i.find(".text-content"),i.find(".title-block"),i.find(".arrow-block")),c=o.find(".point-line");t.each(function(e){$("<a/>",{"class":"item",html:'<span class="point" ></span>',href:"#image-"+e}).on("click.arrow-slider.point",function(e){console.log("click.arrow-slider.point");var i=$(this).index();c.find(".item").removeClass("active"),t.fadeOut("fast").removeClass("active"),$(this).addClass("active"),t.eq(i).fadeIn("fast").addClass("active")}).appendTo(c)}),o.on("click.arrow-slider.right",".btn-arrow.right",function(e){var i=c.find(".item"),t=i.filter(".active").eq(0).index(),o=i.eq(t).next(".item");o.size()?o.trigger("click"):i.eq(0).trigger("click")}),o.on("click.arrow-slider.left",".btn-arrow.left",function(e){var i=c.find(".item"),t=i.filter(".active").eq(0).index(),o=i.eq(t).prev(".item");o.size()?o.trigger("click"):i.eq(-1).trigger("click")}),i.hasClass("with-timer")&&i.data("fecss-timer",setInterval(function(){i.is(":hover")||o.find(".btn-arrow.right").trigger("click")},3e3)),c.find(".item.active").size()||c.find(".item").eq(0).trigger("click")}),$(document.body).on("click",".can-close .close-btn",function(e){e.preventDefault(),$(this).closest(".can-close").removeClass("active")})});