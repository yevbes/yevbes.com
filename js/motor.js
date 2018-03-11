$(document).ready(function () {
    jQuery(function ($) {
        $('#accordion-des li').hover(function () {
            $(this).find('ul').stop(true, true).slideToggle()
        }).find('ul').hide()
    });

    if (!$('#myCanvas').tagcanvas({
            textColour: '#ffffff',
            outlineColour: 'rgba(255, 255, 255, 0.46)',
            reverse: true,
            depth: 0.8,
            maxSpeed: 0.05
        }, 'tags')) {
        // something went wrong, hide the canvas container DD
        $('#myCanvasContainer').hide();
    }

    // Slider
    let list = $(".item-carousel");
    let prev = $("#arrow-left-carousel");
    let next = $("#arrow-right-carousel");
    let container = $(".container-slider");

    let slider = new Slider(list,prev,next,container);
    //slider.printResult();
});

class Slider {
    constructor(list,btnPrev,btnNext,container) {
        this.list = list;
        this.btnPrev = btnPrev;
        this.btnNext = btnNext;
        this.container = container;
        $(this.btnPrev).click(this.pressedPrev.bind(this));
        $(this.btnNext).click(this.pressedNext.bind(this));
    }

    getList(){
        return this.list;
    }

    getListLength(){
        return this.list.length;
    }

    pressedPrev(){
        let list = this.getList();
        //console.log(this.getListLength());
        let activeItems = $(list).not(".hide-item");
        //let itemPos = parseInt(items.first().attr('id').substr(5));
        $(activeItems.get(0)).addClass("hide-item");
        $(list.get(3)).removeClass("hide-item");
        let elem = null, n;
        for (let i = 0; i < (n = this.getListLength()); i++) {
            if (i===0){
                elem = list[i];
               list[i] = list[i+1];
            }else if (i===n-1){
                list[i]=elem;
            }else{
                list[i] = list[i+1];
            }
        }
        this.setList(list);
        //this.printResult();
    }

    pressedNext(){

    }

    printResult(){
        const items = this.getList();
        for (let i=0; i<this.getListLength().length; i++){
            console.log($(items[i]).attr('id'));
        }
    }

    setList(list) {
        this.list = list;
    }
}


