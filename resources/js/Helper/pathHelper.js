/**
 * Created by mfouad on 04/04/19.
 */
const pathHelper = {

    getSliderImage: (img) => {
        img ='/uploads/slider/'+img;
        var http = new XMLHttpRequest();

        http.open('HEAD', img, false);
        http.send();

        return http.status == 404 ? '/images/shadow-img.png' : img;
    }

}


export  default pathHelper;