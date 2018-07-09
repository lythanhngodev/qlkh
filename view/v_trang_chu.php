<div id="cottrai">
    <!-- TRÌNH CHIẾU (SILDER) -->
    <div class="trinh-chieu" ><div class="slider-wrapper theme-default"><div id="slider" class="nivoSlider"><?php while ($row = mysqli_fetch_assoc($slider)) { ?><a href="<?php echo $row['link']; ?>"><img src="<?php echo $row['hinhanh']; ?>" data-thumb="<?php echo $row['hinhanh']; ?>" data-transition="<?php echo $row['style']; ?>" alt="<?php echo $row['tieude']; ?>" title="<?php echo $row['tieude']; ?>" /></a><?php } ?></div></div></div>
    <!-- CÁC CÔNG TRÌNH KHOA HỌC ĐÃ CÔNG BỐ -->
    <div class="tieudechinh">
        <div class="tentieudechinh" style="width: 240px;">
            <img src="images/chi-muc.png" width="27" height="27" align="absmiddle"><a href="?p=nckhdacongbo">Công trình NCKH đã công bố</a>
        </div>
        <div class="clear"></div>
        <div class="line"></div>
    </div>
    <div class="tin">
            <?php $nghiemthu = lay_de_tai_da_cong_bo();
            while ($row = mysqli_fetch_assoc($nghiemthu)) { ?>
             <div class="noidungtin">
                <h3>
                    <a href="xemdetai/<?php echo to_slug($row['TENDETAI']); ?>-<?php echo $row['IDDT'] ?>.ltn" title="<?php echo $row['TENDETAI'] ?>"><?php echo $row['TENDETAI'] ?></a>
                </h3>
                <div class="thongtinchung">
                    <ul>
                       <li>Thành viên : <?php echo $row['HOTEN'] ?></li> 
                       <li>Thời gian nghiệm thu: <?php echo date("d-m-Y", strtotime($row['THOIGIANNGHIEMTHU'])); ?></li>
                       <li>Lĩnh vực nghiên cứu: <?php $lv = linh_vuc_de_tai($row['IDDT']);
                       while ($rlv = mysqli_fetch_assoc($lv)) {
                           echo $rlv['TENLV'].", ";
                       }
                        ?></li>  
                    </ul>
                </div>
                <div class="clear"></div>
           </div>
             <?php } ?>
      <center><a href="nckhdacongbo" class="nut-link">XEM THÊM</a></center>
    </div>

    <!-- CÁC CÔNG TRÌNH KHOA HỌC ĐÃ CÔNG BỐ -->
    <div class="tieudechinh">
        <div class="tentieudechinh" style="width: 180px;">
            <img src="images/chi-muc.png" width="27" height="27" align="absmiddle"><a href="?p=baokhoahoc">Bài báo khoa học mới</a>
        </div>
        <div class="clear"></div>
        <div class="line"></div>
    </div>
    <div class="tin">
      <?php $baibao = lay_bai_bao_khoa_hoc();
      while ($row = mysqli_fetch_assoc($baibao)) { ?>
      <div class="noidungtin">
          <h3>
              <a href="xembaibao/<?php echo to_slug($row['TENBAO']) ?>-<?php echo $row['IDBAO'] ?>.ltn" title="<?php echo $row['TENBAO'] ?>"><?php echo $row['TENBAO'] ?></a>
          </h3>
          <div class="thongtinchung">
              <ul>
                 <li>Tác giả : <?php echo lay_ten_tac_gia_bao_khoa_hoc($row['IDBAO']); ?></li> 
                 <li>Nhà xuất bản/ Tạp chí: <?php echo $row['TAPCHI'] ?></li> 
                 <li>Năm: <?php echo $row['NAMXUATBAN'] ?></li> 
              </ul>
          </div>
          <div class="clear"></div>
     </div>
     <?php } ?>
     <center><a href="baokhoahoc" class="nut-link">XEM THÊM</a></center>
    </div>

</div>
<div id="cotphai">
    <!-- THÔNG TIN LIÊN HỆ -->
    <div class="thongtinlienhe">
        <div class="chitietlienhe">
          <h3>Thông tin liên hệ</h3>
          <div style="margin-bottom: 3px">
            <label>Hotline:</label><span class="t_hotline">&nbsp;+84 2703 862457</span>
          </div>
          <div>
            <label>Email:</label>&nbsp;<a href="mailto:nckh@vlute.edu.vn" class="gr"><strong>nckh@vlute.edu.vn</strong></a>
          </div>
        </div>
    </div>
    
    <!-- TIN MỚI -->
    <div class="muccon">
        <h3>Tin mới</h3>
        <div class="tieudemuccon">
            <div class="tinmoi">
                <?php 
                $tinmoi = lay_tin_moi();
                while ($row = mysqli_fetch_assoc($tinmoi)) { ?>
                <a href="xemtin/<?php echo $row['LINKBV']; ?>-<?php echo $row['IDBV']; ?>.ltn">
                    <div class="tincon">
                        <div class="hinhtin lazyload" data-src="_thumbs/<?php echo $row['HINHANH']; ?>" style="background-image: url();"></div>
                        <div class="tomtattin"><?php echo $row['TENBV'] ?></div>
                    </div>  
                </a>
               <?php } ?>
            </div>
        </div>
    </div>
    <!-- HOẠT ĐỘNG HỢP TÁC QUỐC TẾ -->
    <div class="muccon">
        <h3>Hoạt động hợp tác quốc tế</h3>
        <div class="tieudemuccon">
            <div class="tinmoi">
                <?php 
                $htqt = lay_hoat_dong_hop_tac_quoc_te();
                while ($row = mysqli_fetch_assoc($htqt)) { ?>
                <a href="xemtin/<?php echo $row['LINKBV']; ?>-<?php echo $row['IDBV']; ?>.ltn">
                    <div class="tincon">
                        <div class="hinhtin lazyload" data-src="_thumbs/<?php echo $row['HINHANH']; ?>" style="background-image: url();"></div>
                        <div class="tomtattin"><?php echo $row['TENBV'] ?></div>
                    </div>  
                </a>
               <?php } ?>
            </div>
        </div>
    </div>
    <!-- TỪ KHÓA NỔI BẬC -->
    <div class="muccon">
        <h3>Từ khóa nổi bậc</h3>
        <div class="tieudemuccon">
            <div class="tukhoa">
              <?php $tk = lay_tu_khoa();
              while ($row=mysqli_fetch_assoc($tk)) { ?>
              <div><a href="tag/<?php echo $row['IDKHOA'] ?>"><?php echo $row['TENKHOA'] ?></a></div>
              <?php } ?>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">document.getElementById('trangchu').classList.add("current");</script>
<script src="js/jquery-3.3.1.min.js"></script>
<script type="text/javascript">(function($){var NivoSlider=function(element,options){var settings=$.extend({},$.fn.nivoSlider.defaults,options);var vars={currentSlide:0,currentImage:'',totalSlides:0,running:false,paused:false,stop:false,controlNavEl:false};var slider=$(element);slider.data('nivo:vars',vars).addClass('nivoSlider');var kids=slider.children();kids.each(function(){var child=$(this);var link='';if(!child.is('img')){if(child.is('a')){child.addClass('nivo-imageLink');link=child;}child=child.find('img:first');}var childWidth=(childWidth===0)?child.attr('width'):child.width(),childHeight=(childHeight===0)?child.attr('height'):child.height();if(link!==''){link.css('display','none');}child.css('display','none');vars.totalSlides++;});if(settings.randomStart){settings.startSlide=Math.floor(Math.random()*vars.totalSlides);}if(settings.startSlide>0){if(settings.startSlide>=vars.totalSlides){settings.startSlide=vars.totalSlides-1;}vars.currentSlide=settings.startSlide;}if($(kids[vars.currentSlide]).is('img')){vars.currentImage=$(kids[vars.currentSlide]);}else{vars.currentImage=$(kids[vars.currentSlide]).find('img:first');}if($(kids[vars.currentSlide]).is('a')){$(kids[vars.currentSlide]).css('display','block');}var sliderImg=$('<img/>').addClass('nivo-main-image');sliderImg.attr('src',vars.currentImage.attr('src')).show();slider.append(sliderImg);$(window).resize(function(){slider.children('img').width(slider.width());sliderImg.attr('src',vars.currentImage.attr('src'));sliderImg.stop().height('auto');$('.nivo-slice').remove();$('.nivo-box').remove();});slider.append($('<div class="nivo-caption"></div>'));var processCaption=function(settings){var nivoCaption=$('.nivo-caption',slider);if(vars.currentImage.attr('title')!=''&&vars.currentImage.attr('title')!=undefined){var title=vars.currentImage.attr('title');if(title.substr(0,1)=='#')title=$(title).html();if(nivoCaption.css('display')=='block'){setTimeout(function(){nivoCaption.html(title);},settings.animSpeed);}else{nivoCaption.html(title);nivoCaption.stop().fadeIn(settings.animSpeed);}}else{nivoCaption.stop().fadeOut(settings.animSpeed);}};processCaption(settings);var timer=0;if(!settings.manualAdvance&&kids.length>1){timer=setInterval(function(){nivoRun(slider,kids,settings,false);},settings.pauseTime);}if(settings.directionNav){slider.append('<div class="nivo-directionNav"><a class="nivo-prevNav">'+settings.prevText+'</a><a class="nivo-nextNav">'+settings.nextText+'</a></div>');$(slider).on('click','a.nivo-prevNav',function(){if(vars.running){return false;}clearInterval(timer);timer='';vars.currentSlide-=2;nivoRun(slider,kids,settings,'prev');});$(slider).on('click','a.nivo-nextNav',function(){if(vars.running){return false;}clearInterval(timer);timer='';nivoRun(slider,kids,settings,'next');});}if(settings.controlNav){vars.controlNavEl=$('<div class="nivo-controlNav"></div>');slider.after(vars.controlNavEl);for(var i=0;i<kids.length;i++){if(settings.controlNavThumbs){vars.controlNavEl.addClass('nivo-thumbs-enabled');var child=kids.eq(i);if(!child.is('img')){child=child.find('img:first');}if(child.attr('data-thumb'))vars.controlNavEl.append('<a class="nivo-control" rel="'+i+'"><img src="'+child.attr('data-thumb')+'" alt="" /></a>');}else{vars.controlNavEl.append('<a class="nivo-control" rel="'+i+'">'+(i+1)+'</a>');}}$('a:eq('+vars.currentSlide+')',vars.controlNavEl).addClass('active');$('a',vars.controlNavEl).bind('click',function(){if(vars.running)return false;if($(this).hasClass('active'))return false;clearInterval(timer);timer='';sliderImg.attr('src',vars.currentImage.attr('src'));vars.currentSlide=$(this).attr('rel')-1;nivoRun(slider,kids,settings,'control');});}if(settings.pauseOnHover){slider.hover(function(){vars.paused=true;clearInterval(timer);timer='';},function(){vars.paused=false;if(timer===''&&!settings.manualAdvance){timer=setInterval(function(){nivoRun(slider,kids,settings,false);},settings.pauseTime);}});}slider.bind('nivo:animFinished',function(){sliderImg.attr('src',vars.currentImage.attr('src'));vars.running=false;$(kids).each(function(){if($(this).is('a')){$(this).css('display','none');}});if($(kids[vars.currentSlide]).is('a')){$(kids[vars.currentSlide]).css('display','block');}if(timer===''&&!vars.paused&&!settings.manualAdvance){timer=setInterval(function(){nivoRun(slider,kids,settings,false);},settings.pauseTime);}settings.afterChange.call(this);});var createSlices=function(slider,settings,vars){if($(vars.currentImage).parent().is('a'))$(vars.currentImage).parent().css('display','block');$('img[src="'+vars.currentImage.attr('src')+'"]',slider).not('.nivo-main-image,.nivo-control img').width(slider.width()).css('visibility','hidden').show();var sliceHeight=($('img[src="'+vars.currentImage.attr('src')+'"]',slider).not('.nivo-main-image,.nivo-control img').parent().is('a'))?$('img[src="'+vars.currentImage.attr('src')+'"]',slider).not('.nivo-main-image,.nivo-control img').parent().height():$('img[src="'+vars.currentImage.attr('src')+'"]',slider).not('.nivo-main-image,.nivo-control img').height();for(var i=0;i<settings.slices;i++){var sliceWidth=Math.round(slider.width()/settings.slices);if(i===settings.slices-1){slider.append($('<div class="nivo-slice" name="'+i+'"><img src="'+vars.currentImage.attr('src')+'" style="position:absolute; width:'+slider.width()+'px; height:auto; display:block !important; top:0; left:-'+((sliceWidth+(i*sliceWidth))-sliceWidth)+'px;" /></div>').css({left:(sliceWidth*i)+'px',width:(slider.width()-(sliceWidth*i))+'px',height:sliceHeight+'px',opacity:'0',overflow:'hidden'}));}else{slider.append($('<div class="nivo-slice" name="'+i+'"><img src="'+vars.currentImage.attr('src')+'" style="position:absolute; width:'+slider.width()+'px; height:auto; display:block !important; top:0; left:-'+((sliceWidth+(i*sliceWidth))-sliceWidth)+'px;" /></div>').css({left:(sliceWidth*i)+'px',width:sliceWidth+'px',height:sliceHeight+'px',opacity:'0',overflow:'hidden'}));}}$('.nivo-slice',slider).height(sliceHeight);sliderImg.stop().animate({height:$(vars.currentImage).height()},settings.animSpeed);};var createBoxes=function(slider,settings,vars){if($(vars.currentImage).parent().is('a'))$(vars.currentImage).parent().css('display','block');$('img[src="'+vars.currentImage.attr('src')+'"]',slider).not('.nivo-main-image,.nivo-control img').width(slider.width()).css('visibility','hidden').show();var boxWidth=Math.round(slider.width()/settings.boxCols),boxHeight=Math.round($('img[src="'+vars.currentImage.attr('src')+'"]',slider).not('.nivo-main-image,.nivo-control img').height()/settings.boxRows);for(var rows=0;rows<settings.boxRows;rows++){for(var cols=0;cols<settings.boxCols;cols++){if(cols===settings.boxCols-1){slider.append($('<div class="nivo-box" name="'+cols+'" rel="'+rows+'"><img src="'+vars.currentImage.attr('src')+'" style="position:absolute; width:'+slider.width()+'px; height:auto; display:block; top:-'+(boxHeight*rows)+'px; left:-'+(boxWidth*cols)+'px;" /></div>').css({opacity:0,left:(boxWidth*cols)+'px',top:(boxHeight*rows)+'px',width:(slider.width()-(boxWidth*cols))+'px'}));$('.nivo-box[name="'+cols+'"]',slider).height($('.nivo-box[name="'+cols+'"] img',slider).height()+'px');}else{slider.append($('<div class="nivo-box" name="'+cols+'" rel="'+rows+'"><img src="'+vars.currentImage.attr('src')+'" style="position:absolute; width:'+slider.width()+'px; height:auto; display:block; top:-'+(boxHeight*rows)+'px; left:-'+(boxWidth*cols)+'px;" /></div>').css({opacity:0,left:(boxWidth*cols)+'px',top:(boxHeight*rows)+'px',width:boxWidth+'px'}));$('.nivo-box[name="'+cols+'"]',slider).height($('.nivo-box[name="'+cols+'"] img',slider).height()+'px');}}}sliderImg.stop().animate({height:$(vars.currentImage).height()},settings.animSpeed);};var nivoRun=function(slider,kids,settings,nudge){var vars=slider.data('nivo:vars');if(vars&&(vars.currentSlide===vars.totalSlides-1)){settings.lastSlide.call(this);}if((!vars||vars.stop)&&!nudge){return false;}settings.beforeChange.call(this);if(!nudge){sliderImg.attr('src',vars.currentImage.attr('src'));}else{if(nudge==='prev'){sliderImg.attr('src',vars.currentImage.attr('src'));}if(nudge==='next'){sliderImg.attr('src',vars.currentImage.attr('src'));}}vars.currentSlide++;if(vars.currentSlide===vars.totalSlides){vars.currentSlide=0;settings.slideshowEnd.call(this);}if(vars.currentSlide<0){vars.currentSlide=(vars.totalSlides-1);}if($(kids[vars.currentSlide]).is('img')){vars.currentImage=$(kids[vars.currentSlide]);}else{vars.currentImage=$(kids[vars.currentSlide]).find('img:first');}if(settings.controlNav){$('a',vars.controlNavEl).removeClass('active');$('a:eq('+vars.currentSlide+')',vars.controlNavEl).addClass('active');}processCaption(settings);$('.nivo-slice',slider).remove();$('.nivo-box',slider).remove();var currentEffect=settings.effect,anims='';if(settings.effect==='random'){anims=new Array('sliceDownRight','sliceDownLeft','sliceUpRight','sliceUpLeft','sliceUpDown','sliceUpDownLeft','fold','fade','boxRandom','boxRain','boxRainReverse','boxRainGrow','boxRainGrowReverse');currentEffect=anims[Math.floor(Math.random()*(anims.length+1))];if(currentEffect===undefined){currentEffect='fade';}}if(settings.effect.indexOf(',')!==-1){anims=settings.effect.split(',');currentEffect=anims[Math.floor(Math.random()*(anims.length))];if(currentEffect===undefined){currentEffect='fade';}}if(vars.currentImage.attr('data-transition')){currentEffect=vars.currentImage.attr('data-transition');}vars.running=true;var timeBuff=0,i=0,slices='',firstSlice='',totalBoxes='',boxes='';if(currentEffect==='sliceDown'||currentEffect==='sliceDownRight'||currentEffect==='sliceDownLeft'){createSlices(slider,settings,vars);timeBuff=0;i=0;slices=$('.nivo-slice',slider);if(currentEffect==='sliceDownLeft'){slices=$('.nivo-slice',slider)._reverse();}slices.each(function(){var slice=$(this);slice.css({'top':'0px'});if(i===settings.slices-1){setTimeout(function(){slice.animate({opacity:'1.0'},settings.animSpeed,'',function(){slider.trigger('nivo:animFinished');});},(100+timeBuff));}else{setTimeout(function(){slice.animate({opacity:'1.0'},settings.animSpeed);},(100+timeBuff));}timeBuff+=50;i++;});}else if(currentEffect==='sliceUp'||currentEffect==='sliceUpRight'||currentEffect==='sliceUpLeft'){createSlices(slider,settings,vars);timeBuff=0;i=0;slices=$('.nivo-slice',slider);if(currentEffect==='sliceUpLeft'){slices=$('.nivo-slice',slider)._reverse();}slices.each(function(){var slice=$(this);slice.css({'bottom':'0px'});if(i===settings.slices-1){setTimeout(function(){slice.animate({opacity:'1.0'},settings.animSpeed,'',function(){slider.trigger('nivo:animFinished');});},(100+timeBuff));}else{setTimeout(function(){slice.animate({opacity:'1.0'},settings.animSpeed);},(100+timeBuff));}timeBuff+=50;i++;});}else if(currentEffect==='sliceUpDown'||currentEffect==='sliceUpDownRight'||currentEffect==='sliceUpDownLeft'){createSlices(slider,settings,vars);timeBuff=0;i=0;var v=0;slices=$('.nivo-slice',slider);if(currentEffect==='sliceUpDownLeft'){slices=$('.nivo-slice',slider)._reverse();}slices.each(function(){var slice=$(this);if(i===0){slice.css('top','0px');i++;}else{slice.css('bottom','0px');i=0;}if(v===settings.slices-1){setTimeout(function(){slice.animate({opacity:'1.0'},settings.animSpeed,'',function(){slider.trigger('nivo:animFinished');});},(100+timeBuff));}else{setTimeout(function(){slice.animate({opacity:'1.0'},settings.animSpeed);},(100+timeBuff));}timeBuff+=50;v++;});}else if(currentEffect==='fold'){createSlices(slider,settings,vars);timeBuff=0;i=0;$('.nivo-slice',slider).each(function(){var slice=$(this);var origWidth=slice.width();slice.css({top:'0px',width:'0px'});if(i===settings.slices-1){setTimeout(function(){slice.animate({width:origWidth,opacity:'1.0'},settings.animSpeed,'',function(){slider.trigger('nivo:animFinished');});},(100+timeBuff));}else{setTimeout(function(){slice.animate({width:origWidth,opacity:'1.0'},settings.animSpeed);},(100+timeBuff));}timeBuff+=50;i++;});}else if(currentEffect==='fade'){createSlices(slider,settings,vars);firstSlice=$('.nivo-slice:first',slider);firstSlice.css({'width':slider.width()+'px'});firstSlice.animate({opacity:'1.0'},(settings.animSpeed*2),'',function(){slider.trigger('nivo:animFinished');});}else if(currentEffect==='slideInRight'){createSlices(slider,settings,vars);firstSlice=$('.nivo-slice:first',slider);firstSlice.css({'width':'0px','opacity':'1'});firstSlice.animate({width:slider.width()+'px'},(settings.animSpeed*2),'',function(){slider.trigger('nivo:animFinished');});}else if(currentEffect==='slideInLeft'){createSlices(slider,settings,vars);firstSlice=$('.nivo-slice:first',slider);firstSlice.css({'width':'0px','opacity':'1','left':'','right':'0px'});firstSlice.animate({width:slider.width()+'px'},(settings.animSpeed*2),'',function(){firstSlice.css({'left':'0px','right':''});slider.trigger('nivo:animFinished');});}else if(currentEffect==='boxRandom'){createBoxes(slider,settings,vars);totalBoxes=settings.boxCols*settings.boxRows;i=0;timeBuff=0;boxes=shuffle($('.nivo-box',slider));boxes.each(function(){var box=$(this);if(i===totalBoxes-1){setTimeout(function(){box.animate({opacity:'1'},settings.animSpeed,'',function(){slider.trigger('nivo:animFinished');});},(100+timeBuff));}else{setTimeout(function(){box.animate({opacity:'1'},settings.animSpeed);},(100+timeBuff));}timeBuff+=20;i++;});}else if(currentEffect==='boxRain'||currentEffect==='boxRainReverse'||currentEffect==='boxRainGrow'||currentEffect==='boxRainGrowReverse'){createBoxes(slider,settings,vars);totalBoxes=settings.boxCols*settings.boxRows;i=0;timeBuff=0;var rowIndex=0;var colIndex=0;var box2Darr=[];box2Darr[rowIndex]=[];boxes=$('.nivo-box',slider);if(currentEffect==='boxRainReverse'||currentEffect==='boxRainGrowReverse'){boxes=$('.nivo-box',slider)._reverse();}boxes.each(function(){box2Darr[rowIndex][colIndex]=$(this);colIndex++;if(colIndex===settings.boxCols){rowIndex++;colIndex=0;box2Darr[rowIndex]=[];}});for(var cols=0;cols<(settings.boxCols*2);cols++){var prevCol=cols;for(var rows=0;rows<settings.boxRows;rows++){if(prevCol>=0&&prevCol<settings.boxCols){(function(row,col,time,i,totalBoxes){var box=$(box2Darr[row][col]);var w=box.width();var h=box.height();if(currentEffect==='boxRainGrow'||currentEffect==='boxRainGrowReverse'){box.width(0).height(0);}if(i===totalBoxes-1){setTimeout(function(){box.animate({opacity:'1',width:w,height:h},settings.animSpeed/1.3,'',function(){slider.trigger('nivo:animFinished');});},(100+time));}else{setTimeout(function(){box.animate({opacity:'1',width:w,height:h},settings.animSpeed/1.3);},(100+time));}})(rows,prevCol,timeBuff,i,totalBoxes);i++;}prevCol--;}timeBuff+=100;}}};var shuffle=function(arr){for(var j,x,i=arr.length;i;j=parseInt(Math.random()*i,10),x=arr[--i],arr[i]=arr[j],arr[j]=x);return arr;};var trace=function(msg){if(this.console&&typeof console.log!=='undefined'){console.log(msg);}};this.stop=function(){if(!$(element).data('nivo:vars').stop){$(element).data('nivo:vars').stop=true;trace('Stop Slider');}};this.start=function(){if($(element).data('nivo:vars').stop){$(element).data('nivo:vars').stop=false;trace('Start Slider');}};settings.afterLoad.call(this);return this;};$.fn.nivoSlider=function(options){return this.each(function(key,value){var element=$(this);if(element.data('nivoslider')){return element.data('nivoslider');}var nivoslider=new NivoSlider(this,options);element.data('nivoslider',nivoslider);});};$.fn.nivoSlider.defaults={effect:'random',slices:15,boxCols:8,boxRows:4,animSpeed:500,pauseTime:5000,startSlide:0,directionNav:true,controlNav:true,controlNavThumbs:false,pauseOnHover:true,manualAdvance:false,prevText:'Prev',nextText:'Next',randomStart:false,beforeChange:function(){},afterChange:function(){},slideshowEnd:function(){},lastSlide:function(){},afterLoad:function(){}};$.fn._reverse=[].reverse;})(jQuery);$('#slider').nivoSlider();</script> 