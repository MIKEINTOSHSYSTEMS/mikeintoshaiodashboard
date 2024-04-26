<%@ Page Language="VB" %>
<%@ OutputCache Duration="1" VaryByParam="none"%>
<%@ Import Namespace="System.Data" %>
<%@ Import Namespace="System.Data.sqlClient " %>
<%@ Import Namespace="System.IO" %>
<%@ Import Namespace="System.Threading" %>
<%@ Import Namespace="System.Globalization" %>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<script runat="server">
    Private sBase As String = "/Editor/assets"
    Private bUseAbsoluteUrl As Boolean = False
    Private bAllowManage As Boolean = True
    
    Private sCurrentDirectory As String = ""

    Protected Sub Page_Load(ByVal sender As Object, ByVal e As System.EventArgs)
        
        '~~~ Localization ~~~
        Dim sCulture As String = Request.QueryString("c")
        If Not sCulture = "" Then
            Dim ci As New CultureInfo(sCulture)
            Thread.CurrentThread.CurrentCulture = ci
            Thread.CurrentThread.CurrentUICulture = ci
        End If
        idTitle.Text = GetLocalResourceObject("idTitle.Text")
        GridView1.Columns(1).HeaderText = GetLocalResourceObject("lblFileName.HeaderText")
        GridView1.Columns(2).HeaderText = GetLocalResourceObject("lblLastUpdated.HeaderText")
        GridView1.Columns(3).HeaderText = ""
        GridView1.Columns(4).HeaderText = ""
        lblSource.Text = GetLocalResourceObject("lblSource.Text")
        btnUpload.Text = GetLocalResourceObject("btnUpload.Text")
        btnClose.Text = GetLocalResourceObject("btnClose.Text")
        btnOk.Text = GetLocalResourceObject("btnOk.Text")
        lblFolder.Text = GetLocalResourceObject("lblFolder.Text")
        btnNewFolder.Text = GetLocalResourceObject("btnNewFolder.Text")
        '~~~ /Localization ~~~
        
        If Not bAllowManage Then
            panelSpecial.Visible = False
        End If
        
        '~~~ Show Files ~~~
        sCurrentDirectory = Server.MapPath(sBase) & Request.QueryString("path") '=> "C:\...\InsiteCreation\resources" & "\1"
        If Directory.Exists(sCurrentDirectory) Then
            showFiles()
        End If
        '~~~ /Show Files ~~~
        
    End Sub
    
    Protected Sub showFiles()

        Dim sResMapPath As String = Server.MapPath(sBase) '=> "C:\...\InsiteCreation\resources"

        '~~~ Breadcrumb ~~~
        Dim sQueryString As String = Request.QueryString("path")
        Dim sBreadcrumb As String = ""
        Dim item As String
        Dim slink As String = ""
        Dim count As String = 0
        Dim nLength As Integer
        If Not sQueryString = "" Then
            If Not sQueryString.IndexOf("\") = -1 Then
                nLength = sQueryString.Split("\").Length()
                For Each item In sQueryString.Split("\")
                        
                    If count = nLength - 1 Then
                        sBreadcrumb = sBreadcrumb & " \ " & item
                    ElseIf count = 0 Then
                        sBreadcrumb = sBreadcrumb & "<a href=""assetmanager.aspx?path=&c=" & Request.QueryString("c") & """>" & GetLocalResourceObject("Resources") & "</a>"
                    Else
                        slink = slink & "\" & item
                        sBreadcrumb = sBreadcrumb & " \ <a href=""assetmanager.aspx?path=" & Server.UrlEncode(slink) & "&c=" & Request.QueryString("c") & """>" & item & "</a>"
                    End If
                    count += 1
                Next
            End If
        Else
            sBreadcrumb = GetLocalResourceObject("Resources")
        End If
        lblPath.Text = sBreadcrumb.Replace("\", " \ ")
        '~~~ /Breadcrumb ~~~
            
            
        '~~~ InstallPath ~~~
        Dim sInstallPath As String 'relative
        Dim sPath As String
        Dim sRawUrl As String = Context.Request.RawUrl.ToString()
        If sRawUrl.Contains("?") Then
            sPath = sRawUrl.Split(CChar("?"))(0).ToString
        Else
            sPath = sRawUrl
        End If
        sInstallPath = sPath.Substring(0, sPath.LastIndexOf("/") + 1)
        sInstallPath = sInstallPath.Replace("assetmanager/", "") 'additional
        'sInstallPath = /InsiteCreation/
        '~~~ /InstallPath ~~~
            

        '~~~ DataTable ~~~
        Dim dt As New DataTable
        dt.Columns.Add(New DataColumn("FileName", GetType(String)))
        dt.Columns.Add(New DataColumn("FileUrl", GetType(String)))
        dt.Columns.Add(New DataColumn("LastUpdated", GetType(DateTime)))
        dt.Columns.Add(New DataColumn("Size", GetType(String)))
        dt.Columns.Add(New DataColumn("Icon", GetType(String)))
        dt.Columns.Add(New DataColumn("thumbnail", GetType(String)))
        dt.Columns.Add(New DataColumn("index", GetType(String)))
        '~~~ /DataTable ~~~
            
        With My.Computer.FileSystem

            '~~~ Create Up one Folder ~~~
            If Request.QueryString("path") <> "" Then
                Dim dr As DataRow = dt.NewRow()
                dr("FileName") = "..."
                dr("Icon") = ""
                dr("FileUrl") = "assetmanager.aspx?path=" & Server.UrlEncode(.GetParentPath(sCurrentDirectory).Substring(sResMapPath.Length))
                dt.Rows.Add(dr)
            End If
            '~~~ /Create Up one Folder ~~~ 
            
            '~~~ List Folders ~~~
            Dim cItems As ObjectModel.ReadOnlyCollection(Of String)
            cItems = .GetDirectories(sCurrentDirectory, FileIO.SearchOption.SearchTopLevelOnly)
            
            Dim sName As String
            Dim nFileLength As Double
            Dim sVirtualPath As String
            Dim i As Integer
            
            For i = 0 To cItems.Count - 1
                Dim dr As DataRow = dt.NewRow()
                sName = .GetDirectoryInfo(cItems(i)).Name.ToString
                dr("FileName") = sName
                dr("LastUpdated") = .GetDirectoryInfo(cItems(i)).LastWriteTime

                nFileLength = .GetDirectoryInfo(cItems(i)).GetFiles.Length
                If nFileLength = 0 Then
                    dr("Size") = "" '"0 " & GetLocalResourceObject("Files")
                ElseIf nFileLength = 1 Then
                    dr("Size") = "1 " & GetLocalResourceObject("File")
                Else
                    dr("Size") = nFileLength & " " & GetLocalResourceObject("Files")
                End If

                sVirtualPath = "assetmanager.aspx?path=" & Server.UrlEncode(.GetDirectoryInfo(cItems(i)).FullName.Substring(sResMapPath.Length))
                dr("Icon") = sVirtualPath
                dr("FileUrl") = sVirtualPath
                dt.Rows.Add(dr)
            Next
            '~~~ /List Folders ~~~
            
            '~~~ List Files ~~~
            cItems = .GetFiles(sCurrentDirectory, FileIO.SearchOption.SearchTopLevelOnly)
            If cItems.Count = 0 Then
                btnDelete.Visible = False
            Else
                btnDelete.Visible = True
            End If

            For i = 0 To cItems.Count - 1
                Dim dr As DataRow = dt.NewRow()
                sName = .GetFileInfo(cItems(i)).Name.ToString
                dr("FileName") = sName
                dr("LastUpdated") = .GetFileInfo(cItems(i)).LastWriteTime

                nFileLength = .GetFileInfo(cItems(i)).Length
                If nFileLength = 0 Then
                    dr("Size") = "0 KB"
                ElseIf nFileLength / 1024 < 1 Then
                    dr("Size") = "1 KB"
                Else
                    dr("Size") = FormatNumber((nFileLength / 1024), 0).ToString & " KB"
                End If

                'sResMapPath  : C:\...\InsiteCreation\resources
                Dim sResources As String = sBase
                If sCurrentDirectory.Length > sResMapPath.Length Then
                    sResources = sResources & sCurrentDirectory.Substring(sResMapPath.Length).Replace("\", "/")
                End If
                sVirtualPath = sResources & "/" & sName
                
                Dim sExt As String = cItems(i).Substring(cItems(i).LastIndexOf(".") + 1).ToLower
                If sExt = "jpeg" Or sExt = "jpg" Or sExt = "gif" Or sExt = "png" Then
                    dr("Icon") = sInstallPath & "assetmanager/image_thumbnail.aspx?file=" & sVirtualPath & "&Size=70"
                    dr("thumbnail") = sInstallPath & "assetmanager/image_thumbnail.aspx?file=" & sVirtualPath & "&Size="
                Else
                    dr("Icon") = sInstallPath & "assetmanager/images/blank.gif"
                    dr("thumbnail") = ""
                End If
                dr("index") = i
              
                dr("FileUrl") = sVirtualPath
                dt.Rows.Add(dr)
            Next
            GridView1.DataSource = dt
            GridView1.DataBind()
            '~~~ /List Files ~~~  
            
        End With
        
        btnDelete.OnClientClick = "if(_getSelection(document.getElementById('" & hidFilesToDel.ClientID & "'))){return confirm('" & GetLocalResourceObject("DeleteConfirm") & "')}else{return false}"
        btnDelete.Style.Add("margin-right", "5px")
        btnDelete2.Attributes.Add("onclick", "if(!confirm('" & GetLocalResourceObject("DeleteConfirm2") & "'))return;")
       
    End Sub
    
    Protected Sub btnUpload_Click(ByVal sender As Object, ByVal e As System.EventArgs) Handles btnUpload.Click
        With FileUpload1.PostedFile
            'File asp,cgi,pl merupakan plain/text
            'aspx dan ascx typenya application/xml
            Dim sExt As String = .FileName.Substring(.FileName.LastIndexOf(".") + 1)
            If Not (.ContentType.ToString = "application/octet-stream" Or .ContentType.ToString = "application/xml" _
                Or sExt = "cgi" Or sExt = "pl" Or sExt = "asp" Or sExt = "aspx" Or sExt = "php") Then
                FileUpload1.SaveAs(sCurrentDirectory & "\" & FileUpload1.FileName)
                lblUploadStatus.Text = ""
            Else
                lblUploadStatus.Text = GetLocalResourceObject("UploadFailed")
                'Upload failed. File type not allowed.
            End If
        End With

        showFiles()
    End Sub

    Protected Sub btnDelete_Click(ByVal sender As Object, ByVal e As System.EventArgs) Handles btnDelete.Click
        Dim Item As String
        With My.Computer.FileSystem
            For Each Item In hidFilesToDel.Value.Split("|")
                If My.Computer.FileSystem.FileExists(Server.MapPath(Item)) Then
                    File.Delete(Server.MapPath(Item))
                End If
            Next
        End With
        showFiles()
    End Sub

    Protected Sub btnNewFolder_Click(ByVal sender As Object, ByVal e As System.EventArgs)
        With My.Computer.FileSystem
            If .DirectoryExists(sCurrentDirectory & "\" & txtNewFolder.Text) Then
                lblUploadStatus.Text = GetLocalResourceObject("DirectoryExist")
            Else
                .CreateDirectory(sCurrentDirectory & "\" & txtNewFolder.Text)
            End If
        End With
        showFiles()
        txtNewFolder.Text = ""
    End Sub

    Function ShowCheckBox(ByVal sUrl As String) As String
        Dim sHTML As String
        If sUrl.Contains("?path=") Then
            'This is a Folder
            sHTML = "<img src=""../assetmanager/images/ico_folder.gif""><input name=""chkSelect"" style=""display:none"" type=""checkbox"" />"

            'Hide checkbox, krn user tdk punya role Resource Manager
            If panelSpecial.Visible = False Then sHTML = "<img src=""../assetmanager/images/ico_folder.gif"">"
        Else
            'This is a File
            sHTML = "<input name=""chkSelect"" type=""checkbox"" />"
            
            'Hide checkbox, krn user tdk punya role Resource Manager
            If panelSpecial.Visible = False Then sHTML = ""
        End If
        Return sHTML & "<input name=""hidSelect"" type=""hidden"" value=""" & sUrl & """ /> "
    End Function

    Function Preview(ByVal sIcon As String) As String
        Dim sHTML As String
        If sIcon = "" Then
            sHTML = ""
        ElseIf sIcon.Contains("?path=") Then
            'This is a Folder
            sHTML = "<a href=""#"" " & _
            "onclick=""document.getElementById('" & hidFilesToDel.ClientID & "').value ='" & sIcon & "'; " & _
            "document.getElementById('" & btnDelete2.ClientID & "').click();return false;"">" & GetLocalResourceObject("delete") & "</a>"
        Else
            'This is a File
            sHTML = "<img src=""" & sIcon & """>"
        End If
        Return sHTML
    End Function

    Function ShowLink(ByVal sUrl As String, ByVal sFileName As String, ByVal sIndex As String) As String
        Dim sHTML As String
        If sUrl.Contains("?path=") Then
            sHTML = "<a href=""" & sUrl & "&c=" & Request.QueryString("c") & """ name=""Folder"">" & sFileName & "</a>"
        Else
            sHTML = "<a href=""javascript:selectImage(" & sIndex & ");"" >" & sFileName & "</a>"
        End If
        Return sHTML
    End Function

    Protected Sub btnDelete2_Click(ByVal sender As Object, ByVal e As System.EventArgs)
        Dim Item As String = hidFilesToDel.Value
        Dim sDirectory As String = Server.MapPath(sBase) & Server.UrlDecode(Item.Substring(Item.LastIndexOf("=") + 1))
        If Directory.Exists(sDirectory) Then
            Directory.Delete(sDirectory)
        End If
        showFiles()
    End Sub
    
    Function GetFileUrl(ByVal s As String) As String
        If bUseAbsoluteUrl Then
            Return AppSrvPath() & s
        Else
            Return s
        End If
    End Function
    
    Protected Function AppSrvPath() As String
        'returns:
        ' http://localhost/ 
        ' http://localhost/apppath/
        '(Selalu ada "/" di akhir)
        Dim sPort As String = Request.ServerVariables("SERVER_PORT")
        If IsNothing(sPort) Or sPort = "80" Or sPort = "443" Then
            sPort = ""
        Else
            sPort = ":" & sPort
        End If

        Dim sProtocol As String = Request.ServerVariables("SERVER_PORT_SECURE")
        If IsNothing(sProtocol) Or sProtocol = "0" Then
            sProtocol = "http://"
        Else
            sProtocol = "https://"
        End If

        Return sProtocol & Request.ServerVariables("SERVER_NAME") & sPort
    End Function

    Protected Sub GridView1_PageIndexChanging(ByVal sender As Object, ByVal e As System.Web.UI.WebControls.GridViewPageEventArgs)
        GridView1.PageIndex = e.NewPageIndex
        showFiles()
    End Sub

</script>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<base target="_self">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head id="Head1" runat="server">
    <title id="idTitle" meta:resourcekey="idTitle" runat="server"></title>
    <style type="text/css">
        body{font-family:tahoma,verdana;font-size:8pt;color:#444444;background:#eaeaea;margin:12px}              
        td{font-family:verdana;font-size:11px;color:#555555}
        a:link{color:#777777}
        a:visited{color:#777777}
        a:hover{color:#111111}
        input{font-size:11px}
        
        .inpBtn, .inpBtnOver, .inpBtnOut {
            padding:4px 10px 4px 10px;

            margin-left:2px;

            font-size:11px;font-weight:bold;color:#000000;
            background:url('button.png') #EEEEEE;

            border-top:1px solid #DDDDDD;
            border-right:1px solid #AAAAAA;
            border-bottom:1px solid #AAAAAA;
            border-left:1px solid #DDDDDD;    

            cursor:pointer;
        }

    </style>
    <script language="javascript" type="text/javascript">
        function _getSelection(oEl)
        {
        var bReturn=false;
        var sTmp="";
        for(var i=0;i<document.getElementsByName("chkSelect").length;i++)
            {
            var oInput=document.getElementsByName("chkSelect")[i];        
            if(oInput.checked==true)
                {
                sTmp+= "|" + document.getElementsByName("hidSelect")[i].value;
                //alert(document.getElementsByName("hidSelect")[i].value)
                bReturn=true;
                }
            }
        oEl.value=sTmp.substring(1);
        return bReturn;
        }
    function showhideManager()
        {
        if(document.getElementById("divManagerContent").style.display=="none")
            {
            document.getElementById("divManagerContent").style.display="";
            document.getElementById("divManager").innerHTML="Hide Manager"            
            document.getElementById("divScroll").style.height="270px";
            document.body.style.overflow="auto";
            }
        else
            {
            document.getElementById("divManagerContent").style.display="none";
            document.getElementById("divManager").innerHTML="Show Manager"
            document.getElementById("divScroll").style.height= (270 + 91) + "px";
            document.body.style.overflow="";
            }
        }
    function selectImage(nIndex)
        {
        var s=document.getElementById("hidFileUrl"+nIndex).value;
        document.getElementById("txtURL").value=s;
        document.getElementById("hidThumbnail"+nIndex).value=document.getElementById("hidThumbnail"+nIndex).value;
        }
    function doOK()
        {
        var sURL=document.getElementById("txtURL").value;
        if(sURL=="")return;
        
        (opener?opener:openerWin).setAssetValue(sURL);
        self.close();
        }
   </script>
</head>
<body>
<form id="form1" runat="server">

<asp:Label ID="lblFolder" meta:resourcekey="lblFolder" runat="server" Text="Folder: "></asp:Label>
<asp:Label ID="lblPath" runat="server" Text=""></asp:Label>
<br /><br />

<div runat="server" id="divScroll" style="height:361px;overflow:auto;background:white;padding:0px;border-bottom:#cccccc 1px solid;">    
    <asp:GridView ID="GridView1" GridLines="None" AlternatingRowStyle-BackColor="#f6f7f8"  
    HeaderStyle-BackColor="#d6d7d8" CellPadding="7" runat="server" 
    HeaderStyle-HorizontalAlign="left" AllowPaging="True"
    AllowSorting="false" AutoGenerateColumns="False" OnPageIndexChanging="GridView1_PageIndexChanging">
    <Columns>
       <asp:TemplateField ItemStyle-VerticalAlign="Middle" HeaderText="" ItemStyle-CssClass="padding2">
        <ItemTemplate>
            <input id="hidFileUrl<%#Eval("index")%>" type="hidden" value="<%#GetFileUrl(Eval("FileUrl","")) %>" />
            <input id="hidThumbnail<%#Eval("index")%>" type="hidden" value="<%#GetFileUrl(Eval("thumbnail","")) %>" />
          <%#ShowCheckBox(Eval("FileUrl"))%>
        </ItemTemplate>
        </asp:TemplateField>
       <asp:TemplateField ItemStyle-VerticalAlign="Middle" meta:resourcekey="lblFileName"  HeaderText="File Name" HeaderStyle-Wrap="false" ItemStyle-CssClass="padding2">
        <ItemTemplate>
          <%#ShowLink(Eval("FileUrl"), Eval("FileName"), Eval("index", ""))%>
        </ItemTemplate>
        </asp:TemplateField>
        <asp:BoundField meta:resourcekey="lblLastUpdated" DataField="LastUpdated" HeaderText="Last Updated" SortExpression="LastUpdated">
           <ItemStyle VerticalAlign="Middle" Wrap="false"/>
       </asp:BoundField>
       <asp:BoundField meta:resourcekey="lblSize" DataField="Size" HeaderText="Size" SortExpression="Size">
           <ItemStyle VerticalAlign="Middle" Wrap="false" />
       </asp:BoundField>
       <asp:TemplateField ItemStyle-VerticalAlign="Middle"  meta:resourcekey="lblPreview" HeaderText="Preview">
        <ItemTemplate >
          <%#Preview(Eval("Icon"))%>
        </ItemTemplate>
        </asp:TemplateField>
    </Columns>
    </asp:GridView>
</div>

<asp:Panel ID="panelManager" runat="server">

    <asp:HiddenField ID="hidFilesToDel" runat="server" />
    
    <asp:Panel ID="panelSpecial" runat="server">
        <div id="divManager" onclick="showhideManager()" style="text-decoration:underline;cursor:pointer;text-align:left;background:#d6d7d8;padding:5px;">Show Manager</div>
        <div id="divManagerContent" style="display:none;background:#f6f7f8;padding:10px;height:70px;border:#d6d7d8 1px solid;border-top:none;">
            <table cellpadding="0" cellspacing="0">
            <tr>
                <td><asp:Button ID="btnDelete" meta:resourcekey="btnDelete" runat="server" Text="Delete selected files"  /></td>
                <td></td>            
                <td><asp:TextBox ID="txtNewFolder" runat="server"></asp:TextBox></td>
                <td><asp:Button ID="btnNewFolder" runat="server" Text="New Folder" meta:resourcekey="btnNewFolder" OnClick="btnNewFolder_Click" ValidationGroup="NewFolder" /></td>
                <td><asp:RequiredFieldValidator ID="rfv1" ControlToValidate="txtNewFolder" ValidationGroup="NewFolder" runat="server" ErrorMessage="*"></asp:RequiredFieldValidator></td>
            </tr>
            </table>    
            
            <table cellpadding="0" cellspacing="0" style="margin-top:20px">
            <tr>
                <td><asp:FileUpload ID="FileUpload1" runat="server"/></td>
                <td><asp:Button ID="btnUpload" meta:resourcekey="btnUpload" runat="server" Text="Upload File" /></td>
            </tr>
            <tr>
                <td colspan="2"><div style="height:5px"></div></td>
            </tr>
            <tr>
                <td colspan="2"><asp:Label ID="lblUploadStatus" runat="server" Text="" ForeColor="Red"></asp:Label></td>
            </tr>
            </table>  

            <input id="btnDelete2" runat="server" style="display:none" type="button" onserverclick="btnDelete2_Click" /> 
        </div>
    </asp:Panel>
    
    <table style="margin-left:5px;margin-top:12px;margin-bottom:7px">
    <tr>
    <td>
        <asp:Label ID="lblSource" meta:resourcekey="lblSource" runat="server" Text="Source"></asp:Label>
    </td><td>:</td><td><input id="txtURL" type="text" style="width:400px" /></td>
    </tr>
    </table>
    
    <br/>
    <div align="right">
    <asp:Button ID="btnClose" meta:resourcekey="btnClose" CssClass="inpBtn" runat="server" Text=" Close " OnClientClick="self.close();return false;" />
    <asp:Button ID="btnOk" meta:resourcekey="btnOk" CssClass="inpBtn" runat="server" Text="    OK    " OnClientClick="doOK();return false;" />
    </div>
</asp:Panel>  

</form>
</body>
</html>
