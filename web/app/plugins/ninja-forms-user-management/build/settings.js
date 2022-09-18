(()=>{var e={703:(e,s,t)=>{"use strict";var n=t(414);function a(){}function i(){}i.resetWarningCache=a,e.exports=function(){function e(e,s,t,a,i,o){if(o!==n){var r=new Error("Calling PropTypes validators directly is not supported by the `prop-types` package. Use PropTypes.checkPropTypes() to call them. Read more at http://fb.me/use-check-prop-types");throw r.name="Invariant Violation",r}}function s(){return e}e.isRequired=e;var t={array:e,bool:e,func:e,number:e,object:e,string:e,symbol:e,any:e,arrayOf:s,element:e,elementType:e,instanceOf:s,node:e,objectOf:s,oneOf:s,oneOfType:s,shape:s,exact:s,checkPropTypes:i,resetWarningCache:a};return t.PropTypes=t,t}},697:(e,s,t)=>{e.exports=t(703)()},414:e=>{"use strict";e.exports="SECRET_DO_NOT_PASS_THIS_OR_YOU_WILL_BE_FIRED"}},s={};function t(n){var a=s[n];if(void 0!==a)return a.exports;var i=s[n]={exports:{}};return e[n](i,i.exports,t),i.exports}t.n=e=>{var s=e&&e.__esModule?()=>e.default:()=>e;return t.d(s,{a:s}),s},t.d=(e,s)=>{for(var n in s)t.o(s,n)&&!t.o(e,n)&&Object.defineProperty(e,n,{enumerable:!0,get:s[n]})},t.o=(e,s)=>Object.prototype.hasOwnProperty.call(e,s),(()=>{"use strict";const e=window.wp.domReady;var s=t.n(e);const n=window.wp.element,a=window.wp.i18n,i=window.wp.components;let o,r,m,l,_,u,c,d,p;"undefined"!=typeof nf_user_management_data&&(o=void 0!==nf_user_management_data.siteUrl?nf_user_management_data.siteUrl:"",r=void 0!==nf_user_management_data.adminUrl?nf_user_management_data.adminUrl:"",m=void 0!==nf_user_management_data.restUrl?nf_user_management_data.restUrl:"",l=void 0!==nf_user_management_data.ajaxUrl?nf_user_management_data.ajaxUrl:"",_=void 0!==nf_user_management_data.token?nf_user_management_data.token:"",u=void 0!==nf_user_management_data.settings?nf_user_management_data.settings:{},c=void 0!==nf_user_management_data.roles?nf_user_management_data.roles:{},d=void 0!==nf_user_management_data.roles_menu?nf_user_management_data.roles_menu:[],p=void 0!==nf_user_management_data.display_status?nf_user_management_data.display_status:[]),u=u.length>0?JSON.parse(u):{};const g=["view_own_submissions","view_others_submissions","edit_own_submissions","edit_others_submissions"];g.forEach((e=>{void 0===u[e]&&(u[e]=[])}));const f={siteUrl:o,adminUrl:r,restUrl:m,ajaxUrl:l,token:_,settings:u,roles:c,settings_types:g,roles_select_options_default_state:d,display_state:p},h=window.wp.apiFetch;var w=t.n(h),b=t(697),v=t.n(b);w().use(w().createNonceMiddleware(f.token));const E=async(e,s)=>{const{setIsSaving:t,setIsSaved:n,setIsError:a,setCurrentSettings:i}=s;await w()({url:f.restUrl.concat("nf-user-management/save-submissions-access-settings"),method:"POST",data:{settings:JSON.stringify(e)}}).then((s=>{s=JSON.parse(s),t(!1),s.status?(i(e),n(!0)):a(!0)})).catch((e=>{console.log("Deletion cancelled: "+e.message),t(!1),a(!0)}))};E.propTypes={settings:v().object,functions:v().func};const y=e=>{const{text:s}=e;return(0,n.createElement)("div",{className:"nf-processing"},(0,n.createElement)("div",{className:"nf-processing-content"},(0,n.createElement)("span",{className:"nf-processing-content-in"},(0,n.createElement)("h4",null,s&&(0,n.createElement)("span",{className:"nf-loading-text"},s)),(0,n.createElement)(i.Spinner,null))))};y.propTypes={text:v().string};const x=e=>{const{settings:s,roles_select_options_default_state:t,display_state:o}=e,[r,m]=(0,n.useState)(s),[l,_]=(0,n.useState)(!1),[u,c]=(0,n.useState)(!1),[d,p]=(0,n.useState)(!1),[g,h]=(0,n.useState)({state:!1,text:""}),[b,v]=(0,n.useState)(t),[x,j]=(0,n.useState)(o);(0,n.useEffect)((async()=>{const e=await(async()=>await w()({url:f.restUrl.concat("nf-user-management/get-submissions-access-settings-meta"),method:"GET"}).then((e=>e)).catch((e=>{console.log("Deletion cancelled: "+e.message)})))(),s=JSON.parse(e),t=s.select_options_status,n=s.display_settings_status;v(t),j(n)}),[u]);const N=(e,s,t)=>{h({state:!1,text:""}),c(!1),_(!0);const n=r[s]&&r[s].indexOf(e)>=0&&"add"===t,a=r[s]&&r[s].indexOf(e)<0&&"dismiss"===t;if(n)h({state:!0,text:"Role Already granted permission."}),_(!1);else if(a)h({state:!0,text:"Role Not Listed, cannot be dismissed."}),_(!1);else{let n=r;"add"===t?(n[s].push(e),n=U(n,e,s)):"dismiss"===t&&(n=U(n,e,s),n[s]&&n[s].splice(n[s].indexOf(e),1)),n&&T(n)}},T=async e=>{const s={setIsSaving:_,setIsSaved:c,setIsError:p,setCurrentSettings:m};await E(e,s)},U=(e,s,t)=>(t.startsWith("edit_")&&(t.endsWith("_own_submissions")&&r.view_own_submissions.indexOf(s)<0?(e.view_own_submissions.push(s),h({status:!0,text:(0,a.__)("This role was also added to View Own Submissions list.","ninja-forms-user-management")})):t.endsWith("_others_submissions")&&r.view_others_submissions.indexOf(s)<0&&(e.view_others_submissions.push(s),h({status:!0,text:(0,a.__)("This role was also added to View Others Submissions list.","ninja-forms-user-management")}))),t.endsWith("_others_submissions")&&(t.startsWith("view")&&r.view_own_submissions.indexOf(s)<0?(e.view_own_submissions.push(s),h({status:!0,text:(0,a.__)("This role was also added to View Own Submissions list.","ninja-forms-user-management")})):t.startsWith("edit")&&r.edit_own_submissions.indexOf(s)<0&&(e.edit_own_submissions.push(s),h({status:!0,text:(0,a.__)("This role was also added to View Others Submissions list.","ninja-forms-user-management")}))),e),C=(0,n.createElement)(n.Fragment,null,(0,n.createElement)(i.CardHeader,null,(0,n.createElement)("h3",null,(0,a.__)("Use these settings to configure users level of access to submissions.","ninja-forms-user-management"))),(0,n.createElement)(i.CardBody,null,(0,n.createElement)("div",{className:"nf-user-management-settings-actions-status"},g.status&&(0,n.createElement)(i.Notice,{status:"notice",isDismissible:"true",onDismiss:()=>h({state:!1,text:""}),children:g.text}),d&&(0,n.createElement)(i.Notice,{status:"error",isDismissible:"true",onDismiss:()=>p(!1),children:(0,a.__)("An error occured, please try again or refresh page.","ninja-form-user-management")}),u&&(0,n.createElement)(i.Notice,{status:"success",isDismissible:"true",onDismiss:()=>c(!1),children:(0,a.__)("Settings saved successfully","ninja-form-user-management")})),(0,n.createElement)("h3",null,(0,a.__)("View submissions","ninja-forms-user-management")),(0,n.createElement)(i.Flex,{align:"flex-start"},(0,n.createElement)(i.FlexBlock,null,(0,n.createElement)("h4",null,(0,a.__)("Owner","ninja-forms-user-management")),(0,n.createElement)(O,{type:"view_own_submissions",options:b.view_own_submissions,action:N}),(0,n.createElement)(S,{type:"view_own_submissions",settings:x.view_own_submissions,action:N}),r.view_own_submissions&&r.view_own_submissions.length>0&&(0,n.createElement)("p",null,(0,a.__)("Can view own submissions","ninja-forms-user-management"))),(0,n.createElement)(i.FlexBlock,null,(0,n.createElement)("h4",null,(0,a.__)("Others","ninja-forms-user-managemen")),(0,n.createElement)(O,{type:"view_others_submissions",options:b.view_others_submissions,action:N}),(0,n.createElement)(S,{type:"view_others_submissions",settings:x.view_others_submissions,action:N}),r.view_others_submissions&&r.view_others_submissions.length>0&&(0,n.createElement)("p",null,(0,a.__)("Can view others submissions","ninja-forms-user-management")))),(0,n.createElement)("hr",null),(0,n.createElement)("h3",null,(0,a.__)("Edit submissions","ninja-forms-user-management")),(0,n.createElement)(i.Flex,{align:"flex-start"},(0,n.createElement)(i.FlexBlock,null,(0,n.createElement)("h4",null,(0,a.__)("Owner","ninja-forms-user-managemen")),(0,n.createElement)(O,{type:"edit_own_submissions",options:b.edit_own_submissions,action:N}),(0,n.createElement)(S,{type:"edit_own_submissions",settings:x.edit_own_submissions,action:N}),r.edit_own_submissions&&r.edit_own_submissions.length>0&&(0,n.createElement)("p",null,(0,a.__)("Can edit own submissions","ninja-forms-user-management"))),(0,n.createElement)(i.FlexBlock,null,(0,n.createElement)("h4",null,(0,a.__)("Others","ninja-forms-user-managemen")),(0,n.createElement)(O,{type:"edit_others_submissions",options:b.edit_others_submissions,action:N}),(0,n.createElement)(S,{type:"edit_others_submissions",settings:x.edit_others_submissions,action:N}),r.edit_others_submissions&&r.edit_others_submissions.length>0&&(0,n.createElement)("p",null,(0,a.__)("Can edit others submissions","ninja-forms-user-management"))))));return(0,n.createElement)(i.Card,{className:"widget"},l&&(0,n.createElement)(y,{text:(0,a.__)("Saving settings","ninja-form-user-management")}),l?(0,n.createElement)(i.Disabled,{className:"nf-is-saving"},C):C)},O=e=>{const{type:s,action:t,options:a}=e;return(0,n.createElement)(i.SelectControl,{options:a,onChange:e=>{t(e,s,"add")}})};O.propTypes={type:v().string,action:v().func,options:v().array};const S=e=>{const{type:s,settings:t,action:a}=e;return(0,n.createElement)(n.Fragment,null,t.map((e=>(0,n.createElement)("span",{className:"nf-user-access-role-element",key:e.value},(0,n.createElement)(i.Button,{className:"nf-dismiss-role-access-icon",icon:"dismiss",iconSize:12,onClick:()=>a(e.value,s,"dismiss"),disabled:e.disabled}),e.label))))};S.propTypes={type:v().string,action:v().func,settings:v().array},s()((()=>{j.observe(document.getElementById("ninja-forms-dashboard"),{subtree:!0,childList:!0})}));const j=new MutationObserver((function(e){e.forEach((e=>{e.addedNodes.forEach((e=>{"nf-user-access-settings-anchor"==e.id&&N()}))}))})),N=()=>{(0,n.render)((0,n.createElement)(x,f),document.getElementById("nf-user-access-settings-anchor"))}})()})();