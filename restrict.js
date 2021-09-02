/* 
    This file is part of PHPCaptcha.

    PHPCaptcha is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    PHPCaptcha is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with PHPCaptcha.  If not, see <https://www.gnu.org/licenses/>.
*/

var isCtrl = false;
document.onkeyup=function(e)
{
    if(e.which == 17)
        isCtrl=false;
}
document.onkeydown=function(e)
{
    if(e.which == 123)
        isCtrl=true;
    if (((e.which == 85) || (e.which == 65) || (e.which == 88) || (e.which == 67) || (e.which == 86) || (e.which == 2) || (e.which == 3) || (e.which == 123) || (e.which == 83)) && isCtrl == true)
    {
        alert('For Security Purposes, This function is disabled\n-pines');
        return false;
    }
}
// right click code
var isNS = (navigator.appName == "Netscape") ? 1 : 0;
if(navigator.appName == "Netscape") document.captureEvents(Event.MOUSEDOWN||Event.MOUSEUP);
function mischandler(){
    alert('For Security Purposes, Right Click is disabled\n-pines');
    return false;
}
function mousehandler(e){
    var myevent = (isNS) ? e : event;
    var eventbutton = (isNS) ? myevent.which : myevent.button;
    if((eventbutton==2)||(eventbutton==3)) return false;
}
document.oncontextmenu = mischandler;
document.onmousedown = mousehandler;
document.onmouseup = mousehandler;

function killCopy(e){
    return false
}
function reEnable(){
    return true
}
document.onselectstart=new Function ("return false")
if (window.sidebar){
    document.onmousedown=killCopy
    document.onclick=reEnable
}
