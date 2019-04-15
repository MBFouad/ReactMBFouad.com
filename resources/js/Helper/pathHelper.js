/**
 * Created by mfouad on 04/04/19.
 */
const pathHelper = {

    getSliderImage: (img) => {
        return img;
        img ='/uploads/slider/'+img;
        var http = new XMLHttpRequest();

        http.open('HEAD', img, false);
        http.send();

        return http.status == 404 ? '/images/shadow-img.png' : img;
    },
    getProjectImage: (img) => {
        return img;
        img ='/uploads/project/'+img;
        var http = new XMLHttpRequest();

        http.open('HEAD', img, false);
        http.send();

        return http.status == 404 ? '/images/clogo1.png' : img;
    }

}


export  default pathHelper;