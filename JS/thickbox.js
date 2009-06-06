<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
 <title>/trunk/djedna/media/js/jquery.ui/datepicker/extras/thickbox-datepicker/thickbox.js - The DJ Edna Project - Trac</title><link rel="start" href="/project/wiki" /><link rel="search" href="/project/search" /><link rel="help" href="/project/wiki/TracGuide" /><link rel="stylesheet" href="/project/chrome/common/css/trac.css" type="text/css" /><link rel="stylesheet" href="/project/chrome/common/css/code.css" type="text/css" /><link rel="stylesheet" href="/project/chrome/common/css/browser.css" type="text/css" /><link rel="icon" href="/project/chrome/common/trac.ico" type="image/x-icon" /><link rel="shortcut icon" href="/project/chrome/common/trac.ico" type="image/x-icon" /><link rel="up" href="/project/browser/trunk/djedna/media/js/jquery.ui/datepicker/extras/thickbox-datepicker?rev=452" title="Parent directory" /><link rel="alternate" href="/project/browser/trunk/djedna/media/js/jquery.ui/datepicker/extras/thickbox-datepicker/thickbox.js?rev=452&amp;format=txt" title="Plain Text" type="text/plain" /><link rel="alternate" href="/project/browser/trunk/djedna/media/js/jquery.ui/datepicker/extras/thickbox-datepicker/thickbox.js?rev=452&amp;format=raw" title="Original Format" type="text/x-javascript; charset=iso-8859-15" /><style type="text/css">
:link, :visited {
text-decoration: none;
color: #006699;
border-bottom: 1px dotted #bbb;
}

h1 :link, h1 :visited { color: #006699 }

.milestone .info h2 em { color: #006699; font-style: normal }

dt em {
border-bottom: 1px dotted #bbb;
color: #006699;
font-style: normal;
text-decoration: none;
}
</style>
 <script type="text/javascript" src="/project/chrome/common/js/trac.js"></script>
</head>
<body>


<div id="banner">

<div id="header"><a id="logo" href="http://www.djedna.org/"><img src="http://www.djedna.org/blog/wp-content/themes/tarski_2_3/headers/djedna-blue.png" alt="The DJ Edna Project" /></a><hr /></div>

<form id="search" action="/project/search" method="get">
 <div>
  <label for="proj-search">Search:</label>
  <input type="text" id="proj-search" name="q" size="10" accesskey="f" value="" />
  <input type="submit" value="Search" />
  <input type="hidden" name="wiki" value="on" />
  <input type="hidden" name="changeset" value="on" />
  <input type="hidden" name="ticket" value="on" />
 </div>
</form>



<div id="metanav" class="nav"><ul><li class="first"><a href="/project/login">Login</a></li><li><a href="/project/settings">Settings</a></li><li><a accesskey="6" href="/project/wiki/TracGuide">Help/Guide</a></li><li class="last"><a href="/project/about">About Trac</a></li></ul></div>
</div>

<div id="mainnav" class="nav"><ul><li class="first"><a accesskey="1" href="/project/wiki">Wiki</a></li><li><a accesskey="2" href="/project/timeline">Timeline</a></li><li><a accesskey="3" href="/project/roadmap">Roadmap</a></li><li class="active"><a href="/project/browser">Browse Source</a></li><li><a href="/project/report">View Tickets</a></li><li class="last"><a accesskey="4" href="/project/search">Search</a></li></ul></div>
<div id="main">




<div id="ctxtnav" class="nav">
 <ul>
  <li class="first"><a href="/project/changeset/452/trunk/djedna/media/js/jquery.ui/datepicker/extras/thickbox-datepicker/thickbox.js">
   Last Change</a></li>
  <li class="last"><a href="/project/log/trunk/djedna/media/js/jquery.ui/datepicker/extras/thickbox-datepicker/thickbox.js?rev=452">
   Revision Log</a></li>
 </ul>
</div>


<div id="searchable">
<div id="content" class="browser">
 <h1><a class="first" title="Go to root directory" href="/project/browser?rev=452">root</a><span class="sep">/</span><a title="View trunk" href="/project/browser/trunk?rev=452">trunk</a><span class="sep">/</span><a title="View djedna" href="/project/browser/trunk/djedna?rev=452">djedna</a><span class="sep">/</span><a title="View media" href="/project/browser/trunk/djedna/media?rev=452">media</a><span class="sep">/</span><a title="View js" href="/project/browser/trunk/djedna/media/js?rev=452">js</a><span class="sep">/</span><a title="View jquery.ui" href="/project/browser/trunk/djedna/media/js/jquery.ui?rev=452">jquery.ui</a><span class="sep">/</span><a title="View datepicker" href="/project/browser/trunk/djedna/media/js/jquery.ui/datepicker?rev=452">datepicker</a><span class="sep">/</span><a title="View extras" href="/project/browser/trunk/djedna/media/js/jquery.ui/datepicker/extras?rev=452">extras</a><span class="sep">/</span><a title="View thickbox-datepicker" href="/project/browser/trunk/djedna/media/js/jquery.ui/datepicker/extras/thickbox-datepicker?rev=452">thickbox-datepicker</a><span class="sep">/</span><a title="View thickbox.js" href="/project/browser/trunk/djedna/media/js/jquery.ui/datepicker/extras/thickbox-datepicker/thickbox.js?rev=452">thickbox.js</a></h1>

 <div id="jumprev">
  <form action="" method="get">
   <div>
    <label for="rev">View revision:</label>
    <input type="text" id="rev" name="rev" value="452" size="4" />
   </div>
  </form>
 </div>

 

 
  <table id="info" summary="Revision info"><tr>
    <th scope="col">
     Revision <a href="/project/changeset/452">452</a>, 11.7 kB
     (checked in by thomas, 1 year ago)
    </th></tr><tr>
    <td class="message"><p>
Added jquery.ui <br />
</p>
</td>
   </tr><tr>
    <td colspan="2"><ul class="props">
      <li>Property <strong>svn:executable</strong> set to <em><code>*</code></em></li>
    </ul></td></tr>
  </table>
  <div id="preview"><table class="code"><thead><tr><th class="lineno">Line</th><th class="content">&nbsp;</th></tr></thead><tbody><tr><th id="L1"><a href="#L1">1</a></th>
<td><I><span class="code-comment">/*</span></i></td>
</tr><tr><th id="L2"><a href="#L2">2</a></th>
<td><I><span class="code-comment">&nbsp;* Thickbox 3.1 - One Box To Rule Them All.</span></i></td>
</tr><tr><th id="L3"><a href="#L3">3</a></th>
<td><I><span class="code-comment">&nbsp;* By Cody Lindley (http://www.codylindley.com)</span></i></td>
</tr><tr><th id="L4"><a href="#L4">4</a></th>
<td><I><span class="code-comment">&nbsp;* Copyright (c) 2007 cody lindley</span></i></td>
</tr><tr><th id="L5"><a href="#L5">5</a></th>
<td><I><span class="code-comment">&nbsp;* Licensed under the MIT License: http://www.opensource.org/licenses/mit-license.php</span></i></td>
</tr><tr><th id="L6"><a href="#L6">6</a></th>
<td><I><span class="code-comment">*/</span></i></td>
</tr><tr><th id="L7"><a href="#L7">7</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </td>
</tr><tr><th id="L8"><a href="#L8">8</a></th>
<td><B><span class="code-lang">var</span></b>&nbsp;tb_pathToImage = <B><span class="code-string">&quot;images/loadingAnimation.gif&quot;</span></b>;</td>
</tr><tr><th id="L9"><a href="#L9">9</a></th>
<td></td>
</tr><tr><th id="L10"><a href="#L10">10</a></th>
<td><I><span class="code-comment">/*!!!!!!!!!!!!!!!!! edit below this line at your own risk !!!!!!!!!!!!!!!!!!!!!!!*/</span></i></td>
</tr><tr><th id="L11"><a href="#L11">11</a></th>
<td></td>
</tr><tr><th id="L12"><a href="#L12">12</a></th>
<td><I><span class="code-comment">//on page load call tb_init</span></i></td>
</tr><tr><th id="L13"><a href="#L13">13</a></th>
<td><I><span class="code-comment"></span></i>$(document).ready(<B><span class="code-lang">function</span></b>(){&nbsp; &nbsp;</td>
</tr><tr><th id="L14"><a href="#L14">14</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; tb_init(<B><span class="code-string">'a.thickbox, area.thickbox, input.thickbox'</span></b>);<I><span class="code-comment">//pass where to apply thickbox</i></span></td>
</tr><tr><th id="L15"><a href="#L15">15</a></th>
<td><span class="code-string"><I></span></i>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;imgLoader = <B><span class="code-lang">new</span></b> Image();<I><span class="code-comment">// preload image</i></span></td>
</tr><tr><th id="L16"><a href="#L16">16</a></th>
<td><span class="code-string"><I></span></i>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;imgLoader.src = tb_pathToImage;</td>
</tr><tr><th id="L17"><a href="#L17">17</a></th>
<td>});</td>
</tr><tr><th id="L18"><a href="#L18">18</a></th>
<td></td>
</tr><tr><th id="L19"><a href="#L19">19</a></th>
<td><I><span class="code-comment">//add thickbox to href &amp; area elements that have a class of .thickbox</span></i></td>
</tr><tr><th id="L20"><a href="#L20">20</a></th>
<td><I><span class="code-comment"></span></i><B><span class="code-lang">function</span></b>&nbsp;<B><span class="code-func">tb_init</span></b>(domChunk){</td>
</tr><tr><th id="L21"><a href="#L21">21</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; $(domChunk).click(<B><span class="code-lang">function</span></b>(){</td>
</tr><tr><th id="L22"><a href="#L22">22</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; <B><span class="code-lang">var</span></b> t = <B><span class="code-lang">this</span></b>.title || <B><span class="code-lang">this</span></b>.name || <B><span class="code-lang">null</span></b>;</td>
</tr><tr><th id="L23"><a href="#L23">23</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; <B><span class="code-lang">var</span></b> a = <B><span class="code-lang">this</span></b>.href || <B><span class="code-lang">this</span></b>.alt;</td>
</tr><tr><th id="L24"><a href="#L24">24</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; <B><span class="code-lang">var</span></b> g = <B><span class="code-lang">this</span></b>.rel || <B><span class="code-lang">false</span></b>;</td>
</tr><tr><th id="L25"><a href="#L25">25</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; tb_show(t,a,g);</td>
</tr><tr><th id="L26"><a href="#L26">26</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; <B><span class="code-lang">this</span></b>.blur();</td>
</tr><tr><th id="L27"><a href="#L27">27</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; <B><span class="code-lang">return</span></b> <B><span class="code-lang">false</span></b>;</td>
</tr><tr><th id="L28"><a href="#L28">28</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; });</td>
</tr><tr><th id="L29"><a href="#L29">29</a></th>
<td>}</td>
</tr><tr><th id="L30"><a href="#L30">30</a></th>
<td></td>
</tr><tr><th id="L31"><a href="#L31">31</a></th>
<td><B><span class="code-lang">function</span></b>&nbsp;<B><span class="code-func">tb_show</span></b>(caption, url, imageGroup) {<I><span class="code-comment">//function called when the user clicks on a thickbox link</i></span></td>
</tr><tr><th id="L32"><a href="#L32">32</a></th>
<td><span class="code-lang"><I></span></i></td>
</tr><tr><th id="L33"><a href="#L33">33</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; <B><span class="code-lang">try</span></b> {</td>
</tr><tr><th id="L34"><a href="#L34">34</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <B><span class="code-lang">if</span></b> (typeof document.body.style.maxHeight === <B><span class="code-string">&quot;undefined&quot;</span></b>) {<I><span class="code-comment">//if IE 6</i></span></td>
</tr><tr><th id="L35"><a href="#L35">35</a></th>
<td><span class="code-lang"><I></span></i>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;$(<B><span class="code-string">&quot;body&quot;</span></b>,<B><span class="code-string">&quot;html&quot;</span></b>).css({height: <B><span class="code-string">&quot;100%&quot;</span></b>, width: <B><span class="code-string">&quot;100%&quot;</span></b>});</td>
</tr><tr><th id="L36"><a href="#L36">36</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; $(<B><span class="code-string">&quot;html&quot;</span></b>).css(<B><span class="code-string">&quot;overflow&quot;</span></b>,<B><span class="code-string">&quot;hidden&quot;</span></b>);</td>
</tr><tr><th id="L37"><a href="#L37">37</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <B><span class="code-lang">if</span></b> (document.getElementById(<B><span class="code-string">&quot;TB_HideSelect&quot;</span></b>) === <B><span class="code-lang">null</span></b>) {<I><span class="code-comment">//iframe to hide select elements in ie6</i></span></td>
</tr><tr><th id="L38"><a href="#L38">38</a></th>
<td><span class="code-lang"><I></span></i>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;$(<B><span class="code-string">&quot;body&quot;</span></b>).append(<B><span class="code-string">&quot;&lt;iframe id='TB_HideSelect'&gt;&lt;/iframe&gt;&lt;div id='TB_overlay'&gt;&lt;/div&gt;&lt;div id='TB_window'&gt;&lt;/div&gt;&quot;</span></b>);</td>
</tr><tr><th id="L39"><a href="#L39">39</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; $(<B><span class="code-string">&quot;#TB_overlay&quot;</span></b>).click(tb_remove);</td>
</tr><tr><th id="L40"><a href="#L40">40</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; }</td>
</tr><tr><th id="L41"><a href="#L41">41</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; }<B><span class="code-lang">else</span></b>{<I><span class="code-comment">//all others</i></span></td>
</tr><tr><th id="L42"><a href="#L42">42</a></th>
<td><span class="code-lang"><I></span></i>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<B><span class="code-lang">if</span></b>(document.getElementById(<B><span class="code-string">&quot;TB_overlay&quot;</span></b>) === <B><span class="code-lang">null</span></b>){</td>
</tr><tr><th id="L43"><a href="#L43">43</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; $(<B><span class="code-string">&quot;body&quot;</span></b>).append(<B><span class="code-string">&quot;&lt;div id='TB_overlay'&gt;&lt;/div&gt;&lt;div id='TB_window'&gt;&lt;/div&gt;&quot;</span></b>);</td>
</tr><tr><th id="L44"><a href="#L44">44</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; $(<B><span class="code-string">&quot;#TB_overlay&quot;</span></b>).click(tb_remove);</td>
</tr><tr><th id="L45"><a href="#L45">45</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; }</td>
</tr><tr><th id="L46"><a href="#L46">46</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; }</td>
</tr><tr><th id="L47"><a href="#L47">47</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </td>
</tr><tr><th id="L48"><a href="#L48">48</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <B><span class="code-lang">if</span></b>(tb_detectMacXFF()){</td>
</tr><tr><th id="L49"><a href="#L49">49</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; $(<B><span class="code-string">&quot;#TB_overlay&quot;</span></b>).addClass(<B><span class="code-string">&quot;TB_overlayMacFFBGHack&quot;</span></b>);<I><span class="code-comment">//use png overlay so hide flash</i></span></td>
</tr><tr><th id="L50"><a href="#L50">50</a></th>
<td><span class="code-string"><I></span></i>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;}<B><span class="code-lang">else</span></b>{</td>
</tr><tr><th id="L51"><a href="#L51">51</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; $(<B><span class="code-string">&quot;#TB_overlay&quot;</span></b>).addClass(<B><span class="code-string">&quot;TB_overlayBG&quot;</span></b>);<I><span class="code-comment">//use background and opacity</i></span></td>
</tr><tr><th id="L52"><a href="#L52">52</a></th>
<td><span class="code-string"><I></span></i>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;}</td>
</tr><tr><th id="L53"><a href="#L53">53</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </td>
</tr><tr><th id="L54"><a href="#L54">54</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <B><span class="code-lang">if</span></b>(caption===<B><span class="code-lang">null</span></b>){caption=<B><span class="code-string">&quot;&quot;</span></b>;}</td>
</tr><tr><th id="L55"><a href="#L55">55</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; $(<B><span class="code-string">&quot;body&quot;</span></b>).append(<B><span class="code-string">&quot;&lt;div id='TB_load'&gt;&lt;img src='&quot;</span></b>+imgLoader.src+<B><span class="code-string">&quot;' /&gt;&lt;/div&gt;&quot;</span></b>);<I><span class="code-comment">//add loader to the page</i></span></td>
</tr><tr><th id="L56"><a href="#L56">56</a></th>
<td><span class="code-string"><I></span></i>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;$(<B><span class="code-string">'#TB_load'</span></b>).show();<I><span class="code-comment">//show loader</i></span></td>
</tr><tr><th id="L57"><a href="#L57">57</a></th>
<td><span class="code-string"><I></span></i>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</td>
</tr><tr><th id="L58"><a href="#L58">58</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <B><span class="code-lang">var</span></b> baseURL;</td>
</tr><tr><th id="L59"><a href="#L59">59</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<B><span class="code-lang">if</span></b>(url.indexOf(<B><span class="code-string">&quot;?&quot;</span></b>)!==-1){ <I><span class="code-comment">//ff there is a query string involved</i></span></td>
</tr><tr><th id="L60"><a href="#L60">60</a></th>
<td><span class="code-lang"><I></span></i>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;baseURL = url.substr(0, url.indexOf(<B><span class="code-string">&quot;?&quot;</span></b>));</td>
</tr><tr><th id="L61"><a href="#L61">61</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;}<B><span class="code-lang">else</span></b>{ </td>
</tr><tr><th id="L62"><a href="#L62">62</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; baseURL = url;</td>
</tr><tr><th id="L63"><a href="#L63">63</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;}</td>
</tr><tr><th id="L64"><a href="#L64">64</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</td>
</tr><tr><th id="L65"><a href="#L65">65</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<B><span class="code-lang">var</span></b> urlString = /\.jpg$|\.jpeg$|\.png$|\.gif$|\.bmp$/;</td>
</tr><tr><th id="L66"><a href="#L66">66</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<B><span class="code-lang">var</span></b> urlType = baseURL.toLowerCase().match(urlString);</td>
</tr><tr><th id="L67"><a href="#L67">67</a></th>
<td></td>
</tr><tr><th id="L68"><a href="#L68">68</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <B><span class="code-lang">if</span></b>(urlType == <B><span class="code-string">'.jpg'</span></b> || urlType == <B><span class="code-string">'.jpeg'</span></b> || urlType == <B><span class="code-string">'.png'</span></b> || urlType == <B><span class="code-string">'.gif'</span></b> || urlType == <B><span class="code-string">'.bmp'</span></b>){<I><span class="code-comment">//code to show images</i></span></td>
</tr><tr><th id="L69"><a href="#L69">69</a></th>
<td><span class="code-lang"><I></span></i>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</td>
</tr><tr><th id="L70"><a href="#L70">70</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; TB_PrevCaption = <B><span class="code-string">&quot;&quot;</span></b>;</td>
</tr><tr><th id="L71"><a href="#L71">71</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; TB_PrevURL = <B><span class="code-string">&quot;&quot;</span></b>;</td>
</tr><tr><th id="L72"><a href="#L72">72</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; TB_PrevHTML = <B><span class="code-string">&quot;&quot;</span></b>;</td>
</tr><tr><th id="L73"><a href="#L73">73</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; TB_NextCaption = <B><span class="code-string">&quot;&quot;</span></b>;</td>
</tr><tr><th id="L74"><a href="#L74">74</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; TB_NextURL = <B><span class="code-string">&quot;&quot;</span></b>;</td>
</tr><tr><th id="L75"><a href="#L75">75</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; TB_NextHTML = <B><span class="code-string">&quot;&quot;</span></b>;</td>
</tr><tr><th id="L76"><a href="#L76">76</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; TB_imageCount = <B><span class="code-string">&quot;&quot;</span></b>;</td>
</tr><tr><th id="L77"><a href="#L77">77</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; TB_FoundURL = <B><span class="code-lang">false</span></b>;</td>
</tr><tr><th id="L78"><a href="#L78">78</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <B><span class="code-lang">if</span></b>(imageGroup){</td>
</tr><tr><th id="L79"><a href="#L79">79</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; TB_TempArray = $(<B><span class="code-string">&quot;a[@rel=&quot;</span></b>+imageGroup+<B><span class="code-string">&quot;]&quot;</span></b>).get();</td>
</tr><tr><th id="L80"><a href="#L80">80</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <B><span class="code-lang">for</span></b> (TB_Counter = 0; ((TB_Counter &lt; TB_TempArray.length) &amp;&amp; (TB_NextHTML === <B><span class="code-string">&quot;&quot;</span></b>)); TB_Counter++) {</td>
</tr><tr><th id="L81"><a href="#L81">81</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <B><span class="code-lang">var</span></b> urlTypeTemp = TB_TempArray[TB_Counter].href.toLowerCase().match(urlString);</td>
</tr><tr><th id="L82"><a href="#L82">82</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <B><span class="code-lang">if</span></b> (!(TB_TempArray[TB_Counter].href == url)) {&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </td>
</tr><tr><th id="L83"><a href="#L83">83</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <B><span class="code-lang">if</span></b> (TB_FoundURL) {</td>
</tr><tr><th id="L84"><a href="#L84">84</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; TB_NextCaption = TB_TempArray[TB_Counter].title;</td>
</tr><tr><th id="L85"><a href="#L85">85</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; TB_NextURL = TB_TempArray[TB_Counter].href;</td>
</tr><tr><th id="L86"><a href="#L86">86</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; TB_NextHTML = <B><span class="code-string">&quot;&lt;span id='TB_next'&gt;&amp;nbsp;&amp;nbsp;&lt;a href='#'&gt;Next &amp;gt;&lt;/a&gt;&lt;/span&gt;&quot;</span></b>;</td>
</tr><tr><th id="L87"><a href="#L87">87</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <B><span class="code-lang">else</span></b> {</td>
</tr><tr><th id="L88"><a href="#L88">88</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; TB_PrevCaption = TB_TempArray[TB_Counter].title;</td>
</tr><tr><th id="L89"><a href="#L89">89</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; TB_PrevURL = TB_TempArray[TB_Counter].href;</td>
</tr><tr><th id="L90"><a href="#L90">90</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; TB_PrevHTML = <B><span class="code-string">&quot;&lt;span id='TB_prev'&gt;&amp;nbsp;&amp;nbsp;&lt;a href='#'&gt;&amp;lt; Prev&lt;/a&gt;&lt;/span&gt;&quot;</span></b>;</td>
</tr><tr><th id="L91"><a href="#L91">91</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; }</td>
</tr><tr><th id="L92"><a href="#L92">92</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <B><span class="code-lang">else</span></b> {</td>
</tr><tr><th id="L93"><a href="#L93">93</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; TB_FoundURL = <B><span class="code-lang">true</span></b>;</td>
</tr><tr><th id="L94"><a href="#L94">94</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; TB_imageCount = <B><span class="code-string">&quot;Image &quot;</span></b> + (TB_Counter + 1) +<B><span class="code-string">&quot; of &quot;</span></b>+ (TB_TempArray.length);&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</td>
</tr><tr><th id="L95"><a href="#L95">95</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; }</td>
</tr><tr><th id="L96"><a href="#L96">96</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; }</td>
</tr><tr><th id="L97"><a href="#L97">97</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; }</td>
</tr><tr><th id="L98"><a href="#L98">98</a></th>
<td></td>
</tr><tr><th id="L99"><a href="#L99">99</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; imgPreloader = <B><span class="code-lang">new</span></b> Image();</td>
</tr><tr><th id="L100"><a href="#L100">100</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; imgPreloader.onload = <B><span class="code-lang">function</span></b>(){&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</td>
</tr><tr><th id="L101"><a href="#L101">101</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; imgPreloader.onload = <B><span class="code-lang">null</span></b>;</td>
</tr><tr><th id="L102"><a href="#L102">102</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </td>
</tr><tr><th id="L103"><a href="#L103">103</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <I><span class="code-comment">// Resizing large images - orginal by Christian Montoya edited by me.</span></i></td>
</tr><tr><th id="L104"><a href="#L104">104</a></th>
<td><I><span class="code-comment"></span></i>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<B><span class="code-lang">var</span></b> pagesize = tb_getPageSize();</td>
</tr><tr><th id="L105"><a href="#L105">105</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <B><span class="code-lang">var</span></b> x = pagesize[0] - 150;</td>
</tr><tr><th id="L106"><a href="#L106">106</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <B><span class="code-lang">var</span></b> y = pagesize[1] - 150;</td>
</tr><tr><th id="L107"><a href="#L107">107</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <B><span class="code-lang">var</span></b> imageWidth = imgPreloader.width;</td>
</tr><tr><th id="L108"><a href="#L108">108</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <B><span class="code-lang">var</span></b> imageHeight = imgPreloader.height;</td>
</tr><tr><th id="L109"><a href="#L109">109</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <B><span class="code-lang">if</span></b> (imageWidth &gt; x) {</td>
</tr><tr><th id="L110"><a href="#L110">110</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; imageHeight = imageHeight * (x / imageWidth); </td>
</tr><tr><th id="L111"><a href="#L111">111</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; imageWidth = x; </td>
</tr><tr><th id="L112"><a href="#L112">112</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <B><span class="code-lang">if</span></b> (imageHeight &gt; y) { </td>
</tr><tr><th id="L113"><a href="#L113">113</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; imageWidth = imageWidth * (y / imageHeight); </td>
</tr><tr><th id="L114"><a href="#L114">114</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; imageHeight = y; </td>
</tr><tr><th id="L115"><a href="#L115">115</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; }</td>
</tr><tr><th id="L116"><a href="#L116">116</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <B><span class="code-lang">else</span></b> <B><span class="code-lang">if</span></b> (imageHeight &gt; y) { </td>
</tr><tr><th id="L117"><a href="#L117">117</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; imageWidth = imageWidth * (y / imageHeight); </td>
</tr><tr><th id="L118"><a href="#L118">118</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; imageHeight = y; </td>
</tr><tr><th id="L119"><a href="#L119">119</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <B><span class="code-lang">if</span></b> (imageWidth &gt; x) { </td>
</tr><tr><th id="L120"><a href="#L120">120</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; imageHeight = imageHeight * (x / imageWidth); </td>
</tr><tr><th id="L121"><a href="#L121">121</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; imageWidth = x;</td>
</tr><tr><th id="L122"><a href="#L122">122</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; }</td>
</tr><tr><th id="L123"><a href="#L123">123</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; }</td>
</tr><tr><th id="L124"><a href="#L124">124</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <I><span class="code-comment">// End Resizing</span></i></td>
</tr><tr><th id="L125"><a href="#L125">125</a></th>
<td><I><span class="code-comment"></span></i>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</td>
</tr><tr><th id="L126"><a href="#L126">126</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; TB_WIDTH = imageWidth + 30;</td>
</tr><tr><th id="L127"><a href="#L127">127</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; TB_HEIGHT = imageHeight + 60;</td>
</tr><tr><th id="L128"><a href="#L128">128</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; $(<B><span class="code-string">&quot;#TB_window&quot;</span></b>).append(<B><span class="code-string">&quot;&lt;a href='' id='TB_ImageOff' title='Close'&gt;&lt;img id='TB_Image' src='&quot;</span></b>+url+<B><span class="code-string">&quot;' width='&quot;</span></b>+imageWidth+<B><span class="code-string">&quot;' height='&quot;</span></b>+imageHeight+<B><span class="code-string">&quot;' alt='&quot;</span></b>+caption+<B><span class="code-string">&quot;'/&gt;&lt;/a&gt;&quot;</span></b> + <B><span class="code-string">&quot;&lt;div id='TB_caption'&gt;&quot;</span></b>+caption+<B><span class="code-string">&quot;&lt;div id='TB_secondLine'&gt;&quot;</span></b> + TB_imageCount + TB_PrevHTML + TB_NextHTML + <B><span class="code-string">&quot;&lt;/div&gt;&lt;/div&gt;&lt;div id='TB_closeWindow'&gt;&lt;a href='#' id='TB_closeWindowButton' title='Close'&gt;close&lt;/a&gt; or Esc Key&lt;/div&gt;&quot;</span></b>);&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </td>
</tr><tr><th id="L129"><a href="#L129">129</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </td>
</tr><tr><th id="L130"><a href="#L130">130</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; $(<B><span class="code-string">&quot;#TB_closeWindowButton&quot;</span></b>).click(tb_remove);</td>
</tr><tr><th id="L131"><a href="#L131">131</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </td>
</tr><tr><th id="L132"><a href="#L132">132</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <B><span class="code-lang">if</span></b> (!(TB_PrevHTML === <B><span class="code-string">&quot;&quot;</span></b>)) {</td>
</tr><tr><th id="L133"><a href="#L133">133</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <B><span class="code-lang">function</span></b> <B><span class="code-func">goPrev</span></b>(){</td>
</tr><tr><th id="L134"><a href="#L134">134</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <B><span class="code-lang">if</span></b>($(document).unbind(<B><span class="code-string">&quot;click&quot;</span></b>,goPrev)){$(document).unbind(<B><span class="code-string">&quot;click&quot;</span></b>,goPrev);}</td>
</tr><tr><th id="L135"><a href="#L135">135</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; $(<B><span class="code-string">&quot;#TB_window&quot;</span></b>).remove();</td>
</tr><tr><th id="L136"><a href="#L136">136</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; $(<B><span class="code-string">&quot;body&quot;</span></b>).append(<B><span class="code-string">&quot;&lt;div id='TB_window'&gt;&lt;/div&gt;&quot;</span></b>);</td>
</tr><tr><th id="L137"><a href="#L137">137</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; tb_show(TB_PrevCaption, TB_PrevURL, imageGroup);</td>
</tr><tr><th id="L138"><a href="#L138">138</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <B><span class="code-lang">return</span></b> <B><span class="code-lang">false</span></b>;&nbsp; &nbsp;</td>
</tr><tr><th id="L139"><a href="#L139">139</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; }</td>
</tr><tr><th id="L140"><a href="#L140">140</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; $(<B><span class="code-string">&quot;#TB_prev&quot;</span></b>).click(goPrev);</td>
</tr><tr><th id="L141"><a href="#L141">141</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; }</td>
</tr><tr><th id="L142"><a href="#L142">142</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </td>
</tr><tr><th id="L143"><a href="#L143">143</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <B><span class="code-lang">if</span></b> (!(TB_NextHTML === <B><span class="code-string">&quot;&quot;</span></b>)) {&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </td>
</tr><tr><th id="L144"><a href="#L144">144</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <B><span class="code-lang">function</span></b> <B><span class="code-func">goNext</span></b>(){</td>
</tr><tr><th id="L145"><a href="#L145">145</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; $(<B><span class="code-string">&quot;#TB_window&quot;</span></b>).remove();</td>
</tr><tr><th id="L146"><a href="#L146">146</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; $(<B><span class="code-string">&quot;body&quot;</span></b>).append(<B><span class="code-string">&quot;&lt;div id='TB_window'&gt;&lt;/div&gt;&quot;</span></b>);</td>
</tr><tr><th id="L147"><a href="#L147">147</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; tb_show(TB_NextCaption, TB_NextURL, imageGroup);&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </td>
</tr><tr><th id="L148"><a href="#L148">148</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <B><span class="code-lang">return</span></b> <B><span class="code-lang">false</span></b>;&nbsp; &nbsp;</td>
</tr><tr><th id="L149"><a href="#L149">149</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; }</td>
</tr><tr><th id="L150"><a href="#L150">150</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; $(<B><span class="code-string">&quot;#TB_next&quot;</span></b>).click(goNext);</td>
</tr><tr><th id="L151"><a href="#L151">151</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </td>
</tr><tr><th id="L152"><a href="#L152">152</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; }</td>
</tr><tr><th id="L153"><a href="#L153">153</a></th>
<td></td>
</tr><tr><th id="L154"><a href="#L154">154</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; document.onkeydown = <B><span class="code-lang">function</span></b>(e){&nbsp; &nbsp; &nbsp; &nbsp;</td>
</tr><tr><th id="L155"><a href="#L155">155</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <B><span class="code-lang">if</span></b> (e == <B><span class="code-lang">null</span></b>) { <I><span class="code-comment">// ie</i></span></td>
</tr><tr><th id="L156"><a href="#L156">156</a></th>
<td><span class="code-lang"><I></span></i>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;keycode = event.keyCode;</td>
</tr><tr><th id="L157"><a href="#L157">157</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <B><span class="code-lang">else</span></b> { <I><span class="code-comment">// mozilla</i></span></td>
</tr><tr><th id="L158"><a href="#L158">158</a></th>
<td><span class="code-lang"><I></span></i>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;keycode = e.which;</td>
</tr><tr><th id="L159"><a href="#L159">159</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; }</td>
</tr><tr><th id="L160"><a href="#L160">160</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <B><span class="code-lang">if</span></b>(keycode == 27){ <I><span class="code-comment">// close</i></span></td>
</tr><tr><th id="L161"><a href="#L161">161</a></th>
<td><span class="code-lang"><I></span></i>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;tb_remove();</td>
</tr><tr><th id="L162"><a href="#L162">162</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <B><span class="code-lang">else</span></b> <B><span class="code-lang">if</span></b>(keycode == 190){ <I><span class="code-comment">// display previous image</i></span></td>
</tr><tr><th id="L163"><a href="#L163">163</a></th>
<td><span class="code-lang"><I></span></i>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<B><span class="code-lang">if</span></b>(!(TB_NextHTML == <B><span class="code-string">&quot;&quot;</span></b>)){</td>
</tr><tr><th id="L164"><a href="#L164">164</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; document.onkeydown = <B><span class="code-string">&quot;&quot;</span></b>;</td>
</tr><tr><th id="L165"><a href="#L165">165</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; goNext();</td>
</tr><tr><th id="L166"><a href="#L166">166</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; }</td>
</tr><tr><th id="L167"><a href="#L167">167</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <B><span class="code-lang">else</span></b> <B><span class="code-lang">if</span></b>(keycode == 188){ <I><span class="code-comment">// display next image</i></span></td>
</tr><tr><th id="L168"><a href="#L168">168</a></th>
<td><span class="code-lang"><I></span></i>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<B><span class="code-lang">if</span></b>(!(TB_PrevHTML == <B><span class="code-string">&quot;&quot;</span></b>)){</td>
</tr><tr><th id="L169"><a href="#L169">169</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; document.onkeydown = <B><span class="code-string">&quot;&quot;</span></b>;</td>
</tr><tr><th id="L170"><a href="#L170">170</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; goPrev();</td>
</tr><tr><th id="L171"><a href="#L171">171</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; }</td>
</tr><tr><th id="L172"><a href="#L172">172</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; }&nbsp; &nbsp; &nbsp; &nbsp;</td>
</tr><tr><th id="L173"><a href="#L173">173</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; };</td>
</tr><tr><th id="L174"><a href="#L174">174</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </td>
</tr><tr><th id="L175"><a href="#L175">175</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; tb_position();</td>
</tr><tr><th id="L176"><a href="#L176">176</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; $(<B><span class="code-string">&quot;#TB_load&quot;</span></b>).remove();</td>
</tr><tr><th id="L177"><a href="#L177">177</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; $(<B><span class="code-string">&quot;#TB_ImageOff&quot;</span></b>).click(tb_remove);</td>
</tr><tr><th id="L178"><a href="#L178">178</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; $(<B><span class="code-string">&quot;#TB_window&quot;</span></b>).css({display:<B><span class="code-string">&quot;block&quot;</span></b>}); <I><span class="code-comment">//for safari using css instead of show</i></span></td>
</tr><tr><th id="L179"><a href="#L179">179</a></th>
<td><span class="code-string"><I></span></i>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;};</td>
</tr><tr><th id="L180"><a href="#L180">180</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </td>
</tr><tr><th id="L181"><a href="#L181">181</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; imgPreloader.src = url;</td>
</tr><tr><th id="L182"><a href="#L182">182</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; }<B><span class="code-lang">else</span></b>{<I><span class="code-comment">//code to show html</i></span></td>
</tr><tr><th id="L183"><a href="#L183">183</a></th>
<td><span class="code-lang"><I></span></i>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</td>
</tr><tr><th id="L184"><a href="#L184">184</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <B><span class="code-lang">var</span></b> queryString = url.replace(/^[^\?]+\??/,<B><span class="code-string">''</span></b>);</td>
</tr><tr><th id="L185"><a href="#L185">185</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <B><span class="code-lang">var</span></b> params = tb_parseQuery( queryString );</td>
</tr><tr><th id="L186"><a href="#L186">186</a></th>
<td></td>
</tr><tr><th id="L187"><a href="#L187">187</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; TB_WIDTH = (params[<B><span class="code-string">'width'</span></b>]*1) + 30 || 630; <I><span class="code-comment">//defaults to 630 if no paramaters were added to URL</i></span></td>
</tr><tr><th id="L188"><a href="#L188">188</a></th>
<td><span class="code-string"><I></span></i>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;TB_HEIGHT = (params[<B><span class="code-string">'height'</span></b>]*1) + 40 || 440; <I><span class="code-comment">//defaults to 440 if no paramaters were added to URL</i></span></td>
</tr><tr><th id="L189"><a href="#L189">189</a></th>
<td><span class="code-string"><I></span></i>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;ajaxContentW = TB_WIDTH - 30;</td>
</tr><tr><th id="L190"><a href="#L190">190</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ajaxContentH = TB_HEIGHT - 45;</td>
</tr><tr><th id="L191"><a href="#L191">191</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </td>
</tr><tr><th id="L192"><a href="#L192">192</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <B><span class="code-lang">if</span></b>(url.indexOf(<B><span class="code-string">'TB_iframe'</span></b>) != -1){<I><span class="code-comment">// either iframe or ajax window&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </i></span></td>
</tr><tr><th id="L193"><a href="#L193">193</a></th>
<td><span class="code-lang"><I></span></i>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;urlNoQuery = url.split(<B><span class="code-string">'TB_'</span></b>);</td>
</tr><tr><th id="L194"><a href="#L194">194</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; $(<B><span class="code-string">&quot;#TB_iframeContent&quot;</span></b>).remove();</td>
</tr><tr><th id="L195"><a href="#L195">195</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <B><span class="code-lang">if</span></b>(params[<B><span class="code-string">'modal'</span></b>] != <B><span class="code-string">&quot;true&quot;</span></b>){<I><span class="code-comment">//iframe no modal</i></span></td>
</tr><tr><th id="L196"><a href="#L196">196</a></th>
<td><span class="code-lang"><I></span></i>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;$(<B><span class="code-string">&quot;#TB_window&quot;</span></b>).append(<B><span class="code-string">&quot;&lt;div id='TB_title'&gt;&lt;div id='TB_ajaxWindowTitle'&gt;&quot;</span></b>+caption+<B><span class="code-string">&quot;&lt;/div&gt;&lt;div id='TB_closeAjaxWindow'&gt;&lt;a href='#' id='TB_closeWindowButton' title='Close'&gt;close&lt;/a&gt; or Esc Key&lt;/div&gt;&lt;/div&gt;&lt;iframe frameborder='0' hspace='0' src='&quot;</span></b>+urlNoQuery[0]+<B><span class="code-string">&quot;' id='TB_iframeContent' name='TB_iframeContent&quot;</span></b>+<B><span class="code-var">Math</span></b>.round(<B><span class="code-var">Math</span></b>.random()*1000)+<B><span class="code-string">&quot;' onload='tb_showIframe()' style='width:&quot;</span></b>+(ajaxContentW + 29)+<B><span class="code-string">&quot;px;height:&quot;</span></b>+(ajaxContentH + 17)+<B><span class="code-string">&quot;px;' &gt; &lt;/iframe&gt;&quot;</span></b>);</td>
</tr><tr><th id="L197"><a href="#L197">197</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; }<B><span class="code-lang">else</span></b>{<I><span class="code-comment">//iframe modal</i></span></td>
</tr><tr><th id="L198"><a href="#L198">198</a></th>
<td><span class="code-lang"><I></span></i>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;$(<B><span class="code-string">&quot;#TB_overlay&quot;</span></b>).unbind();</td>
</tr><tr><th id="L199"><a href="#L199">199</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; $(<B><span class="code-string">&quot;#TB_window&quot;</span></b>).append(<B><span class="code-string">&quot;&lt;iframe frameborder='0' hspace='0' src='&quot;</span></b>+urlNoQuery[0]+<B><span class="code-string">&quot;' id='TB_iframeContent' name='TB_iframeContent&quot;</span></b>+<B><span class="code-var">Math</span></b>.round(<B><span class="code-var">Math</span></b>.random()*1000)+<B><span class="code-string">&quot;' onload='tb_showIframe()' style='width:&quot;</span></b>+(ajaxContentW + 29)+<B><span class="code-string">&quot;px;height:&quot;</span></b>+(ajaxContentH + 17)+<B><span class="code-string">&quot;px;'&gt; &lt;/iframe&gt;&quot;</span></b>);</td>
</tr><tr><th id="L200"><a href="#L200">200</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; }</td>
</tr><tr><th id="L201"><a href="#L201">201</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; }<B><span class="code-lang">else</span></b>{<I><span class="code-comment">// not an iframe, ajax</i></span></td>
</tr><tr><th id="L202"><a href="#L202">202</a></th>
<td><span class="code-lang"><I></span></i>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<B><span class="code-lang">if</span></b>($(<B><span class="code-string">&quot;#TB_window&quot;</span></b>).css(<B><span class="code-string">&quot;display&quot;</span></b>) != <B><span class="code-string">&quot;block&quot;</span></b>){</td>
</tr><tr><th id="L203"><a href="#L203">203</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <B><span class="code-lang">if</span></b>(params[<B><span class="code-string">'modal'</span></b>] != <B><span class="code-string">&quot;true&quot;</span></b>){<I><span class="code-comment">//ajax no modal</i></span></td>
</tr><tr><th id="L204"><a href="#L204">204</a></th>
<td><span class="code-lang"><I></span></i>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;$(<B><span class="code-string">&quot;#TB_window&quot;</span></b>).append(<B><span class="code-string">&quot;&lt;div id='TB_title'&gt;&lt;div id='TB_ajaxWindowTitle'&gt;&quot;</span></b>+caption+<B><span class="code-string">&quot;&lt;/div&gt;&lt;div id='TB_closeAjaxWindow'&gt;&lt;a href='#' id='TB_closeWindowButton'&gt;close&lt;/a&gt; or Esc Key&lt;/div&gt;&lt;/div&gt;&lt;div id='TB_ajaxContent' style='width:&quot;</span></b>+ajaxContentW+<B><span class="code-string">&quot;px;height:&quot;</span></b>+ajaxContentH+<B><span class="code-string">&quot;px'&gt;&lt;/div&gt;&quot;</span></b>);</td>
</tr><tr><th id="L205"><a href="#L205">205</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; }<B><span class="code-lang">else</span></b>{<I><span class="code-comment">//ajax modal</i></span></td>
</tr><tr><th id="L206"><a href="#L206">206</a></th>
<td><span class="code-lang"><I></span></i>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;$(<B><span class="code-string">&quot;#TB_overlay&quot;</span></b>).unbind();</td>
</tr><tr><th id="L207"><a href="#L207">207</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; $(<B><span class="code-string">&quot;#TB_window&quot;</span></b>).append(<B><span class="code-string">&quot;&lt;div id='TB_ajaxContent' class='TB_modal' style='width:&quot;</span></b>+ajaxContentW+<B><span class="code-string">&quot;px;height:&quot;</span></b>+ajaxContentH+<B><span class="code-string">&quot;px;'&gt;&lt;/div&gt;&quot;</span></b>); </td>
</tr><tr><th id="L208"><a href="#L208">208</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; }</td>
</tr><tr><th id="L209"><a href="#L209">209</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; }<B><span class="code-lang">else</span></b>{<I><span class="code-comment">//this means the window is already up, we are just loading new content via ajax</i></span></td>
</tr><tr><th id="L210"><a href="#L210">210</a></th>
<td><span class="code-lang"><I></span></i>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;$(<B><span class="code-string">&quot;#TB_ajaxContent&quot;</span></b>)[0].style.width = ajaxContentW +<B><span class="code-string">&quot;px&quot;</span></b>;</td>
</tr><tr><th id="L211"><a href="#L211">211</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; $(<B><span class="code-string">&quot;#TB_ajaxContent&quot;</span></b>)[0].style.height = ajaxContentH +<B><span class="code-string">&quot;px&quot;</span></b>;</td>
</tr><tr><th id="L212"><a href="#L212">212</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; $(<B><span class="code-string">&quot;#TB_ajaxContent&quot;</span></b>)[0].scrollTop = 0;</td>
</tr><tr><th id="L213"><a href="#L213">213</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; $(<B><span class="code-string">&quot;#TB_ajaxWindowTitle&quot;</span></b>).html(caption);</td>
</tr><tr><th id="L214"><a href="#L214">214</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; }</td>
</tr><tr><th id="L215"><a href="#L215">215</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; }</td>
</tr><tr><th id="L216"><a href="#L216">216</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </td>
</tr><tr><th id="L217"><a href="#L217">217</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; $(<B><span class="code-string">&quot;#TB_closeWindowButton&quot;</span></b>).click(tb_remove);</td>
</tr><tr><th id="L218"><a href="#L218">218</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </td>
</tr><tr><th id="L219"><a href="#L219">219</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <B><span class="code-lang">if</span></b>(url.indexOf(<B><span class="code-string">'TB_inline'</span></b>) != -1){&nbsp; &nbsp; &nbsp;</td>
</tr><tr><th id="L220"><a href="#L220">220</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; $(<B><span class="code-string">&quot;#TB_ajaxContent&quot;</span></b>).append($(<B><span class="code-string">'#'</span></b> + params[<B><span class="code-string">'inlineId'</span></b>]).children());</td>
</tr><tr><th id="L221"><a href="#L221">221</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; $(<B><span class="code-string">&quot;#TB_window&quot;</span></b>).unload(<B><span class="code-lang">function</span></b> () {</td>
</tr><tr><th id="L222"><a href="#L222">222</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; $(<B><span class="code-string">'#'</span></b> + params[<B><span class="code-string">'inlineId'</span></b>]).append( $(<B><span class="code-string">&quot;#TB_ajaxContent&quot;</span></b>).children() ); <I><span class="code-comment">// move elements back when you're finished</i></span></td>
</tr><tr><th id="L223"><a href="#L223">223</a></th>
<td><span class="code-string"><I></span></i>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;});</td>
</tr><tr><th id="L224"><a href="#L224">224</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; tb_position();</td>
</tr><tr><th id="L225"><a href="#L225">225</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; $(<B><span class="code-string">&quot;#TB_load&quot;</span></b>).remove();</td>
</tr><tr><th id="L226"><a href="#L226">226</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; $(<B><span class="code-string">&quot;#TB_window&quot;</span></b>).css({display:<B><span class="code-string">&quot;block&quot;</span></b>}); </td>
</tr><tr><th id="L227"><a href="#L227">227</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; }<B><span class="code-lang">else</span></b> <B><span class="code-lang">if</span></b>(url.indexOf(<B><span class="code-string">'TB_iframe'</span></b>) != -1){</td>
</tr><tr><th id="L228"><a href="#L228">228</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; tb_position();</td>
</tr><tr><th id="L229"><a href="#L229">229</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <B><span class="code-lang">if</span></b>($.browser.safari){<I><span class="code-comment">//safari needs help because it will not fire iframe onload</i></span></td>
</tr><tr><th id="L230"><a href="#L230">230</a></th>
<td><span class="code-lang"><I></span></i>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;$(<B><span class="code-string">&quot;#TB_load&quot;</span></b>).remove();</td>
</tr><tr><th id="L231"><a href="#L231">231</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; $(<B><span class="code-string">&quot;#TB_window&quot;</span></b>).css({display:<B><span class="code-string">&quot;block&quot;</span></b>});</td>
</tr><tr><th id="L232"><a href="#L232">232</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; }</td>
</tr><tr><th id="L233"><a href="#L233">233</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; }<B><span class="code-lang">else</span></b>{</td>
</tr><tr><th id="L234"><a href="#L234">234</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; $(<B><span class="code-string">&quot;#TB_ajaxContent&quot;</span></b>).load(url += <B><span class="code-string">&quot;&amp;random=&quot;</span></b> + (<B><span class="code-lang">new</span></b> <B><span class="code-var">Date</span></b>().getTime()),<B><span class="code-lang">function</span></b>(){<I><span class="code-comment">//to do a post change this load method</i></span></td>
</tr><tr><th id="L235"><a href="#L235">235</a></th>
<td><span class="code-string"><I></span></i>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;tb_position();</td>
</tr><tr><th id="L236"><a href="#L236">236</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; $(<B><span class="code-string">&quot;#TB_load&quot;</span></b>).remove();</td>
</tr><tr><th id="L237"><a href="#L237">237</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; tb_init(<B><span class="code-string">&quot;#TB_ajaxContent a.thickbox&quot;</span></b>);</td>
</tr><tr><th id="L238"><a href="#L238">238</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; $(<B><span class="code-string">&quot;#TB_window&quot;</span></b>).css({display:<B><span class="code-string">&quot;block&quot;</span></b>});</td>
</tr><tr><th id="L239"><a href="#L239">239</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; });</td>
</tr><tr><th id="L240"><a href="#L240">240</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; }</td>
</tr><tr><th id="L241"><a href="#L241">241</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </td>
</tr><tr><th id="L242"><a href="#L242">242</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; }</td>
</tr><tr><th id="L243"><a href="#L243">243</a></th>
<td></td>
</tr><tr><th id="L244"><a href="#L244">244</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <B><span class="code-lang">if</span></b>(!params[<B><span class="code-string">'modal'</span></b>]){</td>
</tr><tr><th id="L245"><a href="#L245">245</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; document.onkeyup = <B><span class="code-lang">function</span></b>(e){&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</td>
</tr><tr><th id="L246"><a href="#L246">246</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <B><span class="code-lang">if</span></b> (e == <B><span class="code-lang">null</span></b>) { <I><span class="code-comment">// ie</i></span></td>
</tr><tr><th id="L247"><a href="#L247">247</a></th>
<td><span class="code-lang"><I></span></i>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;keycode = event.keyCode;</td>
</tr><tr><th id="L248"><a href="#L248">248</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } <B><span class="code-lang">else</span></b> { <I><span class="code-comment">// mozilla</i></span></td>
</tr><tr><th id="L249"><a href="#L249">249</a></th>
<td><span class="code-lang"><I></span></i>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;keycode = e.which;</td>
</tr><tr><th id="L250"><a href="#L250">250</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; }</td>
</tr><tr><th id="L251"><a href="#L251">251</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <B><span class="code-lang">if</span></b>(keycode == 27){ <I><span class="code-comment">// close</i></span></td>
</tr><tr><th id="L252"><a href="#L252">252</a></th>
<td><span class="code-lang"><I></span></i>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;tb_remove();</td>
</tr><tr><th id="L253"><a href="#L253">253</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; }&nbsp; &nbsp; &nbsp; &nbsp;</td>
</tr><tr><th id="L254"><a href="#L254">254</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; };</td>
</tr><tr><th id="L255"><a href="#L255">255</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; }</td>
</tr><tr><th id="L256"><a href="#L256">256</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </td>
</tr><tr><th id="L257"><a href="#L257">257</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; } <B><span class="code-lang">catch</span></b>(e) {</td>
</tr><tr><th id="L258"><a href="#L258">258</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <I><span class="code-comment">//nothing here</span></i></td>
</tr><tr><th id="L259"><a href="#L259">259</a></th>
<td><I><span class="code-comment"></span></i>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;}</td>
</tr><tr><th id="L260"><a href="#L260">260</a></th>
<td>}</td>
</tr><tr><th id="L261"><a href="#L261">261</a></th>
<td></td>
</tr><tr><th id="L262"><a href="#L262">262</a></th>
<td><I><span class="code-comment">//helper functions below</span></i></td>
</tr><tr><th id="L263"><a href="#L263">263</a></th>
<td><I><span class="code-comment"></span></i><B><span class="code-lang">function</span></b>&nbsp;<B><span class="code-func">tb_showIframe</span></b>(){</td>
</tr><tr><th id="L264"><a href="#L264">264</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; $(<B><span class="code-string">&quot;#TB_load&quot;</span></b>).remove();</td>
</tr><tr><th id="L265"><a href="#L265">265</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; $(<B><span class="code-string">&quot;#TB_window&quot;</span></b>).css({display:<B><span class="code-string">&quot;block&quot;</span></b>});</td>
</tr><tr><th id="L266"><a href="#L266">266</a></th>
<td>}</td>
</tr><tr><th id="L267"><a href="#L267">267</a></th>
<td></td>
</tr><tr><th id="L268"><a href="#L268">268</a></th>
<td><B><span class="code-lang">function</span></b>&nbsp;<B><span class="code-func">tb_remove</span></b>() {</td>
</tr><tr><th id="L269"><a href="#L269">269</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; $(<B><span class="code-string">&quot;#TB_imageOff&quot;</span></b>).unbind(<B><span class="code-string">&quot;click&quot;</span></b>);</td>
</tr><tr><th id="L270"><a href="#L270">270</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; $(<B><span class="code-string">&quot;#TB_closeWindowButton&quot;</span></b>).unbind(<B><span class="code-string">&quot;click&quot;</span></b>);</td>
</tr><tr><th id="L271"><a href="#L271">271</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; $(<B><span class="code-string">&quot;#TB_window&quot;</span></b>).fadeOut(<B><span class="code-string">&quot;fast&quot;</span></b>,<B><span class="code-lang">function</span></b>(){$(<B><span class="code-string">'#TB_window,#TB_overlay,#TB_HideSelect'</span></b>).trigger(<B><span class="code-string">&quot;unload&quot;</span></b>).unbind().remove();});</td>
</tr><tr><th id="L272"><a href="#L272">272</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; $(<B><span class="code-string">&quot;#TB_load&quot;</span></b>).remove();</td>
</tr><tr><th id="L273"><a href="#L273">273</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; <B><span class="code-lang">if</span></b> (typeof document.body.style.maxHeight == <B><span class="code-string">&quot;undefined&quot;</span></b>) {<I><span class="code-comment">//if IE 6</i></span></td>
</tr><tr><th id="L274"><a href="#L274">274</a></th>
<td><span class="code-lang"><I></span></i>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;$(<B><span class="code-string">&quot;body&quot;</span></b>,<B><span class="code-string">&quot;html&quot;</span></b>).css({height: <B><span class="code-string">&quot;auto&quot;</span></b>, width: <B><span class="code-string">&quot;auto&quot;</span></b>});</td>
</tr><tr><th id="L275"><a href="#L275">275</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; $(<B><span class="code-string">&quot;html&quot;</span></b>).css(<B><span class="code-string">&quot;overflow&quot;</span></b>,<B><span class="code-string">&quot;&quot;</span></b>);</td>
</tr><tr><th id="L276"><a href="#L276">276</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; }</td>
</tr><tr><th id="L277"><a href="#L277">277</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; document.onkeydown = <B><span class="code-string">&quot;&quot;</span></b>;</td>
</tr><tr><th id="L278"><a href="#L278">278</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; document.onkeyup = <B><span class="code-string">&quot;&quot;</span></b>;</td>
</tr><tr><th id="L279"><a href="#L279">279</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; <B><span class="code-lang">return</span></b> <B><span class="code-lang">false</span></b>;</td>
</tr><tr><th id="L280"><a href="#L280">280</a></th>
<td>}</td>
</tr><tr><th id="L281"><a href="#L281">281</a></th>
<td></td>
</tr><tr><th id="L282"><a href="#L282">282</a></th>
<td><B><span class="code-lang">function</span></b>&nbsp;<B><span class="code-func">tb_position</span></b>() {</td>
</tr><tr><th id="L283"><a href="#L283">283</a></th>
<td>$(<B><span class="code-string">&quot;#TB_window&quot;</span></b>).css({marginLeft: <B><span class="code-string">'-'</span></b> + <B><span class="code-var">parseInt</span></b>((TB_WIDTH / 2),10) + <B><span class="code-string">'px'</span></b>, width: TB_WIDTH + <B><span class="code-string">'px'</span></b>});</td>
</tr><tr><th id="L284"><a href="#L284">284</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; <B><span class="code-lang">if</span></b> ( !(jQuery.browser.msie &amp;&amp; jQuery.browser.version &lt; 7)) { <I><span class="code-comment">// take away IE6</i></span></td>
</tr><tr><th id="L285"><a href="#L285">285</a></th>
<td><span class="code-lang"><I></span></i>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;$(<B><span class="code-string">&quot;#TB_window&quot;</span></b>).css({marginTop: <B><span class="code-string">'-'</span></b> + <B><span class="code-var">parseInt</span></b>((TB_HEIGHT / 2),10) + <B><span class="code-string">'px'</span></b>});</td>
</tr><tr><th id="L286"><a href="#L286">286</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; }</td>
</tr><tr><th id="L287"><a href="#L287">287</a></th>
<td>}</td>
</tr><tr><th id="L288"><a href="#L288">288</a></th>
<td></td>
</tr><tr><th id="L289"><a href="#L289">289</a></th>
<td><B><span class="code-lang">function</span></b>&nbsp;<B><span class="code-func">tb_parseQuery</span></b> ( query ) {</td>
</tr><tr><th id="L290"><a href="#L290">290</a></th>
<td>&nbsp; &nbsp;<B><span class="code-lang">var</span></b> Params = {};</td>
</tr><tr><th id="L291"><a href="#L291">291</a></th>
<td>&nbsp; &nbsp;<B><span class="code-lang">if</span></b> ( ! query ) {<B><span class="code-lang">return</span></b> Params;}<I><span class="code-comment">// return empty object</i></span></td>
</tr><tr><th id="L292"><a href="#L292">292</a></th>
<td><span class="code-lang"><I></span></i>&nbsp;&nbsp; <B><span class="code-lang">var</span></b> Pairs = query.split(/[;&amp;]/);</td>
</tr><tr><th id="L293"><a href="#L293">293</a></th>
<td>&nbsp; &nbsp;<B><span class="code-lang">for</span></b> ( <B><span class="code-lang">var</span></b> i = 0; i &lt; Pairs.length; i++ ) {</td>
</tr><tr><th id="L294"><a href="#L294">294</a></th>
<td>&nbsp; &nbsp; &nbsp; <B><span class="code-lang">var</span></b> KeyVal = Pairs[i].split(<B><span class="code-string">'='</span></b>);</td>
</tr><tr><th id="L295"><a href="#L295">295</a></th>
<td>&nbsp; &nbsp; &nbsp; <B><span class="code-lang">if</span></b> ( ! KeyVal || KeyVal.length != 2 ) {<B><span class="code-lang">continue</span></b>;}</td>
</tr><tr><th id="L296"><a href="#L296">296</a></th>
<td>&nbsp; &nbsp; &nbsp; <B><span class="code-lang">var</span></b> key = unescape( KeyVal[0] );</td>
</tr><tr><th id="L297"><a href="#L297">297</a></th>
<td>&nbsp; &nbsp; &nbsp; <B><span class="code-lang">var</span></b> val = unescape( KeyVal[1] );</td>
</tr><tr><th id="L298"><a href="#L298">298</a></th>
<td>&nbsp; &nbsp; &nbsp; val = val.replace(/\+/g, <B><span class="code-string">' '</span></b>);</td>
</tr><tr><th id="L299"><a href="#L299">299</a></th>
<td>&nbsp; &nbsp; &nbsp; Params[key] = val;</td>
</tr><tr><th id="L300"><a href="#L300">300</a></th>
<td>&nbsp; &nbsp;}</td>
</tr><tr><th id="L301"><a href="#L301">301</a></th>
<td>&nbsp; &nbsp;<B><span class="code-lang">return</span></b> Params;</td>
</tr><tr><th id="L302"><a href="#L302">302</a></th>
<td>}</td>
</tr><tr><th id="L303"><a href="#L303">303</a></th>
<td></td>
</tr><tr><th id="L304"><a href="#L304">304</a></th>
<td><B><span class="code-lang">function</span></b>&nbsp;<B><span class="code-func">tb_getPageSize</span></b>(){</td>
</tr><tr><th id="L305"><a href="#L305">305</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; <B><span class="code-lang">var</span></b> de = document.documentElement;</td>
</tr><tr><th id="L306"><a href="#L306">306</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; <B><span class="code-lang">var</span></b> w = window.innerWidth || self.innerWidth || (de&amp;&amp;de.clientWidth) || document.body.clientWidth;</td>
</tr><tr><th id="L307"><a href="#L307">307</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; <B><span class="code-lang">var</span></b> h = window.innerHeight || self.innerHeight || (de&amp;&amp;de.clientHeight) || document.body.clientHeight;</td>
</tr><tr><th id="L308"><a href="#L308">308</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; arrayPageSize = [w,h];</td>
</tr><tr><th id="L309"><a href="#L309">309</a></th>
<td>&nbsp; &nbsp; &nbsp; &nbsp; <B><span class="code-lang">return</span></b> arrayPageSize;</td>
</tr><tr><th id="L310"><a href="#L310">310</a></th>
<td>}</td>
</tr><tr><th id="L311"><a href="#L311">311</a></th>
<td></td>
</tr><tr><th id="L312"><a href="#L312">312</a></th>
<td><B><span class="code-lang">function</span></b>&nbsp;<B><span class="code-func">tb_detectMacXFF</span></b>() {</td>
</tr><tr><th id="L313"><a href="#L313">313</a></th>
<td>&nbsp; <B><span class="code-lang">var</span></b> userAgent = navigator.userAgent.toLowerCase();</td>
</tr><tr><th id="L314"><a href="#L314">314</a></th>
<td>&nbsp; <B><span class="code-lang">if</span></b> (userAgent.indexOf(<B><span class="code-string">'mac'</span></b>) != -1 &amp;&amp; userAgent.indexOf(<B><span class="code-string">'firefox'</span></b>)!=-1) {</td>
</tr><tr><th id="L315"><a href="#L315">315</a></th>
<td>&nbsp; &nbsp; <B><span class="code-lang">return</span></b> <B><span class="code-lang">true</span></b>;</td>
</tr><tr><th id="L316"><a href="#L316">316</a></th>
<td>&nbsp; }</td>
</tr><tr><th id="L317"><a href="#L317">317</a></th>
<td>}</td>
</tr></tbody></table>
  </div>

 <div id="help">
  <strong>Note:</strong> See <a href="/project/wiki/TracBrowser">TracBrowser</a> for help on using the browser.
 </div>

  <div id="anydiff">
   <form action="/project/anydiff" method="get">
    <div class="buttons">
     <input type="hidden" name="new_path" value="/trunk/djedna/media/js/jquery.ui/datepicker/extras/thickbox-datepicker/thickbox.js" />
     <input type="hidden" name="old_path" value="/trunk/djedna/media/js/jquery.ui/datepicker/extras/thickbox-datepicker/thickbox.js" />
     <input type="hidden" name="new_rev" value="452" />
     <input type="hidden" name="old_rev" value="452" />
     <input type="submit" value="View changes..." title="Prepare an Arbitrary Diff" />
    </div>
   </form>
  </div>

</div>
</div>
<script type="text/javascript">searchHighlight()</script>
<div id="altlinks"><h3>Download in other formats:</h3><ul><li class="first"><a href="/project/browser/trunk/djedna/media/js/jquery.ui/datepicker/extras/thickbox-datepicker/thickbox.js?rev=452&amp;format=txt">Plain Text</a></li><li class="last"><a href="/project/browser/trunk/djedna/media/js/jquery.ui/datepicker/extras/thickbox-datepicker/thickbox.js?rev=452&amp;format=raw">Original Format</a></li></ul></div>

</div>

<div id="footer">
 <hr />
 <a id="tracpowered" href="http://trac.edgewall.org/"><img src="/project/chrome/common/trac_logo_mini.png" height="30" width="107"
   alt="Trac Powered"/></a>
 <p class="left">
  Powered by <a href="/project/about"><strong>Trac 0.10.4</strong></a><br />
  By <a href="http://www.edgewall.org/">Edgewall Software</a>.
 </p>
 <p class="right">
  Visit the Trac open source project at<br /><a href="http://trac.edgewall.org/">http://trac.edgewall.org/</a>
 </p>
</div>


<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
var pageTracker = _gat._getTracker("UA-1806461-5");
pageTracker._initData();
pageTracker._trackPageview();
</script>

 </body>
</html>

