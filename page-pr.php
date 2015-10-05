<?php wp_head(); ?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>





<title>Solar Stereo</title>
<style type="text/css">

</style>
</head>

<body>
<!-- BEGINS: AUTO-GENERATED MUSES RADIO PLAYER CODE -->
<script type="text/javascript" src="http://hosted.musesradioplayer.com/mrp.js"></script>
<!-- ENDS: AUTO-GENERATED MUSES RADIO PLAYER CODE -->
<table width="619" border="0" align="center">
  <tr>
    <td width="324" height="16" align="center"><script type="text/javascript" src="http://server.plugstreaming.com/system/misc/jwplayer6/jwplayer.js"></script>
<div align= "center" style="width: 380px; height: 40px;" id="MediaPlayerOverview"></div>
<script type="text/javascript">
  jwplayer('MediaPlayerOverview').setup({
	  
sources: [{
   file: "rtmp://server.plugstreaming.com:1935/solarstereo/solarstereo"
  },{
   file: "http://server.plugstreaming.com:1935/solarstereo/solarstereo/playlist.m3u8"
  }],
rtmp: {
  bufferlength: 1,
},

'autostart': 'false',
'width': '380',
'height': '40',
fallback: false
});
	  
</script></td>
  </tr>
</table>

<table width="619" border="0" align="center">
  <tr>
    <td width="324" height="16" align="center">
<div align= "center" style="width: 380px; height: 40px;" id="melaofm"></div>
<script type="text/javascript">
  jwplayer('melaofm').setup({
	  
sources: [{
   file: "rtmp://server.plugstreaming.com:1935/melaofm/melaofm"
  },{
   file: "http://server.plugstreaming.com:1935/melaofm/melaofm/playlist.m3u8"
  }],
rtmp: {
  bufferlength: 1,
},

'autostart': 'false',
'width': '380',
'height': '40',
fallback: false
});
	  
</script></td>
  </tr>
</table>


</body>
</html>

<?php wp_footer(); ?>

