
var lang="en";var encoding="UTF-8";var debugMode=false;var isRichText=false;var defaultWidth=500;var defaultHeight=200;var allRTEs="";var currentRTE="";var selectionText="";var rng;var lastCommand;var maxLoops=20;var loopCnt=0;var baseUrl=window.parent.document.location.protocol+"//"+document.domain+"/";var imagesPath="";var includesPath="";var cssFile="";var generateXHTML=true;var encodeHTML=false;var ua=navigator.userAgent.toLowerCase();var isIE=((ua.indexOf("msie")!=-1)&&(ua.indexOf("opera")==-1)&&(ua.indexOf("webtv")==-1));var ieVersion=parseFloat(ua.substring(ua.indexOf('msie ')+5));var isGecko=(navigator.product=='Gecko');var geckoRv=geckoGetRv();var isSafari=(ua.indexOf("safari")!=-1);var isIphone=(ua.indexOf("iphone")!=-1);var isIpad=(ua.indexOf("ipad")!=-1);var webkitVersion=get_webkit_version();if(webkitVersion){webkitVersion=webkitVersion["major"]}else{webkitVersion=null}
var isKonqueror=(ua.indexOf("konqueror")!=-1);var konquerorVersion=parseFloat(ua.substring(ua.indexOf('konqueror/')+10));var isOpera=(ua.indexOf("opera")!=-1);var isNetscape=(ua.indexOf("netscape")!=-1);var netscapeVersion=parseFloat(ua.substring(ua.lastIndexOf('/')+1));var toolbar1Enabled=true;var toolbar2Enabled=true;var cmdFormatBlockEnabled=true;var cmdFontNameEnabled=true;var cmdFontSizeEnabled=true;var cmdIncreaseFontSizeEnabled=false;var cmdDecreaseFontSizeEnabled=false;var cmdBoldEnabled=true;var cmdItalicEnabled=true;var cmdUnderlineEnabled=true;var cmdStrikethroughEnabled=true;var cmdSuperscriptEnabled=true;var cmdSubscriptEnabled=true;var cmdJustifyLeftEnabled=true;var cmdJustifyCenterEnabled=true;var cmdJustifyRightEnabled=true;var cmdJustifyFullEnabled=true;var cmdInsertHorizontalRuleEnabled=true;var cmdInsertOrderedListEnabled=true;var cmdInsertUnorderedListEnabled=true;var cmdOutdentEnabled=true;var cmdIndentEnabled=true;var cmdForeColorEnabled=true;var cmdHiliteColorEnabled=true;var cmdInsertHTMLEnabled=true;var cmdSpellCheckEnabled=false;var cmdCreateLinkEnabled=true;var cmdInsertImageEnabled=true;var cmdCutEnabled=true;var cmdCopyEnabled=true;var cmdPasteEnabled=true;var cmdUndoEnabled=true;var cmdRedoEnabled=true;var cmdRemoveFormatEnabled=true;var cmdUnlinkEnabled=true;function initRTE(a,b,c,d,f){try{imagesPath=a;includesPath=b;cssFile=c;generateXHTML=d;if(f)
encodeHTML=true;if(document.designMode){if(document.getElementById&&!isIE&&!isSafari&&!isKonqueror){isRichText=true;if(isGecko||isOpera){cmdIncreaseFontSizeEnabled=true;cmdDecreaseFontSizeEnabled=true;cmdCutEnabled=false;cmdCopyEnabled=false;cmdPasteEnabled=false}
if(isNetscape&&netscapeVersion<8){cmdInsertHTMLEnabled=false}}else if(isIE&&ieVersion>=5.5){isRichText=true;cmdSpellCheckEnabled=true}else if(isSafari&&!isIphone&&!isIpad){if(webkitVersion>=420){isRichText=true}else if(webkitVersion>=312){isRichText=true;toolbar1Enabled=false;cmdStrikethroughEnabled=false;cmdJustifyFullEnabled=false;cmdInsertHorizontalRuleEnabled=false;cmdInsertOrderedListEnabled=false;cmdInsertUnorderedListEnabled=false;cmdOutdentEnabled=false;cmdIndentEnabled=false;cmdInsertImageEnabled=false;cmdPasteEnabled=false;cmdInsertHTMLEnabled=false;cmdCreateLinkEnabled=false;cmdUnlinkEnabled=false;cmdRemoveFormatEnabled=false}}}
if(isRichText){document.writeln('<style type="text/css">@import "'+includesPath+'rte.css";</style>');document.writeln('<iframe width="150" height="100" id="cp" src="'+includesPath+'palette.htm" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" style="visibility:hidden; position: absolute;"></iframe>');if(isIE){document.onmouseover=raiseButton;document.onmouseout=normalButton;document.onmousedown=lowerButton;document.onmouseup=raiseButton}}}catch(e){if(debugMode)
alert(e)}}
function richTextEditor(a){this.rteID=a;this.html="";this.width=defaultWidth;this.height=defaultHeight;this.readOnly=false;this.toolbar1=true;this.toolbar2=true;this.cmdFormatBlock=true;this.cmdFontName=true;this.cmdFontSize=true;this.cmdIncreaseFontSize=false;this.cmdDecreaseFontSize=false;this.cmdBold=true;this.cmdItalic=true;this.cmdUnderline=true;this.cmdStrikethrough=false;this.cmdSuperscript=false;this.cmdSubscript=false;this.cmdJustifyLeft=true;this.cmdJustifyCenter=true;this.cmdJustifyRight=true;this.cmdJustifyFull=false;this.cmdInsertHorizontalRule=true;this.cmdInsertOrderedList=true;this.cmdInsertUnorderedList=true;this.cmdOutdent=true;this.cmdIndent=true;this.cmdForeColor=true;this.cmdHiliteColor=true;this.cmdInsertLink=true;this.cmdInsertImage=true;this.cmdInsertSpecialChars=true;this.cmdInsertTable=true;this.cmdSpellcheck=true;this.cmdCut=false;this.cmdCopy=false;this.cmdPaste=false;this.cmdUndo=false;this.cmdRedo=false;this.cmdRemoveFormat=false;this.cmdUnlink=false;this.toggleSrc=true;this.build=build}
function build(){with(this){if(isRichText){if(this.readOnly){this.toolbar1=false;this.toolbar2=false;this.toggleSrc=false}
writeRichText(this);enableDesignMode(this.rteID,htmlDecode(this.html),this.readOnly);if(isGecko&&!this.readOnly){currentRTE=this.rteID;if(geckoRv<1.09){insertHTML("<br>");rteCommand(this.rteID,"undo")}}
var chkId="chkSrc"+this.rteID;if(this.toggleSrc)
window.setTimeout(function(){document.getElementById(chkId).checked=false},200);}else{writePlainText(this)}}}
function writePlainText(a){if(!a.readOnly){document.writeln('<textarea name="'+a.rteID+'" id="'+a.rteID+'" style="width: 100%; height: '+a.height+'px;">'+a.html+'</textarea>')}else{document.writeln('<textarea name="'+a.rteID+'" id="'+a.rteID+'" style="width: 100%; height: '+a.height+'px;" readonly>'+a.html+'</textarea>')}}
function writeRichText(a){try{if(allRTEs.length>0)
allRTEs+=";";allRTEs+=a.rteID;document.writeln('<table cellpadding="0" cellspacing="0" style="width: 100%; border: 1px solid #000;">');document.writeln(' <tr>');document.writeln('  <td>');if(toolbar1Enabled&&a.toolbar1){document.writeln('  <table class="rteBack" cellpadding="2" cellspacing="0" id="toolbar1_'+a.rteID+'" width="100%">');document.writeln('   <tr>');if(cmdFormatBlockEnabled&&a.cmdFormatBlock){document.writeln('    <td>');document.writeln('     <select id="formatblock_'+a.rteID+'" onchange="selectFont(\''+a.rteID+'\', this.id);">');document.writeln('      <option value="">[Style]</option>');document.writeln('      <option value="<p>">Paragraph &lt;p&gt;</option>');document.writeln('      <option value="<h1>">Heading 1 &lt;h1&gt;</option>');document.writeln('      <option value="<h2>">Heading 2 &lt;h2&gt;</option>');document.writeln('      <option value="<h3>">Heading 3 &lt;h3&gt;</option>');document.writeln('      <option value="<h4>">Heading 4 &lt;h4&gt;</option>');document.writeln('      <option value="<h5>">Heading 5 &lt;h5&gt;</option>');document.writeln('      <option value="<h6>">Heading 6 &lt;h6&gt;</option>');document.writeln('      <option value="<address>">Address &lt;ADDR&gt;</option>');document.writeln('      <option value="<pre>">Formatted &lt;pre&gt;</option>');document.writeln('     </select>');document.writeln('    </td>')}
if(cmdFontNameEnabled&&a.cmdFontName){document.writeln('    <td>');document.writeln('     <select id="fontname_'+a.rteID+'" onchange="selectFont(\''+a.rteID+'\', this.id)">');document.writeln('      <option value="Font" selected>[Font]</option>');document.writeln('      <option value="Arial, Helvetica, sans-serif">Arial</option>');document.writeln('      <option value="Courier New, Courier, mono">Courier New</option>');document.writeln('      <option value="Times New Roman, Times, serif">Times New Roman</option>');document.writeln('      <option value="Verdana, Arial, Helvetica, sans-serif">Verdana</option>');document.writeln('     </select>');document.writeln('    </td>')}
if(cmdFontSizeEnabled&&a.cmdFontSize){document.writeln('    <td>');document.writeln('     <select id="fontsize_'+a.rteID+'" onchange="selectFont(\''+a.rteID+'\', this.id);">');document.writeln('      <option value="Size">[Size]</option>');document.writeln('      <option value="1">1</option>');document.writeln('      <option value="2">2</option>');document.writeln('      <option value="3">3</option>');document.writeln('      <option value="4">4</option>');document.writeln('      <option value="5">5</option>');document.writeln('      <option value="6">6</option>');document.writeln('      <option value="7">7</option>');document.writeln('     </select>');document.writeln('    </td>')}
if(cmdIncreaseFontSizeEnabled&&a.cmdIncreaseFontSize)
document.writeln('    <td><img class="rteImage" src="'+imagesPath+'increase_font.gif" width="25" height="24" alt="Increase Font Size" title="Increase Font Size" onmousedown="rteCommand(\''+a.rteID+'\', \'increasefontsize\')"></td>');if(cmdDecreaseFontSizeEnabled&&a.cmdDecreaseFontSize)
document.writeln('    <td><img class="rteImage" src="'+imagesPath+'decrease_font.gif" width="25" height="24" alt="Decrease Font Size" title="Decrease Font Size" onmousedown="rteCommand(\''+a.rteID+'\', \'decreasefontsize\')"></td>');document.writeln('    <td width="100%"></td>');document.writeln('   </tr>');document.writeln('  </table>')}
if(a.toolbar2){document.writeln('  <table class="rteBack" cellpadding="0" cellspacing="0" id="toolbar2_'+a.rteID+'" width="100%">');document.writeln('   <tr>');if(cmdBoldEnabled&&a.cmdBold)
document.writeln('    <td><img class="rteImage" src="'+imagesPath+'bold.gif" width="25" height="24" alt="Bold" title="Bold" onmousedown="rteCommand(\''+a.rteID+'\', \'bold\')"></td>');if(cmdItalicEnabled&&a.cmdItalic)
document.writeln('    <td><img class="rteImage" src="'+imagesPath+'italic.gif" width="25" height="24" alt="Italic" title="Italic" onmousedown="rteCommand(\''+a.rteID+'\', \'italic\')"></td>');if(cmdUnderlineEnabled&&a.cmdUnderline)
document.writeln('    <td><img class="rteImage" src="'+imagesPath+'underline.gif" width="25" height="24" alt="Underline" title="Underline" onmousedown="rteCommand(\''+a.rteID+'\', \'underline\')"></td>');if(cmdStrikethroughEnabled&&a.cmdStrikethrough)
document.writeln('    <td><img class="rteImage" src="'+imagesPath+'strikethrough.gif" width="25" height="24" alt="Strikethrough" title="Strikethrough" onmousedown="rteCommand(\''+a.rteID+'\', \'strikethrough\', \'\')"></td>');if(cmdSuperscriptEnabled&&a.cmdSuperscript)
document.writeln('    <td><img class="rteImage" src="'+imagesPath+'superscript.gif" width="25" height="24" alt="Superscript" title="Superscript" onmousedown="rteCommand(\''+a.rteID+'\', \'superscript\')"></td>');if(cmdSubscriptEnabled&&a.cmdSubscript)
document.writeln('    <td><img class="rteImage" src="'+imagesPath+'subscript.gif" width="25" height="24" alt="Subscript" title="Subscript" onmousedown="rteCommand(\''+a.rteID+'\', \'subscript\')"></td>');if(cmdJustifyLeftEnabled&&a.cmdJustifyLeft)
document.writeln('    <td><img class="rteImage" src="'+imagesPath+'left_just.gif" width="25" height="24" alt="Align Left" title="Align Left" onmousedown="rteCommand(\''+a.rteID+'\', \'justifyleft\')"></td>');if(cmdJustifyCenterEnabled&&a.cmdJustifyCenter)
document.writeln('    <td><img class="rteImage" src="'+imagesPath+'centre.gif" width="25" height="24" alt="Center" title="Center" onmousedown="rteCommand(\''+a.rteID+'\', \'justifycenter\')"></td>');if(cmdJustifyRightEnabled&&a.cmdJustifyRight)
document.writeln('    <td><img class="rteImage" src="'+imagesPath+'right_just.gif" width="25" height="24" alt="Align Right" title="Align Right" onmousedown="rteCommand(\''+a.rteID+'\', \'justifyright\')"></td>');if(cmdJustifyFullEnabled&&a.cmdJustifyFull)
document.writeln('    <td><img class="rteImage" src="'+imagesPath+'justifyfull.gif" width="25" height="24" alt="Justify Full" title="Justify Full" onmousedown="rteCommand(\''+a.rteID+'\', \'justifyfull\')"></td>');if(cmdInsertHorizontalRuleEnabled&&a.cmdInsertHorizontalRule)
document.writeln('    <td><img class="rteImage" src="'+imagesPath+'hr.gif" width="25" height="24" alt="Horizontal Rule" title="Horizontal Rule" onmousedown="rteCommand(\''+a.rteID+'\', \'inserthorizontalrule\')"></td>');if(cmdInsertOrderedListEnabled&&a.cmdInsertOrderedList)
document.writeln('    <td><img class="rteImage" src="'+imagesPath+'numbered_list.gif" width="25" height="24" alt="Ordered List" title="Ordered List" onmousedown="rteCommand(\''+a.rteID+'\', \'insertorderedlist\')"></td>');if(cmdInsertUnorderedListEnabled&&a.cmdInsertUnorderedList)
document.writeln('    <td><img class="rteImage" src="'+imagesPath+'list.gif" width="25" height="24" alt="Unordered List" title="Unordered List" onmousedown="rteCommand(\''+a.rteID+'\', \'insertunorderedlist\')"></td>');if(cmdOutdentEnabled&&a.cmdOutdent)
document.writeln('    <td><img class="rteImage" src="'+imagesPath+'outdent.gif" width="25" height="24" alt="Outdent" title="Outdent" onmousedown="rteCommand(\''+a.rteID+'\', \'outdent\')"></td>');if(cmdIndentEnabled&&a.cmdIndent)
document.writeln('    <td><img class="rteImage" src="'+imagesPath+'indent.gif" width="25" height="24" alt="Indent" title="Indent" onmousedown="rteCommand(\''+a.rteID+'\', \'indent\')"></td>');if(cmdForeColorEnabled&&a.cmdForeColor)
document.writeln('    <td><div id="forecolor_'+a.rteID+'"><img class="rteImage" src="'+imagesPath+'textcolor.gif" width="25" height="24" alt="Text Color" title="Text Color" onmousedown="dlgColorPalette(\''+a.rteID+'\', \'forecolor\', \'\'); return false;"></div></td>');if(cmdHiliteColorEnabled&&a.cmdHiliteColor)
document.writeln('    <td><div id="hilitecolor_'+a.rteID+'"><img class="rteImage" src="'+imagesPath+'bgcolor.gif" width="25" height="24" alt="Background Color" title="Background Color" onmousedown="dlgColorPalette(\''+a.rteID+'\', \'hilitecolor\', \'\'); return false;"></div></td>');if((cmdInsertHTMLEnabled||cmdCreateLinkEnabled)&&a.cmdInsertLink)
document.writeln('    <td><img class="rteImage" src="'+imagesPath+'hyperlink.gif" width="25" height="24" alt="Insert Link" title="Insert Link" onmousedown="dlgInsertLink(\''+a.rteID+'\')"></td>');if(cmdUnlinkEnabled&&a.cmdUnlink)
document.writeln('    <td><img class="rteImage" src="'+imagesPath+'unlink.gif" width="25" height="24" alt="Remove Link" title="Remove Link" onmousedown="rteCommand(\''+a.rteID+'\', \'unlink\')"></td>');if(cmdInsertImageEnabled&&a.cmdInsertImage)
document.writeln('    <td><img class="rteImage" src="'+imagesPath+'image.gif" width="25" height="24" alt="Add Image" title="Add Image" onmousedown="addImage(\''+a.rteID+'\')"></td>');if(cmdInsertHTMLEnabled&&a.cmdInsertSpecialChars)
document.writeln('    <td><img class="rteImage" src="'+imagesPath+'special_chars.gif" width="25" height="24" alt="Insert Special Character" title="Insert Special Character" onmousedown="dlgInsertSpecialChar(\''+a.rteID+'\')"></td>');if(cmdInsertHTMLEnabled&&a.cmdInsertTable&&!isOpera)
document.writeln('    <td><div id="table_'+a.rteID+'"><img class="rteImage" src="'+imagesPath+'insert_table.gif" width="25" height="24" alt="Insert Table" title="Insert Table" onmousedown="dlgInsertTable(\''+a.rteID+'\')"></div></td>');if(cmdSpellCheckEnabled&&a.cmdSpellcheck)
document.writeln('    <td><img class="rteImage" src="'+imagesPath+'spellcheck.gif" width="25" height="24" alt="Spell Check" title="Spell Check" onmousedown="checkspell()"></td>');if(cmdCutEnabled&&a.cmdCut)
document.writeln('    <td><img class="rteImage" src="'+imagesPath+'cut.gif" width="25" height="24" alt="Cut" title="Cut" onmousedown="rteCommand(\''+a.rteID+'\', \'cut\')"></td>');if(cmdCopyEnabled&&a.cmdCopy)
document.writeln('    <td><img class="rteImage" src="'+imagesPath+'copy.gif" width="25" height="24" alt="Copy" title="Copy" onmousedown="rteCommand(\''+a.rteID+'\', \'copy\')"></td>');if(cmdPasteEnabled&&a.cmdPaste)
document.writeln('    <td><img class="rteImage" src="'+imagesPath+'paste.gif" width="25" height="24" alt="Paste" title="Paste" onmousedown="rteCommand(\''+a.rteID+'\', \'paste\')"></td>');if(cmdUndoEnabled&&a.cmdUndo)
document.writeln('    <td><img class="rteImage" src="'+imagesPath+'undo.gif" width="25" height="24" alt="Undo" title="Undo" onmousedown="rteCommand(\''+a.rteID+'\', \'undo\')"></td>');if(cmdRedoEnabled&&a.cmdRedo)
document.writeln('    <td><img class="rteImage" src="'+imagesPath+'redo.gif" width="25" height="24" alt="Redo" title="Redo" onmousedown="rteCommand(\''+a.rteID+'\', \'redo\')"></td>');if(cmdRemoveFormatEnabled&&a.cmdRemoveFormat)
document.writeln('    <td><img class="rteImage" src="'+imagesPath+'removeformat.gif" width="25" height="24" alt="Remove Formatting" title="Remove Formatting" onmousedown="rteCommand(\''+a.rteID+'\', \'removeformat\')"></td>');document.writeln('    <td width="100%"></td>');document.writeln('   </tr>');document.writeln('  </table>')}
document.writeln('   <iframe id="'+a.rteID+'" name="'+a.rteID+'" src="'+includesPath+'blank.htm" frameborder="0" style="width: 100%; height: '+a.height+'px; margin: 0; padding: 0;"></iframe>');document.writeln('  </td>');document.writeln(' </tr>');document.writeln('</table>');document.writeln('<div style="margin: 0; padding: 0;">');if(!a.readOnly&&a.toggleSrc)
document.writeln('<input type="checkbox" id="chkSrc'+a.rteID+'" onclick="toggleHTMLSrc(\''+a.rteID+'\','+a.toolbar1+','+a.toolbar2+');" />&nbsp;<label for="chkSrc'+a.rteID+'">View Source</label>');document.writeln('<input type="hidden" id="hdn'+a.rteID+'" name="'+a.rteID+'" value="">');document.writeln('</div>')}catch(e){if(debugMode)
alert(e)}}
function enableDesignMode(a,b,c){try{if(cssFile.length>0){var d="<style type=\"text/css\">@import url("+cssFile+");</style>\n"}else{var d="<style type=\"text/css\">\n";d+="body {\n";d+=" background: #FFF;\n";d+="}\n";d+="</style>\n"}
var f="<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">\n";f+="<html id=\""+a+"\" xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"en\">\n";f+="<head>\n";f+="<meta http-equiv=\"content-type\" content=\"text/html; charset=UTF-8\" />\n";f+="<base href=\""+baseUrl+"\" />\n";f+=d;f+="</head>\n";f+="<body style=\"margin: 0; padding: 0;\">\n";f+=b+"\n";f+="</body>\n";f+="</html>";var g=document.getElementById(a);try{if(isGecko){if(!c)
g.contentDocument.designMode="on";try{var h=g.contentWindow.document;h.open("text/html","replace");h.write(f);h.close();if(!c)
h.addEventListener("keypress",geckoKeyPress,true)}catch(e){alert("Error preloading content.")}
loopCnt=0}else if(g.contentWindow){try{var h=g.contentWindow.document;h.open("text/html","replace");h.write(f);h.close();if(!c&&isIE)
h.attachEvent("onkeypress",evt_ie_keypress)}catch(e){alert("Error preloading content.")}
if(!c)
h.designMode="on";loopCnt=0}else{var h=g.document;h.open("text/html","replace");h.write(f);h.close();if(!c&&isIE)
h.attachEvent("onkeypress",evt_ie_keypress);if(!c)
h.designMode="on";loopCnt=0}}catch(e){if(loopCnt<maxLoops){setTimeout(function(){enableDesignMode(a,b,c);},100);loopCnt+=1}else{alert("Error enabling designMode.")}}}catch(e){if(debugMode)
alert(e)}}
function updateRTE(a){try{if(isRichText){if(document.getElementById("chkSrc"+a)&&document.getElementById("chkSrc"+a).checked)
document.getElementById("chkSrc"+a).click();setHiddenVal(a)}else{return}}catch(e){if(debugMode)
alert(e)}}
function updateRTEs(){try{if(allRTEs!=""){var a=allRTEs.split(";");for(var i=0;i<a.length;i++){updateRTE(a[i])}}}catch(e){if(debugMode)
alert(e)}}
function rteCommand(a,b,c){try{var d=document.getElementById(a);if(d.contentWindow){d.contentWindow.focus();d.contentWindow.document.execCommand(b,false,c)}else{d.document.focus();d.document.execCommand(b,false,c)}
loopCnt=0;return false}catch(e){if(debugMode)
alert(e);if(loopCnt<maxLoops){setTimeout("rteCommand('"+a+"', '"+b+"', '"+c+"');",100);loopCnt+=1}else{alert("Error executing command.")}}}
function dlgColorPalette(a,b){try{setRange(a);var c=document.getElementById(b+'_'+a);var d=findPosX(c);var f=findPosY(c)+c.offsetHeight;var g=document.getElementById('cp');g.style.left=d+"px";g.style.top=f+"px";if((b==lastCommand)&&(a==currentRTE)){if(g.style.visibility=="hidden"){showHideElement('cp','show')}else{showHideElement('cp','hide')}}else{showHideElement('cp','show')}
lastCommand=b;currentRTE=a}catch(e){if(debugMode)
alert(e)}}
function dlgInsertTable(a){try{setRange(a);currentRTE=a;InsertTable=popUpWin(includesPath+'insert_table.htm','InsertTable',360,180,'');if(InsertTable){setTimeout("InsertTable.focus()",100)}else{alert("Error: While Launching New Window...\nYour browser maybe blocking up Popup windows.\n\nPlease check your Popup Blocker Settings")}}catch(e){if(debugMode)
alert(e)}}
function dlgInsertLink(a){try{if(cmdInsertHTMLEnabled){setRange(a);currentRTE=a;InsertLink=popUpWin(includesPath+'insert_link.htm?selectionText='+selectionText,'InsertLink',360,180,'');if(InsertLink){setTimeout("InsertLink.focus()",100)}else{alert("Error: While Launching New Window...\nYour browser maybe blocking up Popup windows.\n\nPlease check your Popup Blocker Settings")}}else{var b=prompt("Enter URL","http://");rteCommand(a,"createlink",b)}}catch(e){if(debugMode)
alert(e)}}
function dlgInsertSpecialChar(a){try{setRange(a);currentRTE=a;InsertSpecialChar=popUpWin(includesPath+'insert_special_char.htm','InsertSpecialChar',360,250,'');if(InsertSpecialChar){setTimeout("InsertSpecialChar.focus()",100)}else{alert("Error: While Launching New Window...\nYour browser maybe blocking up Popup windows.\n\nPlease check your Popup Blocker Settings")}}catch(e){if(debugMode)
alert(e)}}
function popUpWin(a,b,c,d,f){try{var g=(screen.availWidth-c)/2;var h=(screen.availHeight-d)/2;f+='width='+c+',height='+d+',top='+h+',left='+g;return window.open(a,b,f)}catch(e){if(debugMode)
alert(e)}}
function setColor(a){try{var b=currentRTE;if(isSafari||isIE){if(lastCommand=="hilitecolor")
lastCommand="backcolor";if(!isSafari)
rng.select()}
rteCommand(b,lastCommand,a);showHideElement('cp',"hide")}catch(e){if(debugMode)
alert(e)}}
function addImage(a){try{imagePath=prompt('Enter Image URL:','http://');if((imagePath!=null)&&(imagePath!="")){rteCommand(a,'InsertImage',imagePath)}}catch(e){if(debugMode)
alert(e)}}
function findPosX(a){var b=0;if(a.offsetParent){b=a.offsetLeft;while(a=a.offsetParent){b+=a.offsetLeft}}
return b}
function findPosY(a){var b=0;if(a.offsetParent){b=a.offsetTop;while(a=a.offsetParent){b+=a.offsetTop}}
return b}
function selectFont(a,b){try{var c=document.getElementById(b).selectedIndex;if(c!=0){var d=document.getElementById(b).options[c].value;var f=b.replace('_'+a,'');rteCommand(a,f,d);document.getElementById(b).selectedIndex=0}}catch(e){if(debugMode)
alert(e)}}
function insertHTML(a){try{if(document.all&&!isOpera){rng.pasteHTML(a);rng.collapse(false);rng.select()}else{rteCommand(currentRTE,'inserthtml',a)}}catch(e){if(debugMode)
alert(e)}}
function showHideElement(a,b){try{if(document.getElementById(a)){a=document.getElementById(a);if(b=="show"){if(a.id.substring(0,7)=="toolbar")
a.style.display="block";a.style.visibility="visible"}else if(b=="hide"){if(a.id.substring(0,7)=="toolbar")
a.style.display="none";a.style.visibility="hidden"}}}catch(e){if(debugMode)
alert(e)}}
function setRange(a){try{var b=document.getElementById(a);if(b.contentWindow){var c=b.contentWindow.document;b.contentWindow.focus()}else{var c=b.document;c.focus()}
if(document.all){sel=c.selection;rng=sel.createRange();if(encodeHTML){selectionText=htmlEncode(rng.text.toString())}else{selectionText=rng.text.toString()}}else if(document.getSelection){rng=c.createRange();if(encodeHTML){selectionText=htmlEncode(c.getSelection())}else{selectionText=c.getSelection()}}}catch(e){if(debugMode)
alert(e)}}
function stripHTML(a){try{var b=a.replace(/(<([^>]+)>)/ig,"");b=b.replace(/\r\n/g," ");b=b.replace(/\n/g," ");b=b.replace(/\r/g," ");b=trim(b);return b}catch(e){if(debugMode)
alert(e)}}
function trim(a){try{a=a.replace(/^\s+/g,"");return a.replace(/\s+$/g,"")}catch(e){if(debugMode)
alert(e)}}
function cleanWordContent(a){a=String(a).replace(/<\\?\?xml[^>]*>/g,"");a=String(a).replace(/<\/?o:p[^>]*>/g,"");a=String(a).replace(/<\/?v:[^>]*>/g,"");a=String(a).replace(/<\/?o:[^>]*>/g,"");return a}
function toggleHTMLSrc(a,b,c){try{var d=document.getElementById('hdn'+a);var f=document.getElementById(a);if(f.contentWindow){var g=f.contentWindow.document}else{var g=f.document}
if(document.getElementById("chkSrc"+a).checked){if(b)
showHideElement("toolbar1_"+a,"hide");if(c)
showHideElement("toolbar2_"+a,"hide");setHiddenVal(a);if(encodeHTML){var h=g.createTextNode(htmlDecode(d.value))}else{var h=g.createTextNode(d.value)}
g.body.focus();g.body.innerHTML="";g.body.appendChild(h)}else{if(b)
showHideElement("toolbar1_"+a,"show");if(c)
showHideElement("toolbar2_"+a,"show");if(isIE){var h=g.body.innerText}else{var h=g.body.ownerDocument.createRange();h.selectNodeContents(g.body);h=h.toString()}
setHtmlSrc(a,h)}}catch(e){if(debugMode)
alert(e)}}
function setHiddenVal(a){try{var b=document.getElementById('hdn'+a);if(b.value==null)
b.value="";var c=getHtmlSrc(a);c=cleanWordContent(c);if(generateXHTML){c=getXHTML(c)}
if(stripHTML(c.replace("&nbsp;"," "))==""&&c.toLowerCase().search("<hr")==-1&&c.toLowerCase().search("<img")==-1)
c="";if(encodeHTML){b.value=htmlEncode(c)}else{b.value=c}}catch(e){if(debugMode)
alert(e)}}
function getHtmlSrc(a){try{var b=document.getElementById(a);if(b.contentWindow){var c=b.contentWindow.document}else{var c=b.document}
return c.body.innerHTML}catch(e){if(debugMode)
alert(e)}}
function setHtmlSrc(a,b){try{var c=document.getElementById(a);if(c.contentWindow){var d=c.contentWindow.document}else{var d=c.document}
if(isIE){var f=htmlEncode(b);f=f.replace("%3CP%3E%0D%0A%3CHR%3E","%3CHR%3E");f=f.replace("%3CHR%3E%0D%0A%3C/P%3E","%3CHR%3E");d.body.innerHTML=htmlDecode(f)}else{b=strip160(b);d.body.innerHTML=b}}catch(e){if(debugMode)
alert(e)}}
function strip160(a){newString='';for(i=0;i<a.length;i++){if(a.charCodeAt(i)==160){newString=newString+' '}else{newString=newString+a.charAt(i)}}
return newString}
function htmlEncode(a){return a.replace(/\&/ig,'&amp;').replace(/\</ig,'&lt;').replace(/\>/ig,'&gt;').replace(/\"/ig,'&quot;')}
function htmlDecode(a){return a.replace(/\&amp\;/ig,'&').replace(/\&lt\;/ig,'<').replace(/\&gt\;/ig,'>').replace(/\&quot\;/ig,'"')}
function parse_webkit_version(a){try{var b=a.split(".");var c=(a[a.length-1]=="+");if(c){var d="+"}else{var d=parseInt(b[1]);if(isNaN(d)){d=""}}
return{major:parseInt(b[0]),minor:d,is_nightly:c}}catch(e){if(debugMode)
alert(e)}}
function get_webkit_version(){try{var a=new RegExp("\\(.*\\) AppleWebKit/(.*) \\((.*)");var b=a.exec(navigator.userAgent);if(b){var c=parse_webkit_version(b[1]);return{major:c['major'],minor:c['minor'],is_nightly:c['is_nightly']}}else{return false}}catch(e){}}
function geckoKeyPress(a){try{var b=a.target.id;if(a.ctrlKey){var c=String.fromCharCode(a.charCode).toLowerCase();var d='';switch(c){case'b':d="bold";break;case'i':d="italic";break;case'u':d="underline";break};if(d){rteCommand(b,d);a.preventDefault();a.stopPropagation()}}}catch(e){if(debugMode)
alert(e)}}
function geckoGetRv(){if(navigator.product!='Gecko'){return-1}
var a=0;var b=navigator.userAgent.toLowerCase();var c=b.indexOf('rv:');var d=b.indexOf(')',c);var e=b.substring(c+3,d);var f=e.split('.');var g=1;for(var i=0;i<f.length;i++){var h=parseInt(f[i]);a+=h/g;g*=100}
return a}
function evt_ie_keypress(a){try{ieKeyPress(a,rte)}catch(e){if(debugMode)
alert(e)}}
function ieKeyPress(a,b){try{var c=(a.which||a.charCode||a.keyCode);var d=String.fromCharCode(c).toLowerCase()}catch(e){if(debugMode)
alert(e)}}
function checkspell(){try{var a=new ActiveXObject("ieSpell.ieSpellExtension");a.CheckAllLinkedDocuments(document)}catch(e){if(e.number==-2146827859){if(confirm("ieSpell not detected.  Click Ok to go to download page."))
window.open("http://www.iespell.com/download.php","DownLoad")}else{alert("Error Loading ieSpell: Exception "+e.number)}}}
function raiseButton(e){try{var a=window.event.srcElement;className=a.className;if(className=='rteImage'||className=='rteImageLowered'){a.className='rteImageRaised'}}catch(e){if(debugMode)
alert(e)}}
function normalButton(e){try{var a=window.event.srcElement;className=a.className;if(className=='rteImageRaised'||className=='rteImageLowered'){a.className='rteImage'}}catch(e){if(debugMode)
alert(e)}}
function lowerButton(e){try{var a=window.event.srcElement;className=a.className;if(className=='rteImage'||className=='rteImageRaised'){a.className='rteImageLowered'}}catch(e){if(debugMode)
alert(e)}}