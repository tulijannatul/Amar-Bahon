<?php
function parseIp6(str)
{
  //init
  var ar=new Array;
  for(var i=0;i<8;i++)ar[i]=0;
  //check for trivial IPs
  if(str=="::")return ar;
  //parse
  var sar=str.split(':');
  var slen=sar.length;
  if(slen>8)slen=8;
  var j=0;
  for(var i=0;i<slen;i++){
    //this is a "::", switch to end-run mode
    if(i && sar[i]==""){j=9-slen+i;continue;}
    ar[j]=parseInt("0x0"+sar[i]);
    j++;
  }

  return ar;
}
function ipcnvfrom6(ip6)
{
  var ip6=parseIp6(ip6);
  var ip4=(ip6[6]>>8)+"."+(ip6[6]&0xff)+"."+(ip6[7]>>8)+"."+(ip6[7]&0xff);
  return ip4;
}

echo ipcnvfrom6("::1");

?>
