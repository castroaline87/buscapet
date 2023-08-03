var flexScrollerIndexBig = 1;
var flexScrollerXDown = null;
var flexScrollerYDown = null;

var FlexScroller = class 
{
    static onTouchStart(event)
    {
        flexScrollerXDown = event.touches[0].clientX;
        flexScrollerYDown = event.touches[0].clientY;
    };

    static onTouchMove(event)
    {
        if (! flexScrollerXDown || ! flexScrollerYDown) return;

        let  xUp = event.touches[0].clientX;                                    
        let  yUp = event.touches[0].clientY;
        let  xDiff = flexScrollerXDown - xUp;
        let  yDiff = flexScrollerYDown - yUp;

        if(Math.abs(xDiff) > Math.abs(yDiff)) {
            if (xDiff > 0) {
                event.currentTarget.querySelector(".flex-scroller-btn-next").click();
            } else if(xDiff < 0) {
                event.currentTarget.querySelector(".flex-scroller-btn-back").click();
            }
        }

        flexScrollerXDown = null;
        flexScrollerYDown = null;
    };

    static next(event) 
    {
        let flexScroller = event.target.parentNode;
        let flexScrollerItems = flexScroller.querySelectorAll(".flex-scroller-content > *");
        FlexScroller.scrollRight(flexScroller);

        if(flexScrollerIndexBig < (flexScrollerItems.length - 2)) {
            flexScrollerIndexBig++;
            FlexScroller.makeCardBig(flexScroller, flexScrollerIndexBig);
        }
    }

    static back(event)
    {
        let flexScroller = event.target.parentNode;
        FlexScroller.scrollLeft(flexScroller);

        if(flexScrollerIndexBig > 1) {
            flexScrollerIndexBig--;
            FlexScroller.makeCardBig(flexScroller, flexScrollerIndexBig);
        }
    }

    static scrollLeft(flexScroller)
    {
        FlexScroller.scroll(flexScroller, 'left');
    }

    static scrollRight(flexScroller)
    {
        FlexScroller.scroll(flexScroller, 'right');
    }

    static scroll(flexScroller, direction)
    {
        let flexScrollerContent = flexScroller.querySelector(".flex-scroller-content");
        let flexScrollerItem = flexScroller.querySelector(".flex-scroller-content > *:nth-child(1)");
        let marginRight = window.getComputedStyle(flexScrollerItem).marginRight;
        let gap = parseInt(window.getComputedStyle(flexScrollerContent).gap);
        let spaceBetween = !isNaN(gap) ? (gap / 2) : marginRight;

        let distance = flexScrollerItem.offsetWidth + (parseInt(spaceBetween) * 2);

        if(direction === 'left') distance = (- distance);

        flexScrollerContent.scrollBy({
            left: distance,
            behavior: 'smooth',
        });

        flexScroller.style.pointerEvents = "none";
        setTimeout(() => { flexScroller.style.pointerEvents = "auto"; }, 250);
    }

    static makeCardBig(flexScroller, cardIndex) 
    {
        let flexScrollerItems = flexScroller.querySelectorAll(".flex-scroller-content > *");

        for(let fsItem of flexScrollerItems) {
            fsItem.classList.remove("big");
        }
    
        if(flexScrollerItems.item(cardIndex)) {
            flexScrollerItems.item(cardIndex).classList.add("big");
        }
    }

    static goToIndex(flexScroller, number)
    {
        let contentChildren = flexScroller.querySelectorAll(".flex-scroller-content > *");
        let target = contentChildren[number];
        
        if(!target) return false;

        flexScroller.querySelector(".flex-scroller-content").scrollBy({
            left: target.offsetLeft,
            behavior: 'smooth',
        });
    }

    static goToElement(flexScroller, element)
    {
        let contentChildren = flexScroller.querySelectorAll(".flex-scroller-content > *");
        let target = null;

        for(let child of contentChildren) {
            if(child.isEqualNode(element)) target = child;
        }

        if(!target) return false;

        flexScroller.querySelector(".flex-scroller-content").scrollBy({
            left: target.offsetLeft,
            behavior: 'smooth',
        });
    }
};

document.addEventListener("DOMContentLoaded", () => {
    for(let flexScroller of document.querySelectorAll(".flex-scroller")) {

        flexScroller.addEventListener("touchstart", (event) => {
            FlexScroller.onTouchStart(event);
        });

        flexScroller.addEventListener("touchmove", (event) => {
            FlexScroller.onTouchMove(event);
        });

        flexScroller.querySelector(".flex-scroller-btn-back").addEventListener("click", (event) => {
            FlexScroller.back(event);
        });

        flexScroller.querySelector(".flex-scroller-btn-next").addEventListener("click", (event) => {
            FlexScroller.next(event);
        });

        window.addEventListener("load", () => {
            let content = flexScroller.querySelector(".flex-scroller-content");

            if(content.scrollWidth > content.offsetWidth) {
                flexScroller.querySelector(".flex-scroller-btn-next").style.display = "flex";
                flexScroller.querySelector(".flex-scroller-btn-back").style.display = "flex";
            }
        });
        
    }
}); 