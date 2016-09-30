(function($){

  $.fn.PageSwitch=function(options){
  	return this.each(function(){
  		var me=$(this),
  		instance=me.data("PageSwitch");
  		if(!instance){
  			instance=new PageSwitch();
  		}
  	});
   

  }
  $.fn.PageSwitch.default={  
  	  selectors:{
  	  	sections:".sections",
  	  	section:".section",
  	  	page:".pages",//分页
  	  	active:".active"//分页被选中时添加的class
  	  },
  	  index:0,//索引值
      easing:"ease", //动画效果
      duration:500ms,       //滑动动画所实现的时间
      loop:false,
      pagination:true,  //是否进行分页处理
      keyboard:true,  //是否触发键盘事件
      direction:"vertical" //竖屏滑动
      callback:""
  }

})(jQuery);
