<?php
$servername = "localhost";
$username = "gif";
$password = "Scbwd2blah123";
$database = "porngifs";

$conn = mysqli_connect($servername, $username, $password, $database);

if(isset($_GET["p"])){
  $page = $_GET["p"];
}else{
  $page = 1;
}

$id = $_GET["id"];

$records = 9;
$offset = ($page - 1) * $records;

$total_pages_sql = "SELECT COUNT(*) FROM gifs WHERE pornstarId=$id";
$res3 = mysqli_query($conn,$total_pages_sql);
$total_rows = mysqli_fetch_array($res3)[0];
$total_pages = ceil($total_rows/$records);

$query = "SELECT * FROM gifs WHERE pornstarId=$id ORDER BY id DESC LIMIT $offset, $records";
$result = $conn->query($query);

$cat_sql = "SELECT * FROM pornstars WHERE id=$id";
$result_cat = $conn->query($cat_sql);

$cat = mysqli_fetch_row($result_cat);

$id = $cat[0];
$pornstar = $cat[1];
$description = $cat[2];
$created = $cat[3];

?> 


<!doctype html>
<html lang="en">
  <head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-D6P8CSW815"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-D6P8CSW815');
</script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title><?php echo $pornstar; ?> Porn Star | Porn Gifs: Best XXX and Blowjob Gifs</title>
    <meta name="description" content="Visit here is get the newest and top porn gifs.  <?php echo $pornstar; ?> <?php echo $description; ?> Check it out now!">
  
    <script data-ad-client="ca-pub-2176049440410237" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  
  </head>
  <body>
  <script type="application/javascript" data-idzone="4061843"  data-ad_frequency_count="1"  data-ad_frequency_period="720"  data-browser_settings="1" data-ad_trigger_method="3" src="https://a.realsrv.com/fp-interstitial.js"></script>
  <script type="application/javascript">
    var ad_idzone = "4061839",
    ad_width = "900",
    ad_height = "250",
    v_pos = "top",
    h_pos = "left";
</script>
<script type="application/javascript" src="https://a.realsrv.com/js.php?t=17&idzone=4061839"></script>
  <script type="application/javascript" src="https://syndication.realsrv.com/splash.php?idzone=4061833"></script>
  <script type="application/javascript">
(function() {

    //version 1.0.0

    var adConfig = {
    "ads_host": "a.realsrv.com",
    "syndication_host": "syndication.realsrv.com",
    "idzone": 4061827,
    "popup_fallback": false,
    "popup_force": false,
    "chrome_enabled": true,
    "new_tab": false,
    "frequency_period": 720,
    "frequency_count": 1,
    "trigger_method": 3,
    "trigger_class": "",
    "only_inline": false,
    "t_venor": false
};

    if(!window.document.querySelectorAll){document.querySelectorAll=document.body.querySelectorAll=Object.querySelectorAll=function querySelectorAllPolyfill(r,c,i,j,a){var d=document,s=d.createStyleSheet();a=d.all;c=[];r=r.replace(/\[for\b/gi,"[htmlFor").split(",");for(i=r.length;i--;){s.addRule(r[i],"k:v");for(j=a.length;j--;){a[j].currentStyle.k&&c.push(a[j])}s.removeRule(0)}return c}}var popMagic={version:"1.0.0",cookie_name:"",url:"",config:{},open_count:0,top:null,browser:null,venor_loaded:false,venor:false,configTpl:{ads_host:"",syndication_host:"",idzone:"",frequency_period:720,frequency_count:1,trigger_method:1,trigger_class:"",popup_force:false,popup_fallback:false,chrome_enabled:true,new_tab:false,cat:"",tags:"",el:"",sub:"",sub2:"",sub3:"",only_inline:false,t_venor:false},init:function(config){if(typeof config.idzone==="undefined"||!config.idzone){return}for(var key in this.configTpl){if(!this.configTpl.hasOwnProperty(key)){continue}if(typeof config[key]!=="undefined"){this.config[key]=config[key]}else{this.config[key]=this.configTpl[key]}}if(typeof this.config.idzone==="undefined"||this.config.idzone===""){return}if(this.config.only_inline!==true){this.loadHosted()}this.addEventToElement(window,"load",this.preparePop)},getCountFromCookie:function(){var shownCookie=popMagic.getCookie(popMagic.cookie_name);var ctr=typeof shownCookie==="undefined"?0:parseInt(shownCookie);if(isNaN(ctr)){ctr=0}return ctr},shouldShow:function(){if(popMagic.open_count>=popMagic.config.frequency_count){return false}var ctr=popMagic.getCountFromCookie();popMagic.open_count=ctr;return!(ctr>=popMagic.config.frequency_count)},venorShouldShow:function(){return!popMagic.config.t_venor||popMagic.venor_loaded&&popMagic.venor==="0"},setAsOpened:function(){var new_ctr=1;if(popMagic.open_count!==0){new_ctr=popMagic.open_count+1}else{new_ctr=popMagic.getCountFromCookie()+1}popMagic.setCookie(popMagic.cookie_name,new_ctr,popMagic.config.frequency_period);if(new_ctr>=popMagic.config.frequency_count){popMagic.setCookie("nb-no-req-"+popMagic.config.idzone,true,popMagic.config.frequency_period)}},loadHosted:function(){var hostedScript=document.createElement("script");hostedScript.type="application/javascript";hostedScript.async=true;hostedScript.src="//"+this.config.ads_host+"/popunder1000.js";hostedScript.id="popmagicldr";for(var key in this.config){if(!this.config.hasOwnProperty(key)){continue}if(key==="ads_host"||key==="syndication_host"){continue}hostedScript.setAttribute("data-exo-"+key,this.config[key])}var insertAnchor=document.getElementsByTagName("body").item(0);if(insertAnchor.firstChild){insertAnchor.insertBefore(hostedScript,insertAnchor.firstChild)}else{insertAnchor.appendChild(hostedScript)}},preparePop:function(){if(typeof exoJsPop101==="object"&&exoJsPop101.hasOwnProperty("add")){return}popMagic.top=self;if(popMagic.top!==self){try{if(top.document.location.toString()){popMagic.top=top}}catch(err){}}popMagic.cookie_name="splashWeb-"+popMagic.config.idzone+"-42";if(popMagic.config.t_venor&&popMagic.shouldShow()){var xmlhttp=new XMLHttpRequest;xmlhttp.onreadystatechange=function(){if(xmlhttp.readyState==XMLHttpRequest.DONE){popMagic.venor_loaded=true;if(xmlhttp.status==200){popMagic.venor=xmlhttp.responseText}}};var protocol=document.location.protocol!=="https:"&&document.location.protocol!=="http:"?"https:":document.location.protocol;xmlhttp.open("GET",protocol+"//"+popMagic.config.syndication_host+"/venor.php",true);try{xmlhttp.send()}catch(error){popMagic.venor_loaded=true}}popMagic.buildUrl();popMagic.browser=popMagic.browserDetector.detectBrowser(navigator.userAgent);if(!popMagic.config.chrome_enabled&&(popMagic.browser.name==="chrome"||popMagic.browser.name==="crios")){return}var popMethod=popMagic.getPopMethod(popMagic.browser);popMagic.addEvent("click",popMethod)},getPopMethod:function(browserInfo){if(popMagic.config.popup_force){return popMagic.methods.popup}if(popMagic.config.popup_fallback&&browserInfo.name==="chrome"&&browserInfo.version>=68&&!browserInfo.isMobile){return popMagic.methods.popup}if(browserInfo.isMobile){return popMagic.methods.default}if(browserInfo.name==="chrome"){return popMagic.methods.chromeTab}return popMagic.methods.default},buildUrl:function(){var protocol=document.location.protocol!=="https:"&&document.location.protocol!=="http:"?"https:":document.location.protocol;var p=top===self?document.URL:document.referrer;var script_info={type:"inline",name:"popMagic",ver:this.version};var encodeScriptInfo=function(script_info){var result=script_info["type"]+"|"+script_info["name"]+"|"+script_info["ver"];return encodeURIComponent(btoa(result))};this.url=protocol+"//"+this.config.syndication_host+"/splash.php"+"?cat="+this.config.cat+"&idzone="+this.config.idzone+"&type=8"+"&p="+encodeURIComponent(p)+"&sub="+this.config.sub+(this.config.sub2!==""?"&sub2="+this.config.sub2:"")+(this.config.sub3!==""?"&sub3="+this.config.sub3:"")+"&block=1"+"&el="+this.config.el+"&tags="+this.config.tags+"&scr_info="+encodeScriptInfo(script_info)},addEventToElement:function(obj,type,fn){if(obj.addEventListener){obj.addEventListener(type,fn,false)}else if(obj.attachEvent){obj["e"+type+fn]=fn;obj[type+fn]=function(){obj["e"+type+fn](window.event)};obj.attachEvent("on"+type,obj[type+fn])}else{obj["on"+type]=obj["e"+type+fn]}},addEvent:function(type,fn){var targetElements;if(popMagic.config.trigger_method=="3"){targetElements=document.querySelectorAll("a");for(i=0;i<targetElements.length;i++){popMagic.addEventToElement(targetElements[i],type,fn)}return}if(popMagic.config.trigger_method=="2"&&popMagic.config.trigger_method!=""){var trigger_classes;var trigger_classes_final=[];if(popMagic.config.trigger_class.indexOf(",")===-1){trigger_classes=popMagic.config.trigger_class.split(" ")}else{var trimmed_trigger_classes=popMagic.config.trigger_class.replace(/\s/g,"");trigger_classes=trimmed_trigger_classes.split(",")}for(var i=0;i<trigger_classes.length;i++){if(trigger_classes[i]!==""){trigger_classes_final.push("."+trigger_classes[i])}}targetElements=document.querySelectorAll(trigger_classes_final.join(", "));for(i=0;i<targetElements.length;i++){popMagic.addEventToElement(targetElements[i],type,fn)}return}popMagic.addEventToElement(document,type,fn)},setCookie:function(name,value,ttl_minutes){var now_date=new Date;now_date.setMinutes(now_date.getMinutes()+parseInt(ttl_minutes));var c_value=encodeURIComponent(value)+"; expires="+now_date.toUTCString()+"; path=/";document.cookie=name+"="+c_value},getCookie:function(name){var i,x,y,cookiesArray=document.cookie.split(";");for(i=0;i<cookiesArray.length;i++){x=cookiesArray[i].substr(0,cookiesArray[i].indexOf("="));y=cookiesArray[i].substr(cookiesArray[i].indexOf("=")+1);x=x.replace(/^\s+|\s+$/g,"");if(x===name){return decodeURIComponent(y)}}},randStr:function(length,possibleChars){var text="";var possible=possibleChars||"ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";for(var i=0;i<length;i++){text+=possible.charAt(Math.floor(Math.random()*possible.length))}return text},isValidUserEvent:function(event){if("isTrusted"in event&&event.isTrusted&&popMagic.browser.name!=="ie"&&popMagic.browser.name!=="safari"){return true}else{return event.screenX!=0&&event.screenY!=0}},isValidHref:function(href){if(typeof href==="undefined"||href==""){return false}var empty_ref=/\s?javascript\s?:/i;return!empty_ref.test(href)},findLinkToOpen:function(clickedElement){var target=clickedElement;var location=false;try{var breakCtr=0;while(breakCtr<20&&!target.getAttribute("href")&&target!==document&&target.nodeName.toLowerCase()!=="html"){target=target.parentNode;breakCtr++}var elementTargetAttr=target.getAttribute("target");if(!elementTargetAttr||elementTargetAttr.indexOf("_blank")===-1){location=target.getAttribute("href")}}catch(err){}if(!popMagic.isValidHref(location)){location=false}return location||window.location.href},getPuId:function(){return"ok_"+Math.floor(89999999*Math.random()+1e7)},browserDetector:{browserDefinitions:[["firefox",/Firefox\/([0-9.]+)(?:\s|$)/],["opera",/Opera\/([0-9.]+)(?:\s|$)/],["opera",/OPR\/([0-9.]+)(:?\s|$)$/],["edge",/Edg(?:e|)\/([0-9._]+)/],["ie",/Trident\/7\.0.*rv:([0-9.]+)\).*Gecko$/],["ie",/MSIE\s([0-9.]+);.*Trident\/[4-7].0/],["ie",/MSIE\s(7\.0)/],["safari",/Version\/([0-9._]+).*Safari/],["chrome",/(?!Chrom.*Edg(?:e|))Chrom(?:e|ium)\/([0-9.]+)(:?\s|$)/],["chrome",/(?!Chrom.*OPR)Chrom(?:e|ium)\/([0-9.]+)(:?\s|$)/],["bb10",/BB10;\sTouch.*Version\/([0-9.]+)/],["android",/Android\s([0-9.]+)/],["ios",/Version\/([0-9._]+).*Mobile.*Safari.*/],["yandexbrowser",/YaBrowser\/([0-9._]+)/],["crios",/CriOS\/([0-9.]+)(:?\s|$)/]],detectBrowser:function(userAgent){var isMobile=userAgent.match(/Android|BlackBerry|iPhone|iPad|iPod|Opera Mini|IEMobile|WebOS|Windows Phone/i);for(var i in this.browserDefinitions){var definition=this.browserDefinitions[i];if(definition[1].test(userAgent)){var match=definition[1].exec(userAgent);var version=match&&match[1].split(/[._]/).slice(0,3);var versionTails=Array.prototype.slice.call(version,1).join("")||"0";if(version&&version.length<3){Array.prototype.push.apply(version,version.length===1?[0,0]:[0])}return{name:definition[0],version:version.join("."),versionNumber:parseFloat(version[0]+"."+versionTails),isMobile:isMobile}}}return{name:"other",version:"1.0",versionNumber:1,isMobile:isMobile}}},methods:{default:function(triggeredEvent){if(!popMagic.shouldShow()||!popMagic.venorShouldShow()||!popMagic.isValidUserEvent(triggeredEvent))return true;var clickedElement=triggeredEvent.target||triggeredEvent.srcElement;var href=popMagic.findLinkToOpen(clickedElement);window.open(href,"_blank");popMagic.setAsOpened();popMagic.top.document.location=popMagic.url;if(typeof triggeredEvent.preventDefault!=="undefined"){triggeredEvent.preventDefault();triggeredEvent.stopPropagation()}return true},chromeTab:function(event){if(!popMagic.shouldShow()||!popMagic.venorShouldShow()||!popMagic.isValidUserEvent(event))return true;if(typeof event.preventDefault!=="undefined"){event.preventDefault();event.stopPropagation()}else{return true}var a=top.window.document.createElement("a");var target=event.target||event.srcElement;a.href=popMagic.findLinkToOpen(target);document.getElementsByTagName("body")[0].appendChild(a);var e=new MouseEvent("click",{bubbles:true,cancelable:true,view:window,screenX:0,screenY:0,clientX:0,clientY:0,ctrlKey:true,altKey:false,shiftKey:false,metaKey:true,button:0});e.preventDefault=undefined;a.dispatchEvent(e);a.parentNode.removeChild(a);window.open(popMagic.url,"_self");popMagic.setAsOpened()},popup:function(triggeredEvent){if(!popMagic.shouldShow()||!popMagic.venorShouldShow()||!popMagic.isValidUserEvent(triggeredEvent))return true;var winOptions="";if(popMagic.config.popup_fallback&&!popMagic.config.popup_force){var height=Math.max(Math.round(window.innerHeight*.8),300);var width=Math.max(Math.round(window.innerWidth*.7),300);var top=window.screenY+100;var left=window.screenX+100;winOptions="menubar=1,resizable=1,width="+width+",height="+height+",top="+top+",left="+left}var prePopUrl=document.location.href;var popWin=window.open(prePopUrl,popMagic.getPuId(),winOptions);setTimeout(function(){popWin.location.href=popMagic.url},200);popMagic.setAsOpened();if(typeof triggeredEvent.preventDefault!=="undefined"){triggeredEvent.preventDefault();triggeredEvent.stopPropagation()}}}};    popMagic.init(adConfig);
})();
</script>
  <!-- JuicyAds PopUnders v3 Start -->
<script type="text/javascript" src="https://js.juicyads.com/jp.php?c=34a41303r284u4q2t2f4y2e484&u=http%3A%2F%2Fwww.juicyads.rocks"></script>
<!-- JuicyAds PopUnders v3 End -->
    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php">Top Quality Porn Gifs and Blowjob Gifs</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
          <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="categories.php">Categories</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pornstars.php">Porn Stars</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">About Us</a>
            </li>
          </ul>
        </div>
      </nav>

    <div class="container-fluid">
    <div class="row">

    <div class="col-6">
          <!-- JuicyAds v3.1 -->
        <script type="text/javascript" data-cfasync="false" async src="https://poweredby.jads.co/js/jads.js"></script>
        <ins id="882686" data-width="728" data-height="102"></ins>
        <script type="text/javascript" data-cfasync="false" async>(adsbyjuicy = window.adsbyjuicy || []).push({'adzone':882686});</script>
        <!--JuicyAds END-->
</div>
<div class="col-6">
<!-- JuicyAds v3.1 -->
<script type="text/javascript" data-cfasync="false" async src="https://poweredby.jads.co/js/jads.js"></script>
<ins id="882687" data-width="728" data-height="102"></ins>
<script type="text/javascript" data-cfasync="false" async>(adsbyjuicy = window.adsbyjuicy || []).push({'adzone':882687});</script>
<!--JuicyAds END-->
</div>
    </div>
    <div class="row">
    <div class="col">

   <!-- JuicyAds v3.1 -->
<script type="text/javascript" data-cfasync="false" async src="https://poweredby.jads.co/js/jads.js"></script>
<ins id="882688" data-width="160" data-height="612"></ins>
<script type="text/javascript" data-cfasync="false" async>(adsbyjuicy = window.adsbyjuicy || []).push({'adzone':882688});</script>
<!--JuicyAds END-->

</div>
<div class="col">
 <!-- JuicyAds v3.1 -->
 <script type="text/javascript" data-cfasync="false" async src="https://poweredby.jads.co/js/jads.js"></script>
<ins id="882689" data-width="160" data-height="612"></ins>
<script type="text/javascript" data-cfasync="false" async>(adsbyjuicy = window.adsbyjuicy || []).push({'adzone':882689});</script>
<!--JuicyAds END-->
    </div>
    <div class="col-5">
      <div class="jumbotron">
        <h1 class="display-4">Porn Gifs Porn Star Page | <?php echo $pornstar; ?></h1>
        <p class="lead">
          <?php echo $description; ?> created on <?php echo $created; ?>.  Find it here at Porn Gif and Blowjob Gif.
        </p>
        <a class="btn btn-primary btn-lg" href="pornstars.php" role="button">Back</a>
      </div>
    
    </div>
       
      <div class="col">
<!-- JuicyAds v3.1 -->
<script type="text/javascript" data-cfasync="false" async src="https://poweredby.jads.co/js/jads.js"></script>
<ins id="882691" data-width="160" data-height="612"></ins>
<script type="text/javascript" data-cfasync="false" async>(adsbyjuicy = window.adsbyjuicy || []).push({'adzone':882691});</script>
<!--JuicyAds END-->
    </div>
    <div class="col">
    <!-- JuicyAds v3.1 -->
<script type="text/javascript" data-cfasync="false" async src="https://poweredby.jads.co/js/jads.js"></script>
<ins id="882692" data-width="160" data-height="612"></ins>
<script type="text/javascript" data-cfasync="false" async>(adsbyjuicy = window.adsbyjuicy || []).push({'adzone':882692});</script>
<!--JuicyAds END-->
    </div>
    </div>
    <div class="row">
      
  <div class="col-6">
<!-- JuicyAds v3.1 -->
<script type="text/javascript" data-cfasync="false" async src="https://poweredby.jads.co/js/jads.js"></script>
<ins id="882693" data-width="728" data-height="102"></ins>
<script type="text/javascript" data-cfasync="false" async>(adsbyjuicy = window.adsbyjuicy || []).push({'adzone':882693});</script>
<!--JuicyAds END-->
  </div>

  <div class="col-6">
<!-- JuicyAds v3.1 -->
<script type="text/javascript" data-cfasync="false" async src="https://poweredby.jads.co/js/jads.js"></script>
<ins id="882696" data-width="728" data-height="102"></ins>
<script type="text/javascript" data-cfasync="false" async>(adsbyjuicy = window.adsbyjuicy || []).push({'adzone':882696});</script>
<!--JuicyAds END-->
  </div>

    </div>
    
    <div class="row">
    <div class="col-2">
      <!-- JuicyAds v3.1 -->
<script type="text/javascript" data-cfasync="false" async src="https://poweredby.jads.co/js/jads.js"></script>
<ins id="882697" data-width="160" data-height="612"></ins>
<script type="text/javascript" data-cfasync="false" async>(adsbyjuicy = window.adsbyjuicy || []).push({'adzone':882697});</script>
<!--JuicyAds END-->
<!-- JuicyAds v3.1 -->
<script type="text/javascript" data-cfasync="false" async src="https://poweredby.jads.co/js/jads.js"></script>
<ins id="882698" data-width="160" data-height="612"></ins>
<script type="text/javascript" data-cfasync="false" async>(adsbyjuicy = window.adsbyjuicy || []).push({'adzone':882698});</script>
<!--JuicyAds END-->


    </div>
    <div class="col-8">
    <h1 class="text-center">Most Recent Porn and Blowjob Gifs of <?php echo $pornstar?> the Porn Star</h1>
      <div class="row justify-content-center">
  <!-- JuicyAds v3.1 -->
<script type="text/javascript" data-cfasync="false" async src="https://poweredby.jads.co/js/jads.js"></script>
<ins id="882707" data-width="728" data-height="102"></ins>
<script type="text/javascript" data-cfasync="false" async>(adsbyjuicy = window.adsbyjuicy || []).push({'adzone':882707});</script>
<!--JuicyAds END-->

      </div>
    <div class="card-columns">

<?php
  while($row = $result->fetch_assoc()){

?>
<div class="card">
    <a href="gif.php?id=<?php echo $row["id"]?>"><img src="http://porngifs.lovestoblog.com/gifs/<?php echo $row["id"]?>.gif" class="card-img-top" alt="<?php echo $row["title"]?>"></a>
    <div class="card-body">
      <h5 class="card-title"><?php echo $row["title"]?></h5>
      <p class="card-text"><?php echo $row["description"]?></p>
    </div>
    <div class="card-footer">
      <small class="text-muted"><?php echo $row["created"]?></small>
    </div>
</div>

<?php
}
?>
</div>




<div class="row justify-content-center">
<!-- JuicyAds v3.1 -->
<script type="text/javascript" data-cfasync="false" async src="https://poweredby.jads.co/js/jads.js"></script>
<ins id="882708" data-width="728" data-height="102"></ins>
<script type="text/javascript" data-cfasync="false" async>(adsbyjuicy = window.adsbyjuicy || []).push({'adzone':882708});</script>
<!--JuicyAds END-->
      </div>



      <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
          <li class="page-item"><a class="page-link" href="?id=1&p=1">First</a></li>
          
          <li class="page-item <?php if($page<=1){ echo "disabled"; } ?>">
            <a class="page-link" href="<?php if($page <= 1){ echo '#'; } else { echo "?id=".$id."&p=".($page - 1); } ?>">Previous</a>
          </li>

          <li class="page-item <?php if($page >= $total_pages){ echo 'disabled'; } ?>">
            <a class="page-link" href="<?php if($page >= $total_pages){ echo '#'; } else { echo "?id=".$id."&p=".($page + 1); } ?>">Next</a>
          </li>
          
          <li class="page-item"><a class="page-link" href="?id=<?php echo $id;?>&p=<?php echo $total_pages ?>">Last</a></li>
        </ul>
      </nav>
  
  
    </div>
    <div class="col-2">
<!-- JuicyAds v3.1 -->
<script type="text/javascript" data-cfasync="false" async src="https://poweredby.jads.co/js/jads.js"></script>
<ins id="882705" data-width="160" data-height="612"></ins>
<script type="text/javascript" data-cfasync="false" async>(adsbyjuicy = window.adsbyjuicy || []).push({'adzone':882705});</script>
<!--JuicyAds END-->
<!-- JuicyAds v3.1 -->
<script type="text/javascript" data-cfasync="false" async src="https://poweredby.jads.co/js/jads.js"></script>
<ins id="882706" data-width="160" data-height="612"></ins>
<script type="text/javascript" data-cfasync="false" async>(adsbyjuicy = window.adsbyjuicy || []).push({'adzone':882706});</script>
<!--JuicyAds END-->
    </div>

    
  </div>


  <div class="row">

  <div class="col-6">
<!-- JuicyAds v3.1 -->
<script type="text/javascript" data-cfasync="false" async src="https://poweredby.jads.co/js/jads.js"></script>
<ins id="882710" data-width="728" data-height="102"></ins>
<script type="text/javascript" data-cfasync="false" async>(adsbyjuicy = window.adsbyjuicy || []).push({'adzone':882710});</script>
<!--JuicyAds END-->
  </div>

  <div class="col-6">
<!-- JuicyAds v3.1 -->
<script type="text/javascript" data-cfasync="false" async src="https://poweredby.jads.co/js/jads.js"></script>
<ins id="882712" data-width="728" data-height="102"></ins>
<script type="text/javascript" data-cfasync="false" async>(adsbyjuicy = window.adsbyjuicy || []).push({'adzone':882712});</script>
<!--JuicyAds END-->
  </div>

    </div>
  <div class="row">
    <div class="col-2">
      <!-- JuicyAds v3.1 -->
<script type="text/javascript" data-cfasync="false" async src="https://poweredby.jads.co/js/jads.js"></script>
<ins id="882714" data-width="160" data-height="612"></ins>
<script type="text/javascript" data-cfasync="false" async>(adsbyjuicy = window.adsbyjuicy || []).push({'adzone':882714});</script>
<!--JuicyAds END-->
<!-- JuicyAds v3.1 -->
<script type="text/javascript" data-cfasync="false" async src="https://poweredby.jads.co/js/jads.js"></script>
<ins id="882716" data-width="160" data-height="612"></ins>
<script type="text/javascript" data-cfasync="false" async>(adsbyjuicy = window.adsbyjuicy || []).push({'adzone':882716});</script>
<!--JuicyAds END-->
    </div>
    <div class="col-8">

    <div class="row justify-content-center">
<!-- JuicyAds v3.1 -->
<script type="text/javascript" data-cfasync="false" async src="https://poweredby.jads.co/js/jads.js"></script>
<ins id="882724" data-width="728" data-height="102"></ins>
<script type="text/javascript" data-cfasync="false" async>(adsbyjuicy = window.adsbyjuicy || []).push({'adzone':882724});</script>
<!--JuicyAds END-->
    </div>

    <div class="row justify-content-center">
<!-- JuicyAds v3.1 -->
<script type="text/javascript" data-cfasync="false" async src="https://poweredby.jads.co/js/jads.js"></script>
<ins id="882726" data-width="728" data-height="102"></ins>
<script type="text/javascript" data-cfasync="false" async>(adsbyjuicy = window.adsbyjuicy || []).push({'adzone':882726});</script>
<!--JuicyAds END-->
    </div>



<div class="row justify-content-center">
<!-- JuicyAds v3.1 -->
<script type="text/javascript" data-cfasync="false" async src="https://poweredby.jads.co/js/jads.js"></script>
<ins id="882733" data-width="728" data-height="102"></ins>
<script type="text/javascript" data-cfasync="false" async>(adsbyjuicy = window.adsbyjuicy || []).push({'adzone':882733});</script>
<!--JuicyAds END-->
</div>
      
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>

      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="http://porngifs.lovestoblog.com/images/1.jpg" height="600" class="d-block w-100" alt="Blowjob gif">
          <div class="carousel-caption d-none d-md-block">
            <h5>The Porn Gif and Blowjob Gifs Carousel</h5>
            <p>
              Cycle through Porn Gifs and Blowjob Gifs that show the best pornstars
              doing their sexual deeds.
            </p>
          </div>
        </div>


        <?php
          $query2 = "SELECT * FROM gifs ORDER BY id ASC LIMIT 4";
          $result2 = $conn->query($query2);
          while($row = $result2->fetch_assoc()){
                    
        ?>

        <div class="carousel-item">
          <a href="gif.php?id=<?php echo $row["id"] ?>"><img src="http://porngifs.lovestoblog.com/gifs/<?php echo $row["id"] ?>.gif" height="600" class="d-block w-100" alt="<?php echo $row["title"] ?>"></a>
          <div class="carousel-caption d-none d-md-block">
            <h5><?php echo $row["title"] ?></h5>
            <p><?php echo $row["description"] ?></p>
          </div>
        </div>

        <?php 
          }
        ?>

      </div>
      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    

    <div class="row justify-content-center">
<!-- JuicyAds v3.1 -->
<script type="text/javascript" data-cfasync="false" async src="https://poweredby.jads.co/js/jads.js"></script>
<ins id="882729" data-width="728" data-height="102"></ins>
<script type="text/javascript" data-cfasync="false" async>(adsbyjuicy = window.adsbyjuicy || []).push({'adzone':882729});</script>
<!--JuicyAds END-->
</div>

<div class="row justify-content-center">
<!-- JuicyAds v3.1 -->
<script type="text/javascript" data-cfasync="false" async src="https://poweredby.jads.co/js/jads.js"></script>
<ins id="882730" data-width="728" data-height="102"></ins>
<script type="text/javascript" data-cfasync="false" async>(adsbyjuicy = window.adsbyjuicy || []).push({'adzone':882730});</script>
<!--JuicyAds END-->
</div>

<div class="row justify-content-center">
<!-- JuicyAds v3.1 -->
<script type="text/javascript" data-cfasync="false" async src="https://poweredby.jads.co/js/jads.js"></script>
<ins id="882732" data-width="728" data-height="102"></ins>
<script type="text/javascript" data-cfasync="false" async>(adsbyjuicy = window.adsbyjuicy || []).push({'adzone':882732});</script>
<!--JuicyAds END-->
</div>
    
    
    
    </div>
    <div class="col-2">
      <!-- JuicyAds v3.1 -->
<script type="text/javascript" data-cfasync="false" async src="https://poweredby.jads.co/js/jads.js"></script>
<ins id="882717" data-width="160" data-height="612"></ins>
<script type="text/javascript" data-cfasync="false" async>(adsbyjuicy = window.adsbyjuicy || []).push({'adzone':882717});</script>
<!--JuicyAds END-->
<!-- JuicyAds v3.1 -->
<script type="text/javascript" data-cfasync="false" async src="https://poweredby.jads.co/js/jads.js"></script>
<ins id="882718" data-width="160" data-height="612"></ins>
<script type="text/javascript" data-cfasync="false" async>(adsbyjuicy = window.adsbyjuicy || []).push({'adzone':882718});</script>
<!--JuicyAds END-->
    </div>
  </div>


<div class="row">
  <div class="col-6">
<!-- JuicyAds v3.1 -->
<script type="text/javascript" data-cfasync="false" async src="https://poweredby.jads.co/js/jads.js"></script>
<ins id="882720" data-width="728" data-height="102"></ins>
<script type="text/javascript" data-cfasync="false" async>(adsbyjuicy = window.adsbyjuicy || []).push({'adzone':882720});</script>
<!--JuicyAds END-->
  </div>


<div class="col-6">
<!-- JuicyAds v3.1 -->
<script type="text/javascript" data-cfasync="false" async src="https://poweredby.jads.co/js/jads.js"></script>
<ins id="882721" data-width="728" data-height="102"></ins>
<script type="text/javascript" data-cfasync="false" async>(adsbyjuicy = window.adsbyjuicy || []).push({'adzone':882721});</script>
<!--JuicyAds END-->
</div>
</div>




  </div>

    
  <footer>
        <ul class="nav justify-content-center navbar-dark bg-dark">
          <li class="nav-item">
            <a class="nav-link" href="sitemap.php">Sitemap</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="terms.php">Terms of Use</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="policy.php">Privacy and Policy</a>
          </li>
        </ul>
    </footer>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
   
   <!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5fac0d6152e70f46"></script>

    </body>
</html>








<?php
$conn->close();

?>