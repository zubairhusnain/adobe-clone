(function(){"use strict";/**
 * @license
 * Copyright 2019 Google LLC
 * SPDX-License-Identifier: BSD-3-Clause
 */var Ms,Rs;const Ft=globalThis,Wt=Ft.ShadowRoot&&(Ft.ShadyCSS===void 0||Ft.ShadyCSS.nativeShadow)&&"adoptedStyleSheets"in Document.prototype&&"replace"in CSSStyleSheet.prototype,Yt=Symbol(),ke=new WeakMap;let Be=class{constructor(t,s,i){if(this._$cssResult$=!0,i!==Yt)throw Error("CSSResult is not constructable. Use `unsafeCSS` or `css` instead.");this.cssText=t,this.t=s}get styleSheet(){let t=this.o;const s=this.t;if(Wt&&t===void 0){const i=s!==void 0&&s.length===1;i&&(t=ke.get(s)),t===void 0&&((this.o=t=new CSSStyleSheet).replaceSync(this.cssText),i&&ke.set(s,t))}return t}toString(){return this.cssText}};const Hs=e=>new Be(typeof e=="string"?e:e+"",void 0,Yt),B=(e,...t)=>{const s=e.length===1?e[0]:t.reduce((i,o,r)=>i+(n=>{if(n._$cssResult$===!0)return n.cssText;if(typeof n=="number")return n;throw Error("Value passed to 'css' function must be a 'css' function result: "+n+". Use 'unsafeCSS' to pass non-literal values, but take care to ensure page security.")})(o)+e[r+1],e[0]);return new Be(s,e,Yt)},Os=(e,t)=>{if(Wt)e.adoptedStyleSheets=t.map(s=>s instanceof CSSStyleSheet?s:s.styleSheet);else for(const s of t){const i=document.createElement("style"),o=Ft.litNonce;o!==void 0&&i.setAttribute("nonce",o),i.textContent=s.cssText,e.appendChild(i)}},Le=Wt?e=>e:e=>e instanceof CSSStyleSheet?(t=>{let s="";for(const i of t.cssRules)s+=i.cssText;return Hs(s)})(e):e;/**
 * @license
 * Copyright 2017 Google LLC
 * SPDX-License-Identifier: BSD-3-Clause
 */const{is:Is,defineProperty:Fs,getOwnPropertyDescriptor:Ns,getOwnPropertyNames:Ds,getOwnPropertySymbols:Us,getPrototypeOf:zs}=Object,Q=globalThis,Pe=Q.trustedTypes,Gs=Pe?Pe.emptyScript:"",Jt=Q.reactiveElementPolyfillSupport,Ct=(e,t)=>e,Nt={toAttribute(e,t){switch(t){case Boolean:e=e?Gs:null;break;case Object:case Array:e=e==null?e:JSON.stringify(e)}return e},fromAttribute(e,t){let s=e;switch(t){case Boolean:s=e!==null;break;case Number:s=e===null?null:Number(e);break;case Object:case Array:try{s=JSON.parse(e)}catch{s=null}}return s}},Kt=(e,t)=>!Is(e,t),Me={attribute:!0,type:String,converter:Nt,reflect:!1,hasChanged:Kt};Symbol.metadata??(Symbol.metadata=Symbol("metadata")),Q.litPropertyMetadata??(Q.litPropertyMetadata=new WeakMap);class bt extends HTMLElement{static addInitializer(t){this._$Ei(),(this.l??(this.l=[])).push(t)}static get observedAttributes(){return this.finalize(),this._$Eh&&[...this._$Eh.keys()]}static createProperty(t,s=Me){if(s.state&&(s.attribute=!1),this._$Ei(),this.elementProperties.set(t,s),!s.noAccessor){const i=Symbol(),o=this.getPropertyDescriptor(t,i,s);o!==void 0&&Fs(this.prototype,t,o)}}static getPropertyDescriptor(t,s,i){const{get:o,set:r}=Ns(this.prototype,t)??{get(){return this[s]},set(n){this[s]=n}};return{get(){return o==null?void 0:o.call(this)},set(n){const a=o==null?void 0:o.call(this);r.call(this,n),this.requestUpdate(t,a,i)},configurable:!0,enumerable:!0}}static getPropertyOptions(t){return this.elementProperties.get(t)??Me}static _$Ei(){if(this.hasOwnProperty(Ct("elementProperties")))return;const t=zs(this);t.finalize(),t.l!==void 0&&(this.l=[...t.l]),this.elementProperties=new Map(t.elementProperties)}static finalize(){if(this.hasOwnProperty(Ct("finalized")))return;if(this.finalized=!0,this._$Ei(),this.hasOwnProperty(Ct("properties"))){const s=this.properties,i=[...Ds(s),...Us(s)];for(const o of i)this.createProperty(o,s[o])}const t=this[Symbol.metadata];if(t!==null){const s=litPropertyMetadata.get(t);if(s!==void 0)for(const[i,o]of s)this.elementProperties.set(i,o)}this._$Eh=new Map;for(const[s,i]of this.elementProperties){const o=this._$Eu(s,i);o!==void 0&&this._$Eh.set(o,s)}this.elementStyles=this.finalizeStyles(this.styles)}static finalizeStyles(t){const s=[];if(Array.isArray(t)){const i=new Set(t.flat(1/0).reverse());for(const o of i)s.unshift(Le(o))}else t!==void 0&&s.push(Le(t));return s}static _$Eu(t,s){const i=s.attribute;return i===!1?void 0:typeof i=="string"?i:typeof t=="string"?t.toLowerCase():void 0}constructor(){super(),this._$Ep=void 0,this.isUpdatePending=!1,this.hasUpdated=!1,this._$Em=null,this._$Ev()}_$Ev(){var t;this._$ES=new Promise(s=>this.enableUpdating=s),this._$AL=new Map,this._$E_(),this.requestUpdate(),(t=this.constructor.l)==null||t.forEach(s=>s(this))}addController(t){var s;(this._$EO??(this._$EO=new Set)).add(t),this.renderRoot!==void 0&&this.isConnected&&((s=t.hostConnected)==null||s.call(t))}removeController(t){var s;(s=this._$EO)==null||s.delete(t)}_$E_(){const t=new Map,s=this.constructor.elementProperties;for(const i of s.keys())this.hasOwnProperty(i)&&(t.set(i,this[i]),delete this[i]);t.size>0&&(this._$Ep=t)}createRenderRoot(){const t=this.shadowRoot??this.attachShadow(this.constructor.shadowRootOptions);return Os(t,this.constructor.elementStyles),t}connectedCallback(){var t;this.renderRoot??(this.renderRoot=this.createRenderRoot()),this.enableUpdating(!0),(t=this._$EO)==null||t.forEach(s=>{var i;return(i=s.hostConnected)==null?void 0:i.call(s)})}enableUpdating(t){}disconnectedCallback(){var t;(t=this._$EO)==null||t.forEach(s=>{var i;return(i=s.hostDisconnected)==null?void 0:i.call(s)})}attributeChangedCallback(t,s,i){this._$AK(t,i)}_$EC(t,s){var r;const i=this.constructor.elementProperties.get(t),o=this.constructor._$Eu(t,i);if(o!==void 0&&i.reflect===!0){const n=(((r=i.converter)==null?void 0:r.toAttribute)!==void 0?i.converter:Nt).toAttribute(s,i.type);this._$Em=t,n==null?this.removeAttribute(o):this.setAttribute(o,n),this._$Em=null}}_$AK(t,s){var r;const i=this.constructor,o=i._$Eh.get(t);if(o!==void 0&&this._$Em!==o){const n=i.getPropertyOptions(o),a=typeof n.converter=="function"?{fromAttribute:n.converter}:((r=n.converter)==null?void 0:r.fromAttribute)!==void 0?n.converter:Nt;this._$Em=o,this[o]=a.fromAttribute(s,n.type),this._$Em=null}}requestUpdate(t,s,i){if(t!==void 0){if(i??(i=this.constructor.getPropertyOptions(t)),!(i.hasChanged??Kt)(this[t],s))return;this.P(t,s,i)}this.isUpdatePending===!1&&(this._$ES=this._$ET())}P(t,s,i){this._$AL.has(t)||this._$AL.set(t,s),i.reflect===!0&&this._$Em!==t&&(this._$Ej??(this._$Ej=new Set)).add(t)}async _$ET(){this.isUpdatePending=!0;try{await this._$ES}catch(s){Promise.reject(s)}const t=this.scheduleUpdate();return t!=null&&await t,!this.isUpdatePending}scheduleUpdate(){return this.performUpdate()}performUpdate(){var i;if(!this.isUpdatePending)return;if(!this.hasUpdated){if(this.renderRoot??(this.renderRoot=this.createRenderRoot()),this._$Ep){for(const[r,n]of this._$Ep)this[r]=n;this._$Ep=void 0}const o=this.constructor.elementProperties;if(o.size>0)for(const[r,n]of o)n.wrapped!==!0||this._$AL.has(r)||this[r]===void 0||this.P(r,this[r],n)}let t=!1;const s=this._$AL;try{t=this.shouldUpdate(s),t?(this.willUpdate(s),(i=this._$EO)==null||i.forEach(o=>{var r;return(r=o.hostUpdate)==null?void 0:r.call(o)}),this.update(s)):this._$EU()}catch(o){throw t=!1,this._$EU(),o}t&&this._$AE(s)}willUpdate(t){}_$AE(t){var s;(s=this._$EO)==null||s.forEach(i=>{var o;return(o=i.hostUpdated)==null?void 0:o.call(i)}),this.hasUpdated||(this.hasUpdated=!0,this.firstUpdated(t)),this.updated(t)}_$EU(){this._$AL=new Map,this.isUpdatePending=!1}get updateComplete(){return this.getUpdateComplete()}getUpdateComplete(){return this._$ES}shouldUpdate(t){return!0}update(t){this._$Ej&&(this._$Ej=this._$Ej.forEach(s=>this._$EC(s,this[s]))),this._$EU()}updated(t){}firstUpdated(t){}}bt.elementStyles=[],bt.shadowRootOptions={mode:"open"},bt[Ct("elementProperties")]=new Map,bt[Ct("finalized")]=new Map,Jt==null||Jt({ReactiveElement:bt}),(Q.reactiveElementVersions??(Q.reactiveElementVersions=[])).push("2.0.4");/**
 * @license
 * Copyright 2017 Google LLC
 * SPDX-License-Identifier: BSD-3-Clause
 */const St=globalThis,Dt=St.trustedTypes,Re=Dt?Dt.createPolicy("lit-html",{createHTML:e=>e}):void 0,He="$lit$",tt=`lit$${Math.random().toFixed(9).slice(2)}$`,Oe="?"+tt,Vs=`<${Oe}>`,ht=document,At=()=>ht.createComment(""),$t=e=>e===null||typeof e!="object"&&typeof e!="function",Qt=Array.isArray,js=e=>Qt(e)||typeof(e==null?void 0:e[Symbol.iterator])=="function",te=`[ 	
\f\r]`,Tt=/<(?:(!--|\/[^a-zA-Z])|(\/?[a-zA-Z][^>\s]*)|(\/?$))/g,Ie=/-->/g,Fe=/>/g,ct=RegExp(`>|${te}(?:([^\\s"'>=/]+)(${te}*=${te}*(?:[^ 	
\f\r"'\`<>=]|("|')|))|$)`,"g"),Ne=/'/g,De=/"/g,Ue=/^(?:script|style|textarea|title)$/i,qs=e=>(t,...s)=>({_$litType$:e,strings:t,values:s}),b=qs(1),et=Symbol.for("lit-noChange"),A=Symbol.for("lit-nothing"),ze=new WeakMap,ut=ht.createTreeWalker(ht,129);function Ge(e,t){if(!Qt(e)||!e.hasOwnProperty("raw"))throw Error("invalid template strings array");return Re!==void 0?Re.createHTML(t):t}const Xs=(e,t)=>{const s=e.length-1,i=[];let o,r=t===2?"<svg>":t===3?"<math>":"",n=Tt;for(let a=0;a<s;a++){const l=e[a];let c,h,u=-1,f=0;for(;f<l.length&&(n.lastIndex=f,h=n.exec(l),h!==null);)f=n.lastIndex,n===Tt?h[1]==="!--"?n=Ie:h[1]!==void 0?n=Fe:h[2]!==void 0?(Ue.test(h[2])&&(o=RegExp("</"+h[2],"g")),n=ct):h[3]!==void 0&&(n=ct):n===ct?h[0]===">"?(n=o??Tt,u=-1):h[1]===void 0?u=-2:(u=n.lastIndex-h[2].length,c=h[1],n=h[3]===void 0?ct:h[3]==='"'?De:Ne):n===De||n===Ne?n=ct:n===Ie||n===Fe?n=Tt:(n=ct,o=void 0);const v=n===ct&&e[a+1].startsWith("/>")?" ":"";r+=n===Tt?l+Vs:u>=0?(i.push(c),l.slice(0,u)+He+l.slice(u)+tt+v):l+tt+(u===-2?a:v)}return[Ge(e,r+(e[s]||"<?>")+(t===2?"</svg>":t===3?"</math>":"")),i]};class kt{constructor({strings:t,_$litType$:s},i){let o;this.parts=[];let r=0,n=0;const a=t.length-1,l=this.parts,[c,h]=Xs(t,s);if(this.el=kt.createElement(c,i),ut.currentNode=this.el.content,s===2||s===3){const u=this.el.content.firstChild;u.replaceWith(...u.childNodes)}for(;(o=ut.nextNode())!==null&&l.length<a;){if(o.nodeType===1){if(o.hasAttributes())for(const u of o.getAttributeNames())if(u.endsWith(He)){const f=h[n++],v=o.getAttribute(u).split(tt),E=/([.?@])?(.*)/.exec(f);l.push({type:1,index:r,name:E[2],strings:v,ctor:E[1]==="."?Ws:E[1]==="?"?Ys:E[1]==="@"?Js:Ut}),o.removeAttribute(u)}else u.startsWith(tt)&&(l.push({type:6,index:r}),o.removeAttribute(u));if(Ue.test(o.tagName)){const u=o.textContent.split(tt),f=u.length-1;if(f>0){o.textContent=Dt?Dt.emptyScript:"";for(let v=0;v<f;v++)o.append(u[v],At()),ut.nextNode(),l.push({type:2,index:++r});o.append(u[f],At())}}}else if(o.nodeType===8)if(o.data===Oe)l.push({type:2,index:r});else{let u=-1;for(;(u=o.data.indexOf(tt,u+1))!==-1;)l.push({type:7,index:r}),u+=tt.length-1}r++}}static createElement(t,s){const i=ht.createElement("template");return i.innerHTML=t,i}}function gt(e,t,s=e,i){var n,a;if(t===et)return t;let o=i!==void 0?(n=s.o)==null?void 0:n[i]:s.l;const r=$t(t)?void 0:t._$litDirective$;return(o==null?void 0:o.constructor)!==r&&((a=o==null?void 0:o._$AO)==null||a.call(o,!1),r===void 0?o=void 0:(o=new r(e),o._$AT(e,s,i)),i!==void 0?(s.o??(s.o=[]))[i]=o:s.l=o),o!==void 0&&(t=gt(e,o._$AS(e,t.values),o,i)),t}class Zs{constructor(t,s){this._$AV=[],this._$AN=void 0,this._$AD=t,this._$AM=s}get parentNode(){return this._$AM.parentNode}get _$AU(){return this._$AM._$AU}u(t){const{el:{content:s},parts:i}=this._$AD,o=((t==null?void 0:t.creationScope)??ht).importNode(s,!0);ut.currentNode=o;let r=ut.nextNode(),n=0,a=0,l=i[0];for(;l!==void 0;){if(n===l.index){let c;l.type===2?c=new Bt(r,r.nextSibling,this,t):l.type===1?c=new l.ctor(r,l.name,l.strings,this,t):l.type===6&&(c=new Ks(r,this,t)),this._$AV.push(c),l=i[++a]}n!==(l==null?void 0:l.index)&&(r=ut.nextNode(),n++)}return ut.currentNode=ht,o}p(t){let s=0;for(const i of this._$AV)i!==void 0&&(i.strings!==void 0?(i._$AI(t,i,s),s+=i.strings.length-2):i._$AI(t[s])),s++}}class Bt{get _$AU(){var t;return((t=this._$AM)==null?void 0:t._$AU)??this.v}constructor(t,s,i,o){this.type=2,this._$AH=A,this._$AN=void 0,this._$AA=t,this._$AB=s,this._$AM=i,this.options=o,this.v=(o==null?void 0:o.isConnected)??!0}get parentNode(){let t=this._$AA.parentNode;const s=this._$AM;return s!==void 0&&(t==null?void 0:t.nodeType)===11&&(t=s.parentNode),t}get startNode(){return this._$AA}get endNode(){return this._$AB}_$AI(t,s=this){t=gt(this,t,s),$t(t)?t===A||t==null||t===""?(this._$AH!==A&&this._$AR(),this._$AH=A):t!==this._$AH&&t!==et&&this._(t):t._$litType$!==void 0?this.$(t):t.nodeType!==void 0?this.T(t):js(t)?this.k(t):this._(t)}O(t){return this._$AA.parentNode.insertBefore(t,this._$AB)}T(t){this._$AH!==t&&(this._$AR(),this._$AH=this.O(t))}_(t){this._$AH!==A&&$t(this._$AH)?this._$AA.nextSibling.data=t:this.T(ht.createTextNode(t)),this._$AH=t}$(t){var r;const{values:s,_$litType$:i}=t,o=typeof i=="number"?this._$AC(t):(i.el===void 0&&(i.el=kt.createElement(Ge(i.h,i.h[0]),this.options)),i);if(((r=this._$AH)==null?void 0:r._$AD)===o)this._$AH.p(s);else{const n=new Zs(o,this),a=n.u(this.options);n.p(s),this.T(a),this._$AH=n}}_$AC(t){let s=ze.get(t.strings);return s===void 0&&ze.set(t.strings,s=new kt(t)),s}k(t){Qt(this._$AH)||(this._$AH=[],this._$AR());const s=this._$AH;let i,o=0;for(const r of t)o===s.length?s.push(i=new Bt(this.O(At()),this.O(At()),this,this.options)):i=s[o],i._$AI(r),o++;o<s.length&&(this._$AR(i&&i._$AB.nextSibling,o),s.length=o)}_$AR(t=this._$AA.nextSibling,s){var i;for((i=this._$AP)==null?void 0:i.call(this,!1,!0,s);t&&t!==this._$AB;){const o=t.nextSibling;t.remove(),t=o}}setConnected(t){var s;this._$AM===void 0&&(this.v=t,(s=this._$AP)==null||s.call(this,t))}}class Ut{get tagName(){return this.element.tagName}get _$AU(){return this._$AM._$AU}constructor(t,s,i,o,r){this.type=1,this._$AH=A,this._$AN=void 0,this.element=t,this.name=s,this._$AM=o,this.options=r,i.length>2||i[0]!==""||i[1]!==""?(this._$AH=Array(i.length-1).fill(new String),this.strings=i):this._$AH=A}_$AI(t,s=this,i,o){const r=this.strings;let n=!1;if(r===void 0)t=gt(this,t,s,0),n=!$t(t)||t!==this._$AH&&t!==et,n&&(this._$AH=t);else{const a=t;let l,c;for(t=r[0],l=0;l<r.length-1;l++)c=gt(this,a[i+l],s,l),c===et&&(c=this._$AH[l]),n||(n=!$t(c)||c!==this._$AH[l]),c===A?t=A:t!==A&&(t+=(c??"")+r[l+1]),this._$AH[l]=c}n&&!o&&this.j(t)}j(t){t===A?this.element.removeAttribute(this.name):this.element.setAttribute(this.name,t??"")}}class Ws extends Ut{constructor(){super(...arguments),this.type=3}j(t){this.element[this.name]=t===A?void 0:t}}class Ys extends Ut{constructor(){super(...arguments),this.type=4}j(t){this.element.toggleAttribute(this.name,!!t&&t!==A)}}class Js extends Ut{constructor(t,s,i,o,r){super(t,s,i,o,r),this.type=5}_$AI(t,s=this){if((t=gt(this,t,s,0)??A)===et)return;const i=this._$AH,o=t===A&&i!==A||t.capture!==i.capture||t.once!==i.once||t.passive!==i.passive,r=t!==A&&(i===A||o);o&&this.element.removeEventListener(this.name,this,i),r&&this.element.addEventListener(this.name,this,t),this._$AH=t}handleEvent(t){var s;typeof this._$AH=="function"?this._$AH.call(((s=this.options)==null?void 0:s.host)??this.element,t):this._$AH.handleEvent(t)}}class Ks{constructor(t,s,i){this.element=t,this.type=6,this._$AN=void 0,this._$AM=s,this.options=i}get _$AU(){return this._$AM._$AU}_$AI(t){gt(this,t)}}const ee=St.litHtmlPolyfillSupport;ee==null||ee(kt,Bt),(St.litHtmlVersions??(St.litHtmlVersions=[])).push("3.2.0");const Qs=(e,t,s)=>{const i=(s==null?void 0:s.renderBefore)??t;let o=i._$litPart$;if(o===void 0){const r=(s==null?void 0:s.renderBefore)??null;i._$litPart$=o=new Bt(t.insertBefore(At(),r),r,void 0,s??{})}return o._$AI(e),o};/**
 * @license
 * Copyright 2017 Google LLC
 * SPDX-License-Identifier: BSD-3-Clause
 */class k extends bt{constructor(){super(...arguments),this.renderOptions={host:this},this.o=void 0}createRenderRoot(){var s;const t=super.createRenderRoot();return(s=this.renderOptions).renderBefore??(s.renderBefore=t.firstChild),t}update(t){const s=this.render();this.hasUpdated||(this.renderOptions.isConnected=this.isConnected),super.update(t),this.o=Qs(s,this.renderRoot,this.renderOptions)}connectedCallback(){var t;super.connectedCallback(),(t=this.o)==null||t.setConnected(!0)}disconnectedCallback(){var t;super.disconnectedCallback(),(t=this.o)==null||t.setConnected(!1)}render(){return et}}k._$litElement$=!0,k.finalized=!0,(Ms=globalThis.litElementHydrateSupport)==null||Ms.call(globalThis,{LitElement:k});const se=globalThis.litElementPolyfillSupport;se==null||se({LitElement:k}),(globalThis.litElementVersions??(globalThis.litElementVersions=[])).push("4.1.0");/**
 * @license
 * Copyright 2017 Google LLC
 * SPDX-License-Identifier: BSD-3-Clause
 */const D=e=>(t,s)=>{s!==void 0?s.addInitializer(()=>{customElements.define(e,t)}):customElements.define(e,t)};/**
 * @license
 * Copyright 2017 Google LLC
 * SPDX-License-Identifier: BSD-3-Clause
 */const ti={attribute:!0,type:String,converter:Nt,reflect:!1,hasChanged:Kt},ei=(e=ti,t,s)=>{const{kind:i,metadata:o}=s;let r=globalThis.litPropertyMetadata.get(o);if(r===void 0&&globalThis.litPropertyMetadata.set(o,r=new Map),r.set(s.name,e),i==="accessor"){const{name:n}=s;return{set(a){const l=t.get.call(this);t.set.call(this,a),this.requestUpdate(n,l,e)},init(a){return a!==void 0&&this.P(n,void 0,e),a}}}if(i==="setter"){const{name:n}=s;return function(a){const l=this[n];t.call(this,a),this.requestUpdate(n,l,e)}}throw Error("Unsupported decorator location: "+i)};function g(e){return(t,s)=>typeof s=="object"?ei(e,t,s):((i,o,r)=>{const n=o.hasOwnProperty(r);return o.constructor.createProperty(r,n?{...i,wrapped:!0}:i),n?Object.getOwnPropertyDescriptor(o,r):void 0})(e,t,s)}/**
 * @license
 * Copyright 2017 Google LLC
 * SPDX-License-Identifier: BSD-3-Clause
 */function $(e){return g({...e,state:!0,attribute:!1})}/**
 * @license
 * Copyright 2017 Google LLC
 * SPDX-License-Identifier: BSD-3-Clause
 */const ie={ATTRIBUTE:1,CHILD:2,PROPERTY:3,BOOLEAN_ATTRIBUTE:4,EVENT:5,ELEMENT:6},oe=e=>(...t)=>({_$litDirective$:e,values:t});let re=class{constructor(t){}get _$AU(){return this._$AM._$AU}_$AT(t,s,i){this.t=t,this._$AM=s,this.i=i}_$AS(t,s){return this.update(t,s)}update(t,s){return this.render(...s)}};/**
 * @license
 * Copyright 2017 Google LLC
 * SPDX-License-Identifier: BSD-3-Clause
 */class ne extends re{constructor(t){if(super(t),this.it=A,t.type!==ie.CHILD)throw Error(this.constructor.directiveName+"() can only be used in child bindings")}render(t){if(t===A||t==null)return this._t=void 0,this.it=t;if(t===et)return t;if(typeof t!="string")throw Error(this.constructor.directiveName+"() called with a non-string value");if(t===this.it)return this._t;this.it=t;const s=[t];return s.raw=s,this._t={_$litType$:this.constructor.resultType,strings:s,values:[]}}}ne.directiveName="unsafeHTML",ne.resultType=1;const si=oe(ne);/**
 * @license
 * Copyright 2021 Google LLC
 * SPDX-License-Identifier: BSD-3-Clause
 */let Ve=class extends Event{constructor(t,s,i){super("context-request",{bubbles:!0,composed:!0}),this.context=t,this.callback=s,this.subscribe=i??!1}};/**
 * @license
 * Copyright 2021 Google LLC
 * SPDX-License-Identifier: BSD-3-Clause
 */function rr(e){return e}/**
 * @license
 * Copyright 2021 Google LLC
 * SPDX-License-Identifier: BSD-3-Clause
 */let je=class{constructor(t,s,i,o){if(this.subscribe=!1,this.provided=!1,this.value=void 0,this.t=(r,n)=>{this.unsubscribe&&(this.unsubscribe!==n&&(this.provided=!1,this.unsubscribe()),this.subscribe||this.unsubscribe()),this.value=r,this.host.requestUpdate(),this.provided&&!this.subscribe||(this.provided=!0,this.callback&&this.callback(r,n)),this.unsubscribe=n},this.host=t,s.context!==void 0){const r=s;this.context=r.context,this.callback=r.callback,this.subscribe=r.subscribe??!1}else this.context=s,this.callback=i,this.subscribe=o??!1;this.host.addController(this)}hostConnected(){this.dispatchRequest()}hostDisconnected(){this.unsubscribe&&(this.unsubscribe(),this.unsubscribe=void 0)}dispatchRequest(){this.host.dispatchEvent(new Ve(this.context,this.t,this.subscribe))}};/**
 * @license
 * Copyright 2021 Google LLC
 * SPDX-License-Identifier: BSD-3-Clause
 */class ii{get value(){return this.o}set value(t){this.setValue(t)}setValue(t,s=!1){const i=s||!Object.is(t,this.o);this.o=t,i&&this.updateObservers()}constructor(t){this.subscriptions=new Map,this.updateObservers=()=>{for(const[s,{disposer:i}]of this.subscriptions)s(this.o,i)},t!==void 0&&(this.value=t)}addCallback(t,s,i){if(!i)return void t(this.value);this.subscriptions.has(t)||this.subscriptions.set(t,{disposer:()=>{this.subscriptions.delete(t)},consumerHost:s});const{disposer:o}=this.subscriptions.get(t);t(this.value,o)}clearCallbacks(){this.subscriptions.clear()}}/**
 * @license
 * Copyright 2021 Google LLC
 * SPDX-License-Identifier: BSD-3-Clause
 */let oi=class extends Event{constructor(t){super("context-provider",{bubbles:!0,composed:!0}),this.context=t}};class qe extends ii{constructor(t,s,i){var o,r;super(s.context!==void 0?s.initialValue:i),this.onContextRequest=n=>{const a=n.composedPath()[0];n.context===this.context&&a!==this.host&&(n.stopPropagation(),this.addCallback(n.callback,a,n.subscribe))},this.onProviderRequest=n=>{const a=n.composedPath()[0];if(n.context!==this.context||a===this.host)return;const l=new Set;for(const[c,{consumerHost:h}]of this.subscriptions)l.has(c)||(l.add(c),h.dispatchEvent(new Ve(this.context,c,!0)));n.stopPropagation()},this.host=t,s.context!==void 0?this.context=s.context:this.context=s,this.attachListeners(),(r=(o=this.host).addController)==null||r.call(o,this)}attachListeners(){this.host.addEventListener("context-request",this.onContextRequest),this.host.addEventListener("context-provider",this.onProviderRequest)}hostConnected(){this.host.dispatchEvent(new oi(this.context))}}/**
 * @license
 * Copyright 2017 Google LLC
 * SPDX-License-Identifier: BSD-3-Clause
 */function zt({context:e}){return(t,s)=>{const i=new WeakMap;if(typeof s=="object")return s.addInitializer(function(){i.set(this,new qe(this,{context:e}))}),{get(){return t.get.call(this)},set(o){var r;return(r=i.get(this))==null||r.setValue(o),t.set.call(this,o)},init(o){var r;return(r=i.get(this))==null||r.setValue(o),o}};{t.constructor.addInitializer(n=>{i.set(n,new qe(n,{context:e}))});const o=Object.getOwnPropertyDescriptor(t,s);let r;if(o===void 0){const n=new WeakMap;r={get(){return n.get(this)},set(a){i.get(this).setValue(a),n.set(this,a)},configurable:!0,enumerable:!0}}else{const n=o.set;r={...o,set(a){i.get(this).setValue(a),n==null||n.call(this,a)}}}return void Object.defineProperty(t,s,r)}}}/**
 * @license
 * Copyright 2022 Google LLC
 * SPDX-License-Identifier: BSD-3-Clause
 */function Y({context:e,subscribe:t}){return(s,i)=>{typeof i=="object"?i.addInitializer(function(){new je(this,{context:e,callback:o=>{s.set.call(this,o)},subscribe:t})}):s.constructor.addInitializer(o=>{new je(o,{context:e,callback:r=>{o[i]=r},subscribe:t})})}}/**
 * @license
 * Copyright 2020 Google LLC
 * SPDX-License-Identifier: BSD-3-Clause
 */const ri=e=>e.strings===void 0;/**
 * @license
 * Copyright 2017 Google LLC
 * SPDX-License-Identifier: BSD-3-Clause
 */const Lt=(e,t)=>{var i;const s=e._$AN;if(s===void 0)return!1;for(const o of s)(i=o._$AO)==null||i.call(o,t,!1),Lt(o,t);return!0},Gt=e=>{let t,s;do{if((t=e._$AM)===void 0)break;s=t._$AN,s.delete(e),e=t}while((s==null?void 0:s.size)===0)},Xe=e=>{for(let t;t=e._$AM;e=t){let s=t._$AN;if(s===void 0)t._$AN=s=new Set;else if(s.has(e))break;s.add(e),li(t)}};function ni(e){this._$AN!==void 0?(Gt(this),this._$AM=e,Xe(this)):this._$AM=e}function ai(e,t=!1,s=0){const i=this._$AH,o=this._$AN;if(o!==void 0&&o.size!==0)if(t)if(Array.isArray(i))for(let r=s;r<i.length;r++)Lt(i[r],!1),Gt(i[r]);else i!=null&&(Lt(i,!1),Gt(i));else Lt(this,e)}const li=e=>{e.type==ie.CHILD&&(e._$AP??(e._$AP=ai),e._$AQ??(e._$AQ=ni))};class hi extends re{constructor(){super(...arguments),this._$AN=void 0}_$AT(t,s,i){super._$AT(t,s,i),Xe(this),this.isConnected=t._$AU}_$AO(t,s=!0){var i,o;t!==this.isConnected&&(this.isConnected=t,t?(i=this.reconnected)==null||i.call(this):(o=this.disconnected)==null||o.call(this)),s&&(Lt(this,t),Gt(this))}setValue(t){if(ri(this.t))this.t._$AI(t,this);else{const s=[...this.t._$AH];s[this.i]=t,this.t._$AI(s,this,0)}}disconnected(){}reconnected(){}}/**
 * @license
 * Copyright 2020 Google LLC
 * SPDX-License-Identifier: BSD-3-Clause
 */const Ze=()=>new ci;class ci{}const ae=new WeakMap,We=oe(class extends hi{render(e){return A}update(e,[t]){var i;const s=t!==this.Y;return s&&this.Y!==void 0&&this.rt(void 0),(s||this.lt!==this.ct)&&(this.Y=t,this.ht=(i=e.options)==null?void 0:i.host,this.rt(this.ct=e.element)),A}rt(e){if(this.isConnected||(e=void 0),typeof this.Y=="function"){const t=this.ht??globalThis;let s=ae.get(t);s===void 0&&(s=new WeakMap,ae.set(t,s)),s.get(this.Y)!==void 0&&this.Y.call(this.ht,void 0),s.set(this.Y,e),e!==void 0&&this.Y.call(this.ht,e)}else this.Y.value=e}get lt(){var e,t;return typeof this.Y=="function"?(e=ae.get(this.ht??globalThis))==null?void 0:e.get(this.Y):(t=this.Y)==null?void 0:t.value}disconnected(){this.lt===this.ct&&this.rt(void 0)}reconnected(){this.rt(this.ct)}});var Ye=function(e,t,s,i){function o(r){return r instanceof s?r:new s(function(n){n(r)})}return new(s||(s=Promise))(function(r,n){function a(h){try{c(i.next(h))}catch(u){n(u)}}function l(h){try{c(i.throw(h))}catch(u){n(u)}}function c(h){h.done?r(h.value):o(h.value).then(a,l)}c((i=i.apply(e,t||[])).next())})};class ui{constructor({key:t,baseURL:s,productId:i,formatType:o,clientName:r,siteId:n,displayCode:a,locale:l,loadid:c}){this.baseUrl=this.buildBaseUrl({key:t,baseURL:s,productId:i,formatType:o}),this.clientName=r,this.siteId=n,this.displayCode=a,this.locale=l,this.loadid=c}buildBaseUrl({baseURL:t}){return new URL(t)}modifyRequest(t,s){t.pathname=`/bfd/v1/clients/${this.clientName}/api-products/cv2/resources${t.pathname}`,t.searchParams.delete("passkey");const i=`${this.displayCode},${this.siteId},${this.locale}`;return s.append("Bv-Bfd-Token",i),s.append("traceparent",this.loadid),{url:t,headers:s}}callAPI(t){return Ye(this,arguments,void 0,function*({url:s,httpMethod:i="GET",body:o=void 0,headers:r=void 0}){const n=/apps(-qa|-stg)?\.bazaarvoice\.com$/.test(s.hostname);if(n){const c=this.modifyRequest(s,r||new Headers);s=c.url,r=c.headers}const a=yield fetch(s,{method:i,body:o,headers:r});return{data:yield a.json().then(c=>n?c.response:c),headers:a.headers,statusCode:a.status}})}}class di{constructor({baseURL:t}){this.finalURL=this.buildBaseUrl({baseURL:t})}buildBaseUrl({baseURL:t}){return new URL(t)}callAPI(t){return Ye(this,arguments,void 0,function*({url:s,httpMethod:i="POST",body:o,headers:r=void 0}){return yield(yield fetch(s,{method:i,body:JSON.stringify(o),headers:r})).json().then(l=>l)})}}var Je=function(e,t,s,i){function o(r){return r instanceof s?r:new s(function(n){n(r)})}return new(s||(s=Promise))(function(r,n){function a(h){try{c(i.next(h))}catch(u){n(u)}}function l(h){try{c(i.throw(h))}catch(u){n(u)}}function c(h){h.done?r(h.value):o(h.value).then(a,l)}c((i=i.apply(e,t||[])).next())})};class fi extends ui{constructor({key:t,baseURL:s,productId:i,formatType:o,clientName:r,siteId:n,displayCode:a,locale:l,loadid:c}){super({key:t,baseURL:s,productId:i,formatType:o,clientName:r,siteId:n,displayCode:a,locale:l,loadid:c}),this.key=t,this.productId=i,this.formatType=o}parseResponse(t){return[{summary:t.summary,detail:t.detail,status:t.status,createdAt:t.createdAt}]}getReviewSummaries(){return Je(this,void 0,void 0,function*(){const t=new URL(this.baseUrl),s=this.locale&&typeof this.locale=="string"&&this.locale.length>0?this.locale.split("_")[0]:"";t.pathname+="data/reviewsummary",t.searchParams.append("productId",this.productId),t.searchParams.append("passkey",this.key),t.searchParams.append("formatType",this.formatType),t.searchParams.append("language",s);const i=new Headers({Accept:"application/json; version=1"}),o=yield this.callAPI({url:t,headers:i});return{data:this.parseResponse(o.data),headers:o.headers}})}submitFeedback(t,s){return Je(this,void 0,void 0,function*(){const i=new URL(this.baseUrl);i.pathname+="data/reviewsummary/feedback",i.searchParams.append("passkey",this.key),i.searchParams.append("apiversion","5.5");const o=new Headers({"Content-Type":"application/json",Accept:"application/json; version=1"});s&&o.set("bv-usertoken",s);const r=Object.assign({productId:this.productId,vote:t.vote,feedbackReason:t.feedbackReason.join(","),feedbackText:t.feedbackText,clientName:this.clientName,siteId:this.siteId,displayCode:this.displayCode,locale:this.locale},t.createdAt&&{createdAt:t.createdAt}),n=yield this.callAPI({url:i,httpMethod:"POST",headers:o,body:JSON.stringify(r)});return{data:n.data,statusCode:n.statusCode,headers:n.headers}})}}var pi=function(e,t,s,i){function o(r){return r instanceof s?r:new s(function(n){n(r)})}return new(s||(s=Promise))(function(r,n){function a(h){try{c(i.next(h))}catch(u){n(u)}}function l(h){try{c(i.throw(h))}catch(u){n(u)}}function c(h){h.done?r(h.value):o(h.value).then(a,l)}c((i=i.apply(e,t||[])).next())})};class mi extends di{constructor({key:t,baseURL:s,productId:i,clientName:o}){super({baseURL:s}),this.key=t,this.productId=i,this.clientName=o}generateRequestBody(t){return{domain:t.domain,url:t.url,contentId:t.contentId,lang:t.lang,subject:t.subject,parameters:{client:this.clientName,displayCode:t.displayCode,sourceClient:t.sourceClient,contentType:t.contentType,destSiteId:t.destSiteId,contentLocale:t.contentLocale,product:t.product}}}getDSAFormURL(t){return pi(this,void 0,void 0,function*(){const s=this.finalURL,i=new Headers({"Content-Type":"application/json"});return yield this.callAPI({url:s,headers:i,httpMethod:"POST",body:this.generateRequestBody(t)})})}}var le=typeof globalThis<"u"?globalThis:typeof window<"u"?window:typeof global<"u"?global:typeof self<"u"?self:{},bi=function(){var e=function(){if(typeof globalThis<"u")return globalThis;if(typeof window<"u")return window;if(typeof self<"u")return self;if(typeof le<"u")return le;throw new Error("unable to locate global object")}();return e&&e.__esModule?new Proxy(e,{get:function(s,i){return i==="default"?s:s[i]},set:function(s,i,o){return s[i]=o,!0}}):e},gi=bi(),Ke={},Qe;function vi(){return Qe||(Qe=1,function(e){if(e.fetch)return;var t={searchParams:"URLSearchParams"in e,iterable:"Symbol"in e&&"iterator"in Symbol,blob:"FileReader"in e&&"Blob"in e&&function(){try{return new Blob,!0}catch{return!1}}(),formData:"FormData"in e,arrayBuffer:"ArrayBuffer"in e};if(t.arrayBuffer)var s=["[object Int8Array]","[object Uint8Array]","[object Uint8ClampedArray]","[object Int16Array]","[object Uint16Array]","[object Int32Array]","[object Uint32Array]","[object Float32Array]","[object Float64Array]"],i=function(d){return d&&DataView.prototype.isPrototypeOf(d)},o=ArrayBuffer.isView||function(d){return d&&s.indexOf(Object.prototype.toString.call(d))>-1};function r(d){if(typeof d!="string"&&(d=String(d)),/[^a-z0-9\-#$%&'*+.\^_`|~]/i.test(d))throw new TypeError("Invalid character in header field name");return d.toLowerCase()}function n(d){return typeof d!="string"&&(d=String(d)),d}function a(d){var p={next:function(){var y=d.shift();return{done:y===void 0,value:y}}};return t.iterable&&(p[Symbol.iterator]=function(){return p}),p}function l(d){this.map={},d instanceof l?d.forEach(function(p,y){this.append(y,p)},this):Array.isArray(d)?d.forEach(function(p){this.append(p[0],p[1])},this):d&&Object.getOwnPropertyNames(d).forEach(function(p){this.append(p,d[p])},this)}l.prototype.append=function(d,p){d=r(d),p=n(p);var y=this.map[d];this.map[d]=y?y+","+p:p},l.prototype.delete=function(d){delete this.map[r(d)]},l.prototype.get=function(d){return d=r(d),this.has(d)?this.map[d]:null},l.prototype.has=function(d){return this.map.hasOwnProperty(r(d))},l.prototype.set=function(d,p){this.map[r(d)]=n(p)},l.prototype.forEach=function(d,p){for(var y in this.map)this.map.hasOwnProperty(y)&&d.call(p,this.map[y],y,this)},l.prototype.keys=function(){var d=[];return this.forEach(function(p,y){d.push(y)}),a(d)},l.prototype.values=function(){var d=[];return this.forEach(function(p){d.push(p)}),a(d)},l.prototype.entries=function(){var d=[];return this.forEach(function(p,y){d.push([y,p])}),a(d)},t.iterable&&(l.prototype[Symbol.iterator]=l.prototype.entries);function c(d){if(d.bodyUsed)return Promise.reject(new TypeError("Already read"));d.bodyUsed=!0}function h(d){return new Promise(function(p,y){d.onload=function(){p(d.result)},d.onerror=function(){y(d.error)}})}function u(d){var p=new FileReader,y=h(p);return p.readAsArrayBuffer(d),y}function f(d){var p=new FileReader,y=h(p);return p.readAsText(d),y}function v(d){for(var p=new Uint8Array(d),y=new Array(p.length),V=0;V<p.length;V++)y[V]=String.fromCharCode(p[V]);return y.join("")}function E(d){if(d.slice)return d.slice(0);var p=new Uint8Array(d.byteLength);return p.set(new Uint8Array(d)),p.buffer}function M(){return this.bodyUsed=!1,this._initBody=function(d){if(this._bodyInit=d,!d)this._bodyText="";else if(typeof d=="string")this._bodyText=d;else if(t.blob&&Blob.prototype.isPrototypeOf(d))this._bodyBlob=d;else if(t.formData&&FormData.prototype.isPrototypeOf(d))this._bodyFormData=d;else if(t.searchParams&&URLSearchParams.prototype.isPrototypeOf(d))this._bodyText=d.toString();else if(t.arrayBuffer&&t.blob&&i(d))this._bodyArrayBuffer=E(d.buffer),this._bodyInit=new Blob([this._bodyArrayBuffer]);else if(t.arrayBuffer&&(ArrayBuffer.prototype.isPrototypeOf(d)||o(d)))this._bodyArrayBuffer=E(d);else throw new Error("unsupported BodyInit type");this.headers.get("content-type")||(typeof d=="string"?this.headers.set("content-type","text/plain;charset=UTF-8"):this._bodyBlob&&this._bodyBlob.type?this.headers.set("content-type",this._bodyBlob.type):t.searchParams&&URLSearchParams.prototype.isPrototypeOf(d)&&this.headers.set("content-type","application/x-www-form-urlencoded;charset=UTF-8"))},t.blob&&(this.blob=function(){var d=c(this);if(d)return d;if(this._bodyBlob)return Promise.resolve(this._bodyBlob);if(this._bodyArrayBuffer)return Promise.resolve(new Blob([this._bodyArrayBuffer]));if(this._bodyFormData)throw new Error("could not read FormData body as blob");return Promise.resolve(new Blob([this._bodyText]))},this.arrayBuffer=function(){return this._bodyArrayBuffer?c(this)||Promise.resolve(this._bodyArrayBuffer):this.blob().then(u)}),this.text=function(){var d=c(this);if(d)return d;if(this._bodyBlob)return f(this._bodyBlob);if(this._bodyArrayBuffer)return Promise.resolve(v(this._bodyArrayBuffer));if(this._bodyFormData)throw new Error("could not read FormData body as text");return Promise.resolve(this._bodyText)},t.formData&&(this.formData=function(){return this.text().then(I)}),this.json=function(){return this.text().then(JSON.parse)},this}var G=["DELETE","GET","HEAD","OPTIONS","POST","PUT"];function Z(d){var p=d.toUpperCase();return G.indexOf(p)>-1?p:d}function R(d,p){p=p||{};var y=p.body;if(d instanceof R){if(d.bodyUsed)throw new TypeError("Already read");this.url=d.url,this.credentials=d.credentials,p.headers||(this.headers=new l(d.headers)),this.method=d.method,this.mode=d.mode,!y&&d._bodyInit!=null&&(y=d._bodyInit,d.bodyUsed=!0)}else this.url=String(d);if(this.credentials=p.credentials||this.credentials||"omit",(p.headers||!this.headers)&&(this.headers=new l(p.headers)),this.method=Z(p.method||this.method||"GET"),this.mode=p.mode||this.mode||null,this.referrer=null,(this.method==="GET"||this.method==="HEAD")&&y)throw new TypeError("Body not allowed for GET or HEAD requests");this._initBody(y)}R.prototype.clone=function(){return new R(this,{body:this._bodyInit})};function I(d){var p=new FormData;return d.trim().split("&").forEach(function(y){if(y){var V=y.split("="),j=V.shift().replace(/\+/g," "),S=V.join("=").replace(/\+/g," ");p.append(decodeURIComponent(j),decodeURIComponent(S))}}),p}function W(d){var p=new l,y=d.replace(/\r?\n[\t ]+/g," ");return y.split(/\r?\n/).forEach(function(V){var j=V.split(":"),S=j.shift().trim();if(S){var mt=j.join(":").trim();p.append(S,mt)}}),p}M.call(R.prototype);function T(d,p){p||(p={}),this.type="default",this.status=p.status===void 0?200:p.status,this.ok=this.status>=200&&this.status<300,this.statusText="statusText"in p?p.statusText:"OK",this.headers=new l(p.headers),this.url=p.url||"",this._initBody(d)}M.call(T.prototype),T.prototype.clone=function(){return new T(this._bodyInit,{status:this.status,statusText:this.statusText,headers:new l(this.headers),url:this.url})},T.error=function(){var d=new T(null,{status:0,statusText:""});return d.type="error",d};var q=[301,302,303,307,308];T.redirect=function(d,p){if(q.indexOf(p)===-1)throw new RangeError("Invalid status code");return new T(null,{status:p,headers:{location:d}})},e.Headers=l,e.Request=R,e.Response=T,e.fetch=function(d,p){return new Promise(function(y,V){var j=new R(d,p),S=new XMLHttpRequest;S.onload=function(){var mt={status:S.status,statusText:S.statusText,headers:W(S.getAllResponseHeaders()||"")};mt.url="responseURL"in S?S.responseURL:mt.headers.get("X-Request-URL");var Te="response"in S?S.response:S.responseText;y(new T(Te,mt))},S.onerror=function(){V(new TypeError("Network request failed"))},S.ontimeout=function(){V(new TypeError("Network request failed"))},S.open(j.method,j.url,!0),j.credentials==="include"?S.withCredentials=!0:j.credentials==="omit"&&(S.withCredentials=!1),"responseType"in S&&t.blob&&(S.responseType="blob"),j.headers.forEach(function(mt,Te){S.setRequestHeader(Te,mt)}),S.send(typeof j._bodyInit>"u"?null:j._bodyInit)})},e.fetch.polyfill=!0}(typeof self<"u"?self:le)),Ke}var L=gi;if(typeof L.fetch>"u"||!L.fetch.toString().match(/\[native code]/)){var yi=L.self;L.self={};var wi=["URLSearchParams","FileReader","Blob","FormData","ArrayBuffer"];wi.forEach(function(e){L[e]&&(L.self[e]=L[e])}),vi(),L.self.fetch,L.self.Headers,L.self.Request,L.self.Response,L.self=yi}else L.fetch,L.Headers,L.Request,L.Response;class xi{constructor({key:t,baseURL:s,productId:i,formatType:o,clientName:r,siteId:n,displayCode:a,locale:l,loadid:c}){this.reviewSummariesAPI=new fi({key:t,baseURL:s,productId:i,formatType:o,clientName:r,siteId:n,displayCode:a,locale:l,loadid:c}),this.DSAFormURLAPI=new mi({key:t,baseURL:s,productId:i,clientName:r})}}const m={appName:"AiReviewSummary",appVersion:"1.2.15",analytics:{showMore:"Show More",showLess:"Show Less",click:"Click",close:"Close",open:"Open",shownType:"Shown",usedType:"Used",yesVote:"upVote",noVote:"downVote",noSummary:"NoSummary",reviewSummary:"AiReviewSummary",readContext:"Read",featureType:"Feature",closeModal:"AiReviewSummaryClosed",viewedUGC:"viewedUGC",languageDisclaimer:"LanguageDisclaimer"},api:{reviewSummary:"reviewsummarisation",feedback:"reviewsummary/feedback",apiType:"api",apiSuccess:"apiSuccess",apiFailure:"apiFailure",apiRequest:"apiRequest",bfdApiSuccess:"bfdApiSuccess",bfdApiFailure:"bfdApiFailure",bfdApiRequest:"bfdApiRequest"}},Pt="bulletPointSummary",H={reviewSummaries:"swat-review-summaries",modal:"modal-component",tooltipContainer:"swat-hosted-tooltip",tooltipCloseBtn:"swat-hosted-close-btn",tooltipContent:"swat-hosted-tooltip-content",infoButton:"swat-hosted-info-button",mobileCardContent:"swat-hosted-mobile-card-content",mobileCardCloseBtn:"swat-hosted-mobile-card-close-btn"};class ts{constructor(t,s){var o,r,n,a,l,c,h,u,f,v;this.config=t;const i=(n=(r=(o=this.config)==null?void 0:o.features)==null?void 0:r.reviewSummaryConfigs)==null?void 0:n.summaryFormatType;this.apiClient=new xi({key:(l=(a=this.config)==null?void 0:a.apiKeys)!=null&&l.conversationAPIKey&&((h=(c=this.config)==null?void 0:c.apiKeys)==null?void 0:h.conversationAPIKey)||"",baseURL:new URL(`${this.getAPIBaseURL()}`),productId:((u=this.config)==null?void 0:u.productId)||"",formatType:i===Pt?"bullet":"paragraph",clientName:window.BV.global.client,siteId:window.BV.global.siteId,displayCode:((f=this.config)==null?void 0:f.displayCode)||"",locale:window.BV.global.locale,loadid:((v=window.BVA)==null?void 0:v.loadId)||""}),this.analytics=s}getAPIBaseURL(){var r;const{dataEnvironment:t,serverEnvironment:s}=window.BV.global,i=(r=this.config)==null?void 0:r.features.backendDisplay;let o;return s==="qa"||s==="dev"?o="qa.":t==="stg"?o="stg.":o="",!o&&i?"https://apps.bazaarvoice.com":i?`https://apps-${o}bazaarvoice.com`:`https://${o}api.bazaarvoice.com`}async getReviewSummaries(){var i;const t=(i=this.config)==null?void 0:i.features.backendDisplay;this.analytics.apiRequestDiagnostic(m.api.reviewSummary,t);const s=performance.now();try{const o=await this.apiClient.reviewSummariesAPI.getReviewSummaries();if(o&&o.data.length>0){this.config&&(this.config.createdAt=o.data[0].createdAt);const r=performance.now(),n=o.headers.get("X-Cache")||"";return this.analytics.apiSuccessDiagnostic(m.api.reviewSummary,r-s,n,t),o.data}else this.analytics.trackNoSummary(),console.error("Failed to fetch review summary: No data received")}catch(o){const r=performance.now();this.analytics.apiFailureDiagnostic(m.api.reviewSummary,r-s,o.message,t),console.error("Error fetching review summary:",o)}}async submitFeedback(t,s){var r,n,a,l;const i=(r=this.config)==null?void 0:r.features.backendDisplay;this.analytics.apiRequestDiagnostic(m.api.feedback,i);const o=performance.now();try{const c=await this.apiClient.reviewSummariesAPI.submitFeedback(t,s);if(c.statusCode&&c.statusCode===200){const h=performance.now(),u=((n=c.headers)==null?void 0:n.get("X-Cache"))||"";return this.analytics.apiSuccessDiagnostic(m.api.feedback,h-o,u,i),c.data}else{const h=performance.now();this.analytics.apiFailureDiagnostic(m.api.feedback,h-o,((a=c==null?void 0:c.data)==null?void 0:a.detail)||"Unknown error",i),console.error(`Failed to submit feedback: ${(l=c==null?void 0:c.data)==null?void 0:l.detail}`)}}catch(c){const h=performance.now();this.analytics.apiFailureDiagnostic(m.api.feedback,h-o,c.message,i),console.error("Error submitting feedback:",c)}}}const st=(Rs=window.BV.review_summaries)==null?void 0:Rs._analytics;class he{constructor(t){var i;this.config=t;const s={client:window.BV.global.client,productId:((i=this.config)==null?void 0:i.productId)||"",bvProduct:m.appName,bvProductVersion:m.appVersion};st==null||st.setCommonData(s)}feature(t,s,i){st.trackEvent("Feature",Object.assign({type:s,name:t},i))}trackPageView(t={}){st.trackPageView({type:"Product",detail1:window.BV.global.locale,...t})}trackViewedUGC(t){this.feature(m.analytics.viewedUGC,m.analytics.usedType,{detail1:5e3,elapsedMs:Date.now()-t,context:m.analytics.readContext,interaction:!0})}trackShowMoreLessSummary(t){const s=t?m.analytics.showMore:m.analytics.showLess;this.feature(m.analytics.click,m.analytics.usedType,{detail1:s,detail2:m.analytics.reviewSummary,context:m.analytics.readContext})}trackUpvoteFeedback(t){this.feature(m.analytics.click,m.analytics.usedType,{detail1:m.analytics.yesVote,detail2:t,context:m.analytics.readContext})}trackDownvoteFeedback(t){this.feature(m.analytics.click,m.analytics.usedType,{detail1:m.analytics.noVote,detail2:t,context:m.analytics.readContext})}trackNoSummary(t){var s;this.feature(m.analytics.reviewSummary,m.analytics.usedType,{detail1:m.analytics.noSummary,detail2:t||"",productId:((s=this.config)==null?void 0:s.productId)||""})}trackLanguageDisclaimerOpen(){this.feature(m.analytics.click,m.analytics.open,{detail1:m.analytics.languageDisclaimer,context:m.analytics.readContext})}trackLanguageDisclaimerClose(){this.feature(m.analytics.click,m.analytics.close,{detail1:m.analytics.languageDisclaimer,context:m.analytics.readContext})}trackModalClose(){this.feature(m.analytics.close,m.analytics.usedType,{detail1:m.analytics.closeModal,context:m.analytics.readContext})}trackFeedbackFormShown(){this.feature("Form_Shown",m.analytics.shownType,{context:m.analytics.readContext})}trackPredefinedReasonClick(t){this.feature(m.analytics.click,m.analytics.usedType,{detail1:"Predefined_reason",detail2:t,context:m.analytics.readContext})}trackSubmitButtonClick(t,s){this.feature(m.analytics.click,m.analytics.usedType,{detail1:t.length>0?"With_Additional_Comment":"Without_Additional_comment",detail2:s.join(","),context:m.analytics.readContext})}trackFeedbackFormClose(){this.feature(m.analytics.click,m.analytics.usedType,{detail1:"Close_form",context:m.analytics.readContext})}trackSubmissionSuccess(){this.feature("Form_success",m.analytics.shownType,{context:m.analytics.readContext})}trackSubmissionFailure(){this.feature("Form_failure",m.analytics.shownType,{context:m.analytics.readContext})}apiRequestDiagnostic(t,s){var o;const i={name:t,type:m.api.apiType,detail1:s?m.api.bfdApiRequest:m.api.apiRequest,productId:((o=this.config)==null?void 0:o.productId)||""};st.trackEvent("Diagnostic",{...i})}apiSuccessDiagnostic(t,s,i,o){var n;const r={name:t,type:m.api.apiType,detail2:i,detail1:o?m.api.bfdApiSuccess:m.api.apiSuccess,productId:((n=this.config)==null?void 0:n.productId)||"",elapsedMs:s};st.trackEvent("Diagnostic",{...r})}apiFailureDiagnostic(t,s,i,o){var n;const r={name:t,type:m.api.apiType,detail1:o?m.api.bfdApiFailure:m.api.apiFailure,detail2:i,productId:((n=this.config)==null?void 0:n.productId)||"",elapsedMs:s};st.trackEvent("Diagnostic",{...r})}}var ce=function(e,t){return ce=Object.setPrototypeOf||{__proto__:[]}instanceof Array&&function(s,i){s.__proto__=i}||function(s,i){for(var o in i)Object.prototype.hasOwnProperty.call(i,o)&&(s[o]=i[o])},ce(e,t)};function Vt(e,t){if(typeof t!="function"&&t!==null)throw new TypeError("Class extends value "+String(t)+" is not a constructor or null");ce(e,t);function s(){this.constructor=e}e.prototype=t===null?Object.create(t):(s.prototype=t.prototype,new s)}var _=function(){return _=Object.assign||function(t){for(var s,i=1,o=arguments.length;i<o;i++){s=arguments[i];for(var r in s)Object.prototype.hasOwnProperty.call(s,r)&&(t[r]=s[r])}return t},_.apply(this,arguments)};function _i(e,t){var s={};for(var i in e)Object.prototype.hasOwnProperty.call(e,i)&&t.indexOf(i)<0&&(s[i]=e[i]);if(e!=null&&typeof Object.getOwnPropertySymbols=="function")for(var o=0,i=Object.getOwnPropertySymbols(e);o<i.length;o++)t.indexOf(i[o])<0&&Object.prototype.propertyIsEnumerable.call(e,i[o])&&(s[i[o]]=e[i[o]]);return s}function ue(e,t,s){if(s||arguments.length===2)for(var i=0,o=t.length,r;i<o;i++)(r||!(i in t))&&(r||(r=Array.prototype.slice.call(t,0,i)),r[i]=t[i]);return e.concat(r||Array.prototype.slice.call(t))}typeof SuppressedError=="function"&&SuppressedError;var w;(function(e){e[e.EXPECT_ARGUMENT_CLOSING_BRACE=1]="EXPECT_ARGUMENT_CLOSING_BRACE",e[e.EMPTY_ARGUMENT=2]="EMPTY_ARGUMENT",e[e.MALFORMED_ARGUMENT=3]="MALFORMED_ARGUMENT",e[e.EXPECT_ARGUMENT_TYPE=4]="EXPECT_ARGUMENT_TYPE",e[e.INVALID_ARGUMENT_TYPE=5]="INVALID_ARGUMENT_TYPE",e[e.EXPECT_ARGUMENT_STYLE=6]="EXPECT_ARGUMENT_STYLE",e[e.INVALID_NUMBER_SKELETON=7]="INVALID_NUMBER_SKELETON",e[e.INVALID_DATE_TIME_SKELETON=8]="INVALID_DATE_TIME_SKELETON",e[e.EXPECT_NUMBER_SKELETON=9]="EXPECT_NUMBER_SKELETON",e[e.EXPECT_DATE_TIME_SKELETON=10]="EXPECT_DATE_TIME_SKELETON",e[e.UNCLOSED_QUOTE_IN_ARGUMENT_STYLE=11]="UNCLOSED_QUOTE_IN_ARGUMENT_STYLE",e[e.EXPECT_SELECT_ARGUMENT_OPTIONS=12]="EXPECT_SELECT_ARGUMENT_OPTIONS",e[e.EXPECT_PLURAL_ARGUMENT_OFFSET_VALUE=13]="EXPECT_PLURAL_ARGUMENT_OFFSET_VALUE",e[e.INVALID_PLURAL_ARGUMENT_OFFSET_VALUE=14]="INVALID_PLURAL_ARGUMENT_OFFSET_VALUE",e[e.EXPECT_SELECT_ARGUMENT_SELECTOR=15]="EXPECT_SELECT_ARGUMENT_SELECTOR",e[e.EXPECT_PLURAL_ARGUMENT_SELECTOR=16]="EXPECT_PLURAL_ARGUMENT_SELECTOR",e[e.EXPECT_SELECT_ARGUMENT_SELECTOR_FRAGMENT=17]="EXPECT_SELECT_ARGUMENT_SELECTOR_FRAGMENT",e[e.EXPECT_PLURAL_ARGUMENT_SELECTOR_FRAGMENT=18]="EXPECT_PLURAL_ARGUMENT_SELECTOR_FRAGMENT",e[e.INVALID_PLURAL_ARGUMENT_SELECTOR=19]="INVALID_PLURAL_ARGUMENT_SELECTOR",e[e.DUPLICATE_PLURAL_ARGUMENT_SELECTOR=20]="DUPLICATE_PLURAL_ARGUMENT_SELECTOR",e[e.DUPLICATE_SELECT_ARGUMENT_SELECTOR=21]="DUPLICATE_SELECT_ARGUMENT_SELECTOR",e[e.MISSING_OTHER_CLAUSE=22]="MISSING_OTHER_CLAUSE",e[e.INVALID_TAG=23]="INVALID_TAG",e[e.INVALID_TAG_NAME=25]="INVALID_TAG_NAME",e[e.UNMATCHED_CLOSING_TAG=26]="UNMATCHED_CLOSING_TAG",e[e.UNCLOSED_TAG=27]="UNCLOSED_TAG"})(w||(w={}));var C;(function(e){e[e.literal=0]="literal",e[e.argument=1]="argument",e[e.number=2]="number",e[e.date=3]="date",e[e.time=4]="time",e[e.select=5]="select",e[e.plural=6]="plural",e[e.pound=7]="pound",e[e.tag=8]="tag"})(C||(C={}));var vt;(function(e){e[e.number=0]="number",e[e.dateTime=1]="dateTime"})(vt||(vt={}));function es(e){return e.type===C.literal}function Ei(e){return e.type===C.argument}function ss(e){return e.type===C.number}function is(e){return e.type===C.date}function os(e){return e.type===C.time}function rs(e){return e.type===C.select}function ns(e){return e.type===C.plural}function Ci(e){return e.type===C.pound}function as(e){return e.type===C.tag}function ls(e){return!!(e&&typeof e=="object"&&e.type===vt.number)}function de(e){return!!(e&&typeof e=="object"&&e.type===vt.dateTime)}var hs=/[ \xA0\u1680\u2000-\u200A\u202F\u205F\u3000]/,Si=/(?:[Eec]{1,6}|G{1,5}|[Qq]{1,5}|(?:[yYur]+|U{1,5})|[ML]{1,5}|d{1,2}|D{1,3}|F{1}|[abB]{1,5}|[hkHK]{1,2}|w{1,2}|W{1}|m{1,2}|s{1,2}|[zZOvVxX]{1,4})(?=([^']*'[^']*')*[^']*$)/g;function Ai(e){var t={};return e.replace(Si,function(s){var i=s.length;switch(s[0]){case"G":t.era=i===4?"long":i===5?"narrow":"short";break;case"y":t.year=i===2?"2-digit":"numeric";break;case"Y":case"u":case"U":case"r":throw new RangeError("`Y/u/U/r` (year) patterns are not supported, use `y` instead");case"q":case"Q":throw new RangeError("`q/Q` (quarter) patterns are not supported");case"M":case"L":t.month=["numeric","2-digit","short","long","narrow"][i-1];break;case"w":case"W":throw new RangeError("`w/W` (week) patterns are not supported");case"d":t.day=["numeric","2-digit"][i-1];break;case"D":case"F":case"g":throw new RangeError("`D/F/g` (day) patterns are not supported, use `d` instead");case"E":t.weekday=i===4?"long":i===5?"narrow":"short";break;case"e":if(i<4)throw new RangeError("`e..eee` (weekday) patterns are not supported");t.weekday=["short","long","narrow","short"][i-4];break;case"c":if(i<4)throw new RangeError("`c..ccc` (weekday) patterns are not supported");t.weekday=["short","long","narrow","short"][i-4];break;case"a":t.hour12=!0;break;case"b":case"B":throw new RangeError("`b/B` (period) patterns are not supported, use `a` instead");case"h":t.hourCycle="h12",t.hour=["numeric","2-digit"][i-1];break;case"H":t.hourCycle="h23",t.hour=["numeric","2-digit"][i-1];break;case"K":t.hourCycle="h11",t.hour=["numeric","2-digit"][i-1];break;case"k":t.hourCycle="h24",t.hour=["numeric","2-digit"][i-1];break;case"j":case"J":case"C":throw new RangeError("`j/J/C` (hour) patterns are not supported, use `h/H/K/k` instead");case"m":t.minute=["numeric","2-digit"][i-1];break;case"s":t.second=["numeric","2-digit"][i-1];break;case"S":case"A":throw new RangeError("`S/A` (second) patterns are not supported, use `s` instead");case"z":t.timeZoneName=i<4?"short":"long";break;case"Z":case"O":case"v":case"V":case"X":case"x":throw new RangeError("`Z/O/v/V/X/x` (timeZone) patterns are not supported, use `z` instead")}return""}),t}var $i=/[\t-\r \x85\u200E\u200F\u2028\u2029]/i;function Ti(e){if(e.length===0)throw new Error("Number skeleton cannot be empty");for(var t=e.split($i).filter(function(f){return f.length>0}),s=[],i=0,o=t;i<o.length;i++){var r=o[i],n=r.split("/");if(n.length===0)throw new Error("Invalid number skeleton");for(var a=n[0],l=n.slice(1),c=0,h=l;c<h.length;c++){var u=h[c];if(u.length===0)throw new Error("Invalid number skeleton")}s.push({stem:a,options:l})}return s}function ki(e){return e.replace(/^(.*?)-/,"")}var cs=/^\.(?:(0+)(\*)?|(#+)|(0+)(#+))$/g,us=/^(@+)?(\+|#+)?[rs]?$/g,Bi=/(\*)(0+)|(#+)(0+)|(0+)/g,ds=/^(0+)$/;function fs(e){var t={};return e[e.length-1]==="r"?t.roundingPriority="morePrecision":e[e.length-1]==="s"&&(t.roundingPriority="lessPrecision"),e.replace(us,function(s,i,o){return typeof o!="string"?(t.minimumSignificantDigits=i.length,t.maximumSignificantDigits=i.length):o==="+"?t.minimumSignificantDigits=i.length:i[0]==="#"?t.maximumSignificantDigits=i.length:(t.minimumSignificantDigits=i.length,t.maximumSignificantDigits=i.length+(typeof o=="string"?o.length:0)),""}),t}function ps(e){switch(e){case"sign-auto":return{signDisplay:"auto"};case"sign-accounting":case"()":return{currencySign:"accounting"};case"sign-always":case"+!":return{signDisplay:"always"};case"sign-accounting-always":case"()!":return{signDisplay:"always",currencySign:"accounting"};case"sign-except-zero":case"+?":return{signDisplay:"exceptZero"};case"sign-accounting-except-zero":case"()?":return{signDisplay:"exceptZero",currencySign:"accounting"};case"sign-never":case"+_":return{signDisplay:"never"}}}function Li(e){var t;if(e[0]==="E"&&e[1]==="E"?(t={notation:"engineering"},e=e.slice(2)):e[0]==="E"&&(t={notation:"scientific"},e=e.slice(1)),t){var s=e.slice(0,2);if(s==="+!"?(t.signDisplay="always",e=e.slice(2)):s==="+?"&&(t.signDisplay="exceptZero",e=e.slice(2)),!ds.test(e))throw new Error("Malformed concise eng/scientific notation");t.minimumIntegerDigits=e.length}return t}function ms(e){var t={},s=ps(e);return s||t}function Pi(e){for(var t={},s=0,i=e;s<i.length;s++){var o=i[s];switch(o.stem){case"percent":case"%":t.style="percent";continue;case"%x100":t.style="percent",t.scale=100;continue;case"currency":t.style="currency",t.currency=o.options[0];continue;case"group-off":case",_":t.useGrouping=!1;continue;case"precision-integer":case".":t.maximumFractionDigits=0;continue;case"measure-unit":case"unit":t.style="unit",t.unit=ki(o.options[0]);continue;case"compact-short":case"K":t.notation="compact",t.compactDisplay="short";continue;case"compact-long":case"KK":t.notation="compact",t.compactDisplay="long";continue;case"scientific":t=_(_(_({},t),{notation:"scientific"}),o.options.reduce(function(l,c){return _(_({},l),ms(c))},{}));continue;case"engineering":t=_(_(_({},t),{notation:"engineering"}),o.options.reduce(function(l,c){return _(_({},l),ms(c))},{}));continue;case"notation-simple":t.notation="standard";continue;case"unit-width-narrow":t.currencyDisplay="narrowSymbol",t.unitDisplay="narrow";continue;case"unit-width-short":t.currencyDisplay="code",t.unitDisplay="short";continue;case"unit-width-full-name":t.currencyDisplay="name",t.unitDisplay="long";continue;case"unit-width-iso-code":t.currencyDisplay="symbol";continue;case"scale":t.scale=parseFloat(o.options[0]);continue;case"rounding-mode-floor":t.roundingMode="floor";continue;case"rounding-mode-ceiling":t.roundingMode="ceil";continue;case"rounding-mode-down":t.roundingMode="trunc";continue;case"rounding-mode-up":t.roundingMode="expand";continue;case"rounding-mode-half-even":t.roundingMode="halfEven";continue;case"rounding-mode-half-down":t.roundingMode="halfTrunc";continue;case"rounding-mode-half-up":t.roundingMode="halfExpand";continue;case"integer-width":if(o.options.length>1)throw new RangeError("integer-width stems only accept a single optional option");o.options[0].replace(Bi,function(l,c,h,u,f,v){if(c)t.minimumIntegerDigits=h.length;else{if(u&&f)throw new Error("We currently do not support maximum integer digits");if(v)throw new Error("We currently do not support exact integer digits")}return""});continue}if(ds.test(o.stem)){t.minimumIntegerDigits=o.stem.length;continue}if(cs.test(o.stem)){if(o.options.length>1)throw new RangeError("Fraction-precision stems only accept a single optional option");o.stem.replace(cs,function(l,c,h,u,f,v){return h==="*"?t.minimumFractionDigits=c.length:u&&u[0]==="#"?t.maximumFractionDigits=u.length:f&&v?(t.minimumFractionDigits=f.length,t.maximumFractionDigits=f.length+v.length):(t.minimumFractionDigits=c.length,t.maximumFractionDigits=c.length),""});var r=o.options[0];r==="w"?t=_(_({},t),{trailingZeroDisplay:"stripIfInteger"}):r&&(t=_(_({},t),fs(r)));continue}if(us.test(o.stem)){t=_(_({},t),fs(o.stem));continue}var n=ps(o.stem);n&&(t=_(_({},t),n));var a=Li(o.stem);a&&(t=_(_({},t),a))}return t}var jt={"001":["H","h"],AC:["H","h","hb","hB"],AD:["H","hB"],AE:["h","hB","hb","H"],AF:["H","hb","hB","h"],AG:["h","hb","H","hB"],AI:["H","h","hb","hB"],AL:["h","H","hB"],AM:["H","hB"],AO:["H","hB"],AR:["H","h","hB","hb"],AS:["h","H"],AT:["H","hB"],AU:["h","hb","H","hB"],AW:["H","hB"],AX:["H"],AZ:["H","hB","h"],BA:["H","hB","h"],BB:["h","hb","H","hB"],BD:["h","hB","H"],BE:["H","hB"],BF:["H","hB"],BG:["H","hB","h"],BH:["h","hB","hb","H"],BI:["H","h"],BJ:["H","hB"],BL:["H","hB"],BM:["h","hb","H","hB"],BN:["hb","hB","h","H"],BO:["H","hB","h","hb"],BQ:["H"],BR:["H","hB"],BS:["h","hb","H","hB"],BT:["h","H"],BW:["H","h","hb","hB"],BY:["H","h"],BZ:["H","h","hb","hB"],CA:["h","hb","H","hB"],CC:["H","h","hb","hB"],CD:["hB","H"],CF:["H","h","hB"],CG:["H","hB"],CH:["H","hB","h"],CI:["H","hB"],CK:["H","h","hb","hB"],CL:["H","h","hB","hb"],CM:["H","h","hB"],CN:["H","hB","hb","h"],CO:["h","H","hB","hb"],CP:["H"],CR:["H","h","hB","hb"],CU:["H","h","hB","hb"],CV:["H","hB"],CW:["H","hB"],CX:["H","h","hb","hB"],CY:["h","H","hb","hB"],CZ:["H"],DE:["H","hB"],DG:["H","h","hb","hB"],DJ:["h","H"],DK:["H"],DM:["h","hb","H","hB"],DO:["h","H","hB","hb"],DZ:["h","hB","hb","H"],EA:["H","h","hB","hb"],EC:["H","hB","h","hb"],EE:["H","hB"],EG:["h","hB","hb","H"],EH:["h","hB","hb","H"],ER:["h","H"],ES:["H","hB","h","hb"],ET:["hB","hb","h","H"],FI:["H"],FJ:["h","hb","H","hB"],FK:["H","h","hb","hB"],FM:["h","hb","H","hB"],FO:["H","h"],FR:["H","hB"],GA:["H","hB"],GB:["H","h","hb","hB"],GD:["h","hb","H","hB"],GE:["H","hB","h"],GF:["H","hB"],GG:["H","h","hb","hB"],GH:["h","H"],GI:["H","h","hb","hB"],GL:["H","h"],GM:["h","hb","H","hB"],GN:["H","hB"],GP:["H","hB"],GQ:["H","hB","h","hb"],GR:["h","H","hb","hB"],GT:["H","h","hB","hb"],GU:["h","hb","H","hB"],GW:["H","hB"],GY:["h","hb","H","hB"],HK:["h","hB","hb","H"],HN:["H","h","hB","hb"],HR:["H","hB"],HU:["H","h"],IC:["H","h","hB","hb"],ID:["H"],IE:["H","h","hb","hB"],IL:["H","hB"],IM:["H","h","hb","hB"],IN:["h","H"],IO:["H","h","hb","hB"],IQ:["h","hB","hb","H"],IR:["hB","H"],IS:["H"],IT:["H","hB"],JE:["H","h","hb","hB"],JM:["h","hb","H","hB"],JO:["h","hB","hb","H"],JP:["H","K","h"],KE:["hB","hb","H","h"],KG:["H","h","hB","hb"],KH:["hB","h","H","hb"],KI:["h","hb","H","hB"],KM:["H","h","hB","hb"],KN:["h","hb","H","hB"],KP:["h","H","hB","hb"],KR:["h","H","hB","hb"],KW:["h","hB","hb","H"],KY:["h","hb","H","hB"],KZ:["H","hB"],LA:["H","hb","hB","h"],LB:["h","hB","hb","H"],LC:["h","hb","H","hB"],LI:["H","hB","h"],LK:["H","h","hB","hb"],LR:["h","hb","H","hB"],LS:["h","H"],LT:["H","h","hb","hB"],LU:["H","h","hB"],LV:["H","hB","hb","h"],LY:["h","hB","hb","H"],MA:["H","h","hB","hb"],MC:["H","hB"],MD:["H","hB"],ME:["H","hB","h"],MF:["H","hB"],MG:["H","h"],MH:["h","hb","H","hB"],MK:["H","h","hb","hB"],ML:["H"],MM:["hB","hb","H","h"],MN:["H","h","hb","hB"],MO:["h","hB","hb","H"],MP:["h","hb","H","hB"],MQ:["H","hB"],MR:["h","hB","hb","H"],MS:["H","h","hb","hB"],MT:["H","h"],MU:["H","h"],MV:["H","h"],MW:["h","hb","H","hB"],MX:["H","h","hB","hb"],MY:["hb","hB","h","H"],MZ:["H","hB"],NA:["h","H","hB","hb"],NC:["H","hB"],NE:["H"],NF:["H","h","hb","hB"],NG:["H","h","hb","hB"],NI:["H","h","hB","hb"],NL:["H","hB"],NO:["H","h"],NP:["H","h","hB"],NR:["H","h","hb","hB"],NU:["H","h","hb","hB"],NZ:["h","hb","H","hB"],OM:["h","hB","hb","H"],PA:["h","H","hB","hb"],PE:["H","hB","h","hb"],PF:["H","h","hB"],PG:["h","H"],PH:["h","hB","hb","H"],PK:["h","hB","H"],PL:["H","h"],PM:["H","hB"],PN:["H","h","hb","hB"],PR:["h","H","hB","hb"],PS:["h","hB","hb","H"],PT:["H","hB"],PW:["h","H"],PY:["H","h","hB","hb"],QA:["h","hB","hb","H"],RE:["H","hB"],RO:["H","hB"],RS:["H","hB","h"],RU:["H"],RW:["H","h"],SA:["h","hB","hb","H"],SB:["h","hb","H","hB"],SC:["H","h","hB"],SD:["h","hB","hb","H"],SE:["H"],SG:["h","hb","H","hB"],SH:["H","h","hb","hB"],SI:["H","hB"],SJ:["H"],SK:["H"],SL:["h","hb","H","hB"],SM:["H","h","hB"],SN:["H","h","hB"],SO:["h","H"],SR:["H","hB"],SS:["h","hb","H","hB"],ST:["H","hB"],SV:["H","h","hB","hb"],SX:["H","h","hb","hB"],SY:["h","hB","hb","H"],SZ:["h","hb","H","hB"],TA:["H","h","hb","hB"],TC:["h","hb","H","hB"],TD:["h","H","hB"],TF:["H","h","hB"],TG:["H","hB"],TH:["H","h"],TJ:["H","h"],TL:["H","hB","hb","h"],TM:["H","h"],TN:["h","hB","hb","H"],TO:["h","H"],TR:["H","hB"],TT:["h","hb","H","hB"],TW:["hB","hb","h","H"],TZ:["hB","hb","H","h"],UA:["H","hB","h"],UG:["hB","hb","H","h"],UM:["h","hb","H","hB"],US:["h","hb","H","hB"],UY:["H","h","hB","hb"],UZ:["H","hB","h"],VA:["H","h","hB"],VC:["h","hb","H","hB"],VE:["h","H","hB","hb"],VG:["h","hb","H","hB"],VI:["h","hb","H","hB"],VN:["H","h"],VU:["h","H"],WF:["H","hB"],WS:["h","H"],XK:["H","hB","h"],YE:["h","hB","hb","H"],YT:["H","hB"],ZA:["H","h","hb","hB"],ZM:["h","hb","H","hB"],ZW:["H","h"],"af-ZA":["H","h","hB","hb"],"ar-001":["h","hB","hb","H"],"ca-ES":["H","h","hB"],"en-001":["h","hb","H","hB"],"es-BO":["H","h","hB","hb"],"es-BR":["H","h","hB","hb"],"es-EC":["H","h","hB","hb"],"es-ES":["H","h","hB","hb"],"es-GQ":["H","h","hB","hb"],"es-PE":["H","h","hB","hb"],"fr-CA":["H","h","hB"],"gl-ES":["H","h","hB"],"gu-IN":["hB","hb","h","H"],"hi-IN":["hB","h","H"],"it-CH":["H","h","hB"],"it-IT":["H","h","hB"],"kn-IN":["hB","h","H"],"ml-IN":["hB","h","H"],"mr-IN":["hB","hb","h","H"],"pa-IN":["hB","hb","h","H"],"ta-IN":["hB","h","hb","H"],"te-IN":["hB","h","H"],"zu-ZA":["H","hB","hb","h"]};function Mi(e,t){for(var s="",i=0;i<e.length;i++){var o=e.charAt(i);if(o==="j"){for(var r=0;i+1<e.length&&e.charAt(i+1)===o;)r++,i++;var n=1+(r&1),a=r<2?1:3+(r>>1),l="a",c=Ri(t);for((c=="H"||c=="k")&&(a=0);a-- >0;)s+=l;for(;n-- >0;)s=c+s}else o==="J"?s+="H":s+=o}return s}function Ri(e){var t=e.hourCycle;if(t===void 0&&e.hourCycles&&e.hourCycles.length&&(t=e.hourCycles[0]),t)switch(t){case"h24":return"k";case"h23":return"H";case"h12":return"h";case"h11":return"K";default:throw new Error("Invalid hourCycle")}var s=e.language,i;s!=="root"&&(i=e.maximize().region);var o=jt[i||""]||jt[s||""]||jt["".concat(s,"-001")]||jt["001"];return o[0]}var fe,Hi=new RegExp("^".concat(hs.source,"*")),Oi=new RegExp("".concat(hs.source,"*$"));function x(e,t){return{start:e,end:t}}var Ii=!!String.prototype.startsWith&&"_a".startsWith("a",1),Fi=!!String.fromCodePoint,Ni=!!Object.fromEntries,Di=!!String.prototype.codePointAt,Ui=!!String.prototype.trimStart,zi=!!String.prototype.trimEnd,Gi=!!Number.isSafeInteger,Vi=Gi?Number.isSafeInteger:function(e){return typeof e=="number"&&isFinite(e)&&Math.floor(e)===e&&Math.abs(e)<=9007199254740991},pe=!0;try{var ji=ys("([^\\p{White_Space}\\p{Pattern_Syntax}]*)","yu");pe=((fe=ji.exec("a"))===null||fe===void 0?void 0:fe[0])==="a"}catch{pe=!1}var bs=Ii?function(t,s,i){return t.startsWith(s,i)}:function(t,s,i){return t.slice(i,i+s.length)===s},me=Fi?String.fromCodePoint:function(){for(var t=[],s=0;s<arguments.length;s++)t[s]=arguments[s];for(var i="",o=t.length,r=0,n;o>r;){if(n=t[r++],n>1114111)throw RangeError(n+" is not a valid code point");i+=n<65536?String.fromCharCode(n):String.fromCharCode(((n-=65536)>>10)+55296,n%1024+56320)}return i},gs=Ni?Object.fromEntries:function(t){for(var s={},i=0,o=t;i<o.length;i++){var r=o[i],n=r[0],a=r[1];s[n]=a}return s},vs=Di?function(t,s){return t.codePointAt(s)}:function(t,s){var i=t.length;if(!(s<0||s>=i)){var o=t.charCodeAt(s),r;return o<55296||o>56319||s+1===i||(r=t.charCodeAt(s+1))<56320||r>57343?o:(o-55296<<10)+(r-56320)+65536}},qi=Ui?function(t){return t.trimStart()}:function(t){return t.replace(Hi,"")},Xi=zi?function(t){return t.trimEnd()}:function(t){return t.replace(Oi,"")};function ys(e,t){return new RegExp(e,t)}var be;if(pe){var ws=ys("([^\\p{White_Space}\\p{Pattern_Syntax}]*)","yu");be=function(t,s){var i;ws.lastIndex=s;var o=ws.exec(t);return(i=o[1])!==null&&i!==void 0?i:""}}else be=function(t,s){for(var i=[];;){var o=vs(t,s);if(o===void 0||xs(o)||Ji(o))break;i.push(o),s+=o>=65536?2:1}return me.apply(void 0,i)};var Zi=function(){function e(t,s){s===void 0&&(s={}),this.message=t,this.position={offset:0,line:1,column:1},this.ignoreTag=!!s.ignoreTag,this.locale=s.locale,this.requiresOtherClause=!!s.requiresOtherClause,this.shouldParseSkeletons=!!s.shouldParseSkeletons}return e.prototype.parse=function(){if(this.offset()!==0)throw Error("parser can only be used once");return this.parseMessage(0,"",!1)},e.prototype.parseMessage=function(t,s,i){for(var o=[];!this.isEOF();){var r=this.char();if(r===123){var n=this.parseArgument(t,i);if(n.err)return n;o.push(n.val)}else{if(r===125&&t>0)break;if(r===35&&(s==="plural"||s==="selectordinal")){var a=this.clonePosition();this.bump(),o.push({type:C.pound,location:x(a,this.clonePosition())})}else if(r===60&&!this.ignoreTag&&this.peek()===47){if(i)break;return this.error(w.UNMATCHED_CLOSING_TAG,x(this.clonePosition(),this.clonePosition()))}else if(r===60&&!this.ignoreTag&&ge(this.peek()||0)){var n=this.parseTag(t,s);if(n.err)return n;o.push(n.val)}else{var n=this.parseLiteral(t,s);if(n.err)return n;o.push(n.val)}}}return{val:o,err:null}},e.prototype.parseTag=function(t,s){var i=this.clonePosition();this.bump();var o=this.parseTagName();if(this.bumpSpace(),this.bumpIf("/>"))return{val:{type:C.literal,value:"<".concat(o,"/>"),location:x(i,this.clonePosition())},err:null};if(this.bumpIf(">")){var r=this.parseMessage(t+1,s,!0);if(r.err)return r;var n=r.val,a=this.clonePosition();if(this.bumpIf("</")){if(this.isEOF()||!ge(this.char()))return this.error(w.INVALID_TAG,x(a,this.clonePosition()));var l=this.clonePosition(),c=this.parseTagName();return o!==c?this.error(w.UNMATCHED_CLOSING_TAG,x(l,this.clonePosition())):(this.bumpSpace(),this.bumpIf(">")?{val:{type:C.tag,value:o,children:n,location:x(i,this.clonePosition())},err:null}:this.error(w.INVALID_TAG,x(a,this.clonePosition())))}else return this.error(w.UNCLOSED_TAG,x(i,this.clonePosition()))}else return this.error(w.INVALID_TAG,x(i,this.clonePosition()))},e.prototype.parseTagName=function(){var t=this.offset();for(this.bump();!this.isEOF()&&Yi(this.char());)this.bump();return this.message.slice(t,this.offset())},e.prototype.parseLiteral=function(t,s){for(var i=this.clonePosition(),o="";;){var r=this.tryParseQuote(s);if(r){o+=r;continue}var n=this.tryParseUnquoted(t,s);if(n){o+=n;continue}var a=this.tryParseLeftAngleBracket();if(a){o+=a;continue}break}var l=x(i,this.clonePosition());return{val:{type:C.literal,value:o,location:l},err:null}},e.prototype.tryParseLeftAngleBracket=function(){return!this.isEOF()&&this.char()===60&&(this.ignoreTag||!Wi(this.peek()||0))?(this.bump(),"<"):null},e.prototype.tryParseQuote=function(t){if(this.isEOF()||this.char()!==39)return null;switch(this.peek()){case 39:return this.bump(),this.bump(),"'";case 123:case 60:case 62:case 125:break;case 35:if(t==="plural"||t==="selectordinal")break;return null;default:return null}this.bump();var s=[this.char()];for(this.bump();!this.isEOF();){var i=this.char();if(i===39)if(this.peek()===39)s.push(39),this.bump();else{this.bump();break}else s.push(i);this.bump()}return me.apply(void 0,s)},e.prototype.tryParseUnquoted=function(t,s){if(this.isEOF())return null;var i=this.char();return i===60||i===123||i===35&&(s==="plural"||s==="selectordinal")||i===125&&t>0?null:(this.bump(),me(i))},e.prototype.parseArgument=function(t,s){var i=this.clonePosition();if(this.bump(),this.bumpSpace(),this.isEOF())return this.error(w.EXPECT_ARGUMENT_CLOSING_BRACE,x(i,this.clonePosition()));if(this.char()===125)return this.bump(),this.error(w.EMPTY_ARGUMENT,x(i,this.clonePosition()));var o=this.parseIdentifierIfPossible().value;if(!o)return this.error(w.MALFORMED_ARGUMENT,x(i,this.clonePosition()));if(this.bumpSpace(),this.isEOF())return this.error(w.EXPECT_ARGUMENT_CLOSING_BRACE,x(i,this.clonePosition()));switch(this.char()){case 125:return this.bump(),{val:{type:C.argument,value:o,location:x(i,this.clonePosition())},err:null};case 44:return this.bump(),this.bumpSpace(),this.isEOF()?this.error(w.EXPECT_ARGUMENT_CLOSING_BRACE,x(i,this.clonePosition())):this.parseArgumentOptions(t,s,o,i);default:return this.error(w.MALFORMED_ARGUMENT,x(i,this.clonePosition()))}},e.prototype.parseIdentifierIfPossible=function(){var t=this.clonePosition(),s=this.offset(),i=be(this.message,s),o=s+i.length;this.bumpTo(o);var r=this.clonePosition(),n=x(t,r);return{value:i,location:n}},e.prototype.parseArgumentOptions=function(t,s,i,o){var r,n=this.clonePosition(),a=this.parseIdentifierIfPossible().value,l=this.clonePosition();switch(a){case"":return this.error(w.EXPECT_ARGUMENT_TYPE,x(n,l));case"number":case"date":case"time":{this.bumpSpace();var c=null;if(this.bumpIf(",")){this.bumpSpace();var h=this.clonePosition(),u=this.parseSimpleArgStyleIfPossible();if(u.err)return u;var f=Xi(u.val);if(f.length===0)return this.error(w.EXPECT_ARGUMENT_STYLE,x(this.clonePosition(),this.clonePosition()));var v=x(h,this.clonePosition());c={style:f,styleLocation:v}}var E=this.tryParseArgumentClose(o);if(E.err)return E;var M=x(o,this.clonePosition());if(c&&bs(c==null?void 0:c.style,"::",0)){var G=qi(c.style.slice(2));if(a==="number"){var u=this.parseNumberSkeletonFromString(G,c.styleLocation);return u.err?u:{val:{type:C.number,value:i,location:M,style:u.val},err:null}}else{if(G.length===0)return this.error(w.EXPECT_DATE_TIME_SKELETON,M);var Z=G;this.locale&&(Z=Mi(G,this.locale));var f={type:vt.dateTime,pattern:Z,location:c.styleLocation,parsedOptions:this.shouldParseSkeletons?Ai(Z):{}},R=a==="date"?C.date:C.time;return{val:{type:R,value:i,location:M,style:f},err:null}}}return{val:{type:a==="number"?C.number:a==="date"?C.date:C.time,value:i,location:M,style:(r=c==null?void 0:c.style)!==null&&r!==void 0?r:null},err:null}}case"plural":case"selectordinal":case"select":{var I=this.clonePosition();if(this.bumpSpace(),!this.bumpIf(","))return this.error(w.EXPECT_SELECT_ARGUMENT_OPTIONS,x(I,_({},I)));this.bumpSpace();var W=this.parseIdentifierIfPossible(),T=0;if(a!=="select"&&W.value==="offset"){if(!this.bumpIf(":"))return this.error(w.EXPECT_PLURAL_ARGUMENT_OFFSET_VALUE,x(this.clonePosition(),this.clonePosition()));this.bumpSpace();var u=this.tryParseDecimalInteger(w.EXPECT_PLURAL_ARGUMENT_OFFSET_VALUE,w.INVALID_PLURAL_ARGUMENT_OFFSET_VALUE);if(u.err)return u;this.bumpSpace(),W=this.parseIdentifierIfPossible(),T=u.val}var q=this.tryParsePluralOrSelectOptions(t,a,s,W);if(q.err)return q;var E=this.tryParseArgumentClose(o);if(E.err)return E;var d=x(o,this.clonePosition());return a==="select"?{val:{type:C.select,value:i,options:gs(q.val),location:d},err:null}:{val:{type:C.plural,value:i,options:gs(q.val),offset:T,pluralType:a==="plural"?"cardinal":"ordinal",location:d},err:null}}default:return this.error(w.INVALID_ARGUMENT_TYPE,x(n,l))}},e.prototype.tryParseArgumentClose=function(t){return this.isEOF()||this.char()!==125?this.error(w.EXPECT_ARGUMENT_CLOSING_BRACE,x(t,this.clonePosition())):(this.bump(),{val:!0,err:null})},e.prototype.parseSimpleArgStyleIfPossible=function(){for(var t=0,s=this.clonePosition();!this.isEOF();){var i=this.char();switch(i){case 39:{this.bump();var o=this.clonePosition();if(!this.bumpUntil("'"))return this.error(w.UNCLOSED_QUOTE_IN_ARGUMENT_STYLE,x(o,this.clonePosition()));this.bump();break}case 123:{t+=1,this.bump();break}case 125:{if(t>0)t-=1;else return{val:this.message.slice(s.offset,this.offset()),err:null};break}default:this.bump();break}}return{val:this.message.slice(s.offset,this.offset()),err:null}},e.prototype.parseNumberSkeletonFromString=function(t,s){var i=[];try{i=Ti(t)}catch{return this.error(w.INVALID_NUMBER_SKELETON,s)}return{val:{type:vt.number,tokens:i,location:s,parsedOptions:this.shouldParseSkeletons?Pi(i):{}},err:null}},e.prototype.tryParsePluralOrSelectOptions=function(t,s,i,o){for(var r,n=!1,a=[],l=new Set,c=o.value,h=o.location;;){if(c.length===0){var u=this.clonePosition();if(s!=="select"&&this.bumpIf("=")){var f=this.tryParseDecimalInteger(w.EXPECT_PLURAL_ARGUMENT_SELECTOR,w.INVALID_PLURAL_ARGUMENT_SELECTOR);if(f.err)return f;h=x(u,this.clonePosition()),c=this.message.slice(u.offset,this.offset())}else break}if(l.has(c))return this.error(s==="select"?w.DUPLICATE_SELECT_ARGUMENT_SELECTOR:w.DUPLICATE_PLURAL_ARGUMENT_SELECTOR,h);c==="other"&&(n=!0),this.bumpSpace();var v=this.clonePosition();if(!this.bumpIf("{"))return this.error(s==="select"?w.EXPECT_SELECT_ARGUMENT_SELECTOR_FRAGMENT:w.EXPECT_PLURAL_ARGUMENT_SELECTOR_FRAGMENT,x(this.clonePosition(),this.clonePosition()));var E=this.parseMessage(t+1,s,i);if(E.err)return E;var M=this.tryParseArgumentClose(v);if(M.err)return M;a.push([c,{value:E.val,location:x(v,this.clonePosition())}]),l.add(c),this.bumpSpace(),r=this.parseIdentifierIfPossible(),c=r.value,h=r.location}return a.length===0?this.error(s==="select"?w.EXPECT_SELECT_ARGUMENT_SELECTOR:w.EXPECT_PLURAL_ARGUMENT_SELECTOR,x(this.clonePosition(),this.clonePosition())):this.requiresOtherClause&&!n?this.error(w.MISSING_OTHER_CLAUSE,x(this.clonePosition(),this.clonePosition())):{val:a,err:null}},e.prototype.tryParseDecimalInteger=function(t,s){var i=1,o=this.clonePosition();this.bumpIf("+")||this.bumpIf("-")&&(i=-1);for(var r=!1,n=0;!this.isEOF();){var a=this.char();if(a>=48&&a<=57)r=!0,n=n*10+(a-48),this.bump();else break}var l=x(o,this.clonePosition());return r?(n*=i,Vi(n)?{val:n,err:null}:this.error(s,l)):this.error(t,l)},e.prototype.offset=function(){return this.position.offset},e.prototype.isEOF=function(){return this.offset()===this.message.length},e.prototype.clonePosition=function(){return{offset:this.position.offset,line:this.position.line,column:this.position.column}},e.prototype.char=function(){var t=this.position.offset;if(t>=this.message.length)throw Error("out of bound");var s=vs(this.message,t);if(s===void 0)throw Error("Offset ".concat(t," is at invalid UTF-16 code unit boundary"));return s},e.prototype.error=function(t,s){return{val:null,err:{kind:t,message:this.message,location:s}}},e.prototype.bump=function(){if(!this.isEOF()){var t=this.char();t===10?(this.position.line+=1,this.position.column=1,this.position.offset+=1):(this.position.column+=1,this.position.offset+=t<65536?1:2)}},e.prototype.bumpIf=function(t){if(bs(this.message,t,this.offset())){for(var s=0;s<t.length;s++)this.bump();return!0}return!1},e.prototype.bumpUntil=function(t){var s=this.offset(),i=this.message.indexOf(t,s);return i>=0?(this.bumpTo(i),!0):(this.bumpTo(this.message.length),!1)},e.prototype.bumpTo=function(t){if(this.offset()>t)throw Error("targetOffset ".concat(t," must be greater than or equal to the current offset ").concat(this.offset()));for(t=Math.min(t,this.message.length);;){var s=this.offset();if(s===t)break;if(s>t)throw Error("targetOffset ".concat(t," is at invalid UTF-16 code unit boundary"));if(this.bump(),this.isEOF())break}},e.prototype.bumpSpace=function(){for(;!this.isEOF()&&xs(this.char());)this.bump()},e.prototype.peek=function(){if(this.isEOF())return null;var t=this.char(),s=this.offset(),i=this.message.charCodeAt(s+(t>=65536?2:1));return i??null},e}();function ge(e){return e>=97&&e<=122||e>=65&&e<=90}function Wi(e){return ge(e)||e===47}function Yi(e){return e===45||e===46||e>=48&&e<=57||e===95||e>=97&&e<=122||e>=65&&e<=90||e==183||e>=192&&e<=214||e>=216&&e<=246||e>=248&&e<=893||e>=895&&e<=8191||e>=8204&&e<=8205||e>=8255&&e<=8256||e>=8304&&e<=8591||e>=11264&&e<=12271||e>=12289&&e<=55295||e>=63744&&e<=64975||e>=65008&&e<=65533||e>=65536&&e<=983039}function xs(e){return e>=9&&e<=13||e===32||e===133||e>=8206&&e<=8207||e===8232||e===8233}function Ji(e){return e>=33&&e<=35||e===36||e>=37&&e<=39||e===40||e===41||e===42||e===43||e===44||e===45||e>=46&&e<=47||e>=58&&e<=59||e>=60&&e<=62||e>=63&&e<=64||e===91||e===92||e===93||e===94||e===96||e===123||e===124||e===125||e===126||e===161||e>=162&&e<=165||e===166||e===167||e===169||e===171||e===172||e===174||e===176||e===177||e===182||e===187||e===191||e===215||e===247||e>=8208&&e<=8213||e>=8214&&e<=8215||e===8216||e===8217||e===8218||e>=8219&&e<=8220||e===8221||e===8222||e===8223||e>=8224&&e<=8231||e>=8240&&e<=8248||e===8249||e===8250||e>=8251&&e<=8254||e>=8257&&e<=8259||e===8260||e===8261||e===8262||e>=8263&&e<=8273||e===8274||e===8275||e>=8277&&e<=8286||e>=8592&&e<=8596||e>=8597&&e<=8601||e>=8602&&e<=8603||e>=8604&&e<=8607||e===8608||e>=8609&&e<=8610||e===8611||e>=8612&&e<=8613||e===8614||e>=8615&&e<=8621||e===8622||e>=8623&&e<=8653||e>=8654&&e<=8655||e>=8656&&e<=8657||e===8658||e===8659||e===8660||e>=8661&&e<=8691||e>=8692&&e<=8959||e>=8960&&e<=8967||e===8968||e===8969||e===8970||e===8971||e>=8972&&e<=8991||e>=8992&&e<=8993||e>=8994&&e<=9e3||e===9001||e===9002||e>=9003&&e<=9083||e===9084||e>=9085&&e<=9114||e>=9115&&e<=9139||e>=9140&&e<=9179||e>=9180&&e<=9185||e>=9186&&e<=9254||e>=9255&&e<=9279||e>=9280&&e<=9290||e>=9291&&e<=9311||e>=9472&&e<=9654||e===9655||e>=9656&&e<=9664||e===9665||e>=9666&&e<=9719||e>=9720&&e<=9727||e>=9728&&e<=9838||e===9839||e>=9840&&e<=10087||e===10088||e===10089||e===10090||e===10091||e===10092||e===10093||e===10094||e===10095||e===10096||e===10097||e===10098||e===10099||e===10100||e===10101||e>=10132&&e<=10175||e>=10176&&e<=10180||e===10181||e===10182||e>=10183&&e<=10213||e===10214||e===10215||e===10216||e===10217||e===10218||e===10219||e===10220||e===10221||e===10222||e===10223||e>=10224&&e<=10239||e>=10240&&e<=10495||e>=10496&&e<=10626||e===10627||e===10628||e===10629||e===10630||e===10631||e===10632||e===10633||e===10634||e===10635||e===10636||e===10637||e===10638||e===10639||e===10640||e===10641||e===10642||e===10643||e===10644||e===10645||e===10646||e===10647||e===10648||e>=10649&&e<=10711||e===10712||e===10713||e===10714||e===10715||e>=10716&&e<=10747||e===10748||e===10749||e>=10750&&e<=11007||e>=11008&&e<=11055||e>=11056&&e<=11076||e>=11077&&e<=11078||e>=11079&&e<=11084||e>=11085&&e<=11123||e>=11124&&e<=11125||e>=11126&&e<=11157||e===11158||e>=11159&&e<=11263||e>=11776&&e<=11777||e===11778||e===11779||e===11780||e===11781||e>=11782&&e<=11784||e===11785||e===11786||e===11787||e===11788||e===11789||e>=11790&&e<=11798||e===11799||e>=11800&&e<=11801||e===11802||e===11803||e===11804||e===11805||e>=11806&&e<=11807||e===11808||e===11809||e===11810||e===11811||e===11812||e===11813||e===11814||e===11815||e===11816||e===11817||e>=11818&&e<=11822||e===11823||e>=11824&&e<=11833||e>=11834&&e<=11835||e>=11836&&e<=11839||e===11840||e===11841||e===11842||e>=11843&&e<=11855||e>=11856&&e<=11857||e===11858||e>=11859&&e<=11903||e>=12289&&e<=12291||e===12296||e===12297||e===12298||e===12299||e===12300||e===12301||e===12302||e===12303||e===12304||e===12305||e>=12306&&e<=12307||e===12308||e===12309||e===12310||e===12311||e===12312||e===12313||e===12314||e===12315||e===12316||e===12317||e>=12318&&e<=12319||e===12320||e===12336||e===64830||e===64831||e>=65093&&e<=65094}function ve(e){e.forEach(function(t){if(delete t.location,rs(t)||ns(t))for(var s in t.options)delete t.options[s].location,ve(t.options[s].value);else ss(t)&&ls(t.style)||(is(t)||os(t))&&de(t.style)?delete t.style.location:as(t)&&ve(t.children)})}function Ki(e,t){t===void 0&&(t={}),t=_({shouldParseSkeletons:!0,requiresOtherClause:!0},t);var s=new Zi(e,t).parse();if(s.err){var i=SyntaxError(w[s.err.kind]);throw i.location=s.err.location,i.originalMessage=s.err.message,i}return t!=null&&t.captureLocation||ve(s.val),s.val}function ye(e,t){var s=t&&t.cache?t.cache:oo,i=t&&t.serializer?t.serializer:io,o=t&&t.strategy?t.strategy:to;return o(e,{cache:s,serializer:i})}function Qi(e){return e==null||typeof e=="number"||typeof e=="boolean"}function _s(e,t,s,i){var o=Qi(i)?i:s(i),r=t.get(o);return typeof r>"u"&&(r=e.call(this,i),t.set(o,r)),r}function Es(e,t,s){var i=Array.prototype.slice.call(arguments,3),o=s(i),r=t.get(o);return typeof r>"u"&&(r=e.apply(this,i),t.set(o,r)),r}function we(e,t,s,i,o){return s.bind(t,e,i,o)}function to(e,t){var s=e.length===1?_s:Es;return we(e,this,s,t.cache.create(),t.serializer)}function eo(e,t){return we(e,this,Es,t.cache.create(),t.serializer)}function so(e,t){return we(e,this,_s,t.cache.create(),t.serializer)}var io=function(){return JSON.stringify(arguments)};function xe(){this.cache=Object.create(null)}xe.prototype.get=function(e){return this.cache[e]},xe.prototype.set=function(e,t){this.cache[e]=t};var oo={create:function(){return new xe}},_e={variadic:eo,monadic:so},yt;(function(e){e.MISSING_VALUE="MISSING_VALUE",e.INVALID_VALUE="INVALID_VALUE",e.MISSING_INTL_API="MISSING_INTL_API"})(yt||(yt={}));var qt=function(e){Vt(t,e);function t(s,i,o){var r=e.call(this,s)||this;return r.code=i,r.originalMessage=o,r}return t.prototype.toString=function(){return"[formatjs Error: ".concat(this.code,"] ").concat(this.message)},t}(Error),Cs=function(e){Vt(t,e);function t(s,i,o,r){return e.call(this,'Invalid values for "'.concat(s,'": "').concat(i,'". Options are "').concat(Object.keys(o).join('", "'),'"'),yt.INVALID_VALUE,r)||this}return t}(qt),ro=function(e){Vt(t,e);function t(s,i,o){return e.call(this,'Value for "'.concat(s,'" must be of type ').concat(i),yt.INVALID_VALUE,o)||this}return t}(qt),no=function(e){Vt(t,e);function t(s,i){return e.call(this,'The intl string context variable "'.concat(s,'" was not provided to the string "').concat(i,'"'),yt.MISSING_VALUE,i)||this}return t}(qt),O;(function(e){e[e.literal=0]="literal",e[e.object=1]="object"})(O||(O={}));function ao(e){return e.length<2?e:e.reduce(function(t,s){var i=t[t.length-1];return!i||i.type!==O.literal||s.type!==O.literal?t.push(s):i.value+=s.value,t},[])}function lo(e){return typeof e=="function"}function Xt(e,t,s,i,o,r,n){if(e.length===1&&es(e[0]))return[{type:O.literal,value:e[0].value}];for(var a=[],l=0,c=e;l<c.length;l++){var h=c[l];if(es(h)){a.push({type:O.literal,value:h.value});continue}if(Ci(h)){typeof r=="number"&&a.push({type:O.literal,value:s.getNumberFormat(t).format(r)});continue}var u=h.value;if(!(o&&u in o))throw new no(u,n);var f=o[u];if(Ei(h)){(!f||typeof f=="string"||typeof f=="number")&&(f=typeof f=="string"||typeof f=="number"?String(f):""),a.push({type:typeof f=="string"?O.literal:O.object,value:f});continue}if(is(h)){var v=typeof h.style=="string"?i.date[h.style]:de(h.style)?h.style.parsedOptions:void 0;a.push({type:O.literal,value:s.getDateTimeFormat(t,v).format(f)});continue}if(os(h)){var v=typeof h.style=="string"?i.time[h.style]:de(h.style)?h.style.parsedOptions:i.time.medium;a.push({type:O.literal,value:s.getDateTimeFormat(t,v).format(f)});continue}if(ss(h)){var v=typeof h.style=="string"?i.number[h.style]:ls(h.style)?h.style.parsedOptions:void 0;v&&v.scale&&(f=f*(v.scale||1)),a.push({type:O.literal,value:s.getNumberFormat(t,v).format(f)});continue}if(as(h)){var E=h.children,M=h.value,G=o[M];if(!lo(G))throw new ro(M,"function",n);var Z=Xt(E,t,s,i,o,r),R=G(Z.map(function(T){return T.value}));Array.isArray(R)||(R=[R]),a.push.apply(a,R.map(function(T){return{type:typeof T=="string"?O.literal:O.object,value:T}}))}if(rs(h)){var I=h.options[f]||h.options.other;if(!I)throw new Cs(h.value,f,Object.keys(h.options),n);a.push.apply(a,Xt(I.value,t,s,i,o));continue}if(ns(h)){var I=h.options["=".concat(f)];if(!I){if(!Intl.PluralRules)throw new qt(`Intl.PluralRules is not available in this environment.
Try polyfilling it using "@formatjs/intl-pluralrules"
`,yt.MISSING_INTL_API,n);var W=s.getPluralRules(t,{type:h.pluralType}).select(f-(h.offset||0));I=h.options[W]||h.options.other}if(!I)throw new Cs(h.value,f,Object.keys(h.options),n);a.push.apply(a,Xt(I.value,t,s,i,o,f-(h.offset||0)));continue}}return ao(a)}function ho(e,t){return t?_(_(_({},e||{}),t||{}),Object.keys(e).reduce(function(s,i){return s[i]=_(_({},e[i]),t[i]||{}),s},{})):e}function co(e,t){return t?Object.keys(e).reduce(function(s,i){return s[i]=ho(e[i],t[i]),s},_({},e)):e}function Ee(e){return{create:function(){return{get:function(t){return e[t]},set:function(t,s){e[t]=s}}}}}function uo(e){return e===void 0&&(e={number:{},dateTime:{},pluralRules:{}}),{getNumberFormat:ye(function(){for(var t,s=[],i=0;i<arguments.length;i++)s[i]=arguments[i];return new((t=Intl.NumberFormat).bind.apply(t,ue([void 0],s,!1)))},{cache:Ee(e.number),strategy:_e.variadic}),getDateTimeFormat:ye(function(){for(var t,s=[],i=0;i<arguments.length;i++)s[i]=arguments[i];return new((t=Intl.DateTimeFormat).bind.apply(t,ue([void 0],s,!1)))},{cache:Ee(e.dateTime),strategy:_e.variadic}),getPluralRules:ye(function(){for(var t,s=[],i=0;i<arguments.length;i++)s[i]=arguments[i];return new((t=Intl.PluralRules).bind.apply(t,ue([void 0],s,!1)))},{cache:Ee(e.pluralRules),strategy:_e.variadic})}}var Ss=function(){function e(t,s,i,o){var r=this;if(s===void 0&&(s=e.defaultLocale),this.formatterCache={number:{},dateTime:{},pluralRules:{}},this.format=function(l){var c=r.formatToParts(l);if(c.length===1)return c[0].value;var h=c.reduce(function(u,f){return!u.length||f.type!==O.literal||typeof u[u.length-1]!="string"?u.push(f.value):u[u.length-1]+=f.value,u},[]);return h.length<=1?h[0]||"":h},this.formatToParts=function(l){return Xt(r.ast,r.locales,r.formatters,r.formats,l,void 0,r.message)},this.resolvedOptions=function(){var l;return{locale:((l=r.resolvedLocale)===null||l===void 0?void 0:l.toString())||Intl.NumberFormat.supportedLocalesOf(r.locales)[0]}},this.getAst=function(){return r.ast},this.locales=s,this.resolvedLocale=e.resolveLocale(s),typeof t=="string"){if(this.message=t,!e.__parse)throw new TypeError("IntlMessageFormat.__parse must be set to process `message` of type `string`");var n=o||{};n.formatters;var a=_i(n,["formatters"]);this.ast=e.__parse(t,_(_({},a),{locale:this.resolvedLocale}))}else this.ast=t;if(!Array.isArray(this.ast))throw new TypeError("A message must be provided as a String or AST.");this.formats=co(e.formats,i),this.formatters=o&&o.formatters||uo(this.formatterCache)}return Object.defineProperty(e,"defaultLocale",{get:function(){return e.memoizedDefaultLocale||(e.memoizedDefaultLocale=new Intl.NumberFormat().resolvedOptions().locale),e.memoizedDefaultLocale},enumerable:!1,configurable:!0}),e.memoizedDefaultLocale=null,e.resolveLocale=function(t){if(!(typeof Intl.Locale>"u")){var s=Intl.NumberFormat.supportedLocalesOf(t);return s.length>0?new Intl.Locale(s[0]):new Intl.Locale(typeof t=="string"?t:t[0])}},e.__parse=Ki,e.formats={number:{integer:{maximumFractionDigits:0},currency:{style:"currency"},percent:{style:"percent"}},date:{short:{month:"numeric",day:"numeric",year:"2-digit"},medium:{month:"short",day:"numeric",year:"numeric"},long:{month:"long",day:"numeric",year:"numeric"},full:{weekday:"long",month:"long",day:"numeric",year:"numeric"}},time:{short:{hour:"numeric",minute:"numeric"},medium:{hour:"numeric",minute:"numeric",second:"numeric"},long:{hour:"numeric",minute:"numeric",second:"numeric",timeZoneName:"short"},full:{hour:"numeric",minute:"numeric",second:"numeric",timeZoneName:"short"}}},e}();const fo=["<a"],po={a:{allowedAttributes:["href","target","class"]}},mo=(e=[])=>e.some(t=>fo.indexOf(t)>-1),bo=(e,t,s,i,o)=>{switch(e){case"a":{let r=s.href||"";r&&typeof r=="string"&&r.replaceAll&&(r=r.replaceAll('"',"")),(!r||r.includes("#"))&&(o!=null&&o.ContentLink)&&(r=String(o.ContentLink));let n=s.class||"";return n&&typeof n=="string"&&n.replaceAll&&(n=n.replaceAll('"',"")),{tagContent:i,[t]:a=>`<a class="${n}" href=${r} target="${s.target||""}">${a}</a>`}}default:return{}}},go=(e={},t={})=>{const s=Object.keys(e);let i={...t};return s.forEach(o=>{const r=e[o],n=bo(r.name,o,r.attributes,r.tagContent||"",i);i={...i,...n}}),i},vo=(e="",t="")=>{const s=po[e],i={};return t.trim().split(" ").forEach(r=>{const n=r.split("="),a=n[0]||"",l=n.length>1?n[1]:"";s&&s.allowedAttributes.indexOf(a)>-1&&(i[a]=l)}),i},yo=(e="",t)=>{let s="";const i={};let o=0,r=!1,n="",a=0,l=0,c=0,h=0;const u="tag";try{for(;o<=e.length;){if(e[o]==="<"&&!r)n=e[o+1],r=!0,a=o+2,o=o+2;else if(e[o]===">"&&r){l=o;const f={name:n,attributes:vo(n,e.slice(a,l))};i[`${u}${++h}`]=f}else if(e[o]==="<"&&r){c=o;const f=e.slice(l+1,c);o=o+3,s=s+`<${u+h}>${f}</${u+h}>`,r=!1}else r||(s=s+(e[o]||""));o=o+1}return{message:s,values:go(i,t)}}catch{return null}},wo=e=>(e||"").replace(/_/g,"-");class it{constructor(t){var s,i;this.config=t,this.locale=wo((s=this.config)==null?void 0:s.locale[0]),this.messages=(i=this.config)==null?void 0:i.messages}formatMessage(t,s){var o,r,n,a;const i=(o=this.messages)==null?void 0:o[t];if(!i)return console.warn(`Message key "${t}" not found for locale "${this.locale}"`),t;try{return new Ss(i,this.locale).format(s)}catch(l){const c=(((r=this.messages)==null?void 0:r[t])||"").split(" ");if(mo(c)){const h=yo(((n=this.messages)==null?void 0:n[t])||"",s||{});if(h)return`${new Ss(h.message).format(h.values)}`}return console.warn(l,(a=this.messages)==null?void 0:a[t]),""}}}const xo=Symbol("appConfig"),Mt=Symbol("analytics"),As=Symbol("api"),Rt=Symbol("localization"),_o=b`
  <svg
    viewBox="0 0 14 13"
    fill="none"
    xmlns="http://www.w3.org/2000/svg"
    aria-hidden="true"
  >
    <path
      d="M11.4545 5.47368L12.25 3.59211L14 2.73684L12.25 1.88158L11.4545 0L10.6591 1.88158L8.90909 2.73684L10.6591 3.59211L11.4545 5.47368ZM6.68182 5.81579L5.09091 2.05263L3.5 5.81579L0 7.52632L3.5 9.23684L5.09091 13L6.68182 9.23684L10.1818 7.52632L6.68182 5.81579Z"
    />
  </svg>
`,$e=class $e extends k{render(){return b`
      <svg
        width="30"
        height="30"
        viewBox="0 0 15 15"
        fill="none"
        aria-hidden="true"
      >
        <path
          d="M7.50003 2.6087C8.2204 2.6087 8.80437 2.02472 8.80437 1.30435C8.80437 0.583976 8.2204 0 7.50003 0C6.77966 0 6.19568 0.583976 6.19568 1.30435C6.19568 2.02472 6.77966 2.6087 7.50003 2.6087Z"
          fill="black"
        />
        <path
          d="M7.49995 15.0001C7.86014 15.0001 8.15213 14.7082 8.15213 14.348C8.15213 13.9878 7.86014 13.6958 7.49995 13.6958C7.13977 13.6958 6.84778 13.9878 6.84778 14.348C6.84778 14.7082 7.13977 15.0001 7.49995 15.0001Z"
          fill="black"
        />
        <path
          d="M4.83472 3.20986C5.40658 2.87969 5.6025 2.14845 5.27233 1.5766C4.94216 1.00474 4.21093 0.80882 3.63907 1.13899C3.06722 1.46916 2.87129 2.2004 3.20146 2.77225C3.53163 3.34411 4.26287 3.54003 4.83472 3.20986Z"
          fill="black"
        />
        <path
          d="M11.0343 13.9479C11.2942 13.7978 11.3833 13.4654 11.2332 13.2055C11.0831 12.9456 10.7507 12.8565 10.4908 13.0066C10.2309 13.1567 10.1418 13.489 10.2919 13.749C10.442 14.0089 10.7743 14.098 11.0343 13.9479Z"
          fill="black"
        />
        <path
          d="M2.79108 5.11245C3.09123 4.59258 2.91312 3.92782 2.39325 3.62767C1.87338 3.32751 1.20862 3.50562 0.908468 4.02549C0.608314 4.54536 0.786427 5.21012 1.30629 5.51028C1.82616 5.81043 2.49092 5.63232 2.79108 5.11245Z"
          fill="black"
        />
        <path
          d="M13.5263 11.3014C13.6464 11.0935 13.5752 10.8276 13.3672 10.7075C13.1593 10.5874 12.8934 10.6587 12.7733 10.8666C12.6532 11.0746 12.7245 11.3405 12.9324 11.4606C13.1404 11.5806 13.4063 11.5094 13.5263 11.3014Z"
          fill="black"
        />
        <path
          d="M0.978261 8.80418C1.51854 8.80418 1.95652 8.3662 1.95652 7.82592C1.95652 7.28564 1.51854 6.84766 0.978261 6.84766C0.437982 6.84766 0 7.28564 0 7.82592C0 8.3662 0.437982 8.80418 0.978261 8.80418Z"
          fill="black"
        />
        <path
          d="M14.0218 8.15217C14.2019 8.15217 14.3479 8.00618 14.3479 7.82609C14.3479 7.64599 14.2019 7.5 14.0218 7.5C13.8417 7.5 13.6957 7.64599 13.6957 7.82609C13.6957 8.00618 13.8417 8.15217 14.0218 8.15217Z"
          fill="black"
        />
        <path
          d="M2.28301 11.8418C2.6989 11.6017 2.84139 11.0699 2.60127 10.654C2.36115 10.2381 1.82934 10.0956 1.41344 10.3357C0.997549 10.5758 0.855059 11.1077 1.09518 11.5236C1.33531 11.9394 1.86711 12.0819 2.28301 11.8418Z"
          fill="black"
        />
        <path
          d="M13.2599 4.75122C13.3639 4.69119 13.3995 4.55824 13.3395 4.45427C13.2794 4.35029 13.1465 4.31467 13.0425 4.3747C12.9385 4.43473 12.9029 4.56769 12.9629 4.67166C13.023 4.77563 13.1559 4.81126 13.2599 4.75122Z"
          fill="black"
        />
        <path
          d="M4.90126 13.8568C5.11137 13.4929 4.98669 13.0276 4.62279 12.8175C4.25888 12.6074 3.79355 12.7321 3.58344 13.096C3.37333 13.4599 3.49801 13.9252 3.86192 14.1353C4.22582 14.3454 4.69116 14.2207 4.90126 13.8568Z"
          fill="black"
        />
      </svg>
    `}};$e.styles=B`
    @keyframes rotation {
      from {
        transform: rotate(0deg);
      }
      to {
        transform: rotate(359deg);
      }
    }
    svg {
      animation: rotation 2s infinite linear;
    }
  `;let Ce=$e;customElements.define("swat-hosted-loading-icon",Ce);class Eo{constructor(t,s={}){this.isActive=!1,this.lastFocusedElement=null,this.focusableElements=[],this.handleKeyDown=i=>{if(this.isActive)switch(i.key){case"Escape":this.options.onEscape&&(i.preventDefault(),this.options.onEscape());break;case"Tab":this.handleTabKey(i);break}},this.handleFocusIn=i=>{if(!this.isActive)return;const o=i.target;this.isElementInContainer(o)||(i.preventDefault(),this.focusableElements.length>0&&this.focusableElements[0].focus())},this.container=t,this.options=Object.assign({includeShadowDOM:!0},s)}activate(){if(this.isActive)return;this.isActive=!0,this.lastFocusedElement=document.activeElement,this.updateFocusableElements(),this.addEventListeners();const t=this.options.initialFocusElement||this.focusableElements[0];t&&t.focus()}deactivate(){if(!this.isActive)return;this.isActive=!1,this.removeEventListeners();const t=this.options.returnFocusElement||this.lastFocusedElement;t&&typeof t.focus=="function"&&t.focus()}updateFocusableElements(){this.focusableElements=this.getFocusableElements(this.container)}getFocusableElements(t){const s=["button:not([disabled])","input:not([disabled])","select:not([disabled])","textarea:not([disabled])","a[href]",'[tabindex]:not([tabindex="-1"])',"label[for]",'[contenteditable="true"]'],i=[];return s.forEach(l=>{const c=Array.from(t.querySelectorAll(l));i.push(...c.filter(h=>this.isVisible(h)))}),t.querySelectorAll("slot").forEach(l=>{l.assignedElements().forEach(h=>{s.forEach(u=>{h.matches(u)&&this.isVisible(h)&&i.push(h)}),s.forEach(u=>{const f=Array.from(h.querySelectorAll(u));i.push(...f.filter(v=>this.isVisible(v)))}),h.shadowRoot&&i.push(...this.getFocusableElements(h.shadowRoot))})}),this.options.includeShadowDOM&&t.querySelectorAll("*").forEach(c=>{c.shadowRoot&&i.push(...this.getFocusableElements(c.shadowRoot))}),Array.from(new Set(i)).filter(l=>l.tabIndex!==-1).sort((l,c)=>{const h=l.compareDocumentPosition(c);if(h&Node.DOCUMENT_POSITION_FOLLOWING)return-1;if(h&Node.DOCUMENT_POSITION_PRECEDING)return 1;let u=l,f=c;for(;u.parentElement;)u=u.parentElement;for(;f.parentElement;)f=f.parentElement;if(u.parentNode&&"host"in u.parentNode&&(u=u.parentNode.host),f.parentNode&&"host"in f.parentNode&&(f=f.parentNode.host),u!==f){const v=u.compareDocumentPosition(f);if(v&Node.DOCUMENT_POSITION_FOLLOWING)return-1;if(v&Node.DOCUMENT_POSITION_PRECEDING)return 1}return 0})}isVisible(t){const s=window.getComputedStyle(t);return s.display!=="none"&&s.visibility!=="hidden"&&t.offsetWidth>0&&t.offsetHeight>0}addEventListeners(){document.addEventListener("keydown",this.handleKeyDown),document.addEventListener("focusin",this.handleFocusIn)}removeEventListeners(){document.removeEventListener("keydown",this.handleKeyDown),document.removeEventListener("focusin",this.handleFocusIn)}handleTabKey(t){if(t.preventDefault(),this.updateFocusableElements(),this.focusableElements.length===0)return;if(this.focusableElements.length===1){this.focusableElements[0].focus();return}const s=this.getActuallyFocusedElement();let i=this.focusableElements.indexOf(s);i===-1&&(i=t.shiftKey?this.focusableElements.length:-1);let o;t.shiftKey?o=i<=0?this.focusableElements.length-1:i-1:o=i>=this.focusableElements.length-1?0:i+1;const r=this.focusableElements[o];r&&(r.focus(),setTimeout(()=>{var n;this.getActuallyFocusedElement()!==r&&((n=this.focusableElements[0])===null||n===void 0||n.focus())},10))}getActuallyFocusedElement(){let t=document.activeElement;for(;t&&t.shadowRoot&&t.shadowRoot.activeElement;)t=t.shadowRoot.activeElement;return t}isElementInContainer(t){var s;if(this.container.contains(t)||this.focusableElements.includes(t))return!0;let i=t;for(;i;){if(i===this.container)return!0;if(i.parentNode)i=i.parentNode;else if(i instanceof ShadowRoot)i=i.host;else break}const o=(s=this.container.shadowRoot)===null||s===void 0?void 0:s.querySelectorAll("slot");if(o)for(const r of o){const n=r.assignedElements();for(const a of n)if(a===t||a.contains(t))return!0}return!1}updateOptions(t){this.options=Object.assign(Object.assign({},this.options),t)}isActivated(){return this.isActive}getFocusableElementsList(){return[...this.focusableElements]}}/**
 * @license
 * Copyright 2018 Google LLC
 * SPDX-License-Identifier: BSD-3-Clause
 */const $s="important",Co=" !"+$s,Ts=oe(class extends re{constructor(e){var t;if(super(e),e.type!==ie.ATTRIBUTE||e.name!=="style"||((t=e.strings)==null?void 0:t.length)>2)throw Error("The `styleMap` directive must be used in the `style` attribute and must be the only part in the attribute.")}render(e){return Object.keys(e).reduce((t,s)=>{const i=e[s];return i==null?t:t+`${s=s.includes("-")?s:s.replace(/(?:^(webkit|moz|ms|o)|)(?=[A-Z])/g,"-$&").toLowerCase()}:${i};`},"")}update(e,[t]){const{style:s}=e.element;if(this.ft===void 0)return this.ft=new Set(Object.keys(t)),this.render(t);for(const i of this.ft)t[i]==null&&(this.ft.delete(i),i.includes("-")?s.removeProperty(i):s[i]=null);for(const i in t){const o=t[i];if(o!=null){this.ft.add(i);const r=typeof o=="string"&&o.endsWith(Co);i.includes("-")||r?s.setProperty(i,r?o.slice(0,-11):o,r?$s:""):s[i]=o}}return et}});var ot=function(e,t,s,i){var o=arguments.length,r=o<3?t:i===null?i=Object.getOwnPropertyDescriptor(t,s):i,n;if(typeof Reflect=="object"&&typeof Reflect.decorate=="function")r=Reflect.decorate(e,t,s,i);else for(var a=e.length-1;a>=0;a--)(n=e[a])&&(r=(o<3?n(r):o>3?n(t,s,r):n(t,s))||r);return o>3&&r&&Object.defineProperty(t,s,r),r};let J=class extends k{constructor(){super(),this.open=!1,this.title="",this.closeButtonAriaLabel="",this.OnClose=()=>{this.open=!this.open},this.modalLoaded=()=>{},this.defaultClose=()=>{this.open=!1,this.OnClose()},this.styleConfig={closeButton:{size:""},minHeight:"150px",maxWidth:"780px",header:{}},this.errorType=!1,this.focusManager=null,this.previouslyFocusedElement=null,this.originalBodyOverflow=""}static generateStyles(){return B`
      dialog.bv-modal-container {
        border: none;
        padding: 0;
        margin: 0;
        max-width: 100vw;
        max-height: 100vh;
        width: 100%;
        height: 100%;
        background: transparent;
        overflow-y: auto;
      }
      dialog.bv-modal-container::backdrop {
        background-color: rgba(0, 0, 0, 0.5);
      }

      .bv-modal-header {
        margin-bottom: 10px;
        width: 50%;
        justify-content: space-between;
      }
      .error .bv-modal-header {
        width: 100%;
        margin-bottom: 0;
        padding-left: 40px;
      }

      .bv-modal-close {
        width: 50%;
        text-align: right;
      }
      .error .bv-modal-close {
        width: auto;
      }
      .bv-modal-title {
        margin: 0;
        font-family: var(--fonts-section-header-family, Arial);
        color: var(--fonts-section-header-color, #000);
        font-size: var(--fonts-section-header-size, 1.5rem);
        font-weight: var(
          --fonts-section-header-character-styles-font-weight,
          bold
        );
        text-decoration: var(--fonts-section-header-text-transform, none);
        font-style: var(
          --fonts-section-header-character-styles-font-style,
          normal
        );
        line-height: var(--fonts-section-header-line-height, 1.5);
      }
      hr {
        margin: 0;
        border-top: 1px solid #bbb;
      }

      .bv-modal-header-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
      }
      .bv-modal {
        position: relative;
        background-color: white;
        padding: 20px;
        z-index: 2;
        margin: auto;
        top: 50%;
        transform: translateY(-50%);
        width: 100%;
        box-sizing: border-box;
        min-height: 150px;
      }
      @media (max-width: 500px) {
        .bv-modal {
          height: 100%;
          margin: 0;
          top: 0;
          transform: none;
          display: flex;
          flex-direction: column;
          position: relative;
          justify-content: flex-start;
          align-items: stretch;
          overflow-y: auto;
        }

        .bv-modal-header-container {
          position: relative;
          top: auto;
          right: auto;
          width: 100%;
          justify-content: space-between;
          z-index: 10;
          margin-bottom: 0;
          flex-shrink: 0;
        }

        .bv-modal-header {
          display: block;
          width: auto;
        }

        .bv-modal-close {
          position: relative;
        }
      }

    `}static get styles(){return this.generateStyles()}firstUpdated(){this.modalLoaded()}updated(t){var s;if(t.has("open")){const i=(s=this.shadowRoot)===null||s===void 0?void 0:s.querySelector("dialog");this.open?(this.originalBodyOverflow=document.body.style.overflow,document.body.style.overflow="hidden",i==null||i.showModal(),this.activateFocusTrap()):(document.body.style.overflow=this.originalBodyOverflow,this.deactivateFocusTrap(),i==null||i.close())}}disconnectedCallback(){super.disconnectedCallback(),document.body.style.overflow=this.originalBodyOverflow,this.deactivateFocusTrap()}activateFocusTrap(){var t,s,i;this.focusManager&&this.focusManager.deactivate(),this.previouslyFocusedElement=document.activeElement;const o=(t=this.shadowRoot)===null||t===void 0?void 0:t.querySelector(".bv-modal");if(!o)return;const r=(s=this.shadowRoot)===null||s===void 0?void 0:s.querySelector("bv-close-button"),n=(i=r==null?void 0:r.shadowRoot)===null||i===void 0?void 0:i.querySelector("button");this.focusManager=new Eo(o,{initialFocusElement:n,returnFocusElement:this.previouslyFocusedElement,onEscape:()=>this.handleEscapeKey(),includeShadowDOM:!0}),setTimeout(()=>{var a;(a=this.focusManager)===null||a===void 0||a.activate()},0)}deactivateFocusTrap(){this.focusManager&&(this.focusManager.deactivate(),this.focusManager=null)}handleEscapeKey(){this.defaultClose()}handleDialogClick(t){const s=t.currentTarget;t.target===s&&this.defaultClose()}focusCloseButton(){var t,s;const i=(t=this.shadowRoot)===null||t===void 0?void 0:t.querySelector("bv-close-button"),o=(s=i==null?void 0:i.shadowRoot)===null||s===void 0?void 0:s.querySelector("button");o&&o.focus()}render(){var t;return b`
      <dialog
        class="bv-modal-container"
        aria-label=${this.title}
        @click=${this.handleDialogClick}
        @cancel=${s=>{s.preventDefault(),this.defaultClose()}}
      >
        <div
          class="bv-modal"
          style=${Ts({maxWidth:this.styleConfig.maxWidth})}
        >
          <div
            class="bv-modal-header-container ${this.errorType?"error":""}"
          >
            <div class="bv-modal-header">
              ${this.errorType?b` <slot name="errorTitle"></slot> `:b`<h3 class="bv-modal-title" style=${Ts((t=this.styleConfig.header)!==null&&t!==void 0?t:{})}>${this.title}</h3>`}
            </div>
            <bv-close-button
              .OnClick=${this.defaultClose}
              .props=${{size:21,color:"var(--fonts-body-color)"}}
              .ariaLabel=${this.closeButtonAriaLabel}
              class="bv-modal-close"
              .onLoadFocus=${!0}
            ></bv-close-button>
          </div>
          <slot></slot>
        </div>
      </dialog>
     `}};ot([g({type:Boolean})],J.prototype,"open",void 0),ot([g({type:String})],J.prototype,"title",void 0),ot([g({type:String})],J.prototype,"closeButtonAriaLabel",void 0),ot([g({type:Function})],J.prototype,"OnClose",void 0),ot([g({type:Function})],J.prototype,"modalLoaded",void 0),ot([g({type:Object})],J.prototype,"styleConfig",void 0),ot([g({type:Boolean})],J.prototype,"errorType",void 0),J=ot([D("modal-component")],J);const So=B`
  .btn {
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    font-size: 14px;
    font-weight: 500;
    cursor: pointer;
    transition: all 0.2s ease;
    min-width: 80px;
  }

  .btn:disabled {
    cursor: not-allowed;
    opacity: 0.6;
  }

  .btn-primary {
    background-color: var(--backgrounds-button-color);
    color: var(--fonts-button-color);
    font-size: var(--fonts-button-size);
    line-height: var(--fonts-button-line-height);
    font-family: var(--fonts-button-family);
    font-weight: var(--fonts-button-character-styles-font-weight);
    font-style: var(--fonts-button-character-styles-font-style);
  }

  .btn-primary:hover:not(:disabled) {
    background-color: var(--backgrounds-button-sub-styles-hover-color);
  }

  .btn-primary:focus-visible {
    outline: 2px solid var(--fonts-link-sub-styles-link-color);
    outline-offset: 2px;
  }

  .btn-primary:focus:not(:focus-visible) {
    outline: none;
  }
`;var X=function(e,t,s,i){var o=arguments.length,r=o<3?t:i===null?i=Object.getOwnPropertyDescriptor(t,s):i,n;if(typeof Reflect=="object"&&typeof Reflect.decorate=="function")r=Reflect.decorate(e,t,s,i);else for(var a=e.length-1;a>=0;a--)(n=e[a])&&(r=(o<3?n(r):o>3?n(t,s,r):n(t,s))||r);return o>3&&r&&Object.defineProperty(t,s,r),r},Ao=function(e,t,s,i){function o(r){return r instanceof s?r:new s(function(n){n(r)})}return new(s||(s=Promise))(function(r,n){function a(h){try{c(i.next(h))}catch(u){n(u)}}function l(h){try{c(i.throw(h))}catch(u){n(u)}}function c(h){h.done?r(h.value):o(h.value).then(a,l)}c((i=i.apply(e,t||[])).next())})};let U=class extends k{constructor(){super(...arguments),this.messages={},this.onSubmit=()=>{},this.onFieldChange=()=>{},this.onReasonClick=()=>{},this.formData={},this.isSubmitting=!1,this.validationErrors=new Map,this.showValidation=!1}connectedCallback(){super.connectedCallback(),this.initializeFormData()}initializeFormData(){var t;this.formData={},(t=this.config)===null||t===void 0||t.fields.forEach(s=>{if(s.defaultValue!==void 0)this.formData[s.id]=s.defaultValue;else switch(s.type){case"checkbox-group":case"multi-select":case"radio":this.formData[s.id]=[];break;default:this.formData[s.id]=""}})}render(){return b`
      <div class="submission-form ${this.isSubmitting?"loading":""}">
        <div class="submission-form-header">
          <h2 class="submission-form-title">${this.config.title}</h2>
          ${this.config.subtitle?b`<p class="submission-form-subtitle">
                ${this.config.subtitle}
              </p>`:""}
        </div>

        ${this.config.fields.map(t=>this.renderField(t))}

        <div class="form-actions">
          <button
            type="button"
            class="btn btn-primary"
            aria-label="${this.messages.offscreen_feedback_submit||""}"
            @click=${this.handleSubmit}
            ?disabled=${this.isSubmitting}
          >
            ${this.config.submitButtonText}
          </button>
        </div>
      </div>
    `}renderField(t){const s=this.validationErrors.has(t.id),i=this.validationErrors.get(t.id);return b`
      <div class="form-field">
        <label
          id="${t.id}-label"
          class="field-label ${s?"error":""}"
          for="${t.id}"
        >
          ${t.label}${t.mandatory?" *":""}
          ${t.mandatory?b`<span class="sr-only">
                ${this.messages.error_ERROR_FORM_REQUIRED_FAKE||""}</span
              >`:""}
        </label>
        ${this.renderFieldInput(t)}
        ${s&&this.showValidation?b`
              <div
                class="validation-error"
                id="${t.id}-error"
                role="alert"
                aria-live="polite"
              >
                <svg class="warning-icon" viewBox="0 0 24 24">
                  <path
                    d="M12 2L1 21h22L12 2zm0 3.99L19.53 19H4.47L12 5.99zM11 16h2v2h-2zm0-6h2v4h-2z"
                  />
                </svg>
                <span>${i}</span>
              </div>
            `:""}
      </div>
    `}renderFieldInput(t){switch(t.type){case"text":return this.renderTextInput();case"textarea":return this.renderTextareaInput(t);case"checkbox-group":return this.renderCheckboxGroup(t);case"radio":return this.renderRadioGroup();case"select":return this.renderSelect();case"multi-select":return this.renderMultiSelect();default:return b`<p>Unsupported field type: ${t.type}</p>`}}renderTextInput(){return b``}renderTextareaInput(t){const s=this.formData[t.id]||"",i=typeof s=="string"?s.length:0,o=t.maxLength||250;return b`
      <textarea
        id="${t.id}"
        class="textarea-input"
        placeholder="${t.placeholder||""}"
        rows="${t.rows||4}"
        maxlength="${o}"
        aria-describedby="${t.id}-description"
        aria-invalid="${this.validationErrors.has(t.id)&&this.showValidation}"
        value="${s}"
        @input=${r=>this.handleFieldChange(t.id,r.target.value)}
        ?disabled=${this.isSubmitting}
      ></textarea>
      <div
        class="character-counter ${this.validationErrors.has(t.id)&&this.showValidation?"hidden":""}"
        id="${t.id}-counter"
      >
        ${t.ariaLabel?b`<span class="sr-only" id="${t.id}-description"
              >${t.ariaLabel}</span
            >`:""}
        ${this.messages.inpage_maximum_form_text_length.replace("{typed}",String(i)).replace("{remaining}",String(o))}
      </div>
    `}renderRadioGroup(){return b``}renderCheckboxGroup(t){var s;const i=this.formData[t.id]||[];return b`
      <fieldset class="checkbox-fieldset">
        <div
          class="checkbox-group"
          id="${t.id}"
          role="group"
          aria-labelledby="${t.id}-label ${this.validationErrors.has(t.id)&&this.showValidation?`${t.id}-error`:""}"
          aria-required="${t.mandatory||!1}"
          aria-invalid="${this.validationErrors.has(t.id)&&this.showValidation}"
        >
          ${(s=t.options)===null||s===void 0?void 0:s.map((o,r)=>b`
              <input
                type="checkbox"
                id="${t.id}-${o.id}"
                name="${t.id}"
                class="checkbox-input"
                value="${o.value}"
                .checked=${i.includes(o.value)}
                @change=${n=>this.handleCheckboxChange(t.id,n.target.value,n.target.checked)}
              />
              <label
                for="${t.id}-${o.id}"
                class="checkbox-label"
                tabindex="0"
                role="checkbox"
                aria-checked="${i.includes(o.value)}"
                @keydown=${n=>{var a;return this.handleCheckboxLabelKeydown(n,t.id,o.value,r,((a=t.options)===null||a===void 0?void 0:a.length)||0)}}
              >
                ${o.label}
              </label>
            `)}
        </div>
      </fieldset>
    `}renderSelect(){return b``}renderMultiSelect(){return b``}handleFieldChange(t,s){this.formData[t]=s,this.onFieldChange(t,s),this.validationErrors.has(t)&&this.validationErrors.delete(t),this.requestUpdate()}handleCheckboxChange(t,s,i){const o=this.formData[t]||[];this.onReasonClick(s);let r;i!==void 0?i?r=[...o,s]:r=o.filter(n=>n!==s):o.includes(s)?r=o.filter(n=>n!==s):r=[...o,s],this.formData[t]=r,this.onFieldChange(t,r),this.validationErrors.has(t)&&(this.validationErrors.delete(t),this.requestUpdate()),this.requestUpdate()}handleCheckboxLabelKeydown(t,s,i,o,r){var n,a;const l=this.config.fields.find(c=>c.id===s);if(!(!l||!l.options))switch(t.key){case"Enter":case" ":{t.preventDefault();const h=(this.formData[s]||[]).includes(i);this.handleCheckboxChange(s,i,!h);const u=t.target;u&&u.setAttribute("aria-checked",String(!h));break}case"ArrowDown":case"ArrowRight":{t.preventDefault();const c=(o+1)%r,h=l.options[c],u=(n=this.shadowRoot)===null||n===void 0?void 0:n.querySelector(`label[for="${s}-${h.id}"]`);u==null||u.focus();break}case"ArrowUp":case"ArrowLeft":{t.preventDefault();const c=(o-1+r)%r,h=l.options[c],u=(a=this.shadowRoot)===null||a===void 0?void 0:a.querySelector(`label[for="${s}-${h.id}"]`);u==null||u.focus();break}}}validateForm(){return this.validationErrors.clear(),this.config.fields.forEach(t=>{if(t.mandatory){const s=this.formData[t.id];let i=!1;Array.isArray(s)?i=s.length===0:typeof s=="string"?i=!s.trim():i=!s,i&&this.validationErrors.set(t.id,t.validationMessage||`${t.label} is required`)}}),this.validationErrors.size===0}handleSubmit(){return Ao(this,void 0,void 0,function*(){if(!this.isSubmitting){if(this.showValidation=!0,!this.validateForm()){this.requestUpdate(),yield this.updateComplete,this.focusFirstErrorField();return}this.isSubmitting=!0;try{yield this.onSubmit(this.formData)}finally{this.isSubmitting=!1}}})}focusFirstErrorField(){var t,s,i,o,r;const n=(t=this.config.fields.find(c=>this.validationErrors.has(c.id)))===null||t===void 0?void 0:t.id;if(!n)return;const a=this.config.fields.find(c=>c.id===n);if(!a)return;let l=null;switch(a.type){case"textarea":l=(s=this.shadowRoot)===null||s===void 0?void 0:s.querySelector(`#${n}`);break;case"radio":case"checkbox-group":l=(i=this.shadowRoot)===null||i===void 0?void 0:i.querySelector(`label[for^="${n}-"]:first-of-type`);break;case"text":l=(o=this.shadowRoot)===null||o===void 0?void 0:o.querySelector(`#${n}`);break;case"select":case"multi-select":l=(r=this.shadowRoot)===null||r===void 0?void 0:r.querySelector(`#${n}`);break}l&&l.focus()}reset(){this.initializeFormData(),this.validationErrors.clear(),this.showValidation=!1,this.isSubmitting=!1,this.requestUpdate()}getFormData(){return Object.assign({},this.formData)}setFormData(t){this.formData=Object.assign(Object.assign({},this.formData),t),this.requestUpdate()}clearFieldValidation(t){this.validationErrors.has(t)&&(this.validationErrors.delete(t),this.requestUpdate())}};U.styles=[So,B`
    .submission-form {
      font-family: var(--fonts-body-family);
      color: var(--fonts-body-color);
      max-height: 100vh;
      display: flex;
      flex-direction: column;
      box-sizing: border-box;
    }

    .submission-form-header {
      margin-bottom: 20px;
      flex-shrink: 0;
    }

    .submission-form-title {
      font-size: var(--fonts-section-header-size);
      color: var(--fonts-section-header-color);
      font-family: var(--fonts-section-header-family);
      font-weight: var(--fonts-section-headers-font-weight);
      margin: 0 0 8px 0;
      line-height: var(--fonts-section-header-line-height);
      font-style: var(--fonts-section-header-character-styles-font-style);
      text-decoration: var(
        --fonts-section-header-character-styles-text-decoration
      );
      text-transform: var(--fonts-section-header-text-transform);
    }

    .submission-form-subtitle {
      font-size: var(--fonts-labels-size);
      color: var(--fonts-labels-color);
      font-family: var(--fonts-labels-family);
      margin: 0;
      line-height: var(--fonts-labels-line-height);
      font-weight: var(--fonts-labels-character-styles-font-weight);
      font-style: var(--fonts-labels-character-styles-font-style);
      text-decoration: var(--fonts-labels-character-styles-text-decoration);
      text-transform: var(--fonts-labels-text-transform);
    }

    .form-field {
      margin-bottom: 20px;
    }

    .checkbox-fieldset {
      border: none;
      padding: 0;
      margin: 0;
      min-width: 0;
    }

    .field-label {
      font-size: var(--fonts-form-fieldset-label-size);
      color: var(--fonts-form-fieldset-label-color);
      font-family: var(--fonts-form-fieldset-label-family);
      line-height: var(--fonts-form-fieldset-label-line-height);
      font-weight: var(
        --fonts-form-fieldset-label-character-styles-font-weight
      );
      font-style: var(--fonts-form-fieldset-label-character-styles-font-style);
      text-decoration: var(
        --fonts-form-fieldset-label-character-styles-text-decoration
      );
      text-transform: var(--fonts-form-fieldset-label-text-transform);
      margin: 0 0 12px 0;
      display: block;
    }

    .field-label.error {
      color: var(--fonts-validation-error-color);
    }

    .field-label .mandatory-indicator {
      color: var(--fonts-form-fieldset-label-color);
      margin-left: 0px;
    }

    .field-label.error .mandatory-indicator {
      color: var(--fonts-validation-error-color, #d32f2f);
    }

    .text-input,
    .textarea-input,
    .select-input {
      width: 100%;
      padding: 12px;
      border-left: var(--borders-input-fields-border-border-left);
      border-top: var(--borders-input-fields-border-border-top);
      border-right: var(--borders-input-fields-border-border-right);
      border-bottom: var(--borders-input-fields-border-border-bottom);
      border-radius: var(--borders-input-fields-border-border-radius);
      font-family: var(--fonts-placeholder-text-family);
      font-size: var(--fonts-placeholder-text-size);
      color: var(--fonts-placeholder-text-color);
      text-transform: var(--fonts-placeholder-text-text-transform);
      font-weight: var(--fonts-placeholder-text-character-styles-font-weight);
      font-style: var(--fonts-placeholder-text-character-styles-font-style);
      text-decoration: var(
        --fonts-placeholder-text-character-styles-text-decoration
      );
      line-height: 1.4;
      box-sizing: border-box;
      background-color: var(--backgrounds-input-text-background-color);
    }

    .textarea-input {
      min-height: 80px;
      resize: none;
    }

    .text-input::placeholder,
    .textarea-input::placeholder {
      font-size: var(--fonts-input-text-placeholder-size);
      color: var(--fonts-input-text-placeholder-color);
      font-family: var(--fonts-input-text-placeholder-family);
      line-height: var(--fonts-input-text-placeholder-line-height);
      font-weight: var(
        --fonts-input-text-placeholder-character-styles-font-weight
      );
      font-style: var(
        --fonts-input-text-placeholder-character-styles-font-style
      );
      text-decoration: var(
        --fonts-input-text-placeholder-character-styles-text-decoration
      );
      text-transform: var(--fonts-input-text-placeholder-text-transform);
    }

    .checkbox-group {
      display: flex;
      flex-wrap: wrap;
      gap: 12px;
    }

    .checkbox-input {
      display: none;
    }

    .checkbox-label {
      display: inline-block;
      padding: 8px 16px;
      border: 1px solid var(--fonts-dimension-values-color);
      border-radius: 10px;
      background-color: transparent;
      color: var(--fonts-dimension-values-color);
      cursor: pointer;
      transition: all 0.2s ease;
      font-size: var(--fonts-dimension-values-size);
      font-family: var(--fonts-dimension-values-family);
      line-height: var(--fonts-dimension-values-line-height);
      font-weight: var(--fonts-dimension-values-character-styles-font-weight);
      font-style: var(--fonts-dimension-values-character-styles-font-style);
      text-decoration: var(
        --fonts-dimension-values-character-styles-text-decoration
      );
      text-transform: var(--fonts-dimension-values-text-transform);
      user-select: none;
    }

    .checkbox-input:checked + .checkbox-label {
      background-color: var(--fonts-dimension-values-color);
      color: var(--fonts-button-color);
      border-color: 1px solid var(--fonts-dimension-values-color);
    }
    .text-input:focus-visible,
    .textarea-input:focus-visible,
    .select-input:focus-visible,
    .checkbox-input:focus-visible,
    .checkbox-label:focus-visible {
      outline: 2px solid var(--fonts-link-sub-styles-link-color);
      outline-offset: 2px;
    }

    .text-input:focus:not(:focus-visible),
    .textarea-input:focus:not(:focus-visible),
    .select-input:focus:not(:focus-visible),
    .checkbox-input:focus:not(:focus-visible),
    .checkbox-label:focus:not(:focus-visible) {
      outline: none;
    }

    .validation-error {
      display: flex;
      align-items: center;
      gap: 8px;
      color: var(--fonts-validation-error-color);
      font-size: var(--fonts-validation-error-size);
      font-family: var(--fonts-validation-error-family);
      font-weight: var(--fonts-validation-error-character-styles-font-weight);
      font-style: var(--fonts-validation-error-character-styles-font-style);
      text-decoration: var(
        --fonts-validation-error-character-styles-text-decoration
      );
      text-transform: var(--fonts-validation-error-text-transform);
      margin-top: 8px;
    }

    .warning-icon {
      width: 16px;
      height: 16px;
      fill: var(--fonts-validation-error-color);
    }

    .form-actions {
      display: flex;
      gap: 12px;
      justify-content: center;
    }

    .loading {
      opacity: 0.7;
      pointer-events: none;
    }

    .character-counter {
      display: flex;
      justify-content: flex-end;
      margin-top: 8px;
      font-size: var(--fonts-labels-size);
      color: var(--fonts-labels-color, #666);
      font-family: var(--fonts-labels-family);
      line-height: var(--fonts-labels-line-height);
      font-weight: var(--fonts-labels-character-styles-font-weight);
      font-style: var(--fonts-labels-character-styles-font-style);
      text-decoration: var(--fonts-labels-character-styles-text-decoration);
      text-transform: var(--fonts-labels-text-transform);
    }

    .sr-only {
      position: absolute;
      width: 1px;
      height: 1px;
      padding: 0;
      margin: -1px;
      overflow: hidden;
      clip: rect(0, 0, 0, 0);
      white-space: nowrap;
      border: 0;
    }

    .hidden {
      display: none !important;
    }
  `],X([g({type:Object})],U.prototype,"config",void 0),X([g({type:Object})],U.prototype,"messages",void 0),X([g({type:Function})],U.prototype,"onSubmit",void 0),X([g({type:Function})],U.prototype,"onFieldChange",void 0),X([g({type:Function})],U.prototype,"onReasonClick",void 0),X([$()],U.prototype,"formData",void 0),X([$()],U.prototype,"isSubmitting",void 0),X([$()],U.prototype,"validationErrors",void 0),X([$()],U.prototype,"showValidation",void 0),U=X([D("bv-submission-form")],U);var $o=Object.defineProperty,To=Object.getOwnPropertyDescriptor,dt=(e,t,s,i)=>{for(var o=i>1?void 0:i?To(t,s):t,r=e.length-1,n;r>=0;r--)(n=e[r])&&(o=(i?n(t,s,o):n(o))||o);return i&&o&&$o(t,s,o),o};let K=class extends k{constructor(){super(...arguments),this.voteType="upvote",this.onSubmit=()=>{},this.onCancel=()=>{},this.onReasonClick=()=>{},this.isOthersSelected=!1}get submissionFormConfig(){var e;return{title:this.config.title,subtitle:this.config.subtitle,submitButtonText:this.config.submitButtonText,fields:[{id:"feedbackReason",type:"checkbox-group",label:this.config.reasonLabel,mandatory:!0,validationMessage:this.config.validationErrorMessage,options:this.config.predefinedReasons.map(t=>({id:t.id,label:t.text,value:t.id}))},{id:"feedbackText",type:"textarea",label:this.config.commentLabel,placeholder:this.config.commentPlaceholder,mandatory:this.isOthersSelected,rows:4,maxLength:250,ariaLabel:this.config.commentAriaLabel,validationMessage:((e=this.config.messages)==null?void 0:e.feedbackText_validation_error)||""}]}}render(){return b`
      <bv-submission-form
        .config=${this.submissionFormConfig}
        .messages=${this.config.messages||{}}
        .onSubmit=${this.handleFormSubmit.bind(this)}
        .onFieldChange=${this.handleFieldChange.bind(this)}
        .onReasonClick=${this.onReasonClick.bind(this)}
      ></bv-submission-form>
    `}handleFieldChange(e,t){var s;if(e==="feedbackReason"&&Array.isArray(t)){const i=this.isOthersSelected;if(this.isOthersSelected=t.includes("other"),i!==this.isOthersSelected){if(i&&!this.isOthersSelected){const o=(s=this.shadowRoot)==null?void 0:s.querySelector("bv-submission-form");o&&o.clearFieldValidation("feedbackText")}this.requestUpdate()}}}async handleFormSubmit(e){var o;const t=e.feedbackReason,s=((o=e.feedbackText)==null?void 0:o.trim())||"",i={vote:this.voteType,feedbackReason:t,feedbackText:s};await this.onSubmit(i)}reset(){var t;this.isOthersSelected=!1;const e=(t=this.shadowRoot)==null?void 0:t.querySelector("bv-submission-form");e&&e.reset()}};K.styles=B`
    :host {
      display: block;
    }
  `,dt([g({type:Object})],K.prototype,"config",2),dt([g({type:String})],K.prototype,"voteType",2),dt([g({type:Function})],K.prototype,"onSubmit",2),dt([g({type:Function})],K.prototype,"onCancel",2),dt([g({type:Function})],K.prototype,"onReasonClick",2),dt([$()],K.prototype,"isOthersSelected",2),K=dt([D("review-summaries-feedback-form")],K);var Ht=function(e,t,s,i){var o=arguments.length,r=o<3?t:i===null?i=Object.getOwnPropertyDescriptor(t,s):i,n;if(typeof Reflect=="object"&&typeof Reflect.decorate=="function")r=Reflect.decorate(e,t,s,i);else for(var a=e.length-1;a>=0;a--)(n=e[a])&&(r=(o<3?n(r):o>3?n(t,s,r):n(t,s))||r);return o>3&&r&&Object.defineProperty(t,s,r),r};let rt=class extends k{constructor(){super(),this.ariaLabel="",this.onLoadFocus=!1,this.OnClick=()=>{},this.props={title:"Close",size:"",width:0,height:0,type:"",id:"",color:""},this.attachShadow({mode:"open"}),this.ariaLabel="",this.OnClick=()=>{},this.props={title:"Close",size:"",width:0,height:0,type:"",id:"",color:""}}firstUpdated(){var t,s;this.onLoadFocus&&((s=(t=this.shadowRoot)===null||t===void 0?void 0:t.querySelector("button"))===null||s===void 0||s.focus())}render(){const t=b`
      <svg
        width=${this.props.size||this.props.width||"27px"}
        height=${this.props.size||this.props.height||"27px"}
        viewBox="0 0 27 27"
        xmlns="http://www.w3.org/2000/svg"
        size=${this.props.size}
        type=${this.props.type}
        id=${this.props.id}
        aria-hidden="true"
        data-testid="bv-close-icon"
      >
        <title>${this.props.title}</title>
        <path
          d="M2.03849 0.769828L10.5 8.89086L18.9616 0.547721C19.262 0.25152 19.9743 0.473626 20.2747 0.769828C20.5751 1.06603 20.5751 1.76844 20.2747 2.06464L12.0385 10.4078L20.2747 18.751C20.5751 19.0472 20.5751 19.7496 20.2747 20.0458C19.9743 20.342 19.262 20.5642 18.9616 20.268L10.5 11.9247L2.03849 20.268C1.73808 20.5642 1.02573 20.342 0.72533 20.0458C0.424927 19.7496 0.424927 18.7989 0.72533 18.5027L8.96156 10.4078L0.725275 2.06457C0.424872 1.76837 0.424927 1.06603 0.72533 0.769828C1.02573 0.473626 1.73808 0.473626 2.03849 0.769828Z"
          fill=${this.props.color?this.props.color:"#000"}
          fillRule="evenodd"
        />
      </svg>
    `;return b`
      <button
        class="bv-close-button"
        @click=${this.OnClick}
        aria-label=${this.ariaLabel}
      >
        ${t}
      </button>
    `}};rt.properties={ariaLabel:{type:String,state:!0},OnClick:{type:Function,state:!0},props:{type:Object,state:!0}},rt.styles=B`
    button {
      box-sizing: border-box;
      padding: 5px 5px;
      margin-right: 10px;
      cursor: pointer;
      background: none;
      border: none;
      &:focus-visible {
        outline-style: solid;
        outline-color: var(--fonts-link-sub-styles-link-color);
        outline-width: 2px;
        outline-offset: 2px;
      }
    }

    @media (max-width: 500px) {
      button {
        margin: 0;
      }
    }
  `,Ht([g({type:String})],rt.prototype,"ariaLabel",void 0),Ht([g({type:Boolean})],rt.prototype,"onLoadFocus",void 0),Ht([g({type:Function})],rt.prototype,"OnClick",void 0),Ht([g({type:Object})],rt.prototype,"props",void 0),rt=Ht([D("bv-close-button")],rt);const ko=b`
  <svg
    aria-hidden="true"
    width="18px"
    height="18px"
    viewBox="0 0 18 18"
    version="1.1"
    xmlns="http://www.w3.org/2000/svg"
  >
    <path
      d="M9.59993776,12.3999637 L9.59993776,15.5999844 C9.59993776,16.9254604 8.52542813,18 7.19995332,18 L3.99997407,10.8000467 L3.99997407,2 L13.0239156,2 C13.8217398,1.99108432 14.5042749,2.57123912 14.6239052,3.3600949 L15.727898,10.5600482 C15.7983424,11.024161 15.6614162,11.4957951 15.3533873,11.8500284 C15.0453583,12.2042617 14.5973067,12.405351 14.1279084,12.4000363 L9.59993776,12.3999637 Z M3.99997407,2.00010373 L1.59998963,2.00010373 C0.716339756,2.00010373 0,2.71644347 0,3.60009338 L0,9.20005705 C0,10.0837069 0.716339756,10.8000467 1.59998963,10.8000467 L3.99997407,10.8000467 L3.99997407,2.00010373 Z"
    ></path>
  </svg>
`,Bo=b`
  <svg
    aria-hidden="true"
    width="18px"
    height="18px"
    viewBox="0 0 18 18"
    version="1.1"
    xmlns="http://www.w3.org/2000/svg"
  >
    <path
      d="M9.59993776,5.5999637 L9.59993776,2.39998444 C9.59993776,1.07450963 8.52542813,0 7.19995332,0 L3.99997407,7.19995332 L3.99997407,16 L13.0239156,16 C13.8217398,16.0089157 14.5042749,15.4287609 14.6239052,14.6399051 L15.727898,7.43995177 C15.7983424,6.97583903 15.6614162,6.50420488 15.3533873,6.1499716 C15.0453583,5.79573833 14.5973067,5.59464801 14.1279084,5.5999637 L9.59993776,5.5999637 Z M3.99997407,15.9998963 L1.59998963,15.9998963 C0.716339756,15.9998963 0,15.2835565 0,14.3999066 L0,8.79994295 C0,7.91629308 0.716339756,7.19995332 1.59998963,7.19995332 L3.99997407,7.19995332 L3.99997407,15.9998963 Z"
    />
  </svg>
`;var wt=function(e,t,s,i){var o=arguments.length,r=o<3?t:i===null?i=Object.getOwnPropertyDescriptor(t,s):i,n;if(typeof Reflect=="object"&&typeof Reflect.decorate=="function")r=Reflect.decorate(e,t,s,i);else for(var a=e.length-1;a>=0;a--)(n=e[a])&&(r=(o<3?n(r):o>3?n(t,s,r):n(t,s))||r);return o>3&&r&&Object.defineProperty(t,s,r),r};let nt=class extends k{constructor(){super(...arguments),this.showFeedback=!0,this.configuration={},this.callbacks=()=>null,this._votedUpvote=!1,this._votedDownvote=!1}render(){var t,s,i;return this.showFeedback?b`
      <div class="swat-hosted-feedback-container">
        <span>${((t=this.configuration)===null||t===void 0?void 0:t.label)||""}</span>
        <button
          class="${this._votedUpvote?"swat-hosted-solid-button":""}"
          @click="${this._onUpvote}"
          ?disabled="${this._votedUpvote||this._votedDownvote}"
          aria-label=${((s=this.configuration)===null||s===void 0?void 0:s.upVoteLabel)||""}
        >
          ${Bo}
        </button>
        <button
          class="${this._votedDownvote?"swat-hosted-solid-button":""}"
          @click="${this._onDownvote}"
          ?disabled="${this._votedUpvote||this._votedDownvote}"
          aria-label=${((i=this.configuration)===null||i===void 0?void 0:i.downVoteLabel)||""}
        >
          ${ko}
        </button>
      </div>
    `:b``}_onUpvote(){!this._votedUpvote&&!this._votedDownvote&&(this._votedUpvote=!0,this.callbacks("upvote"))}_onDownvote(){!this._votedUpvote&&!this._votedDownvote&&(this._votedDownvote=!0,this.callbacks("downvote"))}};nt.styles=B`
    .swat-hosted-feedback-container {
      display: flex;
      align-items: center;
      text-transform: var(--fonts-body-text-transform);
      font-size: var(--fonts-body-size);
      font-family: var(--fonts-body-family);
      line-height: var(--fonts-body-line-height);
      color: var(--fonts-body-color);
    }

    button {
      cursor: pointer;
      margin-left: 10px;
      background: none;
      border: none;
      padding: 0;
      transition: color 0.3s;
      display: inline-flex;
      align-items: center;
    }

    button svg {
      fill: none;
      stroke: var(--backgrounds-button-sub-styles-primary-color);
      transition:
        fill 0.3s,
        stroke 0.3s;
    }

    button.swat-hosted-solid-button svg {
      fill: var(--backgrounds-button-sub-styles-primary-color);
      stroke: none;
    }

    button[disabled] {
      cursor: not-allowed;
    }
  `,wt([g({type:Boolean})],nt.prototype,"showFeedback",void 0),wt([g({type:Object})],nt.prototype,"configuration",void 0),wt([g({type:Function})],nt.prototype,"callbacks",void 0),wt([$()],nt.prototype,"_votedUpvote",void 0),wt([$()],nt.prototype,"_votedDownvote",void 0),nt=wt([D("bv-swat-feedback-button")],nt);class Lo{constructor(t){this.productId=t,this.storageKey=`bv_feedback_${t}`}hasSubmittedFeedback(){try{const t=sessionStorage.getItem(this.storageKey);return t&&JSON.parse(t).hasSubmittedFeedback||!1}catch(t){return console.warn("Failed to read feedback session state:",t),!1}}markFeedbackSubmitted(t){try{const s={hasSubmittedFeedback:!0,submissionData:Object.assign(Object.assign({},t),{timestamp:Date.now()})};sessionStorage.setItem(this.storageKey,JSON.stringify(s))}catch(s){console.warn("Failed to save feedback session state:",s)}}getSubmittedFeedback(){try{const t=sessionStorage.getItem(this.storageKey);return t&&JSON.parse(t).submissionData||null}catch(t){return console.warn("Failed to read submitted feedback data:",t),null}}clearFeedbackState(){try{sessionStorage.removeItem(this.storageKey)}catch(t){console.warn("Failed to clear feedback session state:",t)}}static isSessionStorageAvailable(){try{const t="__bv_session_test__";return sessionStorage.setItem(t,"test"),sessionStorage.removeItem(t),!0}catch{return!1}}}const Po=b`
  <svg
    aria-hidden="true"
    width="18px"
    height="18px"
    viewBox="0 0 18 18"
    version="1.1"
    xmlns="http://www.w3.org/2000/svg"
  >
    <path
      d="M9.59993776,5.5999637 L9.59993776,2.39998444 C9.59993776,1.07450963 8.52542813,0 7.19995332,0 L3.99997407,7.19995332 L3.99997407,16 L13.0239156,16 C13.8217398,16.0089157 14.5042749,15.4287609 14.6239052,14.6399051 L15.727898,7.43995177 C15.7983424,6.97583903 15.6614162,6.50420488 15.3533873,6.1499716 C15.0453583,5.79573833 14.5973067,5.59464801 14.1279084,5.5999637 L9.59993776,5.5999637 Z M3.99997407,15.9998963 L1.59998963,15.9998963 C0.716339756,15.9998963 0,15.2835565 0,14.3999066 L0,8.79994295 C0,7.91629308 0.716339756,7.19995332 1.59998963,7.19995332 L3.99997407,7.19995332 L3.99997407,15.9998963 Z"
    />
  </svg>
`,Mo=b`
  <svg
    aria-hidden="true"
    width="18px"
    height="18px"
    viewBox="0 0 18 18"
    version="1.1"
    xmlns="http://www.w3.org/2000/svg"
  >
    <path
      d="M9.59993776,12.3999637 L9.59993776,15.5999844 C9.59993776,16.9254604 8.52542813,18 7.19995332,18 L3.99997407,10.8000467 L3.99997407,2 L13.0239156,2 C13.8217398,1.99108432 14.5042749,2.57123912 14.6239052,3.3600949 L15.727898,10.5600482 C15.7983424,11.024161 15.6614162,11.4957951 15.3533873,11.8500284 C15.0453583,12.2042617 14.5973067,12.405351 14.1279084,12.4000363 L9.59993776,12.3999637 Z M3.99997407,2.00010373 L1.59998963,2.00010373 C0.716339756,2.00010373 0,2.71644347 0,3.60009338 L0,9.20005705 C0,10.0837069 0.716339756,10.8000467 1.59998963,10.8000467 L3.99997407,10.8000467 L3.99997407,2.00010373 Z"
    ></path>
  </svg>
`;var Ro=Object.defineProperty,Ho=Object.getOwnPropertyDescriptor,F=(e,t,s,i)=>{for(var o=i>1?void 0:i?Ho(t,s):t,r=e.length-1,n;r>=0;r--)(n=e[r])&&(o=(i?n(t,s,o):n(o))||o);return i&&o&&Ro(t,s,o),o};let P=class extends k{constructor(){super(...arguments),this.summaryText="",this.showFeedback=!0,this._votedUpvote=!1,this._votedDownvote=!1,this.showModal=!1,this.currentVoteType="upvote",this.feedbackDisabled=!1,this.submissionState="form"}get closeButtonAriaLabel(){var e,t,s;return this.submissionState==="success"?`${((e=this.localization)==null?void 0:e.formatMessage("inpage_arialabel_success_popup_close_button"))||""}`:this.submissionState==="error"?`${((t=this.localization)==null?void 0:t.formatMessage("close_error_modal_label"))||""}`:((s=this.localization)==null?void 0:s.formatMessage("close_feedback_form_label"))||""}connectedCallback(){super.connectedCallback(),this.initializeSessionManager()}initializeSessionManager(){var e;if((e=this.config)!=null&&e.productId&&!this.sessionManager&&(this.sessionManager=new Lo(`review_summary_feedback_${this.config.productId}`),this.feedbackDisabled=this.sessionManager.hasSubmittedFeedback(),this.feedbackDisabled)){const t=this.sessionManager.getSubmittedFeedback();t&&(t.vote==="upvote"?this._votedUpvote=!0:t.vote==="downvote"&&(this._votedDownvote=!0))}}shouldUpdate(e){return this.localization=new it(this.config),e.has("config")&&(this.localization=new it(this.config),this.initializeSessionManager()),!0}render(){var t,s,i;if(!this.showFeedback)return b``;const e=this.feedbackDisabled||this._votedUpvote||this._votedDownvote;return b`
      <fieldset class="swat-hosted-feedback-container">
        <legend class="swat-hosted-feedback-label">
          ${(t=this.localization)==null?void 0:t.formatMessage("review_summary_helpful")}
        </legend>
        <button
          class="${this._votedUpvote?"swat-hosted-solid-button":""}"
          @click="${this._onUpvote}"
          ?disabled="${e}"
          aria-label=${((s=this.localization)==null?void 0:s.formatMessage("thumbs_up"))||""}
        >
          ${Po}
        </button>
        <button
          class="${this._votedDownvote?"swat-hosted-solid-button":""}"
          @click="${this._onDownvote}"
          ?disabled="${e}"
          aria-label=${((i=this.localization)==null?void 0:i.formatMessage("thumbs_down"))||""}
        >
          ${Mo}
        </button>
      </fieldset>

      <!-- Feedback Form Modal -->
      <modal-component
        .open=${this.showModal}
        .OnClose=${()=>this._closeModal()}
        .closeButtonAriaLabel=${this.closeButtonAriaLabel}
      >
        ${this._renderModalContent()}
      </modal-component>
    `}_onUpvote(e){var t,s;!this.feedbackDisabled&&!this._votedUpvote&&!this._votedDownvote&&(this._votedUpvote=!0,this.triggeringButtonRef=e.target,this.currentVoteType="upvote",this.submissionState="form",this.showModal=!0,(t=this.analytics)==null||t.trackUpvoteFeedback(this.summaryText),(s=this.analytics)==null||s.trackFeedbackFormShown())}_onDownvote(e){var t,s;!this.feedbackDisabled&&!this._votedUpvote&&!this._votedDownvote&&(this._votedDownvote=!0,this.triggeringButtonRef=e.target,this.currentVoteType="downvote",this.submissionState="form",this.showModal=!0,(t=this.analytics)==null||t.trackDownvoteFeedback(this.summaryText),(s=this.analytics)==null||s.trackFeedbackFormShown())}_renderModalContent(){switch(this.submissionState){case"success":return this._renderSuccessContent();case"error":return this._renderErrorContent();default:return b`
          <review-summaries-feedback-form
            .config=${this._getFeedbackFormConfig()}
            .voteType=${this.currentVoteType}
            .onSubmit=${e=>this._handleFeedbackSubmit(e)}
            .onCancel=${()=>this._closeModal()}
            .onReasonClick=${e=>{var t;return(t=this.analytics)==null?void 0:t.trackPredefinedReasonClick(e)}}
          ></review-summaries-feedback-form>
        `}}_renderSuccessContent(){var e;return b`
      <div class="feedback-modal-content">
        <div class="feedback-status-icon">
          <svg
            width="80"
            height="80"
            viewBox="0 0 148 148"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <g clip-path="url(#clip0_2103_143)">
              <rect width="148" height="148" rx="12" fill="white" />
              <path
                d="M74 0C33.152 0 0 33.152 0 74C0 114.848 33.152 148 74 148C114.848 148 148 114.848 148 74C148 33.152 114.848 0 74 0ZM59.2 111L22.2 74L32.634 63.566L59.2 90.058L115.366 33.892L125.8 44.4L59.2 111Z"
                fill="#1B8603"
              />
            </g>
            <defs>
              <clipPath id="clip0_2103_143">
                <rect width="148" height="148" rx="12" fill="white" />
              </clipPath>
            </defs>
          </svg>
        </div>
        <div class="feedback-submit-message">
          ${((e=this.localization)==null?void 0:e.formatMessage("feedback_success"))||""}
        </div>
      </div>
    `}_renderErrorContent(){var e,t,s,i;return b`
      <div class="feedback-modal-content">
        <div class="feedback-status-icon">
          <svg
            class="warning-icon"
            viewBox="0 0 24 24"
            width="20"
            height="1.5rem"
          >
            <path
              d="M12 2L1 21h22L12 2zm0 3.99L19.53 19H4.47L12 5.99zM11 16h2v2h-2zm0-6h2v4h-2z"
            />
          </svg>
          <span class="feedback-error-heading">
            ${((e=this.localization)==null?void 0:e.formatMessage("inpage_error_title"))||""}
          </span>
        </div>
        <div class="feedback-submit-message">
          ${((t=this.localization)==null?void 0:t.formatMessage("feedback_error"))||""}
        </div>
        <div class="feedback-actions">
          <button
            @click="${this._retrySubmission}"
            class="feedback-button feedback-button-primary"
            aria-label="${(s=this.localization)==null?void 0:s.formatMessage("feedback_try_again")}"
          >
            ${((i=this.localization)==null?void 0:i.formatMessage("feedback_try_again"))||""}
          </button>
        </div>
      </div>
    `}_retrySubmission(){this.submissionState="form"}_getFeedbackFormConfig(){var t,s,i,o,r,n,a,l,c,h;const e={};return(t=this.config)!=null&&t.messages&&Object.keys(this.config.messages).forEach(u=>{var f;e[u]=((f=this.config)==null?void 0:f.messages[u])||""}),{title:((s=this.localization)==null?void 0:s.formatMessage("feedback_title"))||"",subtitle:((i=this.localization)==null?void 0:i.formatMessage("feedback_subtitle"))||"",reasonLabel:this.currentVoteType==="upvote"?((o=this.localization)==null?void 0:o.formatMessage("feedback_upvote_reason_label"))||"":((r=this.localization)==null?void 0:r.formatMessage("feedback_downvote_reason_label"))||"",commentLabel:((n=this.localization)==null?void 0:n.formatMessage("feedback_comment_label"))||"",commentPlaceholder:((a=this.localization)==null?void 0:a.formatMessage("feedback_comment_placeholder"))||"",submitButtonText:((l=this.localization)==null?void 0:l.formatMessage("qa_submit_button"))||"",predefinedReasons:this._getPredefinedReasons(),validationErrorMessage:((c=this.localization)==null?void 0:c.formatMessage("feedback_validation_error"))||"",messages:e,commentAriaLabel:((h=this.localization)==null?void 0:h.formatMessage("inpage_ariadescribedby_review_title",{maxLength:"250"}))||""}}_getPredefinedReasons(){var l,c,h,u;const e=((l=this.localization)==null?void 0:l.formatMessage("feedback_upvote_reason_values"))||"",t=((c=this.localization)==null?void 0:c.formatMessage("feedback_upvote_reason_keys"))||"",s=((h=this.localization)==null?void 0:h.formatMessage("feedback_downvote_reason_values"))||"",i=((u=this.localization)==null?void 0:u.formatMessage("feedback_downvote_reason_keys"))||"",o=this.currentVoteType==="upvote"?e:s,r=this.currentVoteType==="upvote"?t:i,n=o.split(",").map(f=>f.trim()).filter(f=>f.length>0),a=r.split(",").map(f=>f.trim()).filter(f=>f.length>0);return n.map((f,v)=>({id:a[v]||`reason_${v}`,text:f}))}_closeModal(){var e,t;this.showModal=!1,this.submissionState="form",(e=this.analytics)==null||e.trackFeedbackFormClose(),this.triggeringButtonRef&&((t=this.triggeringButtonRef)==null||t.focus(),this.triggeringButtonRef=void 0)}getUserToken(){var s,i,o,r;let e=new URLSearchParams(window.location.search),t=(r=(o=(i=(s=window.BV)==null?void 0:s.global)==null?void 0:i.meta)==null?void 0:o.get)==null?void 0:r.call(o,"userToken");if(!t){const n=e.get("bvdata");n&&(e=new URLSearchParams(n)),t=e.get("userToken")||e.get("user")||e.get("bvuserToken")}return t}_focusModalCloseButton(){var t;const e=(t=this.shadowRoot)==null?void 0:t.querySelector("modal-component");e&&e.focusCloseButton()}async _handleFeedbackSubmit(e){var t,s,i,o,r,n,a;try{(t=this.analytics)==null||t.trackSubmitButtonClick(e.feedbackText,e.feedbackReason);const l=(s=this.config)==null?void 0:s.createdAt,c={...e,...l&&{createdAt:l}},h=this.getUserToken()||"",u=await((i=this.api)==null?void 0:i.submitFeedback(c,h));u&&!u.error?(this.submissionState="success",(o=this.sessionManager)==null||o.markFeedbackSubmitted({vote:e.vote,feedbackReason:e.feedbackReason,feedbackText:e.feedbackText}),e.vote==="upvote"?this._votedUpvote=!0:this._votedDownvote=!0,this.feedbackDisabled=!0,(r=this.analytics)==null||r.trackSubmissionSuccess(),this._focusModalCloseButton()):(this.submissionState="error",(n=this.analytics)==null||n.trackSubmissionFailure(),this._focusModalCloseButton())}catch(l){console.error("Failed to submit feedback:",l),this.submissionState="error",(a=this.analytics)==null||a.trackSubmissionFailure(),this._focusModalCloseButton()}}};P.styles=B`
    .swat-hosted-feedback-container {
      display: flex;
      align-items: center;
      text-transform: var(--fonts-body-text-transform);
      font-weight: var(--fonts-body-character-styles-font-weight);
      font-style: var(--fonts-body-character-styles-font-style);
      text-decoration: var(--fonts-body-character-styles-text-decoration);
      border: none;
      margin: 0;
      padding: 0;
    }

    .swat-hosted-feedback-label {
      padding: 0;
      float: left;
    }

    button {
      cursor: pointer;
      margin-left: 10px;
      background: none;
      border: none;
      padding: 0;
      transition: color 0.3s;
      display: inline-flex;
      align-items: center;
    }

    button svg {
      fill: none;
      stroke: var(--backgrounds-button-sub-styles-primary-color);
      transition:
        fill 0.3s,
        stroke 0.3s;
    }

    button.swat-hosted-solid-button svg {
      fill: var(--backgrounds-button-sub-styles-primary-color);
      stroke: none;
    }

    button[disabled] {
      cursor: not-allowed;
    }

    .feedback-modal-content {
      text-align: center;
      padding: 20px;
    }

    .feedback-status-icon {
      margin-bottom: 16px;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 12px;
    }

    .feedback-actions {
      margin-top: 20px;
    }

    .feedback-button {
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      margin-right: 10px;
    }

    .feedback-button-primary {
      background: var(--backgrounds-button-sub-styles-primary-color);
      color: white;
    }

    .feedback-submit-message {
      font-size: var(--fonts-labels-size);
      color: var(--fonts-labels-color);
      font-family: var(--fonts-labels-family);
      font-weight: var(--fonts-labels-character-styles-font-weight);
      font-style: var(--fonts-labels-character-styles-font-style);
      text-decoration: var(--fonts-labels-character-styles-text-decoration);
    }

    .warning-icon {
      fill: var(--fonts-validation-error-color);
      flex-shrink: 0;
    }

    .feedback-error-heading {
      color: var(--fonts-validation-error-color);
      font-size: var(--fonts-section-header-controls-size);
      font-family: var(--fonts-section-header-controls-family);
      font-weight: var(
        --fonts-section-header-controls-character-styles-font-weight
      );
      font-style: var(
        --fonts-section-header-controls-character-styles-font-style
      );
      text-decoration: var(
        --fonts-section-header-controls-character-styles-text-decoration
      );
      text-transform: var(--fonts-section-header-controls-text-transform);
      margin: 0;
    }
  `,F([Y({context:Mt}),g({attribute:!1})],P.prototype,"analytics",2),F([Y({context:Rt}),g({attribute:!1})],P.prototype,"localization",2),F([Y({context:As}),g({attribute:!1})],P.prototype,"api",2),F([g({type:String})],P.prototype,"summaryText",2),F([g({type:Boolean})],P.prototype,"showFeedback",2),F([g({attribute:!1})],P.prototype,"config",2),F([$()],P.prototype,"_votedUpvote",2),F([$()],P.prototype,"_votedDownvote",2),F([$()],P.prototype,"showModal",2),F([$()],P.prototype,"currentVoteType",2),F([$()],P.prototype,"feedbackDisabled",2),F([$()],P.prototype,"submissionState",2),F([$()],P.prototype,"triggeringButtonRef",2),P=F([D("swat-feedback-button")],P);var Oo=Object.defineProperty,Io=Object.getOwnPropertyDescriptor,Fo=(e,t,s,i)=>{for(var o=i>1?void 0:i?Io(t,s):t,r=e.length-1,n;r>=0;r--)(n=e[r])&&(o=(i?n(t,s,o):n(o))||o);return i&&o&&Oo(t,s,o),o};const No=B`
  @keyframes loadingFlash {
    0% {
      background-position: 0%;
    }
    100% {
      background-position: 100%;
    }
  }
`,Do=B`
  :host {
    display: block;
    width: 100%;
    height: 100px;
    background-color: rgb(240, 240, 240);
  }

  .swat-hosted-skeleton {
    width: 100%;
    height: 100%;
    background-color: rgb(240, 240, 240);
    position: relative;
    overflow: hidden;
  }

  .swat-hosted-skeleton::before {
    content: '';
    display: block;
    width: 100%;
    height: 100%;
    border-radius: 5px;
    background: linear-gradient(
      90deg,
      rgb(240, 240, 240) 0px,
      #f9f9f9 calc(50% - 25px),
      #f9f9f9 calc(50% + 25px),
      rgb(240, 240, 240) 100%
    );
    background-size: 35%;
    background-position: 0%;
    background-repeat: no-repeat;
    animation: loadingFlash 1.5s infinite linear;
  }
`;let Se=class extends k{render(){return b` <div class="swat-hosted-skeleton"></div> `}};Se.styles=[No,Do],Se=Fo([D("swat-hosted-loading-skeleton")],Se);const Uo=B`
  .btn {
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    font-size: 14px;
    font-weight: 500;
    cursor: pointer;
    transition: all 0.2s ease;
    min-width: 80px;
  }

  .btn:disabled {
    cursor: not-allowed;
    opacity: 0.6;
  }

  .btn-primary {
    background-color: var(--backgrounds-button-color);
    color: var(--fonts-button-color);
    font-size: var(--fonts-button-size);
    line-height: var(--fonts-button-line-height);
    font-family: var(--fonts-button-family);
    font-weight: var(--fonts-button-character-styles-font-weight);
    font-style: var(--fonts-button-character-styles-font-style);
  }

  .btn-primary:hover:not(:disabled) {
    background-color: var(--backgrounds-button-sub-styles-hover-color);
  }

  .btn-primary:focus-visible {
    outline: 2px solid var(--fonts-link-sub-styles-link-color);
    outline-offset: 2px;
  }

  .btn-primary:focus:not(:focus-visible) {
    outline: none;
  }
`;var zo=Object.defineProperty,Go=Object.getOwnPropertyDescriptor,Ot=(e,t,s,i)=>{for(var o=i>1?void 0:i?Go(t,s):t,r=e.length-1,n;r>=0;r--)(n=e[r])&&(o=(i?n(t,s,o):n(o))||o);return i&&o&&zo(t,s,o),o};let ft=class extends k{constructor(){super(...arguments),this.showCloseButton=!0}willUpdate(e){e.has("config")&&(this.localization=new it(this.config))}handleClose(){var e;(e=this.onClose)==null||e.call(this)}get languages(){var t;return(((t=this.localization)==null?void 0:t.formatMessage("languages_supported"))||"").split(",").map(s=>s.trim())}render(){var e,t,s;return b`
    <span>${(e=this.localization)==null?void 0:e.formatMessage("language_info_description")}</span>
    <ul class="swat-hosted-language-list">
      ${this.languages.map(i=>b`<li>${i}</li>`)}
    </ul>
    ${this.showCloseButton?b`
    <div class="swat-hosted-close-wrapper">
    <button
      class="btn btn-primary"
      type="button"
      @click="${this.handleClose}"
      aria-label="${(t=this.localization)==null?void 0:t.formatMessage("close_language_modal_label")}"
    >
      ${(s=this.localization)==null?void 0:s.formatMessage("close_language_modal_button")}
    </button>
    </div>
    `:""}
    `}};ft.styles=[Uo,B`
    .swat-hosted-language-list {
      padding-left: 20px;
    }
    .swat-hosted-close-wrapper{
      display: flex;
      justify-content: center;
    }
  `],Ot([Y({context:Rt}),g({attribute:!1})],ft.prototype,"localization",2),Ot([g({attribute:!1})],ft.prototype,"config",2),Ot([g({attribute:!1})],ft.prototype,"onClose",2),Ot([g({type:Boolean})],ft.prototype,"showCloseButton",2),ft=Ot([D("review-summaries-language-info")],ft);var Vo=Object.defineProperty,jo=Object.getOwnPropertyDescriptor,qo=(e,t,s,i)=>{for(var o=i>1?void 0:i?jo(t,s):t,r=e.length-1,n;r>=0;r--)(n=e[r])&&(o=(i?n(t,s,o):n(o))||o);return i&&o&&Vo(t,s,o),o};let Ae=class extends k{render(){return b`
      <svg
        width="12px"
        height="12px"
        viewBox="0 0 27 27"
        xmlns="http://www.w3.org/2000/svg"
        aria-hidden="true"
        data-testid="bv-close-icon"
      >
        <title>close button</title>
        <path
          d="M1.431.002a1.585 1.585 0 00-.94 2.728l10.746 10.786L.491 24.276a1.597 1.597 0 000 2.257 1.592 1.592 0 002.253 0l10.772-10.786 10.747 10.786a1.592 1.592 0 002.253 0 1.597 1.597 0 000-2.257l-10.772-10.76L26.516 2.73A1.589 1.589 0 0025.352.002c-.41.01-.8.18-1.09.472l-10.746 10.76L2.744.474a1.584 1.584 0 00-1.14-.472 1.583 1.583 0 00-.173 0z"
          fill="#000"
          fill-rule="evenodd"
        />
      </svg>
    `}};Ae.styles=B`
    :host {
      display: inline-block;
    }
  `,Ae=qo([D("swat-hosted-close-icon")],Ae);function ks(e,t){const s=i=>{if(i.key!=="Tab")return;const o=t();if(o.length===0)return;let r=-1;for(const a of i.composedPath()){const l=o.indexOf(a);if(l!==-1){r=l;break}}if(r===-1)return;i.preventDefault();const n=i.shiftKey?r===0?o.length-1:r-1:r===o.length-1?0:r+1;o[n].focus()};return e.addEventListener("keydown",s),()=>e.removeEventListener("keydown",s)}function Bs(e){var i;const t=e.querySelector(H.reviewSummaries),s=(i=t==null?void 0:t.shadowRoot)==null?void 0:i.querySelector(H.modal);return s==null?void 0:s.open}function Ls(e){var t,s;return(s=(t=e.querySelector(H.reviewSummaries))==null?void 0:t.shadowRoot)==null?void 0:s.querySelector(`.${H.infoButton}`)}function Xo(e){var s;const t=(s=e.shadowRoot)==null?void 0:s.querySelector(`.${H.mobileCardContent}`);if(t)return ks(t,()=>{var o;return Bs(e)?[]:[(o=e.shadowRoot)==null?void 0:o.querySelector(`.${H.mobileCardCloseBtn}`),Ls(e)].filter(Boolean)})}function Zo(e){var s;const t=(s=e.shadowRoot)==null?void 0:s.querySelector(`.${H.tooltipContainer}`);if(t)return ks(t,()=>{var r,n;if(Bs(e))return[];const i=(r=e.shadowRoot)==null?void 0:r.querySelector(`.${H.tooltipCloseBtn}`),o=(n=e.shadowRoot)==null?void 0:n.querySelector(`#${H.tooltipContent}`);return[i,o,Ls(e)].filter(Boolean)})}var Wo=Object.defineProperty,Yo=Object.getOwnPropertyDescriptor,Zt=(e,t,s,i)=>{for(var o=i>1?void 0:i?Yo(t,s):t,r=e.length-1,n;r>=0;r--)(n=e[r])&&(o=(i?n(t,s,o):n(o))||o);return i&&o&&Wo(t,s,o),o};let xt=class extends k{firstUpdated(){this.updateTooltipPosition(),window.addEventListener("resize",this.updateTooltipPosition.bind(this)),window.addEventListener("scroll",this.updateTooltipPosition.bind(this))}shouldUpdate(e){return this.localization=new it(this.config),e.has("config")?(this.localization=new it(this.config),!0):!1}updated(e){var t,s;if(e.has("config")){this.updateTooltipPosition(),this.style.display="block",(t=this.cleanupFocusTrap)==null||t.call(this),this.cleanupFocusTrap=Zo(this);const i=(s=this.shadowRoot)==null?void 0:s.querySelector(`.${H.tooltipCloseBtn}`);i&&i.focus()}}updateTooltipPosition(){var f,v;const e=(f=this.config)==null?void 0:f.inlineApp,t=e==null?void 0:e.getBoundingClientRect(),s=(v=this.shadowRoot)==null?void 0:v.querySelector(`.${H.tooltipContainer}`);if(!s||!t)return;const i=350,o=300,r=20,n=10;let a=t.left+t.width/2-i/2;const l=t.top-o-r,c=t.left+t.width/2-i/2,h=c+i;let u=50;if(h>window.innerWidth-n){const E=h-(window.innerWidth-n);a-=E,u=(i/2+E)/i*100}if(c<n){const E=n-c;a+=E,u=(i/2-E)/i*100}u=Math.max(15,Math.min(85,u)),s.style.top=`${l}px`,s.style.left=`${a}px`,s.style.setProperty("--arrow-left",`${u}%`)}render(){var e;return b`
      <div class=${H.tooltipContainer} role="dialog" aria-labelledby="swat-hosted-summaries-heading-id" aria-modal="true">
        <slot></slot>
        <button
          class=${H.tooltipCloseBtn}
          aria-label=${(e=this.localization)==null?void 0:e.formatMessage("close_ai_review_summary")}
          @click="${t=>this.closeSummary(t)}"
        >
          <swat-hosted-close-icon></swat-hosted-close-icon>
        </button>
        <div
          class="swat-hosted-tooltip-content"
          id=${H.tooltipContent}
          tabindex="0"
        >
          <slot name="swat-hosted-tooltip-content-slot"></slot>
        </div>
      </div>
    `}closeSummary(e){var s,i,o,r;e==null||e.stopPropagation(),e==null||e.preventDefault(),(s=this.analytics)==null||s.trackModalClose(),(i=this.cleanupFocusTrap)==null||i.call(this),this.cleanupFocusTrap=void 0,this.style.display="none";const t=(o=this.config)==null?void 0:o.inlineApp;if(t){const n=(r=t==null?void 0:t.parentElement)==null?void 0:r.querySelector("button");n?n.focus():console.warn("No button found within the trigger element")}}};xt.styles=B`
    :host {
      display: block;
      position: relative;
    }
    .swat-hosted-tooltip {
      display: block;
      position: fixed;
      width: 350px;
      height: 300px;
      background: var(--swat-hosted-computed-background, white);
      border: 1px solid #ccc;
      overflow: visible;
      border-radius: 5px;
      padding: 15px 10px 15px 10px;
      box-sizing: border-box;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
      z-index: 2;
    }

    .swat-hosted-tooltip::before {
      content: '';
      position: absolute;
      bottom: -22px; /* Adjust to position the border correctly */
      left: var(--arrow-left, 50%);
      transform: translateX(-50%);
      border-width: 11px;
      border-style: solid;
      border-color: #ccc transparent transparent transparent;
    }

    .swat-hosted-tooltip::after {
      content: '';
      position: absolute;
      bottom: -20px;
      left: var(--arrow-left, 50%);
      transform: translateX(-50%);
      border-width: 10px;
      border-style: solid;
      border-color: var(--backgrounds-lightbox-color, white) transparent
        transparent transparent;
    }
    .swat-hosted-tooltip-content {
      height: 100%;
      overflow-y: scroll;
    }
    .swat-hosted-tooltip-content::-webkit-scrollbar {
      width: 3px;
    }
    .swat-hosted-tooltip-content::-webkit-scrollbar-thumb {
      background-color: rgba(0, 0, 0, 0.2);
      border-radius: 6px;
    }

    .swat-hosted-close-btn {
      position: absolute;
      top: 10px;
      right: 10px;
      cursor: pointer;
      background: none;
      border: none;
      font-size: 16px;
    }
  `,Zt([Y({context:Mt}),g({attribute:!1})],xt.prototype,"analytics",2),Zt([Y({context:Rt}),g({attribute:!1})],xt.prototype,"localization",2),Zt([g({attribute:!1})],xt.prototype,"config",2),xt=Zt([D("swat-hosted-tooltip-component")],xt);var Jo=Object.defineProperty,Ko=Object.getOwnPropertyDescriptor,_t=(e,t,s,i)=>{for(var o=i>1?void 0:i?Ko(t,s):t,r=e.length-1,n;r>=0;r--)(n=e[r])&&(o=(i?n(t,s,o):n(o))||o);return i&&o&&Jo(t,s,o),o};let at=class extends k{constructor(){super(...arguments),this.title="",this.closeButtonAriaLabel=""}updated(e){var t,s;if(e.has("config")){this.style.display="block",document.body.style.overflow="hidden",(t=this.cleanupFocusTrap)==null||t.call(this),this.cleanupFocusTrap=Xo(this);const i=(s=this.shadowRoot)==null?void 0:s.querySelector(".swat-hosted-mobile-card-close-btn");i&&i.focus()}}render(){return b`
      <div class="swat-hosted-mobile-card-overlay" @click="${this.closeSummary}"></div>
      <div class="swat-hosted-mobile-card-content">
        <button class="swat-hosted-mobile-card-close-btn" aria-label=${this.closeButtonAriaLabel} @click="${this.closeSummary}">
          <swat-hosted-close-icon></swat-hosted-close-icon>
        </button>
        ${this.title?b`
          <div class="swat-hosted-mobile-card-header">
            <h3 class="swat-hosted-mobile-card-title">${this.title}</h3>
          </div>
        `:""}
        <div>
          <slot name="swat-hosted-card-content-slot"></slot>
        </div>
      </div>
    `}closeSummary(){var t,s,i,o;if((t=this.cleanupFocusTrap)==null||t.call(this),this.style.display="none",document.body.style.overflow="auto",this.onClose){(s=this.onClose)==null||s.call(this);return}(i=this.analytics)==null||i.trackModalClose();const e=(o=this.config)==null?void 0:o.inlineApp;if(e){const r=e.querySelector("button");r?r.focus():console.warn("No button found within the trigger element")}}};at.styles=B`
    :host {
      display: block;
      position: relative;
      z-index: ${Number.MAX_SAFE_INTEGER};
    }
    .swat-hosted-mobile-card-content {
      display: block;
      position: fixed;
      bottom: 0;
      left: 0;
      right: 0;
      background: var(--swat-hosted-computed-background, white);
      box-shadow: 0 -2px 8px rgba(0, 0, 0, 0.1);
      border-radius: 16px 16px 0 0; /* Rounded top corners */
      height: auto; /* Dynamic height based on content */
      z-index: ${Number.MAX_SAFE_INTEGER};
      overflow-y: auto; /* Enable scrolling when content is too large */
      max-height: 90vh;
      flex-grow: 1;
      padding: 16px 0px 10px 10px;
    }
    .swat-hosted-mobile-card-content::-webkit-scrollbar {
      width: 3px;
    }
    .swat-hosted-mobile-card-content::-webkit-scrollbar-thumb {
      background-color: rgba(0, 0, 0, 0.2);
      border-radius: 6px;
    }
    .swat-hosted-mobile-card-close-btn {
      position: absolute;
      top: 10px;
      right: 10px;
      cursor: pointer;
      background: none;
      border: none;
      font-size: 16px;
      padding: 4px;
    }
    .swat-hosted-mobile-card-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 10px;
    }
    .swat-hosted-mobile-card-title {
      margin: 0;
      font-family: var(--fonts-section-header-family, Arial);
      color: var(--fonts-section-header-color, #000);
      font-weight: var(--fonts-section-header-character-styles-font-weight, bold);
      fontSize: var(--fonts-section-header-controls-size);,
      lineHeight: var(--fonts-section-header-controls-line-height),
      letterSpacing: '1px'
    }
    .swat-hosted-mobile-card-overlay {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent overlay */
      z-index: ${Number.MAX_SAFE_INTEGER-1}; /* One less than the modal */
    }
  `,_t([Y({context:Mt}),g({attribute:!1})],at.prototype,"analytics",2),_t([g({attribute:!1})],at.prototype,"config",2),_t([g({attribute:!1})],at.prototype,"onClose",2),_t([g({type:String})],at.prototype,"title",2),_t([g({type:String})],at.prototype,"closeButtonAriaLabel",2),at=_t([D("swat-hosted-mobile-card")],at);const Ps=()=>/android|iphone|ipad|ipod|blackberry|iemobile|opera mini/i.test(navigator.userAgent),Qo=({styles:e=""}={})=>b`<svg width="14" height="14" viewBox="0 0 8 8" fill="#6F6F6F" xmlns="http://www.w3.org/2000/svg" style="${e}">
<path d="M3.6 2H4.4V2.8H3.6V2ZM3.6 3.6H4.4V6H3.6V3.6ZM4 0C1.792 0 0 1.792 0 4C0 6.208 1.792 8 4 8C6.208 8 8 6.208 8 4C8 1.792 6.208 0 4 0ZM4 7.2C2.236 7.2 0.8 5.764 0.8 4C0.8 2.236 2.236 0.8 4 0.8C5.764 0.8 7.2 2.236 7.2 4C7.2 5.764 5.764 7.2 4 7.2Z" fill="#6F6F6F"/>
</svg>`;var tr=Object.defineProperty,er=Object.getOwnPropertyDescriptor,z=(e,t,s,i)=>{for(var o=i>1?void 0:i?er(t,s):t,r=e.length-1,n;r>=0;r--)(n=e[r])&&(o=(i?n(t,s,o):n(o))||o);return i&&o&&tr(t,s,o),o};let N=class extends k{constructor(){super(...arguments),this.config=null,this.appConfig=this.config,this.api=new ts(this.config,this.analytics),this._showFullText=!1,this._summary="",this._errorMessage="",this._loading=!0,this.showModal=!1,this.isComponentInView=!1,this.infoButtonRef=Ze(),this.isMobile=Ps(),this.showMobileCard=!1,this.summaryRef=Ze()}shouldUpdate(e){var t,s;return!this.appConfig&&e.has("config")&&this.config!==null||e.has("config")&&((t=this.config)==null?void 0:t.productId)!==((s=this.appConfig)==null?void 0:s.productId)?(this.resetState(),this.appConfig=this.config,this.analytics=new he(this.config),this.api=new ts(this.config,this.analytics),this.localization=new it(this.config),this.analytics.trackPageView(),this.isComponentInView=!1,this.initializeIntersectionObserver(),this.fetchData(),this.updateBackground(),!0):!!this.appConfig}updateBackground(){var e;((e=this.config)==null?void 0:e.type)==="modal"?this.style.setProperty("--swat-summary-background-color","transparent"):this.style.setProperty("--swat-summary-background-color","var(--backgrounds-prs-container-color, white)")}async fetchData(){var e,t,s;try{const i=await this.api.getReviewSummaries();i&&i.length>0?(this._summary=i[0].summary||"",this._summary||(this._errorMessage=this.localization.formatMessage("ai_review_summary_error"),(e=this.analytics)==null||e.trackNoSummary(i[0].detail))):(this._errorMessage=this.localization.formatMessage("ai_review_summary_error"),(t=this.analytics)==null||t.trackNoSummary())}catch(i){this._errorMessage=this.localization.formatMessage("ai_review_summary_error"),i instanceof Error&&((s=this.analytics)==null||s.trackNoSummary(i==null?void 0:i.message)),console.error("Error fetching review summary:",i)}this._loading=!1}resetState(){this._showFullText=!1,this._summary="",this._errorMessage="",this._loading=!0}toggleText(e){var t;e.preventDefault(),this._showFullText=!this._showFullText,(t=this.analytics)==null||t.trackShowMoreLessSummary(this._showFullText),this._showFullText&&this.summaryRef.value&&this.summaryRef.value.focus()}renderLoader(){var e;return((e=this.config)==null?void 0:e.type)==="inline"?b`
        <swat-hosted-loading-skeleton></swat-hosted-loading-skeleton>
      `:b`
        <div class="swat-hosted-error-container">
          <div class="swat-hosted-loader-container">
            <swat-hosted-loading-icon></swat-hosted-loading-icon>
          </div>
        </div>
      `}renderError(){var e;return((e=this.config)==null?void 0:e.type)==="inline"?b``:b`<div class="swat-hosted-error-container">
        <div class="swat-hosted-error-message">${this._errorMessage}</div>
      </div>`}initializeIntersectionObserver(){try{if(IntersectionObserver){const e=Date.now();let t=null;this.intersectionObserver=new IntersectionObserver(s=>{s.forEach(i=>{i.isIntersecting?this.isComponentInView||(t=window.setTimeout(()=>{this.handleComponentInView(e),this.cleanUpObserver()},5e3)):t&&(clearTimeout(t),t=null)})},{threshold:.5}),this.intersectionObserver.observe(this)}}catch(e){console.error("Error initializing IntersectionObserver:",e),this.handleComponentInView(Date.now())}}handleComponentInView(e){this.isComponentInView||(this.isComponentInView=!0,this.analytics.trackViewedUGC(e))}cleanUpObserver(){this.intersectionObserver&&this.intersectionObserver.disconnect()}openLanguageModal(){this.showModal=!0,this.isMobile&&(this.showMobileCard=!0),this.analytics.trackLanguageDisclaimerOpen()}_renderModalContent(){return b`
      <review-summaries-language-info 
        .config="${this.config}"
        .onClose="${()=>this._closeModal()}"
      ></review-summaries-language-info>`}_renderMobileCardContent(){return b`
      <review-summaries-language-info 
        .config="${this.config}"
        .onClose="${()=>this._closeModal()}"
        .showCloseButton="${!1}"
      ></review-summaries-language-info>`}_closeModal(){this.showModal=!1,this.showMobileCard=!1,this.analytics.trackLanguageDisclaimerClose(),this.updateComplete.then(()=>{var e;(e=this.infoButtonRef.value)==null||e.focus()})}renderSummaryHeading(){var t;const e=this.localization.formatMessage("review_summary_heading");return(t=this.config)!=null&&t.inlineApp?b`<h2 class="swat-hosted-summaries-heading" id="swat-hosted-summaries-heading-id">${e}</h2>`:b`<h3 class="swat-hosted-summaries-heading" id="swat-hosted-summaries-heading-id">${e}</h3>`}render(){var r,n,a,l,c,h,u,f,v,E,M,G,Z,R,I,W,T;const e=((n=(r=this.config)==null?void 0:r.features.reviewSummaryConfigs)==null?void 0:n.summaryFormatType)===Pt?this._summary.split(`
* `).map((q,d)=>d===0?q.substring(2):q):[],t=((l=(a=this.config)==null?void 0:a.features.reviewSummaryConfigs)==null?void 0:l.summaryFormatType)===Pt?e.length>2:this._summary.length>200;let s;this._showFullText||((c=this.config)==null?void 0:c.type)==="modal"?s=((u=(h=this.config)==null?void 0:h.features.reviewSummaryConfigs)==null?void 0:u.summaryFormatType)===Pt?e:this._summary:s=((v=(f=this.config)==null?void 0:f.features.reviewSummaryConfigs)==null?void 0:v.summaryFormatType)===Pt?e.slice(0,2):this._summary.length>200?this._summary.slice(0,200)+"...":this._summary;const i=`
      :host {
        ${(E=this.appConfig)==null?void 0:E.styles.fonts}
        ${(M=this.appConfig)==null?void 0:M.styles.backgrounds}
        ${(G=this.appConfig)==null?void 0:G.styles.marginAndPadding}
        ${(Z=this.appConfig)==null?void 0:Z.styles.borders}
        ${(R=this.appConfig)==null?void 0:R.styles.ratingIcons}
      }
    `,o=((I=this.config)==null?void 0:I.type)==="inline"?"swat-review-summary-container-border":"swat-review-summary-container";return b`
      <style>
        ${i}
      </style>
      ${this._loading?this.renderLoader():this._errorMessage?this.renderError():b`
              <div class="${o}">
                ${this.renderSummaryHeading()}
                <div class="swat-hosted-ai-icon">
                  <div class="swat-hosted-ai-icon-image">${_o}</div>
                  <div>
                    <span class="swat-hosted-summary-text">
                      ${si(this.localization.formatMessage("ai_summary_disclaimer"))}
                    </span>  
                    <button @click="${this.openLanguageModal}" class=${H.infoButton} 
                      aria-label="${this.localization.formatMessage("open_language_modal_label")}"
                      aria-haspopup="dialog"
                      aria-expanded="${this.showModal}"
                      type="button"
                      ${We(this.infoButtonRef)}
                      >${Qo()}
                    </button>
                  </div>
                </div>
                <div
                  class="swat-hosted-summary-text"
                  tabindex="-1"
                  role="region"
                  aria-label="${this.localization.formatMessage("review_summary_heading")}"
                  ${We(this.summaryRef)}
                >
                  ${Array.isArray(s)?b`<ul>
                        ${s.map(q=>b`<li class="bullet-point">${q}</li>`)}
                      </ul>`:b`${s}`}
                </div>
                <div class="swat-hosted-summary-actions">
                 <div class="swat-hosted-content-wrapper">
                  ${t&&((W=this.config)==null?void 0:W.type)==="inline"?b`<a
                        href="#"
                        class="swat-hosted-show-more-link"
                        @click="${this.toggleText}"
                        role="button"
                        aria-live="polite"
                        aria-label="${this._showFullText?this.localization.formatMessage("offscreen_review_summary_show_less"):this.localization.formatMessage("offscreen_review_summary_show_more")}"
                      >
                        ${this._showFullText?this.localization.formatMessage("show_less"):this.localization.formatMessage("show_more")}
                      </a>`:""}
                  <div class="swat-hosted-feedback-buttons">
                    <swat-feedback-button
                      .summaryText=${this._summary}
                      .showFeedback=${((T=this.config)==null?void 0:T.type)==="inline"}
                      .config="${this.config}"
                    ></swat-feedback-button>
                  </div>
                </div>
              </div>
              </div>
            `}

      <!-- Language Modal -->
      ${this.showMobileCard?b`
            <swat-hosted-mobile-card .config="${this.config}" .onClose="${()=>this._closeModal()}" .title="${this.localization.formatMessage("language_info_title")}" 
            .closeButtonAriaLabel="${this.localization.formatMessage("close_language_modal_label")}">
              <div slot="swat-hosted-card-content-slot">
                ${this._renderMobileCardContent()}
              </div>
            </swat-hosted-mobile-card>
          `:b`
            <modal-component
              .open=${this.showModal}
              .OnClose=${()=>this._closeModal()}
              .closeButtonAriaLabel=${this.localization.formatMessage("close_language_modal_label")}
              .title=${this.localization.formatMessage("language_info_title")}
              .styleConfig=${{minHeight:"150px",maxWidth:"640px",header:{fontSize:"var(--fonts-section-header-controls-size)",lineHeight:"var(--fonts-section-header-controls-line-height)",letterSpacing:"1px"}}}
            >
              ${this._renderModalContent()}
            </modal-component>
          `}
    `}};N.styles=B`
    :host {
      display: block;
      background-color: var(--swat-summary-background-color, transparent);
      color: var(--fonts-body-color);
      font-size: var(--fonts-body-size);
      font-family: var(--fonts-body-family);
      line-height: var(--fonts-body-line-height);
    }
    .swat-review-summary-container {
      padding: var(--margin-and-padding-content-header-padding);
    }
    .swat-review-summary-container-border {
      padding: var(--margin-and-padding-content-header-padding);
      margin: var(--margin-and-padding-content-header-margin);
      border-bottom: 1px solid var(--fonts-ugc-date-color);
    }
    .swat-hosted-summaries-heading {
      color: var(--fonts-section-header-controls-color);
      font-size: var(--fonts-section-header-controls-size);
      font-family: var(--fonts-section-header-controls-family);
      line-height: var(--fonts-section-header-controls-line-height);
      text-transform: var(--fonts-section-header-controls-text-transform);
      font-style: var(
        --fonts-section-header-controls-character-styles-font-style
      );
      font-weight: var(
        --fonts-section-header-controls-character-styles-font-weight
      );
      text-decoration: var(
        --fonts-section-header-controls-character-styles-text-decoration
      );
      margin-top: 0;
      margin-bottom: 7px;
    }
    .swat-hosted-ai-icon {
      display: flex;
      align-items: center;
      padding-right: 3px;
    }
    .swat-hosted-ai-icon div {
      margin: 0;
    }
   .swat-hosted-ai-icon .swat-hosted-ai-icon-image svg {
      display: inline-block; 
      margin-right: 5px; 
      width: calc(var(--rating-icons-review-stars-sub-styles-full-color) * 0.75);
      height: calc(var(--rating-icons-review-stars-sub-styles-full-size) * 0.75);
    }
    .swat-hosted-ai-icon-image path {
      fill: var(--rating-icons-review-stars-sub-styles-full-color);
    }
    .swat-hosted-summary-text {
      text-transform: var(--fonts-body-text-transform);
      font-weight: var(--fonts-body-character-styles-font-weight);
      font-style: var(--fonts-body-character-styles-font-style);
      text-decoration: var(--fonts-body-character-styles-text-decoration);
      margin-top: 5px;
      padding-right: 3px;
    }
    .swat-hosted-summary-text ul {
      padding-left: 0;
      margin-left: 0;
      list-style-type: none;
    }
    .swat-hosted-summary-text li {
      position: relative;
      margin-left: 5px;
      padding-left: 10px;
    }
    .swat-hosted-summary-text li::before {
      content: '•';
      position: absolute;
      left: 0;
      color: currentColor;
    }
    .swat-hosted-info-button{
      background: none;
      border: none;
      padding: 0;
      cursor: pointer;
      height: 14px;
      position: relative;
      top:2px;
    }
    .swat-hosted-show-more-link {
      cursor: pointer;
      color: var(--fonts-link-sub-styles-link-color);
      font-size: var(--fonts-link-sub-styles-link-size);
      font-family: var(--fonts-link-sub-styles-link-family);
      text-transform: var(--fonts-link-sub-styles-link-text-transform);
      font-weight: var(--fonts-link-sub-styles-link-character-styles-font-weight);
      font-style: var(--fonts-link-sub-styles-link-character-styles-font-style);
      text-decoration: var(--fonts-link-sub-styles-link-character-styles-text-decoration);
      margin-right: auto;
    }
    .swat-hosted-show-more-link:hover{
      cursor: pointer;
      color: var(--fonts-link-sub-styles-hover-color);
      font-size: var(--fonts-link-sub-styles-hover-size);
      font-family: var(--fonts-link-sub-styles-hover-family);
      text-transform: var(--fonts-link-sub-styles-hover-text-transform);
      font-weight: var(--fonts-link-sub-styles-hover-character-styles-font-weight);
      font-style: var(--fonts-link-sub-styles-hover-character-styles-font-style);
      text-decoration: var(--fonts-link-sub-styles-hover-character-styles-text-decoration);
      margin-right: auto;
    }
    .swat-hosted-summary-actions {
      margin-top: 5px;
    }
    .swat-hosted-content-wrapper {
      display: flex;
      justify-content: space-between;
      align-items: center;
      width: 100%; /* Ensures full width is taken */
    }
    .swat-hosted-show-more-link {
      margin-right: auto; /* Aligns the "Show More" to the left */
    }
    .swat-hosted-feedback-buttons {
      color: var(--button-color);
      display: flex;
      justify-content: flex-end;
      gap: 5px;
      align-items: center;
      margin-left: auto; /* Forces the feedback buttons to the right */
    }
    .swat-hosted-error-message {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      max-width: 600px;
      text-align: center;
      word-wrap: break-word;
    }
    .swat-hosted-error-container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100px;
      text-transform: var(--fonts-body-text-transform);
      font-weight: var(--fonts-body-character-styles-font-weight);
      font-style: var(--fonts-body-character-styles-font-style);
      text-decoration: var(--fonts-body-character-styles-text-decoration);
    }
    .swat-hosted-loader-container {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      padding-bottom: 10px;
    }
  `,z([g({attribute:!1,type:Object})],N.prototype,"config",2),z([zt({context:xo})],N.prototype,"appConfig",2),z([Y({context:Mt}),g({attribute:!1})],N.prototype,"analytics",2),z([zt({context:As})],N.prototype,"api",2),z([Y({context:Rt}),g({attribute:!1})],N.prototype,"localization",2),z([$()],N.prototype,"_showFullText",2),z([$()],N.prototype,"_summary",2),z([$()],N.prototype,"_errorMessage",2),z([$()],N.prototype,"_loading",2),z([$()],N.prototype,"showModal",2),z([$()],N.prototype,"showMobileCard",2),N=z([D("swat-review-summaries")],N);var sr=Object.defineProperty,ir=Object.getOwnPropertyDescriptor,Et=(e,t,s,i)=>{for(var o=i>1?void 0:i?ir(t,s):t,r=e.length-1,n;r>=0;r--)(n=e[r])&&(o=(i?n(t,s,o):n(o))||o);return i&&o&&sr(t,s,o),o};let pt=class extends k{constructor(){super(),this.config=null,this.isMobile=!1,this.type="",this.analytics=new he(this.config),this.localization=new it(this.config),this.isMobile=Ps()}renderReviewSummaries(){return b`
      <swat-review-summaries .config=${this.config}></swat-review-summaries>
    `}updated(e){e.has("config")&&(this.analytics=new he(this.config),this.localization=new it(this.config),this.requestUpdate(),this.updateBackground())}updateBackground(){var t,s;const e=(s=(t=this.config)==null?void 0:t.styles)==null?void 0:s.backgrounds;if(e){const i=this.parseBackgroundStyles(e),o=i["--backgrounds-lightbox-gradient-type"],r=i["--backgrounds-lightbox-color"],n=i["--backgrounds-lightbox-gradient-color"],a=i["--backgrounds-lightbox-gradient-opacity"]||99;let l=r;if(o&&o.toLowerCase()!=="none"){const h=Number(a!==""?a:99)*255/100,u=`${n}${Math.round(h).toString(16)}`;l=`linear-gradient(${o==="TOP"?"":"0deg,"}${u}, ${r})`}this.style.setProperty("--swat-hosted-computed-background",l)}}parseBackgroundStyles(e){const t={};return e.split(";").filter(i=>i.trim()!=="").forEach(i=>{const[o,r]=i.split(":").map(n=>n.trim());o&&r&&(t[o]=r)}),t}renderContent(){var e;switch((e=this.config)==null?void 0:e.type){case"modal":return this.isMobile?b`
            <swat-hosted-mobile-card .config="${this.config}" .closeButtonAriaLabel="${this.localization.formatMessage("close_ai_review_summary")}">
              <div slot="swat-hosted-card-content-slot">
                ${this.renderReviewSummaries()}
              </div>
            </swat-hosted-mobile-card>
          `:b`
            <swat-hosted-tooltip-component .config="${this.config}">
              <div slot="swat-hosted-tooltip-content-slot">
                ${this.renderReviewSummaries()}
              </div>
            </swat-hosted-tooltip-component>
          `;case"inline":return b`${this.renderReviewSummaries()}`;default:return b`${this.renderReviewSummaries()}`}}render(){var t,s,i,o,r;const e=`
      :host {
        ${(t=this.config)==null?void 0:t.styles.fonts}
        ${(s=this.config)==null?void 0:s.styles.backgrounds}
        ${(i=this.config)==null?void 0:i.styles.marginAndPadding}
        ${(o=this.config)==null?void 0:o.styles.borders}
        ${(r=this.config)==null?void 0:r.styles.ratingIcons}
      }`;return b` <style>
        ${e}
      </style>
      ${this.renderContent()}`}};Et([g({attribute:!1,type:Object})],pt.prototype,"config",2),Et([g({type:Boolean})],pt.prototype,"isMobile",2),Et([g({attribute:!1,type:String})],pt.prototype,"type",2),Et([zt({context:Mt})],pt.prototype,"analytics",2),Et([zt({context:Rt})],pt.prototype,"localization",2),pt=Et([D("swat-review-summaries-wrapper")],pt);const It=window.BV.review_summaries;let lt=null;async function or(e){const t=e.dataset.bvProductId??e.dataset.bvProductid??"",s=e.dataset.bvType??e.dataset.bvType??"",i=e.inlineRatingDiv;lt?lt={...lt,productId:t,type:s,inlineApp:i}:lt=Object.assign({productId:t,type:s,inlineApp:i},lt);let o=null;s==="modal"?o=document.querySelector('swat-review-summaries-wrapper[type="modal"]'):s==="inline"&&(o=e.querySelector('swat-review-summaries-wrapper[type="inline"]')),o?o.config=lt:(o=document.createElement("swat-review-summaries-wrapper"),o.setAttribute("type",s),o.config=lt,e.append(o))}It.on("container_added",e=>{It.render(e)}),It.processConfig(e=>{lt=Object.assign(e),It.processReady()}),It.processQueue(e=>{or(e)})})();
