
jQuery(document).ready(
function($){});

(function($) {
  $.fn.rglSlide=function(opt){
    //settings
    var settings=jQuery.extend(true,{
      productScrollWitch:"ul",//���thisѡ�����������������Ĵ�div
      list:"ul > li",//���thisѡ������list����
      row:1,//���飬����������ֱ�����ĵط��õ���֮��ֻΪ���ִ���ͬ�������������޸Ĵ�ֱ������
      seeColumn:1,//���ӷ�Χ������Ŀ
      step:1,//��������
      speed:"normal",//�����ٶ�
      orientation:"left",//�Զ��ֲ�����ʱ�����趨�������������ֻ��Ϊ������λ��ֻ�����ң�left,right
      isAutoPlay:{
        timer:3000,//���ʱ��
        rescrollTime:2000,//�ع�ʱ��
        reboundState:true//�ص�״̬��Ĭ�ϻع�����ʱ�Զ��رջص��¼����ع��ر�ʱ�Զ������ص��¼������Ҫͬʱ�ر����ֹ��ر�
      },//�Զ����������ã�falseʱ�����Զ����Ź���
      isBtn:{
        step:1,//������ֵ
        left:"#left",//����ť
        right:"#right",//���Ұ�ť
        disableCss:"disable",//��ťʧЧcss
        isChangeState:true//��ť�¼��Ƿ񴥷���������״̬
      },//��ť�����ã�falseʱ���ð�ť���ƹ���
      bugD1Width:0,//table��������¾�����ȡ����widthֵ�������Դ˿ɽ��еĲ�������,����������������øò���
      callback:false//callback:function($this,sTop,splitWidth,d1Width,d2Width){}
    },opt);
    //settings
    var productScrollWitch=settings.productScrollWitch,
      list=settings.list,
      row=settings.row,
      seeColumn=settings.seeColumn,
      step=settings.step,
      speed=settings.speed,
      orientation=settings.orientation,
      aut=settings.isAutoPlay,
      autTimer=aut.timer,
      autRescrollTime=aut.rescrollTime,
      autReboundState=aut.reboundState,
      btn=settings.isBtn,
      btnStep=btn.step,
      btnLeft=$(btn.left),
      btnRight=$(btn.right),
      btnDisableCss=btn.disableCss,
      btnIsChangeState=btn.isChangeState,
      bugD1Width=settings.bugD1Width,
      callback=settings.callback;
    //div
    var $this=$(this);
    var thisselector=$this.selector;
    var d1=$this,
      d2=d1.find(productScrollWitch),
      d3=d1.find(list);
    //d1Width
    var d1Width=d1.width();
    if(bugD1Width!=0){
      d1Width=bugD1Width;
    }else{
      if(d1Width==0){
        alert("Err:d1Width==0");
      }
    }
    //other width size ...
    var d3Size=d3.size();
    var splitWidth=d1Width/seeColumn;
    var stepWidth=step*splitWidth;
    var stepWidthBtn=btnStep*splitWidth;
    var d2Width=splitWidth*Math.ceil(d3Size/row);
    //fall short of nmuber,return false
    if(d2Width<d1Width)return false;
    //bear with
    d2.width(d2Width);
    //
    var flag=true;
    //left
    var left=function(e){
      if(!flag)return false;
      flag=false;
      if(btnIsChangeState){
        orientation="left";
      }
      var _stepWidth=stepWidth;
      if(e){
        _stepWidth=stepWidthBtn;
      }else{
        _stepWidth=stepWidth;
      }
      if((d1Width+d1.scrollLeft())==d2Width){
        btnLeft.addClass(btnDisableCss);
        if(e){
          flag=true;
        }else{
          if(autRescrollTime){
            d1.animate({scrollLeft:0},autRescrollTime,function(){
              btnLeft.removeClass(btnDisableCss);
              btnRight.addClass(btnDisableCss);
              if(callback)callback($this,0,splitWidth,d1Width,d2Width);
              flag=true;
            });
          }else{
            if(autReboundState){
              orientation="right";
              if(aut){
                autoStop();
                autoPlay();
              }
            }
            flag=true;
          }
        }
      }else if(_stepWidth+d1.scrollLeft()>=d2Width-d1Width){
        d1.animate({scrollLeft:d2Width-d1Width},speed,function(){
          btnLeft.addClass(btnDisableCss);
          btnRight.removeClass(btnDisableCss);
          if(callback)callback($this,d2Width-d1Width,splitWidth,d1Width,d2Width);
          flag=true;
        });
      }else{
        d1.animate({scrollLeft:d1.scrollLeft()+_stepWidth},speed,function(){
          btnRight.removeClass(btnDisableCss);
          if(callback)callback($this,d1.scrollLeft(),splitWidth,d1Width,d2Width);
          flag=true;
        });
      }
      return false;
    };
    //right
    var right=function(e){
      if(!flag)return false;
      flag=false;
      if(btnIsChangeState){
        orientation="right";
      }
      var _stepWidth=stepWidth;
      if(e){
        _stepWidth=stepWidthBtn;
      }else{
        _stepWidth=stepWidth;
      }
      if(d1.scrollLeft()==0){
        btnRight.addClass(btnDisableCss);
        if(e){
          flag=true;
        }else{
          if(autRescrollTime){
            d1.animate({scrollLeft:d2Width-d1Width},autRescrollTime,function(){
              btnRight.removeClass(btnDisableCss);
              btnLeft.addClass(btnDisableCss);
              if(callback)callback($this,d2Width-d1Width,splitWidth,d1Width,d2Width);
              flag=true;
            });
          }else{
            if(autReboundState){
              orientation="left";
              if(aut){
                autoStop();
                autoPlay();
              }
            }
            flag=true;
          }
        }
      }else if((d1.scrollLeft())<=_stepWidth){
        d1.animate({scrollLeft:0},speed,function(){
          btnRight.addClass(btnDisableCss);
          btnLeft.removeClass(btnDisableCss);
          if(callback)callback($this,0,splitWidth,d1Width,d2Width);
          flag=true;
        });
      }else{
        d1.animate({scrollLeft:d1.scrollLeft()-_stepWidth},speed,function(){
          btnLeft.removeClass(btnDisableCss);
          if(callback)callback($this,d1.scrollLeft(),splitWidth,d1Width,d2Width);
          flag=true;
        });
      }
      return false;
    };
    //gotoscroll
    var gotoscroll=function(xy){
      if(!flag)return false;
      flag=false;
      d1.animate({scrollLeft:xy},speed,function(){
        if(callback)callback($this,xy,splitWidth,d1Width,d2Width);
        if(xy==0){
          btnRight.addClass(btnDisableCss);
          btnLeft.removeClass(btnDisableCss);
        }else if(xy==(d2Width-d1Width)){
          btnRight.removeClass(btnDisableCss);
          btnLeft.addClass(btnDisableCss);
        }else{
          btnRight.removeClass(btnDisableCss);
          btnLeft.removeClass(btnDisableCss);
        }
        flag=true;
      });
      return false;
    };
    //timer
    var timerID;
    var autoPlay=function(){
      switch(orientation)
      {
        case "left":timerID=window.setInterval(left,autTimer);break;
        case "right":timerID=window.setInterval(right,autTimer);break;
      }
      return false;
    };
    var autoStop = function(){
      window.clearInterval(timerID);
      return false;
    };
    if(aut){
      //ready autoPlay
      autoPlay();
      //
      $this.hover(autoStop,autoPlay);
      if(btn){
        btnLeft.hover(autoStop,autoPlay);
        btnRight.hover(autoStop,autoPlay);
      }
    }
    //btn
    if(btn){
      btnLeft.click(left);
      btnRight.click(right);
      switch(orientation)
      {
        case "left":
          //���⶯����ͬʱ��ʼ��callback
          d1.scrollLeft(0);gotoscroll(0);
          btnRight.addClass(btnDisableCss);
          break;
        case "right":
          //���⶯����ͬʱ��ʼ��callback
          d1.scrollLeft(d2Width-d1Width);gotoscroll(d2Width-d1Width);
          btnLeft.addClass(btnDisableCss);
          break;
      }
    }
    if(!aut){
      return {$this:$this,autoStop:false,autoPlay:false,gotoscroll:gotoscroll};
    }
    return {$this:$this,autoStop:autoStop,autoPlay:autoPlay,gotoscroll:gotoscroll};
  };
})(jQuery);
    $("#partner").rglSlide({productScrollWitch:"ul",ast:"ul > li",row:4,seeColumn:10,step:10,isAutoPlay:{timer:3000,rescrollTime:false,orientation:"left"},isBtn:{step:10,left:"#partnerPrev",right:"#partnerNext",disableCss:"disable"}});

	
	
