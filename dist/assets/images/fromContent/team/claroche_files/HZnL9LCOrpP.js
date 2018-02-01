if (self.CavalryLogger) { CavalryLogger.start_js(["nw\/Q5"]); }

__d("LiveAudioAnimation",["cx","AudioContextSingleton","CSS","CSSAnimationBuilder","DOM","LiveAudioAnimationConfig","Random","Run","SubscriptionsHandler","queryThenMutateDOM","requestAnimationFrame"],(function a(b,c,d,e,f,g,h){__p&&__p();function i(k,l){"use strict";__p&&__p();this.$LiveAudioAnimation9=false;this.$LiveAudioAnimation10=false;this.$LiveAudioAnimation11=[];this.$LiveAudioAnimation12=false;this.$LiveAudioAnimation13=[];this.$LiveAudioAnimation14=[];this.$LiveAudioAnimation15=0;this.$LiveAudioAnimation6=k;this.$LiveAudioAnimation2=l;this.$LiveAudioAnimation3=new(c("SubscriptionsHandler"))();this.$LiveAudioAnimation16();c("Run").onLeave(function(){return this.$LiveAudioAnimation17()}.bind(this))}i.prototype.$LiveAudioAnimation16=function(){"use strict";__p&&__p();var k=this.$LiveAudioAnimation2.getVideoNode(),l=c("AudioContextSingleton").get();if(!l)return;var m=l.createMediaElementSource(k);this.$LiveAudioAnimation7=l.createAnalyser();m.connect(this.$LiveAudioAnimation7);this.$LiveAudioAnimation7.connect(l.destination);this.$LiveAudioAnimation7.fftSize=i.FFT_SIZE;var n=this.$LiveAudioAnimation7.frequencyBinCount;this.$LiveAudioAnimation8=new Uint8Array(n);this.$LiveAudioAnimation3.addSubscriptions(this.$LiveAudioAnimation2.addListener("unmuteVideo",function(){this.$LiveAudioAnimation12=false;this.$LiveAudioAnimation18()}.bind(this)),this.$LiveAudioAnimation2.addListener("muteVideo",function(){this.$LiveAudioAnimation12=true}.bind(this)),this.$LiveAudioAnimation2.addListener("pausePlayback",function(){return this.$LiveAudioAnimation19()}.bind(this)),this.$LiveAudioAnimation2.addListener("beginPlayback",function(){return this.$LiveAudioAnimation18()}.bind(this)),this.$LiveAudioAnimation2.addListener("streamInterrupted",function(){return this.$LiveAudioAnimation19()}.bind(this)),this.$LiveAudioAnimation2.addListener("streamResumed",function(){return this.$LiveAudioAnimation18()}.bind(this)),this.$LiveAudioAnimation2.addListener("finishPlayback",function(){return this.$LiveAudioAnimation19()}.bind(this)),this.$LiveAudioAnimation2.addListener("VideoControls/visibilityUpdate",function(r){var s=r.areControlsVisible;return this.$LiveAudioAnimation20(s)}.bind(this)));for(var o=0;o<i.HUMP_COUNT;o++){var p=document.createElement("canvas");c("CSS").setClass(p,"_39px");c("DOM").appendContent(this.$LiveAudioAnimation6,p);var q=new j(false,p);this.$LiveAudioAnimation13.push(q)}this.$LiveAudioAnimation12=this.$LiveAudioAnimation2.isMuted();this.$LiveAudioAnimation18()};i.prototype.$LiveAudioAnimation17=function(){"use strict";this.$LiveAudioAnimation19();this.$LiveAudioAnimation3.release()};i.prototype.$LiveAudioAnimation21=function(k){"use strict";__p&&__p();if(!this.$LiveAudioAnimation9){k.isAnimating=false;c("CSS").addClass(k.canvas,"hidden_elem");return}k.isAnimating=true;var l=k.canvas;this.$LiveAudioAnimation22(l);var m=i.MIN_SPEED+c("Random").random()*(i.MAX_SPEED-i.MIN_SPEED);m/=1e3;m/=2;var n=c("CSSAnimationBuilder").keyframeAnimation(l);n.defineKeyframes({"0%":{transform:"scaleY(0)"},"100%":{transform:"scaleY(1)"}});n.setDuration(m).setDirection("alternate").setMemoize(false).setTimingFunction("ease-in-out").setIterationCount(2);n.setFinishedCallback(function(){c("CSS").setClass(l,"_39px");this.$LiveAudioAnimation21(k)}.bind(this));n.start()};i.prototype.$LiveAudioAnimation22=function(k){"use strict";__p&&__p();var l=k.getContext("2d"),m=this.$LiveAudioAnimation4,n=this.$LiveAudioAnimation5;if(!l||!m||!n)return;l.clearRect(0,0,m,n);var o=0;if(this.$LiveAudioAnimation12)o=i.RANDOM_MIN_AMPLITUDE+c("Random").random()*(i.RANDOM_MAX_AMPLITUDE-i.RANDOM_MIN_AMPLITUDE);else o=this.getNextAudioLevel();var p=c("Random").random(),q=i.MINIMUM_WIDTH_FACTOR+i.WIDTH_FACTOR_MULTIPLIER*c("Random").random(),r=m/4+p*m/2,s=[];for(var t=i.ANCHOR_POINT_X_VALUES,u=Array.isArray(t),v=0,t=u?t:t[typeof Symbol==="function"?Symbol.iterator:"@@iterator"]();;){var w;if(u){if(v>=t.length)break;w=t[v++]}else{v=t.next();if(v.done)break;w=v.value}var x=w;s.push([r+x*m/4,n-this.$LiveAudioAnimation23(x,n,o,q)])}this.$LiveAudioAnimation24(l,s)};i.prototype.$LiveAudioAnimation23=function(k,l,m,n){"use strict";var o=m*l,p=Math.pow(1/(1+Math.pow(n*k,2)),2);return o*p};i.prototype.$LiveAudioAnimation24=function(k,l){"use strict";__p&&__p();k.fillStyle=i.FILL_COLOR;k.beginPath();k.moveTo.apply(k,l[0]);var m=1;for(;m<l.length-2;m++){var n=(l[m][0]+l[m+1][0])/2,o=(l[m][1]+l[m+1][1])/2;k.quadraticCurveTo(l[m][0],l[m][1],n,o)}k.quadraticCurveTo(l[m][0],l[m][1],l[m+1][0],l[m+1][1]);k.lineTo.apply(k,l[0]);k.fill()};i.prototype.$LiveAudioAnimation18=function(){"use strict";__p&&__p();if(!this.$LiveAudioAnimation2.isState("playing"))return;this.$LiveAudioAnimation9=true;for(var k=this.$LiveAudioAnimation13,l=Array.isArray(k),m=0,k=l?k:k[typeof Symbol==="function"?Symbol.iterator:"@@iterator"]();;){var n;if(l){if(m>=k.length)break;n=k[m++]}else{m=k.next();if(m.done)break;n=m.value}var o=n;if(!o.isAnimating){c("CSS").removeClass(o.canvas,"hidden_elem");this.$LiveAudioAnimation21(o)}}this.$LiveAudioAnimation25()};i.prototype.$LiveAudioAnimation19=function(){"use strict";this.$LiveAudioAnimation9=false};i.prototype.$LiveAudioAnimation20=function(k){"use strict";if(k)this.$LiveAudioAnimation19();else this.$LiveAudioAnimation18()};i.prototype.$LiveAudioAnimation25=function(){"use strict";if(!this.$LiveAudioAnimation9)return;c("requestAnimationFrame")(function(){c("queryThenMutateDOM")(function(){return this.$LiveAudioAnimation26()}.bind(this),function(){this.$LiveAudioAnimation27();this.$LiveAudioAnimation25()}.bind(this))}.bind(this))};i.prototype.getNextAudioLevel=function(){"use strict";var k=this.$LiveAudioAnimation28(this.$LiveAudioAnimation11);this.$LiveAudioAnimation11=[];k-=i.NOISE_FLOOR;k=Math.max(k,0);k*=1/(1-i.NOISE_FLOOR);if(k<i.MINIMUM_ANIMATION_LEVEL)k=0;return k};i.prototype.$LiveAudioAnimation27=function(){"use strict";if(!this.$LiveAudioAnimation7)return;if(this.$LiveAudioAnimation12)return;this.$LiveAudioAnimation7.getByteFrequencyData(this.$LiveAudioAnimation8);var k=this.$LiveAudioAnimation28(this.$LiveAudioAnimation8,i.BINS_TO_USE_FOR_DB_AVERAGE)/i.MAX_BYTE_VALUE;k=this.$LiveAudioAnimation29(k);this.$LiveAudioAnimation11.push(k)};i.prototype.$LiveAudioAnimation29=function(k){"use strict";var l=this.$LiveAudioAnimation15++%i.NORMALIZATION_HISTORY_LENGTH;this.$LiveAudioAnimation14[l]=k;if(this.$LiveAudioAnimation15<i.NORMALIZATION_HISTORY_LENGTH)return k;var m=this.$LiveAudioAnimation28(this.$LiveAudioAnimation14),n=.5/m,o=Math.min(k*n,1);return o*i.NORMALIZATION_FACTOR+k*(1-i.NORMALIZATION_FACTOR)};i.prototype.$LiveAudioAnimation28=function(k,l){"use strict";__p&&__p();var m=0,n=0;for(var o=k,p=Array.isArray(o),q=0,o=p?o:o[typeof Symbol==="function"?Symbol.iterator:"@@iterator"]();;){var r;if(p){if(q>=o.length)break;r=o[q++]}else{q=o.next();if(q.done)break;r=q.value}var s=r;m+=s;n++;if(l&&n==l)break}if(n===0)return 0;return m/n};i.prototype.$LiveAudioAnimation26=function(){"use strict";if(this.$LiveAudioAnimation13.length<1)return;var k=this.$LiveAudioAnimation13[0].canvas;this.$LiveAudioAnimation4=k.width;this.$LiveAudioAnimation5=k.height};i.FFT_SIZE=32;i.MAX_BYTE_VALUE=255;i.BINS_TO_USE_FOR_DB_AVERAGE=10;i.NORMALIZATION_HISTORY_LENGTH=c("LiveAudioAnimationConfig").NORMALIZATION_CONFIG.NORMALIZATION_HISTORY_LENGTH;i.NORMALIZATION_FACTOR=c("LiveAudioAnimationConfig").NORMALIZATION_CONFIG.NORMALIZATION_FACTOR;i.HUMP_COUNT=c("LiveAudioAnimationConfig").ANIMATION_CONFIG.HUMP_COUNT;i.MIN_SPEED=c("LiveAudioAnimationConfig").ANIMATION_CONFIG.MIN_SPEED;i.MAX_SPEED=c("LiveAudioAnimationConfig").ANIMATION_CONFIG.MAX_SPEED;i.NOISE_FLOOR=c("LiveAudioAnimationConfig").ANIMATION_CONFIG.NOISE_FLOOR;i.MINIMUM_ANIMATION_LEVEL=c("LiveAudioAnimationConfig").ANIMATION_CONFIG.MINIMUM_ANIMATION_LEVEL;i.FILL_COLOR=c("LiveAudioAnimationConfig").ANIMATION_CONFIG.FILL_COLOR;i.MINIMUM_WIDTH_FACTOR=c("LiveAudioAnimationConfig").ANIMATION_CONFIG.MINIMUM_WIDTH_FACTOR;i.WIDTH_FACTOR_MULTIPLIER=c("LiveAudioAnimationConfig").ANIMATION_CONFIG.WIDTH_FACTOR_MULTIPLIER;i.REFRESH_THRESHOLD_PIXELS=c("LiveAudioAnimationConfig").ANIMATION_CONFIG.REFRESH_THRESHOLD_PIXELS;i.RANDOM_MIN_AMPLITUDE=c("LiveAudioAnimationConfig").ANIMATION_CONFIG.RANDOM_MIN_AMPLITUDE;i.RANDOM_MAX_AMPLITUDE=c("LiveAudioAnimationConfig").ANIMATION_CONFIG.RANDOM_MAX_AMPLITUDE;i.ANCHOR_POINT_X_VALUES=[-3,-2,-1,-.5,-.25,-.1,-.05,0,.05,.1,.25,.5,1,2,3];function j(k,l){"use strict";this.isAnimating=k;this.canvas=l}f.exports=i}),null);
__d("WorkReauth",[],(function a(b,c,d,e,f,g){var h={closeDialog:function i(){window.close()}};f.exports=h}),null);