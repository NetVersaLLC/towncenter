/**
 * Adobe Edge: symbol definitions
 */
(function($, Edge, compId){
//images folder
var im='images/';

var fonts = {};


var resources = [
];
var symbols = {
"stage": {
   version: "1.5.0",
   minimumCompatibleVersion: "1.5.0",
   build: "1.5.0.217",
   baseState: "Base State",
   initialState: "Base State",
   gpuAccelerate: false,
   resizeInstances: false,
   content: {
         dom: [
         {
            id:'main-feature-image',
            type:'image',
            rect:['0px','0px','1020px','535px','auto','auto'],
            fill:["rgba(0,0,0,0)",im+"main-feature-image.png",'0px','0px']
         },
         {
            id:'stroke-outline',
            type:'image',
            rect:['0px','0px','1020px','535px','auto','auto'],
            fill:["rgba(0,0,0,0)",im+"stroke-outline.png",'0px','0px']
         },
         {
            id:'world',
            type:'image',
            rect:['325px','189px','370px','295px','auto','auto'],
            fill:["rgba(0,0,0,0)",im+"world.png",'0px','0px']
         },
         {
            id:'logo-guides',
            type:'image',
            rect:['16px','-19px','1020px','535px','auto','auto'],
            opacity:1,
            fill:["rgba(0,0,0,0)",im+"logo-guides.png",'0px','0px'],
            transform:[]
         },
         {
            id:'tc-logo-glow',
            type:'image',
            rect:['390px','88px','240px','191px','auto','auto'],
            fill:["rgba(0,0,0,0)",im+"tc-logo-glow.png",'0px','0px']
         },
         {
            id:'tc-logo',
            type:'image',
            rect:['390px','88px','240px','191px','auto','auto'],
            fill:["rgba(0,0,0,0)",im+"tc-logo.png",'0px','0px']
         },
         {
            id:'google',
            type:'image',
            rect:['281px','96px','136px','93px','auto','auto'],
            fill:["rgba(0,0,0,0)",im+"google.png",'0px','0px']
         },
         {
            id:'facebook',
            type:'image',
            rect:['619px','41px','140px','93px','auto','auto'],
            fill:["rgba(0,0,0,0)",im+"facebook.png",'0px','0px']
         },
         {
            id:'twitter',
            type:'image',
            rect:['778px','112px','140px','93px','auto','auto'],
            fill:["rgba(0,0,0,0)",im+"twitter.png",'0px','0px']
         },
         {
            id:'linkedin',
            type:'image',
            rect:['84px','385px','140px','93px','auto','auto'],
            fill:["rgba(0,0,0,0)",im+"linkedin.png",'0px','0px']
         },
         {
            id:'yelp',
            type:'image',
            rect:['199px','287px','140px','93px','auto','auto'],
            fill:["rgba(0,0,0,0)",im+"yelp.png",'0px','0px']
         },
         {
            id:'yahoo',
            type:'image',
            rect:['736px','362px','140px','93px','auto','auto'],
            fill:["rgba(0,0,0,0)",im+"yahoo.png",'0px','0px']
         },
         {
            id:'Text',
            type:'text',
            rect:['58px','33px','590px','55px','auto','auto'],
            opacity:1,
            text:"Save hours updating. Control all of your online business-listings from one-central point.",
            font:['Arial, Helvetica, sans-serif',25,"rgba(0,0,0,1)","700","none",""]
         },
         {
            id:'update-over-45',
            type:'image',
            rect:['678px','261px','273px','76px','auto','auto'],
            fill:["rgba(0,0,0,0)",im+"update-over-45.png",'0px','0px'],
            transform:[]
         },
         {
            id:'_1-in-5-searches',
            type:'image',
            rect:['73px','208px','328px','82px','auto','auto'],
            fill:["rgba(0,0,0,0)",im+"1-in-5-searches.png",'0px','0px']
         },
         {
            id:'manage-presence',
            type:'image',
            rect:['341px','390px','261px','73px','auto','auto'],
            fill:["rgba(0,0,0,0)",im+"manage-presence.png",'0px','0px']
         }],
         symbolInstances: [

         ]
      },
   states: {
      "Base State": {
         "${_yelp}": [
            ["style", "left", '201px'],
            ["style", "top", '-185px']
         ],
         "${_main-feature-image}": [
            ["style", "top", '0px'],
            ["style", "opacity", '0'],
            ["style", "left", '0px']
         ],
         "${_manage-presence}": [
            ["style", "top", '541px'],
            ["style", "left", '379px']
         ],
         "${_google}": [
            ["style", "top", '-95px'],
            ["style", "left", '281px']
         ],
         "${_tc-logo}": [
            ["style", "top", '-199px'],
            ["style", "height", '191px'],
            ["style", "left", '390px'],
            ["style", "width", '240px']
         ],
         "${_logo-guides}": [
            ["style", "top", '-19px'],
            ["transform", "scaleY", '1'],
            ["transform", "scaleX", '1'],
            ["style", "opacity", '0'],
            ["style", "left", '16px']
         ],
         "${_update-over-45}": [
            ["style", "top", '535px'],
            ["transform", "scaleY", '1'],
            ["style", "-webkit-transform-origin", [50,50], {valueTemplate:'@@0@@% @@1@@%'} ],
            ["style", "-moz-transform-origin", [50,50],{valueTemplate:'@@0@@% @@1@@%'}],
            ["style", "-ms-transform-origin", [50,50],{valueTemplate:'@@0@@% @@1@@%'}],
            ["style", "msTransformOrigin", [50,50],{valueTemplate:'@@0@@% @@1@@%'}],
            ["style", "-o-transform-origin", [50,50],{valueTemplate:'@@0@@% @@1@@%'}],
            ["transform", "scaleX", '1'],
            ["style", "left", '357px']
         ],
         "${_stroke-outline}": [
            ["style", "top", '0px'],
            ["style", "opacity", '0'],
            ["style", "left", '0px']
         ],
         "${_yahoo}": [
            ["style", "left", '737px'],
            ["style", "top", '-110px']
         ],
         "${_twitter}": [
            ["style", "left", '778px'],
            ["style", "top", '-95px']
         ],
         "${__1-in-5-searches}": [
            ["style", "left", '379px'],
            ["style", "top", '535px']
         ],
         "${_tc-logo-glow}": [
            ["style", "top", '88px'],
            ["style", "opacity", '0'],
            ["style", "left", '390px']
         ],
         "${_facebook}": [
            ["style", "left", '616px'],
            ["style", "top", '-150px']
         ],
         "${_linkedin}": [
            ["style", "left", '82px'],
            ["style", "top", '-92px']
         ],
         "${_Stage}": [
            ["color", "background-color", 'rgba(255,255,255,1)'],
            ["style", "overflow", 'hidden'],
            ["style", "height", '535px'],
            ["style", "width", '1020px']
         ],
         "${_Text}": [
            ["style", "line-height", '24px'],
            ["style", "opacity", '0'],
            ["style", "width", '590px'],
            ["style", "top", '33px'],
            ["style", "height", '55px'],
            ["style", "font-weight", '700'],
            ["style", "left", '58px'],
            ["style", "font-size", '25px']
         ],
         "${_world}": [
            ["style", "top", '516px'],
            ["transform", "rotateZ", '492deg'],
            ["style", "height", '617px'],
            ["style", "left", '156px'],
            ["style", "width", '774px']
         ]
      }
   },
   timelines: {
      "Default Timeline": {
         fromState: "Base State",
         toState: "",
         duration: 7750,
         autoPlay: true,
         timeline: [
            { id: "eid104", tween: [ "style", "${_facebook}", "top", '50px', { fromValue: '-150px'}], position: 4750, duration: 1500, easing: "easeOutBounce" },
            { id: "eid113", tween: [ "style", "${_google}", "left", '280px', { fromValue: '281px'}], position: 5500, duration: 1500, easing: "easeOutBounce" },
            { id: "eid16", tween: [ "style", "${_tc-logo}", "left", '390px', { fromValue: '390px'}], position: 4500, duration: 0 },
            { id: "eid12", tween: [ "style", "${_world}", "height", '295px', { fromValue: '617px'}], position: 1250, duration: 2000, easing: "easeOutBack" },
            { id: "eid103", tween: [ "style", "${_google}", "top", '96px', { fromValue: '-95px'}], position: 4000, duration: 1500, easing: "easeOutBounce" },
            { id: "eid114", tween: [ "style", "${_google}", "top", '88px', { fromValue: '96px'}], position: 5500, duration: 1500, easing: "easeOutBounce" },
            { id: "eid4", tween: [ "style", "${_stroke-outline}", "opacity", '1', { fromValue: '0'}], position: 0, duration: 1500 },
            { id: "eid165", tween: [ "style", "${_Text}", "opacity", '1', { fromValue: '0'}], position: 5750, duration: 1750, easing: "easeOutBack" },
            { id: "eid174", tween: [ "transform", "${_world}", "rotateZ", '0deg', { fromValue: '492deg'}], position: 1250, duration: 2000, easing: "easeOutBack" },
            { id: "eid124", tween: [ "style", "${_yahoo}", "left", '737px', { fromValue: '737px'}], position: 6500, duration: 0, easing: "easeOutBounce" },
            { id: "eid162", tween: [ "style", "${_manage-presence}", "left", '341px', { fromValue: '379px'}], position: 5000, duration: 2750, easing: "easeOutElastic" },
            { id: "eid118", tween: [ "style", "${_linkedin}", "left", '82px', { fromValue: '82px'}], position: 6250, duration: 0, easing: "easeOutBounce" },
            { id: "eid19", tween: [ "style", "${_tc-logo}", "height", '191px', { fromValue: '191px'}], position: 4500, duration: 0 },
            { id: "eid13", tween: [ "style", "${_world}", "width", '370px', { fromValue: '774px'}], position: 1250, duration: 2000, easing: "easeOutBack" },
            { id: "eid22", tween: [ "style", "${_tc-logo}", "top", '88px', { fromValue: '-199px'}], position: 3000, duration: 1500, easing: "easeOutBounce" },
            { id: "eid46", tween: [ "style", "${_tc-logo-glow}", "opacity", '1', { fromValue: '0'}], position: 4500, duration: 1000, easing: "easeOutBounce" },
            { id: "eid106", tween: [ "style", "${_facebook}", "left", '616px', { fromValue: '616px'}], position: 6250, duration: 0, easing: "easeOutBounce" },
            { id: "eid171", tween: [ "style", "${_logo-guides}", "opacity", '1', { fromValue: '0'}], position: 4250, duration: 500, easing: "easeOutBounce" },
            { id: "eid161", tween: [ "style", "${_manage-presence}", "top", '390px', { fromValue: '541px'}], position: 5000, duration: 2750, easing: "easeOutElastic" },
            { id: "eid160", tween: [ "style", "${__1-in-5-searches}", "left", '73px', { fromValue: '379px'}], position: 4500, duration: 2750, easing: "easeOutElastic" },
            { id: "eid3", tween: [ "style", "${_main-feature-image}", "opacity", '1', { fromValue: '0'}], position: 0, duration: 1500 },
            { id: "eid156", tween: [ "style", "${_update-over-45}", "top", '261px', { fromValue: '535px'}], position: 4750, duration: 2750, easing: "easeOutBack" },
            { id: "eid155", tween: [ "style", "${_update-over-45}", "left", '678px', { fromValue: '357px'}], position: 4750, duration: 2750, easing: "easeOutBack" },
            { id: "eid119", tween: [ "style", "${_yelp}", "top", '287px', { fromValue: '-185px'}], position: 5250, duration: 1500, easing: "easeOutBounce" },
            { id: "eid110", tween: [ "style", "${_linkedin}", "top", '380px', { fromValue: '-92px'}], position: 4750, duration: 1500, easing: "easeOutBounce" },
            { id: "eid10", tween: [ "style", "${_world}", "top", '189px', { fromValue: '516px'}], position: 1250, duration: 2000, easing: "easeOutBack" },
            { id: "eid18", tween: [ "style", "${_tc-logo}", "width", '240px', { fromValue: '240px'}], position: 4500, duration: 0 },
            { id: "eid109", tween: [ "style", "${_twitter}", "left", '778px', { fromValue: '778px'}], position: 6000, duration: 0, easing: "easeOutBounce" },
            { id: "eid121", tween: [ "style", "${_yelp}", "left", '201px', { fromValue: '201px'}], position: 6750, duration: 0, easing: "easeOutBounce" },
            { id: "eid159", tween: [ "style", "${__1-in-5-searches}", "top", '208px', { fromValue: '535px'}], position: 4500, duration: 2750, easing: "easeOutElastic" },
            { id: "eid107", tween: [ "style", "${_twitter}", "top", '112px', { fromValue: '-95px'}], position: 4500, duration: 1500, easing: "easeOutBounce" },
            { id: "eid122", tween: [ "style", "${_yahoo}", "top", '361px', { fromValue: '-110px'}], position: 5000, duration: 1500, easing: "easeOutBounce" },
            { id: "eid15", tween: [ "style", "${_world}", "left", '325px', { fromValue: '156px'}], position: 1250, duration: 2000, easing: "easeOutBack" }         ]
      }
   }
}
};


Edge.registerCompositionDefn(compId, symbols, fonts, resources);

/**
 * Adobe Edge DOM Ready Event Handler
 */
$(window).ready(function() {
     Edge.launchComposition(compId);
});
})(jQuery, AdobeEdge, "EDGE-97837172");
