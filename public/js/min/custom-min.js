$(window).load(function(){var i=$(".portfolio");i.isotope({filter:"*",animationOptions:{duration:750,easing:"linear",queue:!1}}),$("#sidebar-wrapper ul a").click(function(){var a=$(this).attr("data-filter");return i.isotope({filter:a,animationOptions:{duration:750,easing:"linear",queue:!1}}),!1})});