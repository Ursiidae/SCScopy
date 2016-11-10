/**
 * Created by Blaise on 11/9/16
 * contributors: Blaise
 */

var activeL='#home';

function swapActive(active){
    $(activeL).removeClass("active");
    $(active).addClass("active");
    activeL = active;
}

