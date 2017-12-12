/**
 * Created by Fader Azevedo on 6/14/2017.
 */

var control=0;
var pastaeFile="";
// function apagarFoto() {
//     if(pastaeFile !== ""){
//         $.ajax({
//             url:'../controller/deletePic.php',
//             data: {'file': pastaeFile}
//         });
//     }
// }

// $("#openCam").click(function () {
//     // apagarFoto();
//     var options = {
//         shutter_ogg_url: "jpeg_camera/shutter.ogg",
//         shutter_mp3_url: "jpeg_camera/shutter.mp3",
//         swf_url: "jpeg_camera/jpeg_camera.swf"
//     };
//     document.getElementById("foto").value="";
//     var camera = new JpegCamera("#camera", options);
//
//     $('#takePic').click(function(){
//         var snapshot = camera.capture();
//         snapshot.show();
//         // snapshot.upload({api_url: "../controller/actionCamera.php"}).done(function(pastaFoto) {
//         //     pastaeFile=pastaFoto;
//         //     control =1;
//         // })
//     });
// });

// var oldCam = $("#camera").html();
// $("#foto").change(function () {
//     apagarFoto();
// //            $("#camera").html(oldCam);
//     control = 0;
//     pastaeFile = "";
// });

//
// $("#butSendPic").click(function () {
//     if (control === 0){
//         // mandar();
//         // mand
//     }else{
//         /*Leva o nomde da foto quando usa camera*/
//         document.getElementById("fotoFinal").src = pastaeFile;
//         var ary = pastaeFile.split("/");
//         document.getElementById("noPik").value = ary[ary.length - 1];
//     }
// })