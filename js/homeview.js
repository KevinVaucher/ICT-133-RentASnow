/*
Auteur : Kevin Vaucher
Date : 10.01.2020
Description : Projet Rent A Snow ICT-133
Version : 1.0
*/

function startCamera() {
    $('#camera_wrap').camera({
        fx: 'scrollLeft',
        time: 2000,
        loader: 'none',
        playPause: false,
        navigation: true,
        height: '35%',
        pagination: true
    });
}

$(document).ready(function () {
    startCamera()
});
