<?php 
if((isset($_POST['name'])&&$_POST['name']!="")&&(isset($_POST['phone'])&&$_POST['phone']!="")&&(isset($_POST['email'])&&$_POST['email']!="")&&(isset($_POST['inn'])&&$_POST['inn']!=""))
{   
    $rr = []; 

    for($i = 0; $i < $_POST["count"]; $i++)
    {
        $e = "par".$i;
        $rr[$i] = ['item' => explode(";", $_POST[$e])[0],'price' => explode(";", $_POST[$e])[1],'counts' => explode(";", $_POST[$e])[2],"total_price" => floatval(explode(";", $_POST[$e])[1]) * floatval(explode(";", $_POST[$e])[2]) ];
    }  

    $now_date = date('d.m.Y');
    $date2 = date('d.m.Y', strtotime($now_date. ' + 30 days')); 

    $WORD = '<html xmlns:v="urn:schemas-microsoft-com:vml"
    xmlns:o="urn:schemas-microsoft-com:office:office"
    xmlns:w="urn:schemas-microsoft-com:office:word"
    xmlns:m="http://schemas.microsoft.com/office/2004/12/omml"
    xmlns="http://www.w3.org/TR/REC-html40">

    <head>
    <meta http-equiv=Content-Type content="text/html; charset=unicode">
    <meta name=ProgId content=Word.Document>
    <meta name=Generator content="Microsoft Word 15">
    <meta name=Originator content="Microsoft Word 15">
    <link rel=File-List href="firstfile.files/filelist.xml">
    <link rel=Edit-Time-Data href="firstfile.files/editdata.mso">
    <!--[if !mso]>
    <style>
    v\:* {behavior:url(#default#VML);}
    o\:* {behavior:url(#default#VML);}
    w\:* {behavior:url(#default#VML);}
    .shape {behavior:url(#default#VML);}
    </style>
    <![endif]--><!--[if gte mso 9]><xml>
    <o:DocumentProperties>
    <o:Author>User</o:Author>
    <o:LastAuthor>Tom Nolane</o:LastAuthor>
    <o:Revision>4</o:Revision>
    <o:TotalTime>4</o:TotalTime>
    <o:LastPrinted>2017-05-29T13:27:00Z</o:LastPrinted>
    <o:Created>2017-09-23T14:54:00Z</o:Created>
    <o:LastSaved>2017-09-23T18:48:00Z</o:LastSaved>
    <o:Pages>2</o:Pages>
    <o:Words>353</o:Words>
    <o:Characters>2018</o:Characters>
    <o:Lines>16</o:Lines>
    <o:Paragraphs>4</o:Paragraphs>
    <o:CharactersWithSpaces>2367</o:CharactersWithSpaces>
    <o:Version>15.00</o:Version>
    </o:DocumentProperties>
    <o:OfficeDocumentSettings>
    <o:RelyOnVML/>
    <o:AllowPNG/>
    </o:OfficeDocumentSettings>
    </xml><![endif]-->
    <link rel=themeData href="firstfile.files/themedata.thmx">
    <link rel=colorSchemeMapping href="firstfile.files/colorschememapping.xml">
    <!--[if gte mso 9]><xml>
    <w:WordDocument>
    <w:View>Print</w:View>
    <w:Zoom>99</w:Zoom>
    <w:SpellingState>Clean</w:SpellingState>
    <w:GrammarState>Clean</w:GrammarState>
    <w:TrackMoves>false</w:TrackMoves>
    <w:TrackFormatting/>
    <w:PunctuationKerning/>
    <w:ValidateAgainstSchemas/>
    <w:SaveIfXMLInvalid>false</w:SaveIfXMLInvalid>
    <w:IgnoreMixedContent>false</w:IgnoreMixedContent>
    <w:AlwaysShowPlaceholderText>false</w:AlwaysShowPlaceholderText>
    <w:DoNotPromoteQF/>
    <w:LidThemeOther>RU</w:LidThemeOther>
    <w:LidThemeAsian>X-NONE</w:LidThemeAsian>
    <w:LidThemeComplexScript>X-NONE</w:LidThemeComplexScript>
    <w:Compatibility>
    <w:BreakWrappedTables/>
    <w:SnapToGridInCell/>
    <w:WrapTextWithPunct/>
    <w:UseAsianBreakRules/>
    <w:UseWord2010TableStyleRules/>
    <w:DontGrowAutofit/>
    <w:DontUseIndentAsNumberingTabStop/>
    <w:FELineBreak11/>
    <w:WW11IndentRules/>
    <w:DontAutofitConstrainedTables/>
    <w:AutofitLikeWW11/>
    <w:HangulWidthLikeWW11/>
    <w:UseNormalStyleForList/>
    <w:SplitPgBreakAndParaMark/>
    <w:DontVertAlignCellWithSp/>
    <w:DontBreakConstrainedForcedTables/>
    <w:DontVertAlignInTxbx/>
    <w:Word11KerningPairs/>
    <w:CachedColBalance/>
    </w:Compatibility>
    <w:BrowserLevel>MicrosoftInternetExplorer4</w:BrowserLevel>
    <m:mathPr>
    <m:mathFont m:val="Cambria Math"/>
    <m:brkBin m:val="before"/>
    <m:brkBinSub m:val="&#45;-"/>
    <m:smallFrac/>
    <m:dispDef/>
    <m:lMargin m:val="0"/>
    <m:rMargin m:val="0"/>
    <m:defJc m:val="centerGroup"/>
    <m:wrapIndent m:val="1440"/>
    <m:intLim m:val="subSup"/>
    <m:naryLim m:val="undOvr"/>
    </m:mathPr></w:WordDocument>
    </xml><![endif]--><!--[if gte mso 9]><xml>
    <w:LatentStyles DefLockedState="false" DefUnhideWhenUsed="false"
    DefSemiHidden="false" DefQFormat="false" DefPriority="99"
    LatentStyleCount="371">
    <w:LsdException Locked="false" Priority="0" QFormat="true" Name="Normal"/>
    <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 1"/>
    <w:LsdException Locked="false" Priority="0" SemiHidden="true"
    UnhideWhenUsed="true" QFormat="true" Name="heading 2"/>
    <w:LsdException Locked="false" Priority="9" SemiHidden="true"
    UnhideWhenUsed="true" QFormat="true" Name="heading 3"/>
    <w:LsdException Locked="false" Priority="9" SemiHidden="true"
    UnhideWhenUsed="true" QFormat="true" Name="heading 4"/>
    <w:LsdException Locked="false" Priority="9" SemiHidden="true"
    UnhideWhenUsed="true" QFormat="true" Name="heading 5"/>
    <w:LsdException Locked="false" Priority="9" SemiHidden="true"
    UnhideWhenUsed="true" QFormat="true" Name="heading 6"/>
    <w:LsdException Locked="false" Priority="9" SemiHidden="true"
    UnhideWhenUsed="true" QFormat="true" Name="heading 7"/>
    <w:LsdException Locked="false" Priority="9" SemiHidden="true"
    UnhideWhenUsed="true" QFormat="true" Name="heading 8"/>
    <w:LsdException Locked="false" Priority="9" SemiHidden="true"
    UnhideWhenUsed="true" QFormat="true" Name="heading 9"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="index 1"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="index 2"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="index 3"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="index 4"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="index 5"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="index 6"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="index 7"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="index 8"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="index 9"/>
    <w:LsdException Locked="false" Priority="39" SemiHidden="true"
    UnhideWhenUsed="true" Name="toc 1"/>
    <w:LsdException Locked="false" Priority="39" SemiHidden="true"
    UnhideWhenUsed="true" Name="toc 2"/>
    <w:LsdException Locked="false" Priority="39" SemiHidden="true"
    UnhideWhenUsed="true" Name="toc 3"/>
    <w:LsdException Locked="false" Priority="39" SemiHidden="true"
    UnhideWhenUsed="true" Name="toc 4"/>
    <w:LsdException Locked="false" Priority="39" SemiHidden="true"
    UnhideWhenUsed="true" Name="toc 5"/>
    <w:LsdException Locked="false" Priority="39" SemiHidden="true"
    UnhideWhenUsed="true" Name="toc 6"/>
    <w:LsdException Locked="false" Priority="39" SemiHidden="true"
    UnhideWhenUsed="true" Name="toc 7"/>
    <w:LsdException Locked="false" Priority="39" SemiHidden="true"
    UnhideWhenUsed="true" Name="toc 8"/>
    <w:LsdException Locked="false" Priority="39" SemiHidden="true"
    UnhideWhenUsed="true" Name="toc 9"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="Normal Indent"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="footnote text"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="annotation text"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="header"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="footer"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="index heading"/>
    <w:LsdException Locked="false" Priority="35" SemiHidden="true"
    UnhideWhenUsed="true" QFormat="true" Name="caption"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="table of figures"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="envelope address"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="envelope return"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="footnote reference"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="annotation reference"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="line number"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="page number"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="endnote reference"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="endnote text"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="table of authorities"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="macro"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="toa heading"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="List"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="List Bullet"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="List Number"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="List 2"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="List 3"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="List 4"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="List 5"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="List Bullet 2"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="List Bullet 3"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="List Bullet 4"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="List Bullet 5"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="List Number 2"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="List Number 3"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="List Number 4"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="List Number 5"/>
    <w:LsdException Locked="false" Priority="10" QFormat="true" Name="Title"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="Closing"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="Signature"/>
    <w:LsdException Locked="false" Priority="1" SemiHidden="true"
    UnhideWhenUsed="true" Name="Default Paragraph Font"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="Body Text"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="Body Text Indent"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="List Continue"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="List Continue 2"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="List Continue 3"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="List Continue 4"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="List Continue 5"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="Message Header"/>
    <w:LsdException Locked="false" Priority="11" QFormat="true" Name="Subtitle"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="Salutation"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="Date"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="Body Text First Indent"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="Body Text First Indent 2"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="Note Heading"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="Body Text 2"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="Body Text 3"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="Body Text Indent 2"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="Body Text Indent 3"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="Block Text"/>
    <w:LsdException Locked="false" Priority="0" SemiHidden="true"
    UnhideWhenUsed="true" Name="Hyperlink"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="FollowedHyperlink"/>
    <w:LsdException Locked="false" Priority="22" QFormat="true" Name="Strong"/>
    <w:LsdException Locked="false" Priority="20" QFormat="true" Name="Emphasis"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="Document Map"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="Plain Text"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="E-mail Signature"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="HTML Top of Form"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="HTML Bottom of Form"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="Normal (Web)"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="HTML Acronym"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="HTML Address"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="HTML Cite"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="HTML Code"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="HTML Definition"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="HTML Keyboard"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="HTML Preformatted"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="HTML Sample"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="HTML Typewriter"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="HTML Variable"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="Normal Table"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="annotation subject"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="No List"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="Outline List 1"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="Outline List 2"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="Outline List 3"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="Table Simple 1"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="Table Simple 2"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="Table Simple 3"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="Table Classic 1"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="Table Classic 2"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="Table Classic 3"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="Table Classic 4"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="Table Colorful 1"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="Table Colorful 2"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="Table Colorful 3"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="Table Columns 1"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="Table Columns 2"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="Table Columns 3"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="Table Columns 4"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="Table Columns 5"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="Table Grid 1"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="Table Grid 2"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="Table Grid 3"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="Table Grid 4"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="Table Grid 5"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="Table Grid 6"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="Table Grid 7"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="Table Grid 8"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="Table List 1"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="Table List 2"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="Table List 3"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="Table List 4"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="Table List 5"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="Table List 6"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="Table List 7"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="Table List 8"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="Table 3D effects 1"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="Table 3D effects 2"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="Table 3D effects 3"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="Table Contemporary"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="Table Elegant"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="Table Professional"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="Table Subtle 1"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="Table Subtle 2"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="Table Web 1"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="Table Web 2"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="Table Web 3"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="Balloon Text"/>
    <w:LsdException Locked="false" Priority="0" Name="Table Grid"/>
    <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
    Name="Table Theme"/>
    <w:LsdException Locked="false" SemiHidden="true" Name="Placeholder Text"/>
    <w:LsdException Locked="false" Priority="1" QFormat="true" Name="No Spacing"/>
    <w:LsdException Locked="false" Priority="60" Name="Light Shading"/>
    <w:LsdException Locked="false" Priority="61" Name="Light List"/>
    <w:LsdException Locked="false" Priority="62" Name="Light Grid"/>
    <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1"/>
    <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2"/>
    <w:LsdException Locked="false" Priority="65" Name="Medium List 1"/>
    <w:LsdException Locked="false" Priority="66" Name="Medium List 2"/>
    <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1"/>
    <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2"/>
    <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3"/>
    <w:LsdException Locked="false" Priority="70" Name="Dark List"/>
    <w:LsdException Locked="false" Priority="71" Name="Colorful Shading"/>
    <w:LsdException Locked="false" Priority="72" Name="Colorful List"/>
    <w:LsdException Locked="false" Priority="73" Name="Colorful Grid"/>
    <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 1"/>
    <w:LsdException Locked="false" Priority="61" Name="Light List Accent 1"/>
    <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 1"/>
    <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 1"/>
    <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 1"/>
    <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 1"/>
    <w:LsdException Locked="false" SemiHidden="true" Name="Revision"/>
    <w:LsdException Locked="false" Priority="34" QFormat="true"
    Name="List Paragraph"/>
    <w:LsdException Locked="false" Priority="29" QFormat="true" Name="Quote"/>
    <w:LsdException Locked="false" Priority="30" QFormat="true"
    Name="Intense Quote"/>
    <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 1"/>
    <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 1"/>
    <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 1"/>
    <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 1"/>
    <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 1"/>
    <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 1"/>
    <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 1"/>
    <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 1"/>
    <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 2"/>
    <w:LsdException Locked="false" Priority="61" Name="Light List Accent 2"/>
    <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 2"/>
    <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 2"/>
    <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 2"/>
    <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 2"/>
    <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 2"/>
    <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 2"/>
    <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 2"/>
    <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 2"/>
    <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 2"/>
    <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 2"/>
    <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 2"/>
    <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 2"/>
    <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 3"/>
    <w:LsdException Locked="false" Priority="61" Name="Light List Accent 3"/>
    <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 3"/>
    <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 3"/>
    <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 3"/>
    <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 3"/>
    <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 3"/>
    <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 3"/>
    <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 3"/>
    <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 3"/>
    <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 3"/>
    <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 3"/>
    <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 3"/>
    <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 3"/>
    <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 4"/>
    <w:LsdException Locked="false" Priority="61" Name="Light List Accent 4"/>
    <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 4"/>
    <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 4"/>
    <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 4"/>
    <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 4"/>
    <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 4"/>
    <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 4"/>
    <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 4"/>
    <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 4"/>
    <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 4"/>
    <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 4"/>
    <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 4"/>
    <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 4"/>
    <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 5"/>
    <w:LsdException Locked="false" Priority="61" Name="Light List Accent 5"/>
    <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 5"/>
    <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 5"/>
    <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 5"/>
    <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 5"/>
    <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 5"/>
    <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 5"/>
    <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 5"/>
    <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 5"/>
    <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 5"/>
    <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 5"/>
    <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 5"/>
    <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 5"/>
    <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 6"/>
    <w:LsdException Locked="false" Priority="61" Name="Light List Accent 6"/>
    <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 6"/>
    <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 6"/>
    <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 6"/>
    <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 6"/>
    <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 6"/>
    <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 6"/>
    <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 6"/>
    <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 6"/>
    <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 6"/>
    <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 6"/>
    <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 6"/>
    <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 6"/>
    <w:LsdException Locked="false" Priority="19" QFormat="true"
    Name="Subtle Emphasis"/>
    <w:LsdException Locked="false" Priority="21" QFormat="true"
    Name="Intense Emphasis"/>
    <w:LsdException Locked="false" Priority="31" QFormat="true"
    Name="Subtle Reference"/>
    <w:LsdException Locked="false" Priority="32" QFormat="true"
    Name="Intense Reference"/>
    <w:LsdException Locked="false" Priority="33" QFormat="true" Name="Book Title"/>
    <w:LsdException Locked="false" Priority="37" SemiHidden="true"
    UnhideWhenUsed="true" Name="Bibliography"/>
    <w:LsdException Locked="false" Priority="39" SemiHidden="true"
    UnhideWhenUsed="true" QFormat="true" Name="TOC Heading"/>
    <w:LsdException Locked="false" Priority="41" Name="Plain Table 1"/>
    <w:LsdException Locked="false" Priority="42" Name="Plain Table 2"/>
    <w:LsdException Locked="false" Priority="43" Name="Plain Table 3"/>
    <w:LsdException Locked="false" Priority="44" Name="Plain Table 4"/>
    <w:LsdException Locked="false" Priority="45" Name="Plain Table 5"/>
    <w:LsdException Locked="false" Priority="40" Name="Grid Table Light"/>
    <w:LsdException Locked="false" Priority="46" Name="Grid Table 1 Light"/>
    <w:LsdException Locked="false" Priority="47" Name="Grid Table 2"/>
    <w:LsdException Locked="false" Priority="48" Name="Grid Table 3"/>
    <w:LsdException Locked="false" Priority="49" Name="Grid Table 4"/>
    <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark"/>
    <w:LsdException Locked="false" Priority="51" Name="Grid Table 6 Colorful"/>
    <w:LsdException Locked="false" Priority="52" Name="Grid Table 7 Colorful"/>
    <w:LsdException Locked="false" Priority="46"
    Name="Grid Table 1 Light Accent 1"/>
    <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 1"/>
    <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 1"/>
    <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 1"/>
    <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 1"/>
    <w:LsdException Locked="false" Priority="51"
    Name="Grid Table 6 Colorful Accent 1"/>
    <w:LsdException Locked="false" Priority="52"
    Name="Grid Table 7 Colorful Accent 1"/>
    <w:LsdException Locked="false" Priority="46"
    Name="Grid Table 1 Light Accent 2"/>
    <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 2"/>
    <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 2"/>
    <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 2"/>
    <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 2"/>
    <w:LsdException Locked="false" Priority="51"
    Name="Grid Table 6 Colorful Accent 2"/>
    <w:LsdException Locked="false" Priority="52"
    Name="Grid Table 7 Colorful Accent 2"/>
    <w:LsdException Locked="false" Priority="46"
    Name="Grid Table 1 Light Accent 3"/>
    <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 3"/>
    <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 3"/>
    <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 3"/>
    <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 3"/>
    <w:LsdException Locked="false" Priority="51"
    Name="Grid Table 6 Colorful Accent 3"/>
    <w:LsdException Locked="false" Priority="52"
    Name="Grid Table 7 Colorful Accent 3"/>
    <w:LsdException Locked="false" Priority="46"
    Name="Grid Table 1 Light Accent 4"/>
    <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 4"/>
    <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 4"/>
    <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 4"/>
    <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 4"/>
    <w:LsdException Locked="false" Priority="51"
    Name="Grid Table 6 Colorful Accent 4"/>
    <w:LsdException Locked="false" Priority="52"
    Name="Grid Table 7 Colorful Accent 4"/>
    <w:LsdException Locked="false" Priority="46"
    Name="Grid Table 1 Light Accent 5"/>
    <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 5"/>
    <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 5"/>
    <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 5"/>
    <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 5"/>
    <w:LsdException Locked="false" Priority="51"
    Name="Grid Table 6 Colorful Accent 5"/>
    <w:LsdException Locked="false" Priority="52"
    Name="Grid Table 7 Colorful Accent 5"/>
    <w:LsdException Locked="false" Priority="46"
    Name="Grid Table 1 Light Accent 6"/>
    <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 6"/>
    <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 6"/>
    <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 6"/>
    <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 6"/>
    <w:LsdException Locked="false" Priority="51"
    Name="Grid Table 6 Colorful Accent 6"/>
    <w:LsdException Locked="false" Priority="52"
    Name="Grid Table 7 Colorful Accent 6"/>
    <w:LsdException Locked="false" Priority="46" Name="List Table 1 Light"/>
    <w:LsdException Locked="false" Priority="47" Name="List Table 2"/>
    <w:LsdException Locked="false" Priority="48" Name="List Table 3"/>
    <w:LsdException Locked="false" Priority="49" Name="List Table 4"/>
    <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark"/>
    <w:LsdException Locked="false" Priority="51" Name="List Table 6 Colorful"/>
    <w:LsdException Locked="false" Priority="52" Name="List Table 7 Colorful"/>
    <w:LsdException Locked="false" Priority="46"
    Name="List Table 1 Light Accent 1"/>
    <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 1"/>
    <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 1"/>
    <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 1"/>
    <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 1"/>
    <w:LsdException Locked="false" Priority="51"
    Name="List Table 6 Colorful Accent 1"/>
    <w:LsdException Locked="false" Priority="52"
    Name="List Table 7 Colorful Accent 1"/>
    <w:LsdException Locked="false" Priority="46"
    Name="List Table 1 Light Accent 2"/>
    <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 2"/>
    <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 2"/>
    <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 2"/>
    <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 2"/>
    <w:LsdException Locked="false" Priority="51"
    Name="List Table 6 Colorful Accent 2"/>
    <w:LsdException Locked="false" Priority="52"
    Name="List Table 7 Colorful Accent 2"/>
    <w:LsdException Locked="false" Priority="46"
    Name="List Table 1 Light Accent 3"/>
    <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 3"/>
    <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 3"/>
    <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 3"/>
    <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 3"/>
    <w:LsdException Locked="false" Priority="51"
    Name="List Table 6 Colorful Accent 3"/>
    <w:LsdException Locked="false" Priority="52"
    Name="List Table 7 Colorful Accent 3"/>
    <w:LsdException Locked="false" Priority="46"
    Name="List Table 1 Light Accent 4"/>
    <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 4"/>
    <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 4"/>
    <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 4"/>
    <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 4"/>
    <w:LsdException Locked="false" Priority="51"
    Name="List Table 6 Colorful Accent 4"/>
    <w:LsdException Locked="false" Priority="52"
    Name="List Table 7 Colorful Accent 4"/>
    <w:LsdException Locked="false" Priority="46"
    Name="List Table 1 Light Accent 5"/>
    <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 5"/>
    <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 5"/>
    <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 5"/>
    <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 5"/>
    <w:LsdException Locked="false" Priority="51"
    Name="List Table 6 Colorful Accent 5"/>
    <w:LsdException Locked="false" Priority="52"
    Name="List Table 7 Colorful Accent 5"/>
    <w:LsdException Locked="false" Priority="46"
    Name="List Table 1 Light Accent 6"/>
    <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 6"/>
    <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 6"/>
    <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 6"/>
    <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 6"/>
    <w:LsdException Locked="false" Priority="51"
    Name="List Table 6 Colorful Accent 6"/>
    <w:LsdException Locked="false" Priority="52"
    Name="List Table 7 Colorful Accent 6"/>
    </w:LatentStyles>
    </xml><![endif]-->
    <style>
    <!--
    /* Font Definitions */
    @font-face
        {font-family:"Cambria Math";
        panose-1:2 4 5 3 5 4 6 3 2 4;
        mso-font-charset:1;
        mso-generic-font-family:roman;
        mso-font-format:other;
        mso-font-pitch:variable;
        mso-font-signature:0 0 0 0 0 0;}
    @font-face
        {font-family:Calibri;
        panose-1:2 15 5 2 2 2 4 3 2 4;
        mso-font-charset:204;
        mso-generic-font-family:swiss;
        mso-font-pitch:variable;
        mso-font-signature:-536870145 1073786111 1 0 415 0;}
    @font-face
        {font-family:"Segoe UI";
        panose-1:2 11 5 2 4 2 4 2 2 3;
        mso-font-charset:204;
        mso-generic-font-family:swiss;
        mso-font-pitch:variable;
        mso-font-signature:-520084737 -1073683329 41 0 479 0;}
    /* Style Definitions */
    p.MsoNormal, li.MsoNormal, div.MsoNormal
        {mso-style-unhide:no;
        mso-style-qformat:yes;
        mso-style-parent:"";
        margin-top:0cm;
        margin-right:0cm;
        margin-bottom:10.0pt;
        margin-left:0cm;
        line-height:115%;
        mso-pagination:widow-orphan;
        font-size:11.0pt;
        font-family:"Calibri","sans-serif";
        mso-fareast-font-family:"Times New Roman";
        mso-bidi-font-family:"Times New Roman";}
    h2
        {mso-style-noshow:yes;
        mso-style-qformat:yes;
        mso-style-link:"Заголовок 2 Знак";
        mso-style-next:Обычный;
        margin:0cm;
        margin-bottom:.0001pt;
        mso-pagination:widow-orphan;
        page-break-after:avoid;
        mso-outline-level:2;
        font-size:16.0pt;
        font-family:"Times New Roman","serif";
        mso-fareast-font-family:"Times New Roman";
        font-weight:bold;}
    a:link, span.MsoHyperlink
        {mso-style-noshow:yes;
        mso-style-parent:"";
        color:blue;
        text-decoration:underline;
        text-underline:single;}
    a:visited, span.MsoHyperlinkFollowed
        {mso-style-noshow:yes;
        mso-style-priority:99;
        color:#954F72;
        mso-themecolor:followedhyperlink;
        text-decoration:underline;
        text-underline:single;}
    p
        {mso-style-noshow:yes;
        mso-style-priority:99;
        mso-margin-top-alt:auto;
        margin-right:0cm;
        mso-margin-bottom-alt:auto;
        margin-left:0cm;
        mso-pagination:widow-orphan;
        font-size:12.0pt;
        font-family:"Times New Roman","serif";
        mso-fareast-font-family:"Times New Roman";}
    p.MsoAcetate, li.MsoAcetate, div.MsoAcetate
        {mso-style-noshow:yes;
        mso-style-priority:99;
        mso-style-link:"Текст выноски Знак";
        margin:0cm;
        margin-bottom:.0001pt;
        mso-pagination:widow-orphan;
        font-size:9.0pt;
        font-family:"Segoe UI","sans-serif";
        mso-fareast-font-family:"Times New Roman";}
    p.MsoListParagraph, li.MsoListParagraph, div.MsoListParagraph
        {mso-style-noshow:yes;
        mso-style-priority:34;
        mso-style-unhide:no;
        mso-style-qformat:yes;
        margin-top:0cm;
        margin-right:0cm;
        margin-bottom:10.0pt;
        margin-left:36.0pt;
        mso-add-space:auto;
        line-height:115%;
        mso-pagination:widow-orphan;
        font-size:11.0pt;
        font-family:"Calibri","sans-serif";
        mso-fareast-font-family:"Times New Roman";
        mso-bidi-font-family:"Times New Roman";}
    p.MsoListParagraphCxSpFirst, li.MsoListParagraphCxSpFirst, div.MsoListParagraphCxSpFirst
        {mso-style-noshow:yes;
        mso-style-priority:34;
        mso-style-unhide:no;
        mso-style-qformat:yes;
        mso-style-type:export-only;
        margin-top:0cm;
        margin-right:0cm;
        margin-bottom:0cm;
        margin-left:36.0pt;
        margin-bottom:.0001pt;
        mso-add-space:auto;
        line-height:115%;
        mso-pagination:widow-orphan;
        font-size:11.0pt;
        font-family:"Calibri","sans-serif";
        mso-fareast-font-family:"Times New Roman";
        mso-bidi-font-family:"Times New Roman";}
    p.MsoListParagraphCxSpMiddle, li.MsoListParagraphCxSpMiddle, div.MsoListParagraphCxSpMiddle
        {mso-style-noshow:yes;
        mso-style-priority:34;
        mso-style-unhide:no;
        mso-style-qformat:yes;
        mso-style-type:export-only;
        margin-top:0cm;
        margin-right:0cm;
        margin-bottom:0cm;
        margin-left:36.0pt;
        margin-bottom:.0001pt;
        mso-add-space:auto;
        line-height:115%;
        mso-pagination:widow-orphan;
        font-size:11.0pt;
        font-family:"Calibri","sans-serif";
        mso-fareast-font-family:"Times New Roman";
        mso-bidi-font-family:"Times New Roman";}
    p.MsoListParagraphCxSpLast, li.MsoListParagraphCxSpLast, div.MsoListParagraphCxSpLast
        {mso-style-noshow:yes;
        mso-style-priority:34;
        mso-style-unhide:no;
        mso-style-qformat:yes;
        mso-style-type:export-only;
        margin-top:0cm;
        margin-right:0cm;
        margin-bottom:10.0pt;
        margin-left:36.0pt;
        mso-add-space:auto;
        line-height:115%;
        mso-pagination:widow-orphan;
        font-size:11.0pt;
        font-family:"Calibri","sans-serif";
        mso-fareast-font-family:"Times New Roman";
        mso-bidi-font-family:"Times New Roman";}
    span.2
        {mso-style-name:"Заголовок 2 Знак";
        mso-style-noshow:yes;
        mso-style-unhide:no;
        mso-style-locked:yes;
        mso-style-parent:"";
        mso-style-link:"Заголовок 2";
        mso-ansi-font-size:16.0pt;
        mso-bidi-font-size:16.0pt;
        font-family:"Times New Roman","serif";
        mso-ascii-font-family:"Times New Roman";
        mso-fareast-font-family:"Times New Roman";
        mso-hansi-font-family:"Times New Roman";
        mso-bidi-font-family:"Times New Roman";
        mso-fareast-language:RU;
        font-weight:bold;}
    span.a
        {mso-style-name:"Текст выноски Знак";
        mso-style-noshow:yes;
        mso-style-priority:99;
        mso-style-unhide:no;
        mso-style-locked:yes;
        mso-style-parent:"";
        mso-style-link:"Текст выноски";
        mso-ansi-font-size:9.0pt;
        mso-bidi-font-size:9.0pt;
        font-family:"Segoe UI","sans-serif";
        mso-ascii-font-family:"Segoe UI";
        mso-fareast-font-family:"Times New Roman";
        mso-hansi-font-family:"Segoe UI";
        mso-bidi-font-family:"Segoe UI";
        mso-fareast-language:RU;}
    span.apple-converted-space
        {mso-style-name:apple-converted-space;
        mso-style-unhide:no;}
    span.wmi-callto
        {mso-style-name:wmi-callto;
        mso-style-unhide:no;}
    span.SpellE
        {mso-style-name:"";
        mso-spl-e:yes;}
    span.GramE
        {mso-style-name:"";
        mso-gram-e:yes;}
    .MsoChpDefault
        {mso-style-type:export-only;
        mso-default-props:yes;
        font-size:10.0pt;
        mso-ansi-font-size:10.0pt;
        mso-bidi-font-size:10.0pt;
        font-family:"Calibri","sans-serif";
        mso-ascii-font-family:Calibri;
        mso-fareast-font-family:Calibri;
        mso-hansi-font-family:Calibri;}
    @page WordSection1
        {size:595.3pt 841.9pt;
        margin:21.3pt 42.5pt 35.45pt 70.9pt;
        mso-header-margin:35.4pt;
        mso-footer-margin:35.4pt;
        mso-paper-source:0;}
    div.WordSection1
        {page:WordSection1;}
    /* List Definitions */
    @list l0
        {mso-list-id:1226641315;
        mso-list-type:hybrid;
        mso-list-template-ids:702058610 710156168 68747289 68747291 68747279 68747289 68747291 68747279 68747289 68747291;}
    @list l0:level1
        {mso-level-tab-stop:none;
        mso-level-number-position:left;
        margin-left:46.35pt;
        text-indent:-18.0pt;}
    @list l0:level2
        {mso-level-tab-stop:72.0pt;
        mso-level-number-position:left;
        text-indent:-18.0pt;}
    @list l0:level3
        {mso-level-tab-stop:108.0pt;
        mso-level-number-position:left;
        text-indent:-18.0pt;}
    @list l0:level4
        {mso-level-tab-stop:144.0pt;
        mso-level-number-position:left;
        text-indent:-18.0pt;}
    @list l0:level5
        {mso-level-tab-stop:180.0pt;
        mso-level-number-position:left;
        text-indent:-18.0pt;}
    @list l0:level6
        {mso-level-tab-stop:216.0pt;
        mso-level-number-position:left;
        text-indent:-18.0pt;}
    @list l0:level7
        {mso-level-tab-stop:252.0pt;
        mso-level-number-position:left;
        text-indent:-18.0pt;}
    @list l0:level8
        {mso-level-tab-stop:288.0pt;
        mso-level-number-position:left;
        text-indent:-18.0pt;}
    @list l0:level9
        {mso-level-tab-stop:324.0pt;
        mso-level-number-position:left;
        text-indent:-18.0pt;}
    ol
        {margin-bottom:0cm;}
    ul
        {margin-bottom:0cm;}
    -->
    </style>
    <!--[if gte mso 10]>
    <style>
    /* Style Definitions */
    table.MsoNormalTable
        {mso-style-name:"Обычная таблица";
        mso-tstyle-rowband-size:0;
        mso-tstyle-colband-size:0;
        mso-style-noshow:yes;
        mso-style-priority:99;
        mso-style-parent:"";
        mso-padding-alt:0cm 5.4pt 0cm 5.4pt;
        mso-para-margin:0cm;
        mso-para-margin-bottom:.0001pt;
        mso-pagination:widow-orphan;
        font-size:10.0pt;
        font-family:"Calibri","sans-serif";}
    table.MsoTableGrid
        {mso-style-name:"Сетка таблицы";
        mso-tstyle-rowband-size:0;
        mso-tstyle-colband-size:0;
        mso-style-unhide:no;
        border:solid windowtext 1.0pt;
        mso-border-alt:solid windowtext .5pt;
        mso-padding-alt:0cm 5.4pt 0cm 5.4pt;
        mso-border-insideh:.5pt solid windowtext;
        mso-border-insidev:.5pt solid windowtext;
        mso-para-margin:0cm;
        mso-para-margin-bottom:.0001pt;
        mso-pagination:widow-orphan;
        font-size:10.0pt;
        font-family:"Times New Roman","serif";
        mso-fareast-font-family:"Times New Roman";}
    table.1
        {mso-style-name:"Сетка таблицы1";
        mso-tstyle-rowband-size:0;
        mso-tstyle-colband-size:0;
        mso-style-unhide:no;
        border:solid windowtext 1.0pt;
        mso-border-alt:solid windowtext .5pt;
        mso-padding-alt:0cm 5.4pt 0cm 5.4pt;
        mso-border-insideh:.5pt solid windowtext;
        mso-border-insidev:.5pt solid windowtext;
        mso-para-margin:0cm;
        mso-para-margin-bottom:.0001pt;
        mso-pagination:widow-orphan;
        font-size:10.0pt;
        font-family:"Calibri","sans-serif";}
    table.20
        {mso-style-name:"Сетка таблицы2";
        mso-tstyle-rowband-size:0;
        mso-tstyle-colband-size:0;
        mso-style-unhide:no;
        border:solid windowtext 1.0pt;
        mso-border-alt:solid windowtext .5pt;
        mso-padding-alt:0cm 5.4pt 0cm 5.4pt;
        mso-border-insideh:.5pt solid windowtext;
        mso-border-insidev:.5pt solid windowtext;
        mso-para-margin:0cm;
        mso-para-margin-bottom:.0001pt;
        mso-pagination:widow-orphan;
        font-size:10.0pt;
        font-family:"Calibri","sans-serif";}
    </style>
    <![endif]--><!--[if gte mso 9]><xml>
    <o:shapedefaults v:ext="edit" spidmax="1027"/>
    </xml><![endif]--><!--[if gte mso 9]><xml>
    <o:shapelayout v:ext="edit">
    <o:idmap v:ext="edit" data="1"/>
    </o:shapelayout></xml><![endif]-->
    </head>

    <body lang=RU link=blue vlink="#954F72" style=\'tab-interval:35.4pt\'>

    <div class=WordSection1>

    <p class=MsoNormal align=center style=\'margin-bottom:0cm;margin-bottom:.0001pt;
    text-align:center\'><v:rect id="Рисунок_x0020_1" o:spid="_x0000_s1026" style=\'position:absolute;
    left:0;text-align:left;margin-left:0;margin-top:0;width:186.5pt;height:136.4pt;
    z-index:-251658752;visibility:visible;mso-wrap-style:square;
    mso-width-percent:0;mso-height-percent:0;mso-wrap-distance-left:9pt;
    mso-wrap-distance-top:0;mso-wrap-distance-right:9pt;
    mso-wrap-distance-bottom:0;mso-position-horizontal:left;
    mso-position-horizontal-relative:margin;mso-position-vertical:absolute;
    mso-position-vertical-relative:text;mso-width-percent:0;mso-height-percent:0;
    mso-width-relative:page;mso-height-relative:page;v-text-anchor:top\' o:gfxdata="UEsDBBQABgAIAAAAIQC2gziS/gAAAOEBAAATAAAAW0NvbnRlbnRfVHlwZXNdLnhtbJSRQU7DMBBF
    90jcwfIWJU67QAgl6YK0S0CoHGBkTxKLZGx5TGhvj5O2G0SRWNoz/78nu9wcxkFMGNg6quQqL6RA
    0s5Y6ir5vt9lD1JwBDIwOMJKHpHlpr69KfdHjyxSmriSfYz+USnWPY7AufNIadK6MEJMx9ApD/oD
    OlTrorhX2lFEilmcO2RdNtjC5xDF9pCuTyYBB5bi6bQ4syoJ3g9WQ0ymaiLzg5KdCXlKLjvcW893
    SUOqXwnz5DrgnHtJTxOsQfEKIT7DmDSUCaxw7Rqn8787ZsmRM9e2VmPeBN4uqYvTtW7jvijg9N/y
    JsXecLq0q+WD6m8AAAD//wMAUEsDBBQABgAIAAAAIQA4/SH/1gAAAJQBAAALAAAAX3JlbHMvLnJl
    bHOkkMFqwzAMhu+DvYPRfXGawxijTi+j0GvpHsDYimMaW0Yy2fr2M4PBMnrbUb/Q94l/f/hMi1qR
    JVI2sOt6UJgd+ZiDgffL8ekFlFSbvV0oo4EbChzGx4f9GRdb25HMsYhqlCwG5lrLq9biZkxWOiqY
    22YiTra2kYMu1l1tQD30/bPm3wwYN0x18gb45AdQl1tp5j/sFB2T0FQ7R0nTNEV3j6o9feQzro1i
    OWA14Fm+Q8a1a8+Bvu/d/dMb2JY5uiPbhG/ktn4cqGU/er3pcvwCAAD//wMAUEsDBBQABgAIAAAA
    IQD1b4XLbwIAAKYEAAAOAAAAZHJzL2Uyb0RvYy54bWysVFGO0zAQ/UfiDpb/u2myabcbbbpaNVuE
    tMBKCwdwHaexSGwzdpsuiA/ERTgGQoIzdG/E2GlLF34Qoh+uxzN9M2/eTC8uN21D1gKs1Cqn8cmQ
    EqG4LqVa5vTN6/lgQol1TJWs0Urk9F5Yejl9+uSiM5lIdK2bUgBBEGWzzuS0ds5kUWR5LVpmT7QR
    Cp2VhpY5NGEZlcA6RG+bKBkOx1GnoTSgubAWX4veSacBv6oEd6+qygpHmpxibS6cEM6FP6PpBcuW
    wEwt+a4M9g9VtEwqTHqAKphjZAXyD6hWctBWV+6E6zbSVSW5CByQTTz8jc1dzYwIXLA51hzaZP8f
    LH+5vgUiS9SOEsValGj7Zfv14dPD5+337Y/tNxL7HnXGZhh6Z27Bs7TmRvO3lig9q5laiitrsNM9
    xv4JQHe1YCUWGyCiRxjesIhGFt0LXWJWtnI6dHBTQetzYG/IJgh1fxBKbBzh+JicjiejEerJ0Ref
    nSbJJEgZsWz/cwPWPRO6Jf6SU8D6Ajxb31iHjDB0H+KzKT2XTROmAZNgiH/06YKIH86H59eT60k6
    SJPx9SAdFsXgaj5LB+N5fDYqTovZrIg/evw4zWpZlkJ5uP1AxenfCbYb7X4UDiNldSNLD+dLsrBc
    zBoga4YDPQ8frw+yOQqLHpcR3Mhl/x3YBTm8Ar24brPY7HRe6PIehQGNbcMW43LjpdbwnpIOFyWn
    9t2KgaCkea5Q3PM4Tf1mBSMdnSVowLFncexhiiNUTh0l/XXm+m1cGZDLGjPFQSalr3AgKhmk8sPS
    V4UUvIHLEMjsFtdv27Edon79vUx/AgAA//8DAFBLAwQUAAYACAAAACEAqeaAyd0AAAAFAQAADwAA
    AGRycy9kb3ducmV2LnhtbEyPQUvDQBCF70L/wzIFL2I3pmBLzKZIQSwilKba8zY7JsHsbJrdJvHf
    O3ppLw8eb3jvm3Q12kb02PnakYKHWQQCqXCmplLBx/7lfgnCB01GN45QwQ96WGWTm1Qnxg20wz4P
    peAS8olWUIXQJlL6okKr/cy1SJx9uc7qwLYrpen0wOW2kXEUPUqra+KFSre4rrD4zs9WwVBs+8P+
    /VVu7w4bR6fNaZ1/vil1Ox2fn0AEHMPlGP7wGR0yZjq6MxkvGgX8SPhXzuaLOdujgngRL0Fmqbym
    z34BAAD//wMAUEsBAi0AFAAGAAgAAAAhALaDOJL+AAAA4QEAABMAAAAAAAAAAAAAAAAAAAAAAFtD
    b250ZW50X1R5cGVzXS54bWxQSwECLQAUAAYACAAAACEAOP0h/9YAAACUAQAACwAAAAAAAAAAAAAA
    AAAvAQAAX3JlbHMvLnJlbHNQSwECLQAUAAYACAAAACEA9W+Fy28CAACmBAAADgAAAAAAAAAAAAAA
    AAAuAgAAZHJzL2Uyb0RvYy54bWxQSwECLQAUAAYACAAAACEAqeaAyd0AAAAFAQAADwAAAAAAAAAA
    AAAAAADJBAAAZHJzL2Rvd25yZXYueG1sUEsFBgAAAAAEAAQA8wAAANMFAAAAAA==
    " filled="f" stroked="f">
    <o:lock v:ext="edit" aspectratio="t"/>
    <v:textbox>
    <![if !mso]>
    <table cellpadding=0 cellspacing=0 width="100%">
    <tr>
        <td><![endif]>
        <div>
        <p class=MsoNormal style=\'margin-bottom:0cm;margin-bottom:.0001pt;
        line-height:normal\'><span style=\'font-size:10.0pt;mso-fareast-font-family:
        Calibri;mso-no-proof:yes\'><v:shapetype id="_x0000_t75" coordsize="21600,21600"
        o:spt="75" o:preferrelative="t" path="m@4@5l@4@11@9@11@9@5xe" filled="f"
        stroked="f">
        <v:stroke joinstyle="miter"/>
        <v:formulas>
        <v:f eqn="if lineDrawn pixelLineWidth 0"/>
        <v:f eqn="sum @0 1 0"/>
        <v:f eqn="sum 0 0 @1"/>
        <v:f eqn="prod @2 1 2"/>
        <v:f eqn="prod @3 21600 pixelWidth"/>
        <v:f eqn="prod @3 21600 pixelHeight"/>
        <v:f eqn="sum @0 0 1"/>
        <v:f eqn="prod @6 1 2"/>
        <v:f eqn="prod @7 21600 pixelWidth"/>
        <v:f eqn="sum @8 21600 0"/>
        <v:f eqn="prod @7 21600 pixelHeight"/>
        <v:f eqn="sum @10 21600 0"/>
        </v:formulas>
        <v:path o:extrusionok="f" gradientshapeok="t" o:connecttype="rect"/>
        <o:lock v:ext="edit" aspectratio="t"/>
        </v:shapetype><v:shape id="_x0000_i1025" type="#_x0000_t75" style=\'width:168.75pt;
        height:105.75pt;visibility:visible\'>
        <v:imagedata src="http://glucauf.ru/logo_glucauf.png"/>
        </v:shape></span><span style=\'font-size:12.0pt;font-family:"Times New Roman","serif";
        mso-fareast-font-family:Calibri\'><o:p></o:p></span></p>
        </div>
        <![if !mso]></td>
    </tr>
    </table>
    <![endif]></v:textbox>
    <w:wrap type="square" anchorx="margin"/>
    </v:rect><b style=\'mso-bidi-font-weight:normal\'><span style=\'font-size:22.0pt;
    mso-bidi-font-size:11.0pt;line-height:115%\'>Общество с ограниченной
    ответственностью «<span class=SpellE>Глюкауф</span>»</span><o:p></o:p></b></p>

    <p class=MsoNormal align=center style=\'margin-bottom:0cm;margin-bottom:.0001pt;
    text-align:center\'><b style=\'mso-bidi-font-weight:normal\'><span Times \'><span
    style=\'font-size:22.0pt;mso-bidi-font-size:11.0pt;line-height:115%\'>(ООО «<span
    class=SpellE>Глюкауф</span>»)<o:p></o:p></span></b></p>

    </span>

    <p class=MsoNormal align=center style=\'margin-bottom:0cm;margin-bottom:.0001pt;
    text-align:center;line-height:150%\'><b style=\'mso-bidi-font-weight:normal\'>_______________________________________________________________________________________<o:p></o:p></b></p>

    <p class=MsoNormal align=center style=\'margin-bottom:0cm;margin-bottom:.0001pt;
    text-align:center;line-height:150%\'>Юридический адрес: 142601, Московская
    область, г. Орехово-Зуево, ул. Торфобрикетная, д. 2</p>

    <p class=MsoNormal align=center style=\'margin-bottom:0cm;margin-bottom:.0001pt;
    text-align:center;line-height:150%\'>ОГРН 1145034032021, ИНН 5034048698, КПП
    503401001</p>

    <p class=MsoNormal align=center style=\'margin-bottom:0cm;margin-bottom:.0001pt;
    text-align:center;line-height:150%\'>р/с 40702810838000092410 в ПАО Сбербанк г.
    Москва</p>

    <p class=MsoNormal align=center style=\'margin-bottom:0cm;margin-bottom:.0001pt;
    text-align:center;line-height:150%\'>к/с 30101810400000000225, <span
    class=GramE>БИК<span style=\'mso-spacerun:yes\'>  </span>044525225</span></p>

    <p class=MsoNormal align=center style=\'margin-bottom:0cm;margin-bottom:.0001pt;
    text-align:center;line-height:150%\'>Тел/факс +7 (926) 588-41-31/ +7 (495)
    256-07-27; <span Times \'>E</span><span Times \'>-</span><span Times \'><span
    lang=EN-US style=\'mso-ansi-language:EN-US\'>mail</span></span><span Times \'>: </span><a
    href="mailto:info@glucauf.ru"><span lang=EN-US style=\'mso-ansi-language:EN-US\'><span
    Times \'>info</span></span><span Times \'>@</span><span Times \'><span lang=EN-US
    style=\'mso-ansi-language:EN-US\'>glucauf</span></span><span Times \'>.</span><span
    Times \'><span lang=EN-US style=\'mso-ansi-language:EN-US\'>ru</span></span></a><span
    Times \'>; </span><a href="mailto:glucauf@glucauf.ru"><span lang=EN-US
    style=\'mso-ansi-language:EN-US\'><span Times \'>glucauf</span></span><span Times \'>@</span><span
    Times \'><span lang=EN-US style=\'mso-ansi-language:EN-US\'>glucauf</span></span><span
    Times \'>.</span><span Times \'><span lang=EN-US style=\'mso-ansi-language:EN-US\'>ru</span></span></a><span
    Times \'></p>

    <p class=MsoNormal align=center style=\'margin-bottom:0cm;margin-bottom:.0001pt;
    text-align:center;line-height:150%\'><b style=\'mso-bidi-font-weight:normal\'>_______________________________________________________________________________________<o:p></o:p></b></p>

    <table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0 align=left
    width=643 style=\'width:17.0cm;border-collapse:collapse;mso-yfti-tbllook:1184;
    mso-table-lspace:9.0pt;margin-left:6.75pt;mso-table-rspace:9.0pt;margin-right:
    6.75pt;mso-table-anchor-vertical:paragraph;mso-table-anchor-horizontal:margin;
    mso-table-left:left;mso-table-top:8.05pt;mso-padding-alt:0cm 5.4pt 0cm 5.4pt\'>
    <tr style=\'mso-yfti-irow:0;mso-yfti-firstrow:yes;mso-yfti-lastrow:yes\'>
    <td width=397 valign=top style=\'width:297.7pt;padding:0cm 5.4pt 0cm 5.4pt\'>
    <table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0 width=397
    style=\'width:297.75pt;border-collapse:collapse;mso-yfti-tbllook:1184;
    mso-padding-alt:0cm 5.4pt 0cm 5.4pt\'>
    <tr style=\'mso-yfti-irow:0;mso-yfti-firstrow:yes;mso-yfti-lastrow:yes\'>
        <td width=161 valign=top style=\'width:120.4pt;padding:0cm 5.4pt 0cm 5.4pt\'>
        <p class=MsoNormal style=\'margin-bottom:0cm;margin-bottom:.0001pt;
        text-align:justify;line-height:normal;mso-element:frame;mso-element-frame-hspace:
        9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:paragraph;
        mso-element-anchor-horizontal:margin;mso-element-top:8.05pt;mso-height-rule:
        exactly\'><span class=SpellE>Исх</span> № '.date("H-i").'</p>
        <p class=MsoNormal style=\'margin-bottom:0cm;margin-bottom:.0001pt;
        text-align:justify;line-height:normal;mso-element:frame;mso-element-frame-hspace:
        9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:paragraph;
        mso-element-anchor-horizontal:margin;mso-element-top:8.05pt;mso-height-rule:
        exactly\'>от '.date("d.m.y").'г.<o:p></o:p></p>
        </td>
        <td width=236 valign=top style=\'width:177.3pt;padding:0cm 5.4pt 0cm 5.4pt\'>
        <p class=MsoNormal align=right style=\'margin-bottom:0cm;margin-bottom:.0001pt;
        text-align:right;line-height:normal;mso-element:frame;mso-element-frame-hspace:
        9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:paragraph;
        mso-element-anchor-horizontal:margin;mso-element-top:8.05pt;mso-height-rule:
        exactly\'><span Times \'><o:p>&nbsp;</o:p></p>
        </span>
        <p class=MsoNormal align=right style=\'margin-bottom:0cm;margin-bottom:.0001pt;
        text-align:right;line-height:normal;mso-element:frame;mso-element-frame-hspace:
        9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:paragraph;
        mso-element-anchor-horizontal:margin;mso-element-top:8.05pt;mso-height-rule:
        exactly\'><span Times \'><o:p>&nbsp;</o:p></p>
        </span>
        <p class=MsoNormal align=right style=\'margin-bottom:0cm;margin-bottom:.0001pt;
        text-align:right;line-height:normal;mso-element:frame;mso-element-frame-hspace:
        9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:paragraph;
        mso-element-anchor-horizontal:margin;mso-element-top:8.05pt;mso-height-rule:
        exactly\'><span Times \'><o:p>&nbsp;</o:p></p>
        </span>
        <p class=MsoNormal align=right style=\'margin-bottom:0cm;margin-bottom:.0001pt;
        text-align:right;line-height:normal;mso-element:frame;mso-element-frame-hspace:
        9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:paragraph;
        mso-element-anchor-horizontal:margin;mso-element-top:8.05pt;mso-height-rule:
        exactly\'><span Times \'><o:p>&nbsp;</o:p></p>
        </span>
        <p class=MsoNormal align=right style=\'margin-bottom:0cm;margin-bottom:.0001pt;
        text-align:right;line-height:normal;mso-element:frame;mso-element-frame-hspace:
        9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:paragraph;
        mso-element-anchor-horizontal:margin;mso-element-top:8.05pt;mso-height-rule:
        exactly\'><span Times \'><o:p>&nbsp;</o:p></p>
        </span>
        <p class=MsoNormal align=right style=\'margin-bottom:0cm;margin-bottom:.0001pt;
        text-align:right;line-height:normal;mso-element:frame;mso-element-frame-hspace:
        9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:paragraph;
        mso-element-anchor-horizontal:margin;mso-element-top:8.05pt;mso-height-rule:
        exactly\'><span Times \'><o:p>&nbsp;</o:p></p>
        </span>
        <p class=MsoNormal align=right style=\'margin-bottom:0cm;margin-bottom:.0001pt;
        text-align:right;line-height:normal;mso-element:frame;mso-element-frame-hspace:
        9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:paragraph;
        mso-element-anchor-horizontal:margin;mso-element-top:8.05pt;mso-height-rule:
        exactly\'><span Times \'><o:p>&nbsp;</o:p></p>
        </span>
        <p class=MsoNormal align=right style=\'margin-bottom:0cm;margin-bottom:.0001pt;
        text-align:right;line-height:normal;mso-element:frame;mso-element-frame-hspace:
        9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:paragraph;
        mso-element-anchor-horizontal:margin;mso-element-top:8.05pt;mso-height-rule:
        exactly\'><span Times \'><o:p>&nbsp;</o:p></p>
        </td>
    </tr>
    </table>
    </td>
    <td width=246 valign=top style=\'width:184.25pt;padding:0cm 5.4pt 0cm 5.4pt\'>
    <p class=MsoNormal style=\'margin-bottom:0cm;margin-bottom:.0001pt;line-height:
    normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
    around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
    margin;mso-element-top:8.05pt;mso-height-rule:exactly\'><span Times \'><span
    class=GramE>для<span style=\'mso-spacerun:yes\'>  </span>'.$_POST['name'].'</span><o:p></o:p></p>
    </span>
    <p class=MsoNormal style=\'margin-bottom:0cm;margin-bottom:.0001pt;line-height:
    normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
    around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
    margin;mso-element-top:8.05pt;mso-height-rule:exactly\'><span Times \'>Тел.
    '.$_POST['phone'].'<o:p></o:p></p>
    </span>
    <p class=MsoNormal style=\'margin-bottom:0cm;margin-bottom:.0001pt;line-height:
    normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
    around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
    margin;mso-element-top:8.05pt;mso-height-rule:exactly\'><span Times \'><span
    lang=EN-US style=\'mso-ansi-language:EN-US\'>E</span></span><span Times \'>-</span><span
    Times \'><span lang=EN-US style=\'mso-ansi-language:EN-US\'>mail</span></span><span
    Times \'>: </span><span Times \'><a href="mailto:'.$_POST['email'].'"><span
    lang=EN-US style=\'font-size:9.0pt;mso-ansi-language:EN-US\'>'.$_POST['email'].'</span></a></span><span
    Times \'></p>
    <p class=MsoNormal style=\'margin-bottom:0cm;margin-bottom:.0001pt;line-height:
    normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
    around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
    margin;mso-element-top:8.05pt;mso-height-rule:exactly\'><o:p>&nbsp;</o:p></p>
    </span>
    <p class=MsoNormal style=\'margin-bottom:0cm;margin-bottom:.0001pt;line-height:
    normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
    around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
    margin;mso-element-top:8.05pt;mso-height-rule:exactly\'><span Times \'>от ООО «<span
    class=SpellE>Глюкауф</span>», </span><span Times \'><span
    style=\'mso-spacerun:yes\'> </span><o:p></o:p></p>
    </span>
    <p class=MsoNormal style=\'margin-bottom:0cm;margin-bottom:.0001pt;line-height:
    normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
    around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
    margin;mso-element-top:8.05pt;mso-height-rule:exactly\'><span Times \'>142601,
    Московская область, <o:p></o:p></p>
    </span>
    <p class=MsoNormal style=\'margin-bottom:0cm;margin-bottom:.0001pt;line-height:
    normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
    around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
    margin;mso-element-top:8.05pt;mso-height-rule:exactly\'><span Times \'>г. Орехово-Зуево,
    <o:p></o:p></p>
    </span>
    <p class=MsoNormal style=\'margin-bottom:0cm;margin-bottom:.0001pt;line-height:
    normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
    around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
    margin;mso-element-top:8.05pt;mso-height-rule:exactly\'><span Times \'>ул.
    Торфобрикетная, д. 2<o:p></o:p></p>
    </span>
    <p class=MsoNormal style=\'margin-bottom:0cm;margin-bottom:.0001pt;line-height:
    normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
    around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
    margin;mso-element-top:8.05pt;mso-height-rule:exactly\'><span Times \'><span
    style=\'mso-spacerun:yes\'> </span></span><span Times \'>ИНН 5034048698<o:p></o:p></p>
    </td>
    </tr>
    </table>

    <p class=MsoNormal style=\'margin-bottom:0cm;margin-bottom:.0001pt\'><span Times \'><o:p>&nbsp;</o:p></p>

    </span>

    <p class=MsoNormal style=\'margin-bottom:0cm;margin-bottom:.0001pt;text-indent:
    2.0cm\'><span Times \'><o:p>&nbsp;</o:p></p>

    </span>

    <p class=MsoNormal align=center style=\'margin-bottom:0cm;margin-bottom:.0001pt;
    text-align:center\'><span Times \'>Здравствуйте '.htmlentities(trim($_POST["name"])).'!<o:p></o:p></p>

    </span>

    <p class=MsoNormal align=center style=\'margin-bottom:0cm;margin-bottom:.0001pt;
    text-align:center\'><span Times \'><o:p>&nbsp;</o:p></p>

    </span>

    <p class=MsoNormal style=\'margin-bottom:0cm;margin-bottom:.0001pt;text-align:
    justify;text-indent:42.55pt\'><span Times \'>Общество с ограниченной
    ответственностью «<span class=SpellE>Глюкауф</span>», в лице Генерального
    директора Лихачевой Натальи Александровны, действующей на основании Устава выражает
    свое почтение за проявленный интерес к нашей продукции и предлагаем следующее
    коммерческое предложение:<o:p></o:p></p>

    </span>

    <p class=MsoNormal style=\'margin-bottom:0cm;margin-bottom:.0001pt;text-align:
    justify;text-indent:1.0cm\'><span Times \'><o:p>&nbsp;</o:p></p>

    </span>

    <table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 width=659
    style=\'width:494.45pt;border-collapse:collapse;border:none;mso-border-alt:
    solid windowtext .5pt;mso-yfti-tbllook:1184;mso-padding-alt:0cm 5.4pt 0cm 5.4pt;
    mso-border-insideh:.5pt solid windowtext;mso-border-insidev:.5pt solid windowtext\'>
    <tr style=\'mso-yfti-irow:0;mso-yfti-firstrow:yes;height:57.1pt\'>
    <td width=47 style=\'width:35.25pt;border:solid windowtext 1.0pt;mso-border-alt:
    solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:57.1pt\'>
    <p class=MsoNormal align=center style=\'margin-bottom:0cm;margin-bottom:.0001pt;
    text-align:center\'><b><span Times \'>№ п/п<o:p></o:p></b></p>
    </td>
    </span>
    <td width=253 style=\'width:189.75pt;border:solid windowtext 1.0pt;border-left:
    none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
    padding:0cm 5.4pt 0cm 5.4pt;height:57.1pt\'>
    <p class=MsoNormal align=center style=\'margin-bottom:0cm;margin-bottom:.0001pt;
    text-align:center\'><b>Наименование продукции<o:p></o:p></b></p>
    </td>
    <td width=50 style=\'width:37.75pt;border:solid windowtext 1.0pt;border-left:
    none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
    padding:0cm 5.4pt 0cm 5.4pt;height:57.1pt\'>
    <p class=MsoNormal align=center style=\'margin-bottom:0cm;margin-bottom:.0001pt;
    text-align:center\'><b>Кол-во<o:p></o:p></b></p>
    </td>
    <td width=104 style=\'width:77.95pt;border:solid windowtext 1.0pt;border-left:
    none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
    padding:0cm 5.4pt 0cm 5.4pt;height:57.1pt\'>
    <p class=MsoNormal align=center style=\'margin-bottom:0cm;margin-bottom:.0001pt;
    text-align:center\'><b>Цена за единицу,<o:p></o:p></b></p>
    <p class=MsoNormal align=center style=\'margin-bottom:0cm;margin-bottom:.0001pt;
    text-align:center\'><b>руб.<o:p></o:p></b></p>
    </td>
    <td width=109 style=\'width:82.1pt;border:solid windowtext 1.0pt;border-left:
    none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
    padding:0cm 5.4pt 0cm 5.4pt;height:57.1pt\'>
    <p class=MsoNormal align=center style=\'margin-bottom:0cm;margin-bottom:.0001pt;
    text-align:center\'><b>Сумма, руб.<o:p></o:p></b></p>
    </td>
    <td width=96 style=\'width:71.65pt;border:solid windowtext 1.0pt;border-left:
    none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
    padding:0cm 5.4pt 0cm 5.4pt;height:57.1pt\'>
    <p class=MsoNormal align=center style=\'margin-bottom:0cm;margin-bottom:.0001pt;
    text-align:center\'><b>Примечание<o:p></o:p></b></p>
    </td>
    </tr>
    </span>


    ';
    $er = 1;
    for($ii = 0; $ii < $_POST["count"]; $ii++)
    {
        $WORD.='<tr style=\'mso-yfti-irow:1;mso-yfti-lastrow:yes;height:46.75pt\'>
        
        <td width=47 nowrap style=\'width:35.25pt;border:solid windowtext 1.0pt;
        border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
        padding:0cm 5.4pt 0cm 5.4pt;height:46.75pt\'>
        <p class=MsoNormal align=center style=\'margin-bottom:0cm;margin-bottom:.0001pt;
        text-align:center\'><b><span Times \'>'.$er.'<o:p></o:p></b></p>
        </td>
        
        </span>
        
        <td width=253 style=\'width:189.75pt;border-top:none;border-left:none;
        border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
        mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
        mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:46.75pt\'>
        <p class=MsoNormal align=center style=\'margin-bottom:0cm;margin-bottom:.0001pt;
        text-align:center\'>'.$rr[$ii]["item"].'<o:p></o:p></p>
        </td>
        
        <td width=50 nowrap style=\'width:37.75pt;border-top:none;border-left:none;
        border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
        mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
        mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:46.75pt\'>
        <p class=MsoNormal align=center style=\'margin-bottom:0cm;margin-bottom:.0001pt;
        text-align:center\'>'.$rr[$ii]['counts'].'<o:p></o:p></p>
        </td>
        
        <td width=104 nowrap style=\'width:77.95pt;border-top:none;border-left:none;
        border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
        mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
        mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:46.75pt\'>
        <p class=MsoNormal align=center style=\'margin-bottom:0cm;margin-bottom:.0001pt;
        text-align:center\'>'.$rr[$ii]['price'].' <o:p></o:p></p> 
        </td>
        
        <td width=109 style=\'width:82.1pt;border-top:none;border-left:none;
        border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
        mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
        mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:46.75pt\'>
        <p class=MsoNormal align=center style=\'margin-bottom:0cm;margin-bottom:.0001pt;
        text-align:center\'>'.$rr[$ii]['total_price'].'<o:p></o:p></p>
        </td>
        
        <td width=96 style=\'width:71.65pt;border-top:none;border-left:none;
        border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
        mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
        mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:46.75pt\'>
        <p class=MsoNormal align=center style=\'margin-bottom:0cm;margin-bottom:.0001pt;
        text-align:center\'><span Times \'><o:p>&nbsp;</o:p></p>
        </span></td>
        </tr>'; 
        $er++;
    }

    $WORD.='</table>
    
    <p class=MsoNormal style=\'margin-bottom:0cm;margin-bottom:.0001pt;text-align:
    justify\'><o:p>&nbsp;</o:p></p>
    
    <p class=MsoNormal style=\'margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
    margin-left:21.3pt;margin-bottom:.0001pt;text-align:justify;text-indent:0cm;
    line-height:normal;mso-list:l0 level1 lfo2\'><span Times \'><![if !supportLists]><span
    style=\'mso-fareast-font-family:Calibri;mso-bidi-font-family:Calibri\'><span
    style=\'mso-list:Ignore\'>1.<span style=\'font:7.0pt "Times New Roman"\'>&nbsp;&nbsp;&nbsp;
    </span></span></span><![endif]>Продукция поставляется на следующих условиях оплаты:
    - 70% предоплата, - 30% по факту готовности Товара к отгрузке.<o:p></o:p></p>
    
    </span>
    
    <p class=MsoNormal style=\'margin:0cm;margin-bottom:.0001pt;text-align:justify;
    text-indent:21.3pt;line-height:normal;mso-list:l0 level1 lfo2\'><span Times \'><![if !supportLists]><span
    style=\'mso-fareast-font-family:Calibri;mso-bidi-font-family:Calibri\'><span
    style=\'mso-list:Ignore\'>2.<span style=\'font:7.0pt "Times New Roman"\'>&nbsp;&nbsp;&nbsp;
    </span></span></span><![endif]>Срок отгрузки продукции составляет до 45 рабочих
    дней и исчисляется с даты поступления денежных средств на расчетный счет
    Поставщика.<span style=\'mso-spacerun:yes\'>  </span>При наличии продукции на
    складе возможна досрочная поставка. <span
    style=\'mso-spacerun:yes\'> </span>Точную дату изготовления и отгрузки узнавайте
    по выше указанным контактам.<o:p></o:p></p>
    
    </span>
    
    <p class=MsoNormal style=\'margin:0cm;margin-bottom:.0001pt;text-align:justify;
    text-indent:21.3pt;line-height:normal;mso-list:l0 level1 lfo2\'><span Times \'><![if !supportLists]><span
    style=\'mso-fareast-font-family:Calibri;mso-bidi-font-family:Calibri\'><span
    style=\'mso-list:Ignore\'>3.<span style=\'font:7.0pt "Times New Roman"\'>&nbsp;&nbsp;&nbsp;
    </span></span></span><![endif]>Цена указана с НДС 0%, без учета транспортных
    расходов, со склада Поставщика <o:p></o:p></p>
    
    </span>
    
    <p class=MsoNormal style=\'margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
    margin-left:21.3pt;margin-bottom:.0001pt;text-align:justify\'><span Times \'>(г.
    Орехово-Зуево, Московская область).<o:p></o:p></p>
    
    </span>
    
    <p class=MsoNormal style=\'margin:0cm;margin-bottom:.0001pt;text-align:justify;
    text-indent:21.3pt;line-height:normal;mso-list:l0 level1 lfo2\'><span Times \'><![if !supportLists]><span
    style=\'mso-fareast-font-family:Calibri;mso-bidi-font-family:Calibri\'><span
    style=\'mso-list:Ignore\'>4.<span style=\'font:7.0pt "Times New Roman"\'>&nbsp;&nbsp;&nbsp;
    </span></span></span><![endif]>Сертификат происхождения, сертификат качества
    получаем при отправке товара.<o:p></o:p></p>
    
    </span>
    
    <p class=MsoNormal style=\'margin:0cm;margin-bottom:.0001pt;text-align:justify;
    text-indent:21.3pt;line-height:normal;mso-list:l0 level1 lfo2\'><span Times \'><![if !supportLists]><span
    style=\'mso-fareast-font-family:Calibri;mso-bidi-font-family:Calibri\'><span
    style=\'mso-list:Ignore\'>5.<span style=\'font:7.0pt "Times New Roman"\'>&nbsp;&nbsp;&nbsp;
    </span></span></span><![endif]>Срок изготовления и получения всех документов до
    45 рабочих дней.<o:p></o:p></p>
    
    </span>
    
    <p class=MsoNormal style=\'margin:0cm;margin-bottom:.0001pt;text-align:justify;
    text-indent:21.3pt;line-height:normal;mso-list:l0 level1 lfo2\'><span Times \'><![if !supportLists]><span
    style=\'mso-fareast-font-family:Calibri;mso-bidi-font-family:Calibri\'><span
    style=\'mso-list:Ignore\'>6.<span style=\'font:7.0pt "Times New Roman"\'>&nbsp;&nbsp;&nbsp;
    </span></span></span><![endif]>Все аппараты поставляется в картонных коробках.<o:p></o:p></p>
    
    </span>
    
    <p class=MsoNormal style=\'margin:0cm;margin-bottom:.0001pt;text-align:justify;
    text-indent:21.3pt;line-height:normal;mso-list:l0 level1 lfo2\'><span Times \'><![if !supportLists]><span
    style=\'mso-fareast-font-family:Calibri;mso-bidi-font-family:Calibri\'><span
    style=\'mso-list:Ignore\'>7.<span style=\'font:7.0pt "Times New Roman"\'>&nbsp;&nbsp;&nbsp;
    </span></span></span><![endif]>Услуги транспортировки заказывает и оплачивает
    Заказчик. <o:p></o:p></p>
    
    </span>
    
    <p class=MsoNormal style=\'margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
    margin-left:35.45pt;margin-bottom:.0001pt;text-align:justify;text-indent:-14.15pt;
    line-height:normal;mso-list:l0 level1 lfo2\'><span Times \'><![if !supportLists]><span
    style=\'mso-fareast-font-family:Calibri;mso-bidi-font-family:Calibri\'><span
    style=\'mso-list:Ignore\'>8.<span style=\'font:7.0pt "Times New Roman"\'>&nbsp;&nbsp;&nbsp;
    </span></span></span><![endif]>Данное коммерческое предложение действительно до
    '.$date2.' года.<o:p></o:p></p>
    
    </span>
    
    <p class=MsoNormal style=\'margin-bottom:0cm;margin-bottom:.0001pt;text-align:
    justify\'><span Times \'><o:p>&nbsp;</o:p></p>
    
    </span>
    
    <p class=MsoNormal style=\'margin-bottom:0cm;margin-bottom:.0001pt;text-align:
    justify\'><span Times \'>Надеемся на стабильные партнерские отношения и ждем Ваши
    заказы.<o:p></o:p></p>
    
    </span>
    
    <p class=MsoNormal style=\'margin-bottom:0cm;margin-bottom:.0001pt;text-align:
    justify\'><span Times \'><o:p>&nbsp;</o:p></p>
    
    </span>
    
    <p class=MsoNormal style=\'margin-bottom:0cm;margin-bottom:.0001pt;text-align:
    justify;line-height:normal\'><span Times \'><o:p>&nbsp;</o:p></p>
    
    </span>
    
    <p class=MsoNormal style=\'margin-bottom:0cm;margin-bottom:.0001pt;text-align:
    justify;line-height:normal\'><span Times \'>Генеральный директор<o:p></o:p></p>
    
    </span>
    
    <p class=MsoNormal style=\'margin-bottom:0cm;margin-bottom:.0001pt;text-align:
    justify;line-height:normal\'><span Times \'>ООО «<span class=SpellE><span
    class=GramE>Глюкауф</span></span><span class=GramE>»<span
    style=\'mso-spacerun:yes\'>   </span></span><span
    style=\'mso-spacerun:yes\'>                                                                 </span><span
    style=\'mso-spacerun:yes\'>                       </span>Н.А. Лихачева <span
    style=\'mso-ansi-language:EN-US\'><span style=\'mso-spacerun:yes\'> </span><span
    lang=EN-US><o:p></o:p></span></span></p>
    
    <p class=MsoNormal style=\'margin-bottom:0cm;margin-bottom:.0001pt;text-align:
    justify;line-height:normal\'><o:p>&nbsp;</o:p></p>
    
    </span>
    
    <p class=MsoNormal align=center style=\'margin-bottom:0cm;margin-bottom:.0001pt;
    text-align:center;line-height:normal\'><span Times \'><span
    style=\'mso-spacerun:yes\'> </span><o:p></o:p></p>
    
    </span></div>
    
    </body>
    
    </html>
    ';


    $fp = fopen ('glucauf offer '.date('H-i-s d-m-Y').'.doc', 'w');
    fwrite($fp,$WORD);
    fclose($fp); 

    /* Email Detials */
  $mail_to = htmlentities(trim($_POST['email']));
  $from_mail = "medvedev.alexandr88@yandex.ru";
  $from_name = "Лихачева Наталья";
  $reply_to = "medvedev.alexandr88@yandex.ru";
  $subject = "Коммерческое предложение от ООО 'Глюкауф'";
  $message = htmlentities(trim($_POST['name'])).', спасибо что выбрали нашу компанию!<br>Примите наше коммерческое предлоежние прикрепленное снизу данного письма.<br>По любым вопросам обращайтесь по номеру телефона: +7(926)588-41-31<br><br>____________________________________________<br>С уважением, генеральный директор ООО "Глюкауф"<br>Лихачева Наталья Александровна';
 
/* Attachment File */ 
  $file_name = $fp;
  $path = "/";
    
  $file = $path.$file_name;
  $file_size = filesize($file);
  $handle = fopen($file, "r");
  $content = fread($handle, $file_size);
  fclose($handle);
  $content = chunk_split(base64_encode($content));
   
/* Set the email header */ 
  $boundary = md5(uniqid(time()));
   
  // Email header
  $header = "From: ".$from_name." <".$from_mail.">".PHP_EOL;
  $header .= "Reply-To: ".$reply_to.PHP_EOL;
  $header .= "MIME-Version: 1.0".PHP_EOL;
   
  // Multipart wraps the Email Content and Attachment
  $header .= "Content-Type: multipart/mixed; boundary=\"".$boundary."\"".PHP_EOL;
  $header .= "This is a multi-part message in MIME format.".PHP_EOL;
  $header .= "--".$boundary.PHP_EOL;
   
  // Email content
  // Content-type can be text/plain or text/html
  $header .= "Content-type:text/plain; charset=iso-8859-1".PHP_EOL;
  $header .= "Content-Transfer-Encoding: 7bit".PHP_EOL.PHP_EOL;
  $header .= "$message".PHP_EOL;
  $header .= "--".$boundary.PHP_EOL;
   
  // Attachment
  // Edit content type for different file extensions
  $header .= "Content-Type: application/xml; name=\"".$file_name."\"".PHP_EOL;
  $header .= "Content-Transfer-Encoding: base64".PHP_EOL;
  $header .= "Content-Disposition: attachment; filename=\"".$file_name."\"".PHP_EOL.PHP_EOL;
  $header .= $content.PHP_EOL;
  $header .= "--".$boundary."--"; 

  mail($mail_to, $subject, "", $header);

  $to = 'medvedev.alexandr88@yandex.ru'; //Почта получателя, через запятую можно указать сколько угодно адресов
  $subject = 'Коммерческое предложение от ООО "ГЛЮКАУФ"'; //Загаловок сообщения
  $message = '
          <html>
              <head>
                  <title>'.$subject.'</title>
              </head>
              <body>
                  <p>Имя: '.htmlentities(trim($_POST['name'])).'</p>
                  <p>Телефон: '.htmlentities(trim($_POST['phone'])).'</p>  
                  <p>Email: '.htmlentities(trim($_POST['email'])).'</p>    
                  <p>ИНН: '.htmlentities(trim($_POST['inn'])).'</p> 
                  <br>
                  <p>Пожелания, комментарии: '.htmlentities(trim($_POST['text'])).'</p>  
                  <br>   
                  <p>Банковские реквизиты: '.htmlentities(trim($_POST['bank'])).'</p>     
              </body>
          </html>';  
  $headers  = "Content-type: text/html; charset=utf-8 \r\n";  
  $headers .= "From: Отправитель <info@glucauf.ru>\r\n";  
  mail($to, $subject, $message, $headers);  
}

?>