		$(function(){

			(function(){
				var App = function(){
					this.$anchors = $('a.profile-anchor');
					this.$html = $('html, body');
				};

				App.prototype.bindEvents = function(){
					var that = this;

					that.$anchors.on('click', function(e){
						e.preventDefault();
						that.$html.animate({
							scrollTop: $($(this).attr('href')).offset().top
						},500);
					});
				};

				App.prototype.init = function(){
					this.bindEvents();
				};

				return new App();
			})().init();


		});