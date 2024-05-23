
Leaflet.MapPaint
================

![Leaflet.MapPaint demo image](demo.png)

Bitmap painting for [Leaflet](http://leafletjs.com).

 * Designed for touch device
  * Works fine with an old mouse
 * 15 different colors!
 * Felt, crayon, procedural pencil and fancy/ugly patterns

__[Demo](http://sintef-9012.github.io/Leaflet.MapPaint/)__

### Requirements

 * Tested with Leaflet 0.7
 * A HTML5 browser supporting canvas is required
  * Tested with Safari iOS8, Firefox 33, Chrome 38 and Internet Explorer 11

### Installation

[Download the archive](https://github.com/SINTEF-9012/MapPaint/archive/master.zip) or use bower :

```
bower install leaflet-mappaint
```

You need to include the JavaScript file and the CSS file. Feel free to improve the CSS file.

### Usage

```javascript
leafletMap.MapPaint.enable();
...
leafletMap.MapPaint.disable();
```

You can also use the control switch :
```javascript
leafletMap.addControl(new MapPaint.SwitchControl());
```

### Saving

By default the drawing is added to the map as a [L.ImageOverlay](http://leafletjs.com/reference.html#imageoverlay). You can setup a different save method :

```javascript
leafletMap.MapPaint.saveMethod = function(image, bounds) {
}
```
__image__ is a PNG file as a base64 string

Example: `"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAsMAAAIHCAYAAAB69VHgAAAgAElEQ…Gmc9yN5Rv"`

__bounds__ represents the [L.LatLngBounds](http://leafletjs.com/reference.html#latlngbounds) of the drawing.

### Acknowledgements

This library is developed in context of the [BRIDGE](http://www.bridgeproject.eu/en) project.

The icons are from the [material design icons](https://github.com/google/material-design-icons) project.

### Licence

The source code of this library is licenced under the MIT License.



# 📖 เอกสารประกอบการสอน (PDF)

## 🔏 Blockchain & Smart Contract
- [Blockchain เบื้องต้น](https://mega.nz/folder/rGZUjTiA#md0UpWEQLdYUVqljFn6YSQ)
- [Smart Contract & Solidity เบื้องต้น](https://mega.nz/folder/KCgmXL7D#6P0MWGJyVUU8hxUgXUEbFw)
## 💻 Programming
- [เขียนโปรแกรมภาษา Java](https://mega.nz/folder/zHIUDRTZ#yg3-xa0c4VrPgbOw7zVA7g)
- [เขียนโปรแกรมภาษา C#](https://mega.nz/folder/rK4UxK5b#Hi3GWeWo7V_uLoJYsZ8UQg)
- [เขียนโปรแกรมภาษา C++](https://mega.nz/folder/3S4AWTpT#nmP9fpETvcCNU_28ZPC2ew)
- [เขียนโปรแกรมเชิงวัตถุด้วยภาษา Python](https://mega.nz/folder/fbRywLIZ#HSFP9Fy5hjRXodbESPLiVg)
- [เขียนโปรแกรมเชิงวัตถุด้วยภาษา Java](https://mega.nz/file/CDIGTTTL#fPgHihDjQSQPODsA1oITkvSBwt3Xw5WDZtZ8ncxfygs)
- [เขียนโปรแกรมภาษา Go](https://mega.nz/file/SHpS0KCC#7IH4_QGBrHmblf1kmJuIKfQ5NZnxct5DL2QSKxbfug8)
## 🐱 Web Development (Front-end)
- [HTML5](https://mega.nz/file/eSRWiL4J#ZO_pjA0xXaS2EqAdAC3OPZ9Wm15KZQpi2lcDGCDN5ZQ)
- [CSS3](https://mega.nz/file/uK5kEJBC#J4YMa5Ckz7z9t4oJnR4za9l4J790avqCXFVu8Q-RjG4)
- [JavaScript](https://mega.nz/file/eKZA0ZgC#vYs6Dy_LeWYCxXUG9MIDnE3I52hlwFuv20Ahqr9QZI0)
- [JavaScript ES6 สำหรับ React](https://mega.nz/file/mbgSVboR#XDIS_jTVqrV8PUVpE4-wsLvaVJOrieI35C6h53QqpRI)
- [React](https://mega.nz/folder/PHhUkDRZ#GHE_nTCilAKghO0OXeeWUQ)
- [Vue.js](https://mega.nz/folder/aTAHxYiD#3JlaJVBJilhhYn9-GXEPYw)
- [Bootstrap 5](https://mega.nz/folder/bahSyDRL#Cen2eE_96Y31k3OmMbGPzA)
- [Tailwind CSS](https://mega.nz/folder/6PZUCZLD#g_RDAiywyEHt3QOnSS-CUg)
- [TypeScript (JavaScript With Syntax For Types)](https://mega.nz/folder/rGAylJKb#wEPf3Qhzm6IrtsJesGIDTQ)

## 🛕 Web Development (Back-end)
- [Node.js](https://mega.nz/folder/KXQVjSqC#fKgNdON_mRllaDzAQC1kTA)
- [Laravel Framework 8.x](https://mega.nz/folder/PK5TlCKT#LsJ8bHUtrKl8j109EGcCmQ)
- [PHP เบื้องต้น](https://mega.nz/folder/LCJyCJyZ#rhcwWkqww8Zcx85KAySVfw)
## 👒 Database
- [MongoDB](https://mega.nz/folder/yK4kzQgA#ssed6-g1Tc7kC5idRysXaQ)
## ⚔ Game Development
- [Unity 3D & 2D](https://mega.nz/folder/PTJ32aIQ#J3f3iW-y-nW3UmG9UgnmBg)
- [Unreal Engine 5](https://mega.nz/folder/XO5WhYwL#_rTkDn0h1QBUc8pGiWWb3g)
## 📱 Mobile Development
- [Flutter & Dart](https://mega.nz/folder/aWBEzbSA#Rp76Vu3nEcqP8qn9TPa5Og)
## 🏄 Data Structure & Algorithm
- [โครงสร้างข้อมูลและอัลกอริทึมด้วยภาษา Java](https://mega.nz/folder/mLg2zC4T#1ZGWeyio1ah_WpAunQzHYQ)
## 🎯 Data Science & Machine Learning (Python)
- [Numpy](https://mega.nz/file/eXQWAJSa#CQfeknZs-dVs__M-QcxWKgDlIO4-X0VYdehbGezxwO4)
- [Pandas](https://mega.nz/file/veYEVBRL#EAF15zjUlONsS2SkwhjGH9Fs7LW74lhbNE65EkRWb7I)
- [Matplotlib](https://mega.nz/file/2aJ2FbIQ#88eI_YB7GqsV_scDZmZ-bsn4oNKDK6FKydR8IbhfDvU)
## 🏜 Image Processing (Python)
- [OpenCV](https://mega.nz/folder/GXwiVbrL#mryk-YXYBNdRxUj9IJKXLg)

## 🤖 Git & Firebase
- [Git & GitHub](https://mega.nz/folder/TGAmDYCQ#Ect7rgNkLE_-VfzZutnmGQ)
- [Firebase](https://mega.nz/folder/vfQxXT5Z#P5sE2-QU1VIT0l1_SP_Jcg)

## 💖 ช่องทางการสนับสนุน
- [🎓 คอร์สเรียนบน Udemy](https://www.udemy.com/user/kong-ruksiam/)
- [🕵 สมัครเป็นสมาชิกในช่องยูทูป](https://www.youtube.com/c/KongRuksiamOfficial/join)
- [🛒 ซื้อของผ่าน Shopee](https://shope.ee/3plB9kVnPd)
- [🧥 ร้านเสื้อโค้ท](https://www.instagram.com/coat2namsshop/)

