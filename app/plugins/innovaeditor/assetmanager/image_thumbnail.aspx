<%@ Page Language="VB" %>
<%@ Import Namespace="System.Drawing"  %>
<%@ Import Namespace="System.Drawing.Imaging"  %>
<%@ Import Namespace="System.Drawing.Drawing2D"  %>

<script runat="server">
    Private Sub Page_Load(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles MyBase.Load
        Dim nSizeThumb As Integer
        Dim nNewWidth As Integer
        Dim nNewHeight As Integer
        Dim imgOri As System.Drawing.Image
        Dim nJpegQuality As Integer
        Dim sFixWidth As String
        nSizeThumb = Request.QueryString("Size")
        nJpegQuality = Request.QueryString("Quality")

        If Request.QueryString("Quality") = "" Then
            nJpegQuality = 90
        End If
        sFixWidth = Request.QueryString("fixw")
    
        Dim sFile As String = Server.MapPath(Request.QueryString("file"))

        imgOri = System.Drawing.Image.FromFile(sFile)
        nNewWidth = imgOri.Size.Width
        nNewHeight = imgOri.Size.Height
        If nNewWidth < nSizeThumb And nNewHeight < nSizeThumb Then
            'noop
        ElseIf nNewWidth > nNewHeight Then
            nNewHeight = nNewHeight * (nSizeThumb / nNewWidth)
            nNewWidth = nSizeThumb
        ElseIf nNewWidth < nNewHeight Then
            nNewWidth = nNewWidth * (nSizeThumb / nNewHeight)
            nNewHeight = nSizeThumb
        Else
            nNewWidth = nSizeThumb
            nNewHeight = nSizeThumb
        End If
        
        If sFixWidth = "Y" Then
            nNewHeight = (nNewHeight * nSizeThumb) / nNewWidth
            nNewWidth = nSizeThumb
        End If

        Dim imgThumb As System.Drawing.Image = New Bitmap(nNewWidth, nNewHeight)
        Dim gr As Graphics = Graphics.FromImage(imgThumb)
        gr.InterpolationMode = InterpolationMode.HighQualityBicubic
        gr.SmoothingMode = SmoothingMode.HighQuality
        gr.PixelOffsetMode = PixelOffsetMode.HighQuality
        gr.CompositingQuality = CompositingQuality.HighQuality
        gr.DrawImage(imgOri, 0, 0, nNewWidth, nNewHeight)
    
        Dim info() As ImageCodecInfo = ImageCodecInfo.GetImageEncoders()
        Dim ePars As EncoderParameters = New EncoderParameters(1)
        ePars.Param(0) = New EncoderParameter(Imaging.Encoder.Quality, nJpegQuality)
        Response.ContentType = "image/jpeg"
        imgThumb.Save(Response.OutputStream, info(1), ePars)
        imgThumb.Dispose()
        imgOri.Dispose()
    End Sub
</script>